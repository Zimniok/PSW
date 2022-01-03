/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package validation;

import javax.faces.application.FacesMessage;
import javax.faces.component.UIComponent;
import javax.faces.context.FacesContext;
import javax.faces.validator.FacesValidator;
import javax.faces.validator.Validator;
import javax.faces.validator.ValidatorException;

/**
 *
 * @author pierz
 */
@FacesValidator("HerbataValidator")
public class HerbataValidator implements Validator {

    @Override
    public void validate(FacesContext fc, UIComponent uic, Object o) throws ValidatorException {
        String herbata = (String) o;
        if(!(herbata.equals("czarna") || herbata.equals("zielona") || herbata.equals("biała") || herbata.equals("żółta") || herbata.equals("pu-erh") || herbata.equals("ulong"))) {
            throw new ValidatorException(new FacesMessage("Błędna nazwa herbaty: " + herbata));
        }
    }
    
}
