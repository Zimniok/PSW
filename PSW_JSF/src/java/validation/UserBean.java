/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package validation;

import java.io.UnsupportedEncodingException;
import java.math.BigInteger;
import javax.faces.bean.ManagedBean;
import javax.faces.bean.SessionScoped;
import java.security.*;
import java.sql.Connection;
import java.sql.DriverManager;
import java.sql.PreparedStatement;
import java.sql.ResultSet;
import java.sql.SQLException;
import java.util.logging.Level;
import java.util.logging.Logger;
import javax.annotation.Resource;
import javax.faces.context.ExternalContext;
import javax.faces.context.FacesContext;
import javax.sql.DataSource;
import javax.sql.rowset.CachedRowSet;

/**
 *
 * @author pierz
 */

@ManagedBean(name="userBean")
@SessionScoped
public class UserBean {
    private String username;
    private String password;
    boolean loggedIn = false;
    
    @Resource( name="jdbc/herbata" )
    DataSource dataSource;
    
    public Connection makeConnection() throws SQLException {
        String url = "jdbc:derby://localhost:1527/herbaty";
        
        String username = "APP";
        String password = "APP";
        
        return DriverManager.getConnection(url, username, password);   
    }

    public String getUsername() {
        return username;
    }

    public void setUsername(String username) {
        ExternalContext ec = FacesContext.getCurrentInstance().getExternalContext();
        ec.getSessionMap().put("username", username);
        this.username = username;
    }

    public String getPassword() {
        return password;
    }

    public void setPassword(String password) {
        try {
            byte[] bytesOfMessage = password.getBytes("UTF-8");
            MessageDigest md = MessageDigest.getInstance("MD5");
            byte[] messageDigest = md.digest(bytesOfMessage);
            BigInteger no = new BigInteger(1, messageDigest);
            
            String hash = no.toString(16);
            while(hash.length() < 32){
                hash = "0" + hash;
            }
            this.password = hash;
        } catch (NoSuchAlgorithmException | UnsupportedEncodingException ex) {
            Logger.getLogger(UserBean.class.getName()).log(Level.SEVERE, null, ex);
        }
    }

    public boolean isLoggedIn() throws SQLException {
        System.out.println("Logged in: " + loggedIn);
        System.out.println("Password: " + this.password);
        if(!loggedIn){
            loggedIn = login();
        }
        return loggedIn;
    }
    
    public void logout() {
        username = null;
        password = null;
        loggedIn = false;
    }
    
    public boolean login() throws SQLException {
        if ( dataSource == null )
         throw new SQLException( "Unable to obtain DataSource" );
        
        Connection connection = makeConnection();
        
        if ( connection == null )
         throw new SQLException( "Unable to connect to DataSource" );
        
        ResultSet rs;
        
        try
        {
           // create a PreparedStatement to insert a new address book entry
           PreparedStatement getHash = connection.prepareStatement(
              "SELECT Password FROM Users WHERE Username=?");
           
           getHash.setString(1, username);

           rs = getHash.executeQuery(); 
           if(rs.next()) {
            return rs.getString("Password").equalsIgnoreCase(password);
           } else {
            return false;
           }
        } // end try
        finally
        {
           connection.close(); // return this connection to pool
        }
    }
    
    public ResultSet getWpisy() throws SQLException
   {
      // check whether dataSource was injected by the server
      if ( dataSource == null )
         throw new SQLException( "Unable to obtain DataSource" );

      // obtain a connection from the connection pool
      Connection connection = makeConnection();

      // check whether connection was successful
      if ( connection == null )
         throw new SQLException( "Unable to connect to DataSource" );

      try
      {
         // create a PreparedStatement to insert a new address book entry
         PreparedStatement getAddresses = connection.prepareStatement(
            "SELECT * FROM Wpisy WHERE autor=?");
         getAddresses.setString(1, username);

         CachedRowSet rowSet = new com.sun.rowset.CachedRowSetImpl();
         rowSet.populate( getAddresses.executeQuery() );
         return rowSet; 
      } // end try
      finally
      {
         connection.close(); // return this connection to pool
      } // end finally
   } // end method getAddresses
    
    public void deleteWpis(int ID) throws SQLException {
        Connection connection = makeConnection();
        
        if(connection == null)
            throw new SQLException( "Unable to connect to DataSource" );
        
        try {
            PreparedStatement usunWpis = connection.prepareStatement(
                "DELETE FROM Wpisy WHERE ID=?");
            usunWpis.setInt(1, ID);
            
            usunWpis.executeUpdate();
        }
        finally
        {
           connection.close(); // return this connection to pool
        }
    }
}
