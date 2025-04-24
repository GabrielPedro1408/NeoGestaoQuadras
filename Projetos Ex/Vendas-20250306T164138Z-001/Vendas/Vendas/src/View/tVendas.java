/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/GUIForms/JFrame.java to edit this template
 */
package View;

import static Controler.Conexao.Conectar;
import static Controler.Conexao.Desconectar;
import static Controler.Conexao.con;
import javax.swing.table.DefaultTableModel;
import java.sql.SQLException;
import java.sql.PreparedStatement;
import javax.swing.JOptionPane;
import java.sql.ResultSet;
import java.text.SimpleDateFormat;
import java.util.Calendar;
import java.util.HashSet;
import java.util.Set;


public class tVendas extends javax.swing.JFrame {
    DefaultTableModel clientes;
    DefaultTableModel produtos;
    DefaultTableModel vendas;
    
    public tVendas() {
        initComponents();
        Conectar();
        pnCliente.setVisible(false);
        pnProduto.setVisible(false);
        clientes = (DefaultTableModel) jTable1.getModel();
        produtos = (DefaultTableModel) jTable2.getModel();
        vendas = (DefaultTableModel) jTable3.getModel();
    }
    
    public void calculo(){
        float preco, qtdeVend, totVend;
        
        preco = Float.parseFloat(tfValorProd.getText());
        qtdeVend = Float.parseFloat(tfQtVenda.getText());
        totVend = preco * qtdeVend;
        tfValTot.setText(Float.toString(totVend));
    }
    
    public void val_tot(){
        int TotLinhas, x;
        TotLinhas = jTable3.getRowCount();
        float valorTotal = 0;
        for(x=0;x<TotLinhas;x++){
            String valorItem = (String) jTable3.getValueAt(x, 4);
            valorTotal = valorTotal + Float.parseFloat(valorItem);
        }
        String Val = String.valueOf(valorTotal);
        tfValorVenda.setText(Val);
    }
 
