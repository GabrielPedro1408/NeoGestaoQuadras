/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Classes/Class.java to edit this template
 */
package conn;

import java.sql.Connection;
import java.sql.DriverManager;
import java.sql.SQLException;

/**
 *
 * @author Administrador
 */
public class Conexao {
    public static Connection con = null;
    public static void Conectar(){
        String servidor = "localhost/";
        String banco = "imobiliaria";
        String user = "root";
        String pass = "";
        
        
        System.out.println("Conectando com o banco!");
        
        try {
            Class.forName("com.mysql.cj.jdbc.Driver");
            con = DriverManager.getConnection("jdbc:mysql://" + servidor + banco, user, pass);
            System.out.println("Conectado!");  
            
        } catch (ClassNotFoundException ex) {
                 System.out.println("Classe não encontrada, adicione o driver nas bibliotecas.");

        } catch (SQLException erro) {
            System.out.println("Ocorreu um erro no programa, entre em contato com o desenvolvedor e passe o seguinte erro: " + erro );
            throw new RuntimeException(erro);
        }
    }
    
    public static void Desconectar() {
        try{
            con.close();
            con = null;
            System.out.println("Conexão fechada!");
        } catch(SQLException ex){
            System.out.println("Erro ao fechar conexão" + ex);
        }
    }
}
