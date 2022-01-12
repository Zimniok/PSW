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
@ManagedBean( name="categoryBean" )
@SessionScoped
public class CategoryBean implements Serializable {
    private String category = "";
    public static final HashMap< String, HashMap<String, Double> > categoriesMap =
      new HashMap< String, HashMap<String, Double> >();
    private static HashMap<String, Double> products = new HashMap<>();
    private String[] selectedProducts = {};
    private Boolean isGreen = false;
    private Boolean isBlack = false;
    
    static {
        categoriesMap.put("green", new HashMap<>());
        categoriesMap.get("green").put("Zielona 1", 13.23);
        categoriesMap.get("green").put("Zielona 2", 25.50);
        categoriesMap.get("green").put("Zielona 3", 11.99);
        
        categoriesMap.put("black", new HashMap<>());
        categoriesMap.get("black").put("Czarna 1", 8.77);
        categoriesMap.get("black").put("Czarna 2", 35.68);
        categoriesMap.get("black").put("Czarna 3", 15.00);
        categoriesMap.get("black").put("Czarna 4", 11.11);
        categoriesMap.get("black").put("Czarna 5", 22.22);
        
        products = categoriesMap.get("green");
    }
    
    public void categoryChanged(AjaxBehaviorEvent e) {
        if(category.equals("green")) {
            isBlack = false;
            isGreen = true;
        } else {
            isGreen = false;
            isBlack = true;
        }
    }

    public String getCategory() {
        return category;
    }

    public void setCategory(String category) {
        this.category = category;
    }

    public HashMap<String, Double> getProducts() {
        return products;
    }

    public void setProducts(HashMap<String, Double> products) {
        this.products = products;
    }

    public String[] getSelectedProducts() {
        return selectedProducts;
    }

    public void setSelectedProducts(String[] selectedProducts) {
        System.out.println(selectedProducts);
        this.selectedProducts = selectedProducts;
    }

    public Boolean getIsGreen() {
        return isGreen;
    }

    public void setIsGreen(Boolean isGreen) {
        this.isGreen = isGreen;
    }

    public Boolean getIsBlack() {
        return isBlack;
    }

    public void setIsBlack(Boolean isBlack) {
        this.isBlack = isBlack;
    }
    
    public HashMap getGreenTeas() {
        return categoriesMap.get("green");
    }
    
    public HashMap getBlackTeas() {
        return categoriesMap.get("black");
    }
    
}