    @SuppressWarnings("unchecked")
    // <editor-fold defaultstate="collapsed" desc="Generated Code">//GEN-BEGIN:initComponents
    private void initComponents() {

        pnCliente = new javax.swing.JPanel();
        jScrollPane2 = new javax.swing.JScrollPane();
        jTable1 = new javax.swing.JTable();
        btSelectTableCli = new javax.swing.JButton();
        btFechaTabCli = new javax.swing.JButton();
        jPanel1 = new javax.swing.JPanel();
        jLabel1 = new javax.swing.JLabel();
        tfIDVenda = new javax.swing.JTextField();
        jLabel3 = new javax.swing.JLabel();
        tfData = new javax.swing.JTextField();
        jLabel12 = new javax.swing.JLabel();
        jPanel2 = new javax.swing.JPanel();
        jLabel2 = new javax.swing.JLabel();
        tfNomeCli = new javax.swing.JTextField();
        tfIDCli = new javax.swing.JTextField();
        jLabel11 = new javax.swing.JLabel();
        btPesquisaCli = new javax.swing.JButton();
        pnProduto = new javax.swing.JPanel();
        jScrollPane1 = new javax.swing.JScrollPane();
        jTable2 = new javax.swing.JTable();
        btFechaTabProd = new javax.swing.JButton();
        btSelectTabProd = new javax.swing.JButton();
        jPanel3 = new javax.swing.JPanel();
        jLabel4 = new javax.swing.JLabel();
        jLabel5 = new javax.swing.JLabel();
        tfDescProd = new javax.swing.JTextField();
        tfUnidProd = new javax.swing.JTextField();
        jLabel6 = new javax.swing.JLabel();
        jLabel7 = new javax.swing.JLabel();
        tfQtdeProd = new javax.swing.JTextField();
        tfValorProd = new javax.swing.JTextField();
        jLabel8 = new javax.swing.JLabel();
        jLabel9 = new javax.swing.JLabel();
        tfValTot = new javax.swing.JTextField();
        jLabel10 = new javax.swing.JLabel();
        btPesquisaProd = new javax.swing.JButton();
        tfQtVenda = new javax.swing.JTextField();
        btAdicionar = new javax.swing.JButton();
        tfIDProd = new javax.swing.JTextField();
        pnVenda = new javax.swing.JPanel();
        jScrollPane3 = new javax.swing.JScrollPane();
        jTable3 = new javax.swing.JTable();
        jPanel7 = new javax.swing.JPanel();
        btNovaVenda = new javax.swing.JButton();
        jLabel13 = new javax.swing.JLabel();
        tfValorVenda = new javax.swing.JTextField();
        jButton1 = new javax.swing.JButton();

        setDefaultCloseOperation(javax.swing.WindowConstants.EXIT_ON_CLOSE);
        setMinimumSize(new java.awt.Dimension(1000, 1600));
        getContentPane().setLayout(null);

        pnCliente.setBorder(javax.swing.BorderFactory.createEtchedBorder());
        pnCliente.setLayout(null);

        jTable1.setModel(new javax.swing.table.DefaultTableModel(
            new Object [][] {

            },
            new String [] {
                "Nome", "CPF", "Telefone", "ID"
            }
        ) {
            boolean[] canEdit = new boolean [] {
                false, false, false, false
            };

            public boolean isCellEditable(int rowIndex, int columnIndex) {
                return canEdit [columnIndex];
            }
        });
        jScrollPane2.setViewportView(jTable1);

        pnCliente.add(jScrollPane2);
        jScrollPane2.setBounds(8, 8, 411, 112);

        btSelectTableCli.setText("Selecionar");
        btSelectTableCli.addActionListener(new java.awt.event.ActionListener() {
            public void actionPerformed(java.awt.event.ActionEvent evt) {
                btSelectTableCliActionPerformed(evt);
            }
        });
        pnCliente.add(btSelectTableCli);
        btSelectTableCli.setBounds(8, 138, 84, 23);

        btFechaTabCli.setBackground(new java.awt.Color(255, 0, 0));
        btFechaTabCli.setForeground(new java.awt.Color(242, 242, 242));
        btFechaTabCli.setText("X");
        btFechaTabCli.addActionListener(new java.awt.event.ActionListener() {
            public void actionPerformed(java.awt.event.ActionEvent evt) {
                btFechaTabCliActionPerformed(evt);
            }
        });
        pnCliente.add(btFechaTabCli);
        btFechaTabCli.setBounds(425, 8, 37, 23);

        getContentPane().add(pnCliente);
        pnCliente.setBounds(500, 100, 470, 170);

        jPanel1.setBorder(javax.swing.BorderFactory.createEtchedBorder());
        jPanel1.setLayout(null);

        jLabel1.setText("ID venda:");
        jPanel1.add(jLabel1);
        jLabel1.setBounds(10, 40, 60, 20);

        tfIDVenda.setEnabled(false);
        jPanel1.add(tfIDVenda);
        tfIDVenda.setBounds(70, 40, 100, 22);

        jLabel3.setText("Data:");
        jPanel1.add(jLabel3);
        jLabel3.setBounds(360, 40, 40, 20);

        tfData.setEnabled(false);
        jPanel1.add(tfData);
        tfData.setBounds(400, 40, 100, 22);

        jLabel12.setText("Dados da Venda");
        jPanel1.add(jLabel12);
        jLabel12.setBounds(10, 10, 110, 16);

        getContentPane().add(jPanel1);
        jPanel1.setBounds(0, 10, 890, 90);

        jPanel2.setBorder(javax.swing.BorderFactory.createEtchedBorder());
        jPanel2.setLayout(null);

        jLabel2.setText("Nome:");
        jPanel2.add(jLabel2);
        jLabel2.setBounds(10, 40, 40, 20);

        tfNomeCli.setEnabled(false);
        jPanel2.add(tfNomeCli);
        tfNomeCli.setBounds(50, 40, 151, 22);

        tfIDCli.setEnabled(false);
        tfIDCli.addActionListener(new java.awt.event.ActionListener() {
            public void actionPerformed(java.awt.event.ActionEvent evt) {
                tfIDCliActionPerformed(evt);
            }
        });
        jPanel2.add(tfIDCli);
        tfIDCli.setBounds(50, 70, 79, 22);

        jLabel11.setText("Dados do Cliente");
        jPanel2.add(jLabel11);
        jLabel11.setBounds(10, 10, 110, 16);

        btPesquisaCli.setText("...");
        btPesquisaCli.setEnabled(false);
        btPesquisaCli.addActionListener(new java.awt.event.ActionListener() {
            public void actionPerformed(java.awt.event.ActionEvent evt) {
                btPesquisaCliActionPerformed(evt);
            }
        });
        jPanel2.add(btPesquisaCli);
        btPesquisaCli.setBounds(210, 40, 23, 23);

        getContentPane().add(jPanel2);
        jPanel2.setBounds(0, 110, 890, 100);

        pnProduto.setBorder(javax.swing.BorderFactory.createEtchedBorder());
        pnProduto.setLayout(null);

        jTable2.setModel(new javax.swing.table.DefaultTableModel(
            new Object [][] {

            },
            new String [] {
                "Descrição", "Unidade", "Quant.", "Valor R$", "ID"
            }
        ) {
            boolean[] canEdit = new boolean [] {
                false, false, false, false, false
            };

            public boolean isCellEditable(int rowIndex, int columnIndex) {
                return canEdit [columnIndex];
            }
        });
        jTable2.setMaximumSize(new java.awt.Dimension(60, 80));
        jScrollPane1.setViewportView(jTable2);

        pnProduto.add(jScrollPane1);
        jScrollPane1.setBounds(10, 10, 408, 101);

        btFechaTabProd.setBackground(new java.awt.Color(255, 0, 0));
        btFechaTabProd.setForeground(new java.awt.Color(242, 242, 242));
        btFechaTabProd.setText("X");
        btFechaTabProd.addActionListener(new java.awt.event.ActionListener() {
            public void actionPerformed(java.awt.event.ActionEvent evt) {
                btFechaTabProdActionPerformed(evt);
            }
        });
        pnProduto.add(btFechaTabProd);
        btFechaTabProd.setBounds(422, 8, 40, 23);

        btSelectTabProd.setText("Selecionar");
        btSelectTabProd.addActionListener(new java.awt.event.ActionListener() {
            public void actionPerformed(java.awt.event.ActionEvent evt) {
                btSelectTabProdActionPerformed(evt);
            }
        });
        pnProduto.add(btSelectTabProd);
        btSelectTabProd.setBounds(8, 127, 84, 23);

        getContentPane().add(pnProduto);
        pnProduto.setBounds(530, 240, 470, 160);
        pnProduto.getAccessibleContext().setAccessibleParent(this);

        jPanel3.setBorder(javax.swing.BorderFactory.createEtchedBorder());
        jPanel3.setLayout(null);

        jLabel4.setText("Descrição:");
        jPanel3.add(jLabel4);
        jLabel4.setBounds(10, 40, 110, 20);

        jLabel5.setText("Unidade:");
        jPanel3.add(jLabel5);
        jLabel5.setBounds(10, 80, 110, 20);

        tfDescProd.setEnabled(false);
        jPanel3.add(tfDescProd);
        tfDescProd.setBounds(120, 40, 330, 22);

        tfUnidProd.setEnabled(false);
        jPanel3.add(tfUnidProd);
        tfUnidProd.setBounds(120, 80, 91, 22);

        jLabel6.setText("QTDE. Estoque:");
        jPanel3.add(jLabel6);
        jLabel6.setBounds(300, 80, 110, 20);

        jLabel7.setText("Valor:");
        jPanel3.add(jLabel7);
        jLabel7.setBounds(300, 120, 110, 20);

        tfQtdeProd.setEnabled(false);
        tfQtdeProd.addActionListener(new java.awt.event.ActionListener() {
            public void actionPerformed(java.awt.event.ActionEvent evt) {
                tfQtdeProdActionPerformed(evt);
            }
        });
        jPanel3.add(tfQtdeProd);
        tfQtdeProd.setBounds(410, 80, 75, 22);

        tfValorProd.setEnabled(false);
        tfValorProd.addActionListener(new java.awt.event.ActionListener() {
            public void actionPerformed(java.awt.event.ActionEvent evt) {
                tfValorProdActionPerformed(evt);
            }
        });
        jPanel3.add(tfValorProd);
        tfValorProd.setBounds(410, 120, 75, 22);

        jLabel8.setText("QTDE.Vendida:");
        jPanel3.add(jLabel8);
        jLabel8.setBounds(10, 120, 110, 20);

        jLabel9.setText("Valor Total");
        jPanel3.add(jLabel9);
        jLabel9.setBounds(990, 128, 70, 16);
        jPanel3.add(tfValTot);
        tfValTot.setBounds(1078, 125, 75, 22);

        jLabel10.setText("Dados do Produto ");
        jPanel3.add(jLabel10);
        jLabel10.setBounds(8, 8, 120, 16);

        btPesquisaProd.setText("...");
        btPesquisaProd.setEnabled(false);
        btPesquisaProd.addActionListener(new java.awt.event.ActionListener() {
            public void actionPerformed(java.awt.event.ActionEvent evt) {
                btPesquisaProdActionPerformed(evt);
            }
        });
        jPanel3.add(btPesquisaProd);
        btPesquisaProd.setBounds(460, 40, 23, 23);

        tfQtVenda.setEnabled(false);
        jPanel3.add(tfQtVenda);
        tfQtVenda.setBounds(120, 120, 91, 22);

        btAdicionar.setText("Adicionar");
        btAdicionar.setEnabled(false);
        btAdicionar.addActionListener(new java.awt.event.ActionListener() {
            public void actionPerformed(java.awt.event.ActionEvent evt) {
                btAdicionarActionPerformed(evt);
            }
        });
        jPanel3.add(btAdicionar);
        btAdicionar.setBounds(520, 120, 90, 23);

        tfIDProd.setEnabled(false);
        tfIDProd.addActionListener(new java.awt.event.ActionListener() {
            public void actionPerformed(java.awt.event.ActionEvent evt) {
                tfIDProdActionPerformed(evt);
            }
        });
        jPanel3.add(tfIDProd);
        tfIDProd.setBounds(490, 40, 70, 20);
        tfIDProd.getAccessibleContext().setAccessibleParent(jLabel3);

        getContentPane().add(jPanel3);
        jPanel3.setBounds(0, 230, 890, 150);

        pnVenda.setBorder(javax.swing.BorderFactory.createEtchedBorder());
        pnVenda.setLayout(null);

        jTable3.setModel(new javax.swing.table.DefaultTableModel(
            new Object [][] {

            },
            new String [] {
                "Descrição", "Unidade", "Valor", "Quant.", "Total"
            }
        ) {
            boolean[] canEdit = new boolean [] {
                false, false, false, false, false
            };

            public boolean isCellEditable(int rowIndex, int columnIndex) {
                return canEdit [columnIndex];
            }
        });
        jTable3.addContainerListener(new java.awt.event.ContainerAdapter() {
            public void componentAdded(java.awt.event.ContainerEvent evt) {
                jTable3ComponentAdded(evt);
            }
        });
        jScrollPane3.setViewportView(jTable3);

        pnVenda.add(jScrollPane3);
        jScrollPane3.setBounds(10, 10, 433, 186);

        getContentPane().add(pnVenda);
        pnVenda.setBounds(0, 390, 450, 200);

        jPanel7.setBorder(javax.swing.BorderFactory.createEtchedBorder());
        jPanel7.setLayout(null);

        btNovaVenda.setText("Nova Venda");
        btNovaVenda.addActionListener(new java.awt.event.ActionListener() {
            public void actionPerformed(java.awt.event.ActionEvent evt) {
                btNovaVendaActionPerformed(evt);
            }
        });
        jPanel7.add(btNovaVenda);
        btNovaVenda.setBounds(23, 23, 110, 23);

        jLabel13.setText("Valor Total");
        jPanel7.add(jLabel13);
        jLabel13.setBounds(282, 26, 66, 16);

        tfValorVenda.setEnabled(false);
        jPanel7.add(tfValorVenda);
        tfValorVenda.setBounds(360, 23, 74, 22);

        getContentPane().add(jPanel7);
        jPanel7.setBounds(0, 590, 450, 70);

        jButton1.setFont(new java.awt.Font("Segoe UI", 1, 14)); // NOI18N
        jButton1.setText("Voltar");
        jButton1.addActionListener(new java.awt.event.ActionListener() {
            public void actionPerformed(java.awt.event.ActionEvent evt) {
                jButton1ActionPerformed(evt);
            }
        });
        getContentPane().add(jButton1);
        jButton1.setBounds(10, 670, 100, 40);

        pack();
    }// </editor-fold>//GEN-END:initComponents

