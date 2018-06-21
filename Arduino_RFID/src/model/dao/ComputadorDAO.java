
package model.dao;

import connection.ConnectionFactory;
import leitorRFID.Computador;
import java.sql.Connection;
import java.sql.PreparedStatement;
import java.sql.SQLException;



public class ComputadorDAO {

	Connection con;

	public ComputadorDAO() {
		con = ConnectionFactory.getConnection();
	}

	public void adicionar(Computador computador) {

		PreparedStatement stmt = null;

	
		try {
			stmt = con.prepareStatement("insert into tblcomputadores(marca, modelo, codigo_patrimonio,"
					+ "nome_usuario, departamento, memoria,hd,pacote_office,idTag)VALUES(?,?,?,?,?,?,?,?,?)");
			stmt.setString(1, computador.getMarca());
			stmt.setString(2, computador.getModelo());
			stmt.setString(3, computador.getCodigo_patrimonio());
			stmt.setString(4, computador.getNome_usuario());
			stmt.setString(5, computador.getDepartamento());
			stmt.setString(6, computador.getMemoria());
			stmt.setString(7,computador.getHd());
	        stmt.setInt(8,computador. getPacote_office());
	        stmt.setString(9,computador.getIdTag());
            
	        stmt.executeUpdate();

			
		} catch (SQLException ex) {
			System.out.println(ex);
		} finally {
			ConnectionFactory.closeConnection(con, stmt);
		}

	}
  }
