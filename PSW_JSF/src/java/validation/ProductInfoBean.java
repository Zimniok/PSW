/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package validation;

import java.sql.Connection;
import java.sql.DriverManager;
import java.sql.PreparedStatement;
import java.sql.ResultSet;
import java.sql.SQLException;
import javax.faces.bean.ManagedBean;
import javax.faces.bean.SessionScoped;
import javax.sql.rowset.CachedRowSet;

/**
 *
 * @author pierz
 */
@ManagedBean( name="productInfoBean" )
@SessionScoped
public class ProductInfoBean {

    private int ID;
    private String nazwa;
    private String opis;
    private String kategoria;
    private double cena;

    public String getNazwa() {
        return nazwa;
    }

    public void setNazwa(String nazwa) {
        this.nazwa = nazwa;
    }

    public String getOpis() {
        return opis;
    }

    public void setOpis(String opis) {
        this.opis = opis;
    }

    public String getKategoria() {
        return kategoria;
    }

    public void setKategoria(String kategoria) {
        this.kategoria = kategoria;
    }

    public double getCena() {
        return cena;
    }

    public void setCena(double cena) {
        this.cena = cena;
    }

    public String info(String nazwa, String opis, String kategoria, double cena){
        this.nazwa = nazwa;
        this.opis = opis;
        this.kategoria = kategoria.equals("C") ? "Czarna herbata" : "Zielona herbata";
        this.cena = cena;
        return "herbata_info.xhtml";
    }
    
    public Connection makeConnection() throws SQLException {
        String url = "jdbc:derby://localhost:1527/herbaty";
        
        String username = "APP";
        String password = "APP";
        
        return DriverManager.getConnection(url, username, password);   
    }
    
   public ResultSet getHerbaty() throws SQLException
   {

      // obtain a connection from the connection pool
      Connection connection = makeConnection();

      // check whether connection was successful
      if ( connection == null )
         throw new SQLException( "Unable to connect to DataSource" );

      try
      {
         // create a PreparedStatement to insert a new address book entry
         PreparedStatement getAddresses = connection.prepareStatement(
            "SELECT * FROM Herbaty");

         CachedRowSet rowSet = new com.sun.rowset.CachedRowSetImpl();
         rowSet.populate( getAddresses.executeQuery() );
         return rowSet; 
      } // end try
      finally
      {
         connection.close(); // return this connection to pool
      } // end finally
   }
}