    private void tfIDCliActionPerformed(java.awt.event.ActionEvent evt) {//GEN-FIRST:event_tfIDCliActionPerformed
        // TODO add your handling code here:
    }//GEN-LAST:event_tfIDCliActionPerformed

    private void tfQtdeProdActionPerformed(java.awt.event.ActionEvent evt) {//GEN-FIRST:event_tfQtdeProdActionPerformed
        // TODO add your handling code here:
    }//GEN-LAST:event_tfQtdeProdActionPerformed

    private void tfValorProdActionPerformed(java.awt.event.ActionEvent evt) {//GEN-FIRST:event_tfValorProdActionPerformed
        // TODO add your handling code here:
    }//GEN-LAST:event_tfValorProdActionPerformed

    private void tfIDProdActionPerformed(java.awt.event.ActionEvent evt) {//GEN-FIRST:event_tfIDProdActionPerformed
        // TODO add your handling code here:
    }//GEN-LAST:event_tfIDProdActionPerformed

    private void btPesquisaCliActionPerformed(java.awt.event.ActionEvent evt) {//GEN-FIRST:event_btPesquisaCliActionPerformed
        String sqlNome, nome;
        nome = "%" + tfNomeCli.getText() + "%";
        
        try{
            sqlNome = "select * from clientes where nome LIKE ?";
            PreparedStatement stmN = con.prepareStatement(sqlNome, ResultSet.TYPE_SCROLL_SENSITIVE, ResultSet.CONCUR_UPDATABLE);
            stmN.setString(1, nome);
            ResultSet rs = stmN.executeQuery();
            if(rs.first()){
                pnCliente.setVisible(true);
                String[] linha = new String[]{rs.getString("nome"),rs.getString("cpf"),
                    rs.getString("telefone"),rs.getString("id")};
                clientes.addRow(linha);
                while(rs.next()){
                    linha = new String[]{rs.getString("nome"),rs.getString("cpf"),
                        rs.getString("telefone"),rs.getString("id")};
                    clientes.addRow(linha);
                }
            } else{
                JOptionPane.showMessageDialog(null, "Dados não encontrados!");
            }
        } catch(SQLException erro){
            System.out.println(erro);
        }
    }//GEN-LAST:event_btPesquisaCliActionPerformed

