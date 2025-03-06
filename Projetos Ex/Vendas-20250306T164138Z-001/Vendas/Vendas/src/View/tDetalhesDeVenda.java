/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/GUIForms/JFrame.java to edit this template
 */
package View;

import static Controler.Conexao.Conectar;
import static Controler.Conexao.Desconectar;
import static Controler.Conexao.con;
import java.sql.SQLException;
import java.sql.PreparedStatement;
import javax.swing.JOptionPane;
import java.sql.ResultSet;
import javax.swing.table.DefaultTableModel;
/**
 *
 * @author Pichau
 */
public class tDetalhesDeVenda extends javax.swing.JFrame {
    DefaultTableModel vendas;
    DefaultTableModel det_vendas;
    /**
     * Creates new form tDetalhesDeVenda
     */
    public tDetalhesDeVenda() {
        initComponents();
        Conectar();
        vendas = (DefaultTableModel) jTable1.getModel();
        det_vendas = (DefaultTableModel) jTable2.getModel();
    }

    /**
     * This method is called from within the constructor to initialize the form.
     * WARNING: Do NOT modify this code. The content of this method is always
     * regenerated by the Form Editor.
     */
    @SuppressWarnings("unchecked")
    // <editor-fold defaultstate="collapsed" desc="Generated Code">//GEN-BEGIN:initComponents
    private void initComponents() {

        pnVendas = new javax.swing.JPanel();
        jLabel1 = new javax.swing.JLabel();
        jScrollPane1 = new javax.swing.JScrollPane();
        jTable1 = new javax.swing.JTable();
        btCarregar = new javax.swing.JButton();
        pnDet_Vendas = new javax.swing.JPanel();
        jLabel2 = new javax.swing.JLabel();
        jScrollPane2 = new javax.swing.JScrollPane();
        jTable2 = new javax.swing.JTable();
        btVolta = new javax.swing.JButton();
        btLimpa = new javax.swing.JButton();

        setDefaultCloseOperation(javax.swing.WindowConstants.EXIT_ON_CLOSE);
        setMinimumSize(new java.awt.Dimension(1000, 1000));
        getContentPane().setLayout(null);

        pnVendas.setBorder(javax.swing.BorderFactory.createEtchedBorder());
        pnVendas.setAlignmentX(0.1F);
        pnVendas.setAlignmentY(0.05F);
        pnVendas.setMaximumSize(new java.awt.Dimension(560, 250));
        pnVendas.setMinimumSize(new java.awt.Dimension(100, 100));
        pnVendas.setLayout(null);

        jLabel1.setFont(new java.awt.Font("Segoe UI", 1, 12)); // NOI18N
        jLabel1.setText("Vendas:");
        pnVendas.add(jLabel1);
        jLabel1.setBounds(10, 10, 60, 16);

        jTable1.setModel(new javax.swing.table.DefaultTableModel(
            new Object [][] {

            },
            new String [] {
                "ID", "Cliente", "Data"
            }
        ) {
            boolean[] canEdit = new boolean [] {
                false, false, false
            };

            public boolean isCellEditable(int rowIndex, int columnIndex) {
                return canEdit [columnIndex];
            }
        });
        jTable1.addMouseListener(new java.awt.event.MouseAdapter() {
            public void mouseClicked(java.awt.event.MouseEvent evt) {
                jTable1MouseClicked(evt);
            }
        });
        jScrollPane1.setViewportView(jTable1);

        pnVendas.add(jScrollPane1);
        jScrollPane1.setBounds(12, 30, 630, 170);

        btCarregar.setText("Carregar");
        btCarregar.addActionListener(new java.awt.event.ActionListener() {
            public void actionPerformed(java.awt.event.ActionEvent evt) {
                btCarregarActionPerformed(evt);
            }
        });
        pnVendas.add(btCarregar);
        btCarregar.setBounds(550, 210, 90, 23);

        getContentPane().add(pnVendas);
        pnVendas.setBounds(10, 10, 650, 240);

        pnDet_Vendas.setBorder(javax.swing.BorderFactory.createEtchedBorder());
        pnDet_Vendas.setLayout(null);

        jLabel2.setFont(new java.awt.Font("Segoe UI", 1, 12)); // NOI18N
        jLabel2.setText("Detalhes da Venda:");
        pnDet_Vendas.add(jLabel2);
        jLabel2.setBounds(8, 8, 115, 16);

        jTable2.setModel(new javax.swing.table.DefaultTableModel(
            new Object [][] {

            },
            new String [] {
                "Produto", "Quantidade", "Valor"
            }
        ) {
            boolean[] canEdit = new boolean [] {
                false, false, false
            };

            public boolean isCellEditable(int rowIndex, int columnIndex) {
                return canEdit [columnIndex];
            }
        });
        jScrollPane2.setViewportView(jTable2);

        pnDet_Vendas.add(jScrollPane2);
        jScrollPane2.setBounds(10, 40, 630, 150);

        getContentPane().add(pnDet_Vendas);
        pnDet_Vendas.setBounds(10, 260, 650, 210);

        btVolta.setText("Voltar");
        btVolta.addActionListener(new java.awt.event.ActionListener() {
            public void actionPerformed(java.awt.event.ActionEvent evt) {
                btVoltaActionPerformed(evt);
            }
        });
        getContentPane().add(btVolta);
        btVolta.setBounds(580, 480, 72, 23);

        btLimpa.setText("Limpar");
        btLimpa.addActionListener(new java.awt.event.ActionListener() {
            public void actionPerformed(java.awt.event.ActionEvent evt) {
                btLimpaActionPerformed(evt);
            }
        });
        getContentPane().add(btLimpa);
        btLimpa.setBounds(490, 480, 75, 23);

        pack();
    }// </editor-fold>//GEN-END:initComponents

