/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package validation;

import java.io.Serializable;
import java.util.HashMap;
import javax.faces.bean.ManagedBean;
import javax.faces.bean.SessionScoped;
import javax.faces.event.AjaxBehaviorEvent;

/**
 *
 * @author pierz
 */
@ManagedBean( name="cartBean" )
@SessionScoped
public class CartBean implements Serializable {
    private HashMap<String, Integer> products = new HashMap<>();
    private HashMap<String, Double> prices = new HashMap<>();
    private String formaDostawy = "O";
    private double cenaDostawy = 0;
    
    public void formaDostawyChanged(AjaxBehaviorEvent e){
        System.out.println("forama: " + formaDostawy);
        switch(formaDostawy){
            case "K":
                cenaDostawy = 12.0;
                break;
            case "P":
                cenaDostawy = 8.50;
                break;
            default:
                cenaDostawy = 0;
        }
        System.out.println(cenaDostawy);
    }

    public HashMap<String, Integer> getProducts() {
        System.out.println(products.keySet());
        return products;
    }

    public void setProducts(HashMap<String, Integer> products) {
        this.products = products;
    }
    
    public void addProduct(String key) {
        if (products.containsKey(key)) {
            products.replace(key, products.get(key) + 1);
        } else {
            products.put(key, 1);
        }
    }
    
    public void addProducts(String category, String[] products){
        for(String key : products){
            addProduct(key);
            prices.put(key, CategoryBean.categoriesMap.get(category).get(key));
        }
    }
    
    public void removeProduct(String key) {
        products.remove(key);
    }
    
    public void clearCartListener(AjaxBehaviorEvent e) {
        clearCart();
    }
    
    public void clearCart() {
        products = new HashMap<>();
        prices = new HashMap<>();
        formaDostawy = "O";
        cenaDostawy = 0;
    }
    
    public double getPrice(String key) {
        return prices.get(key);
    }
    
    public double getSummary() {
        double sum = 0;
        for(String key : products.keySet()){
            sum += prices.get(key)*products.get(key);
        }
        return sum;
    }
    
    public double getOverallSummary() {
        return getSummary() + cenaDostawy;
    }
    
    public int getCount() {
        int count = 0;
        for(int val : products.values()) {
            count += val;
        }
        return count;
    }

    public String getFormaDostawy() {
        return formaDostawy;
    }

    public void setFormaDostawy(String formaDostawy) {
        this.formaDostawy = formaDostawy;
    }
    
    public Double getFinalSummary(){
        Double temp = getOverallSummary();
        clearCart();
        return temp;
    }
    
}