    private void btSelectTableCliActionPerformed(java.awt.event.ActionEvent evt) {//GEN-FIRST:event_btSelectTableCliActionPerformed
        //Pega o nome e o id da table clientes
        String nome, ID;
        int linha;
        linha = jTable1.getSelectedRow();
        ID = (String) jTable1.getValueAt(linha, 3);
        tfIDCli.setText(ID);
        nome = (String) jTable1.getValueAt(linha, 0);
        tfNomeCli.setText(nome);
        //
        //Faz o UPDATE do cliente na tabela venda
        //Mas antes pega o valor do id no campo do id
        String id_venda, sql;
        id_venda = tfIDVenda.getText();
        try {
            sql = "UPDATE vendas SET id_clientes = ? WHERE id=?";
            PreparedStatement stm = con.prepareStatement(sql);
            stm.setString(1, ID);
            stm.setString(2, id_venda);
            Object[] options = {"Sim", "Não"};
            int opcao = JOptionPane.showOptionDialog(null, "Deseja registrar a venda no nome do cliente " + nome + "?", "Alteração", JOptionPane.YES_NO_OPTION, JOptionPane.QUESTION_MESSAGE, null, options, options[0]);
            if(opcao == 0) {
                int result = stm.executeUpdate();
                if(result > 0) {
                    JOptionPane.showMessageDialog(null, "Registro salvo com sucesso!");
                } else {
                    JOptionPane.showMessageDialog(null, "Erro ao registrar!");
                }
            } else {
                JOptionPane.showMessageDialog(null, "Registro cancelado!");
            }
        }
        catch(SQLException e) {
            System.out.println(e);
        }
    }//GEN-LAST:event_btSelectTableCliActionPerformed