    private void btCarregarActionPerformed(java.awt.event.ActionEvent evt) {//GEN-FIRST:event_btCarregarActionPerformed
        String sqlVenda;
        //pesquisa todas as vendas
        try{
            sqlVenda = "SELECT v.id, v.data, c.nome from vendas v inner join clientes c on v.id_clientes = c.id";
            PreparedStatement stmC = con.prepareStatement(sqlVenda, ResultSet.TYPE_SCROLL_SENSITIVE, ResultSet.CONCUR_UPDATABLE);
            
            ResultSet rsV = stmC.executeQuery();
            if(rsV.first()){
                //Inserção dos dados nas tabelas na tela
                String[] linha = new String[]{rsV.getString("id"), rsV.getString("nome"), rsV.getString("data")};
                //Fazer pesquisa do nome aqui
                vendas.addRow(linha);
                while(rsV.next()){
                    linha = new String[]{rsV.getString("id"), rsV.getString("nome"), rsV.getString("data")};
                    //Fazer pesquisa do nome aqui
                    vendas.addRow(linha);
                }
            } else{
                JOptionPane.showMessageDialog(null, "Não foi possivel encontrar as vendas");
            }
        }
        catch(SQLException e){
            System.out.println(e);
        }
    }//GEN-LAST:event_btCarregarActionPerformed

    private void btVoltaActionPerformed(java.awt.event.ActionEvent evt) {//GEN-FIRST:event_btVoltaActionPerformed
        this.dispose();
        Desconectar();
    }//GEN-LAST:event_btVoltaActionPerformed

    private void btLimpaActionPerformed(java.awt.event.ActionEvent evt) {//GEN-FIRST:event_btLimpaActionPerformed
        vendas.setRowCount(0);
        det_vendas.setRowCount(0);
    }//GEN-LAST:event_btLimpaActionPerformed

    private void jTable1MouseClicked(java.awt.event.MouseEvent evt) {//GEN-FIRST:event_jTable1MouseClicked
        String sqlDet, idVenda;    
        int linha = jTable1.getSelectedRow();
        idVenda = (String) jTable1.getValueAt(linha, 0);
        try{
            sqlDet = "select d.quant, d.valor, p.decricao from det_vendas d inner join produtos p on d.id_produto = p.id and id_venda = ?";
            PreparedStatement stmDet = con.prepareStatement(sqlDet, ResultSet.TYPE_SCROLL_SENSITIVE, ResultSet.CONCUR_UPDATABLE);
            stmDet.setString(1, idVenda);
            ResultSet rsDet = stmDet.executeQuery();
            if(rsDet.first()){
                String[] linhaDet = new String[]{rsDet.getString("decricao"), rsDet.getString("quant"), rsDet.getString("valor")};
                det_vendas.addRow(linhaDet);
                while(rsDet.next()){
                    linhaDet = new String[]{rsDet.getString("decricao"), rsDet.getString("quant"), rsDet.getString("valor")};
                    det_vendas.addRow(linhaDet);
                }
            }
        }
        catch(SQLException error){
            System.out.println(error); 
        }
        
    }//GEN-LAST:event_jTable1MouseClicked

    /**
     * @param args the command line arguments
     */
    public static void main(String args[]) {
        /* Set the Nimbus look and feel */
        //<editor-fold defaultstate="collapsed" desc=" Look and feel setting code (optional) ">
        /* If Nimbus (introduced in Java SE 6) is not available, stay with the default look and feel.
         * For details see http://download.oracle.com/javase/tutorial/uiswing/lookandfeel/plaf.html 
         */
        try {
            for (javax.swing.UIManager.LookAndFeelInfo info : javax.swing.UIManager.getInstalledLookAndFeels()) {
                if ("Nimbus".equals(info.getName())) {
                    javax.swing.UIManager.setLookAndFeel(info.getClassName());
                    break;
                }
            }
        } catch (ClassNotFoundException ex) {
            java.util.logging.Logger.getLogger(tDetalhesDeVenda.class.getName()).log(java.util.logging.Level.SEVERE, null, ex);
        } catch (InstantiationException ex) {
            java.util.logging.Logger.getLogger(tDetalhesDeVenda.class.getName()).log(java.util.logging.Level.SEVERE, null, ex);
        } catch (IllegalAccessException ex) {
            java.util.logging.Logger.getLogger(tDetalhesDeVenda.class.getName()).log(java.util.logging.Level.SEVERE, null, ex);
        } catch (javax.swing.UnsupportedLookAndFeelException ex) {
            java.util.logging.Logger.getLogger(tDetalhesDeVenda.class.getName()).log(java.util.logging.Level.SEVERE, null, ex);
        }
        //</editor-fold>

        /* Create and display the form */
        java.awt.EventQueue.invokeLater(new Runnable() {
            public void run() {
                new tDetalhesDeVenda().setVisible(true);
            }
        });
    }

    // Variables declaration - do not modify//GEN-BEGIN:variables
    private javax.swing.JButton btCarregar;
    private javax.swing.JButton btLimpa;
    private javax.swing.JButton btVolta;
    private javax.swing.JLabel jLabel1;
    private javax.swing.JLabel jLabel2;
    private javax.swing.JScrollPane jScrollPane1;
    private javax.swing.JScrollPane jScrollPane2;
    private javax.swing.JTable jTable1;
    private javax.swing.JTable jTable2;
    private javax.swing.JPanel pnDet_Vendas;
    private javax.swing.JPanel pnVendas;
    // End of variables declaration//GEN-END:variables
}
