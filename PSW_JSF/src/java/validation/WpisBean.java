/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package validation;

import java.sql.Connection;
import java.sql.DriverManager;
import java.sql.PreparedStatement;
import java.sql.SQLException;
import java.util.Map;
import javax.annotation.PostConstruct;
import javax.faces.bean.ManagedBean;
import javax.faces.bean.RequestScoped;
import javax.faces.context.FacesContext;

/**
 *
 * @author pierz
 */

@ManagedBean(name="wpisBean")
@RequestScoped
public class WpisBean {
    private int ID = 0;
    private String autor;
    private String tytul;
    private String tresc;
    
    @PostConstruct
    void init(){
        Map<String, Object> sm = FacesContext.getCurrentInstance().getExternalContext().getSessionMap();
        if(sm.containsKey("ID")){
            ID = (int) sm.remove("ID");
            tytul = (String) sm.remove("tytul");
            tresc = (String) sm.remove("tresc");
        }
    }
    
    public Connection makeConnection() throws SQLException {
        String url = "jdbc:derby://localhost:1527/herbaty";
        
        String username = "APP";
        String password = "APP";
        
        return DriverManager.getConnection(url, username, password);   
    }

    public int getID() {
        return ID;
    }

    public void setID(int ID) {
        this.ID = ID;
    }

    public String getAutor() {
        return autor;
    }

    public void setAutor(String autor) {
        this.autor = autor;
    }

    public String getTytul() {
        return tytul;
    }

    public void setTytul(String tytul) {
        this.tytul = tytul;
    }

    public String getTresc() {
        return tresc;
    }

    public void setTresc(String tresc) {
        this.tresc = tresc;
    }
    
    public String save() throws SQLException {

        // obtain a connection from the connection pool
        Connection connection = makeConnection();

        // check whether connection was successful
        if (connection == null) {
            throw new SQLException("Unable to connect to DataSource");
        }

        try {
            String sql;
            if(ID == 0){
                sql = "INSERT INTO Wpisy (Autor, Tytul, Tresc) VALUES (?,?,?)";
            } else {
                sql = "UPDATE Wpisy SET Tytul=?, Tresc=? WHERE ID=?";
            }
            // create a PreparedStatement to insert a new address book entry
            PreparedStatement addEntry
                    = connection.prepareStatement(sql);

            // specify the PreparedStatement's arguments
            if(ID == 0){
                addEntry.setString(1, (String) FacesContext.getCurrentInstance().getExternalContext().getSessionMap().get("username"));
                addEntry.setString(2, getTytul());
                addEntry.setString(3, getTresc());
            } else {
                addEntry.setString(1, getTytul());
                addEntry.setString(2, getTresc());
                addEntry.setInt(3, getID());
            }

            addEntry.executeUpdate(); // insert the entry
            return "user"; // go back to index.xhtml page
        } // end try
        finally {
            connection.close(); // return this connection to pool
        }
    }
}