    private void btFechaTabCliActionPerformed(java.awt.event.ActionEvent evt) {//GEN-FIRST:event_btFechaTabCliActionPerformed
        pnCliente.setVisible(false);
        clientes.setRowCount(0);
    }//GEN-LAST:event_btFechaTabCliActionPerformed

    private void btPesquisaProdActionPerformed(java.awt.event.ActionEvent evt) {//GEN-FIRST:event_btPesquisaProdActionPerformed
        String sql, descr;
        descr = "%" + tfDescProd.getText() + "%";
        
        try{
          sql = "SELECT * FROM produtos WHERE decricao LIKE ?";
          PreparedStatement stm = con.prepareStatement(sql, ResultSet.TYPE_SCROLL_SENSITIVE, ResultSet.CONCUR_UPDATABLE);
          stm.setString(1, descr);
          ResultSet rs = stm.executeQuery();
          
          if(rs.first()){
            pnProduto.setVisible(true);
            String[] linha = new String[]{rs.getString("decricao"),rs.getString("unidade"),
                  rs.getString("quant"),rs.getString("valor"), rs.getString("id")};
            produtos.addRow(linha);
            while(rs.next()){
                linha = new String[]{rs.getString("decricao"),rs.getString("unidade"),
                  rs.getString("quant"),rs.getString("valor"), rs.getString("id")};
                produtos.addRow(linha);
              }        
          } else{
              JOptionPane.showMessageDialog(null, "Dados não encontrados!");
          }
        }
        catch(SQLException erro){
            System.out.println(erro);
        }
    }//GEN-LAST:event_btPesquisaProdActionPerformed

