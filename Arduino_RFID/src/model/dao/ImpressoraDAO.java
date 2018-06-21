
package model.dao;

import connection.ConnectionFactory;
import leitorRFID.Computador;
import leitorRFID.Impressora;

import java.sql.Connection;
import java.sql.PreparedStatement;
import java.sql.SQLException;



import javax.swing.JOptionPane;


public class ImpressoraDAO {

    Connection con;
    
    public ImpressoraDAO() {
        con = ConnectionFactory.getConnection();
    }
    
    public void adicionar(Impressora impressora) {

        PreparedStatement stmt = null;
         
        try {
            stmt = con.prepareStatement("INSERT INTO tblImpressoras(marca, modelo, codigo_patrimonio,"
            		+ "nome_usuario, departamento,status,idTag)VALUES(?,?,?,?,?,?,?)");
        	stmt.setString(1, impressora.getMarca());
			stmt.setString(2, impressora.getModelo());
			stmt.setString(3, impressora.getCodigo_patrimonio());
			stmt.setString(4, impressora.getNome_usuario());
			stmt.setString(5, impressora.getDepartamento());
			stmt.setInt(6, impressora.getStatus());
			stmt.setString(7, impressora.getIdTag());
			 stmt.executeUpdate();
      
        } catch (SQLException ex) {
            System.out.println(ex);
        } finally {
            ConnectionFactory.closeConnection(con, stmt);
        }

    }
}


