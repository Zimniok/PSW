/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package validation;

import javax.faces.context.FacesContext;
import javax.faces.event.AbortProcessingException;
import javax.faces.event.ValueChangeEvent;
import javax.faces.event.ValueChangeListener;

/**
 *
 * @author pierz
 */
public class CategoryChangeListener implements ValueChangeListener {

    @Override
    public void processValueChange(ValueChangeEvent vce) throws AbortProcessingException {
      CategoryBean categoryBean = (CategoryBean) FacesContext.getCurrentInstance().
      getExternalContext().getSessionMap().get("categoryBean");
      categoryBean.setCategory(vce.getNewValue().toString());
      System.out.println("asdfasdfasdfasdf");
    }
    
}