    private void btSelectTabProdActionPerformed(java.awt.event.ActionEvent evt) {//GEN-FIRST:event_btSelectTabProdActionPerformed
        String descr, unid, quant, valor, id;
        int linha;
        linha = jTable2.getSelectedRow();
        descr = (String) jTable2.getValueAt(linha, 0);
        unid = (String) jTable2.getValueAt(linha, 1);
        quant = (String) jTable2.getValueAt(linha, 2);
        valor = (String) jTable2.getValueAt(linha, 3);
        id = (String) jTable2.getValueAt(linha, 4);
        tfDescProd.setText(descr);
        tfUnidProd.setText(unid);
        tfQtdeProd.setText(quant);
        tfValorProd.setText(valor);
        tfIDProd.setText(id);
    }//GEN-LAST:event_btSelectTabProdActionPerformed

    private void btFechaTabProdActionPerformed(java.awt.event.ActionEvent evt) {//GEN-FIRST:event_btFechaTabProdActionPerformed
        pnProduto.setVisible(false);
        produtos.setRowCount(0);
    }//GEN-LAST:event_btFechaTabProdActionPerformed

    private void btNovaVendaActionPerformed(java.awt.event.ActionEvent evt) {//GEN-FIRST:event_btNovaVendaActionPerformed
        String sqlVenda, sqlIdVenda, id_cli_pre, idVenda;
        int result;
        //Instancia o calendario
        Calendar c = Calendar.getInstance();
        //Formata a data para o BD
        SimpleDateFormat sdfBD = new SimpleDateFormat("yyyy/MM/dd");
        String DataFormBD = sdfBD.format(c.getTime());
        //Define o cliente pré definino para adicionar no banco de dados
        id_cli_pre = "0";
        
        try{
            //Instrução para iniciar a venda, passando um cliente "virtual" e a data
            sqlVenda = "INSERT INTO vendas(id_clientes,data) values (?,?)";
            PreparedStatement stmV = con.prepareStatement(sqlVenda);
            stmV.setString(1, id_cli_pre);
            stmV.setString(2, DataFormBD);
            result = stmV.executeUpdate();
            //
            //Instrução para buscar o id da venda acabada de se iniciar
            sqlIdVenda = "SELECT id FROM vendas ORDER BY id DESC LIMIT 1";
            PreparedStatement stmId = con.prepareStatement(sqlIdVenda, ResultSet.TYPE_SCROLL_SENSITIVE, ResultSet.CONCUR_UPDATABLE);
            ResultSet rs = stmId.executeQuery();
            //
            if(result > 0) {
                JOptionPane.showMessageDialog(null, "Venda iniciada!");//Mensagem que mostra que a venda foi iniciada
                SimpleDateFormat sdTF = new SimpleDateFormat("dd/MM/yyyy");//Formatação para a data, para mostrar no TF
                String DataFormTF = sdTF.format(c.getTime());//Faz a formatação da data
                tfData.setText(DataFormTF);//define a data no TF
                if(rs.first()) {
                    idVenda = rs.getString("id");
                    tfIDVenda.setText(idVenda);
                    tfNomeCli.setEnabled(true);
                    tfDescProd.setEnabled(true);
                    tfUnidProd.setEnabled(true);
                    tfQtVenda.setEnabled(true);
                    btPesquisaCli.setEnabled(true);
                    btPesquisaProd.setEnabled(true);
                    btAdicionar.setEnabled(true);
                } else {
                    JOptionPane.showMessageDialog(null, "Não foi possivel achar o ID da venda!");
                }
            } else {
                JOptionPane.showMessageDialog(null, "Não foi possivel iniciar uma nova venda!");
            }
        }
        catch(SQLException erro){
            System.out.println(erro);
        }
        //Limpar todos os tfs
        vendas.setRowCount(0);
        tfNomeCli.setText("");
        tfIDCli.setText("");
        tfDescProd.setText("");
        tfUnidProd.setText("");
        tfIDProd.setText("");
        tfQtdeProd.setText("");
        tfQtVenda.setText("");
        tfValorProd.setText("");
        tfValorVenda.setText("");
    }//GEN-LAST:event_btNovaVendaActionPerformed

    private void btAdicionarActionPerformed(java.awt.event.ActionEvent evt) {//GEN-FIRST:event_btAdicionarActionPerformed
        calculo();
        String descr, unid, quant, valor, id, valTot, sqlUP;
        int quantVenda, quantEstoq, quantRestante, result;
        descr = tfDescProd.getText();
        unid = tfUnidProd.getText();
        valor = tfValorProd.getText();
        quant = tfQtVenda.getText();
        valTot = tfValTot.getText();
        id = tfIDProd.getText();
        
        quantVenda = Integer.parseInt(quant);
        quantEstoq = Integer.parseInt(tfQtdeProd.getText());
        
        quantRestante = quantEstoq - quantVenda;
        try{
            sqlUP = "UPDATE produtos SET quant = ? WHERE id = ?";
             PreparedStatement stmUP = con.prepareStatement(sqlUP);
             stmUP.setString(1, Integer.toString(quantRestante));
             stmUP.setString(2, id);
             result = stmUP.executeUpdate();
             if(result > 0) {
                tfQtdeProd.setText(Integer.toString(quantRestante));
                JOptionPane.showMessageDialog(null, "Dados Atualizados com sucesso");
             }
             else {
                 JOptionPane.showMessageDialog(null, "Houve um erro ao atualizar o banco de dados");
             }
        }
        catch(SQLException e){
            System.out.println(e);
        }
        
        String[] linha = new String[]{(descr), (unid), (valor), (quant), (valTot)};
        vendas.addRow(linha);
        //Adicionar dados a tabela det_vendas
        String sqlDetalhes, idVenda;
        idVenda = tfIDVenda.getText();
        
        try{
            sqlDetalhes = "INSERT INTO det_vendas (id_venda, id_produto, quant, valor) VALUES (?,?,?,?)";
            PreparedStatement stmDet = con.prepareStatement(sqlDetalhes);
            stmDet.setString(1, idVenda);
            stmDet.setString(2, id);
            stmDet.setString(3, quant);
            stmDet.setString(4, valTot);
            stmDet.executeUpdate();
        }
        catch(SQLException error){
            System.out.println(error);
        }
        val_tot();
    }//GEN-LAST:event_btAdicionarActionPerformed

    private void jTable3ComponentAdded(java.awt.event.ContainerEvent evt) {//GEN-FIRST:event_jTable3ComponentAdded
        
    }//GEN-LAST:event_jTable3ComponentAdded

    private void jButton1ActionPerformed(java.awt.event.ActionEvent evt) {//GEN-FIRST:event_jButton1ActionPerformed
        this.dispose();
        Desconectar();
    }//GEN-LAST:event_jButton1ActionPerformed

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
            java.util.logging.Logger.getLogger(tVendas.class.getName()).log(java.util.logging.Level.SEVERE, null, ex);
        } catch (InstantiationException ex) {
            java.util.logging.Logger.getLogger(tVendas.class.getName()).log(java.util.logging.Level.SEVERE, null, ex);
        } catch (IllegalAccessException ex) {
            java.util.logging.Logger.getLogger(tVendas.class.getName()).log(java.util.logging.Level.SEVERE, null, ex);
        } catch (javax.swing.UnsupportedLookAndFeelException ex) {
            java.util.logging.Logger.getLogger(tVendas.class.getName()).log(java.util.logging.Level.SEVERE, null, ex);
        }
        //</editor-fold>

        /* Create and display the form */
        java.awt.EventQueue.invokeLater(new Runnable() {
            public void run() {
                new tVendas().setVisible(true);
            }
        });
    }

    // Variables declaration - do not modify//GEN-BEGIN:variables
    private javax.swing.JButton btAdicionar;
    private javax.swing.JButton btFechaTabCli;
    private javax.swing.JButton btFechaTabProd;
    private javax.swing.JButton btNovaVenda;
    private javax.swing.JButton btPesquisaCli;
    private javax.swing.JButton btPesquisaProd;
    private javax.swing.JButton btSelectTabProd;
    private javax.swing.JButton btSelectTableCli;
    private javax.swing.JButton jButton1;
    private javax.swing.JLabel jLabel1;
    private javax.swing.JLabel jLabel10;
    private javax.swing.JLabel jLabel11;
    private javax.swing.JLabel jLabel12;
    private javax.swing.JLabel jLabel13;
    private javax.swing.JLabel jLabel2;
    private javax.swing.JLabel jLabel3;
    private javax.swing.JLabel jLabel4;
    private javax.swing.JLabel jLabel5;
    private javax.swing.JLabel jLabel6;
    private javax.swing.JLabel jLabel7;
    private javax.swing.JLabel jLabel8;
    private javax.swing.JLabel jLabel9;
    private javax.swing.JPanel jPanel1;
    private javax.swing.JPanel jPanel2;
    private javax.swing.JPanel jPanel3;
    private javax.swing.JPanel jPanel7;
    private javax.swing.JScrollPane jScrollPane1;
    private javax.swing.JScrollPane jScrollPane2;
    private javax.swing.JScrollPane jScrollPane3;
    private javax.swing.JTable jTable1;
    private javax.swing.JTable jTable2;
    private javax.swing.JTable jTable3;
    private javax.swing.JPanel pnCliente;
    private javax.swing.JPanel pnProduto;
    private javax.swing.JPanel pnVenda;
    private javax.swing.JTextField tfData;
    private javax.swing.JTextField tfDescProd;
    private javax.swing.JTextField tfIDCli;
    private javax.swing.JTextField tfIDProd;
    private javax.swing.JTextField tfIDVenda;
    private javax.swing.JTextField tfNomeCli;
    private javax.swing.JTextField tfQtVenda;
    private javax.swing.JTextField tfQtdeProd;
    private javax.swing.JTextField tfUnidProd;
    private javax.swing.JTextField tfValTot;
    private javax.swing.JTextField tfValorProd;
    private javax.swing.JTextField tfValorVenda;
    // End of variables declaration//GEN-END:variables
}
