/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/GUIForms/JFrame.java to edit this template
 */
package pacote;

import static conn.Conexao.Conectar;
import static conn.Conexao.Desconectar;
import static conn.Conexao.con;
import java.sql.SQLException;
import java.sql.PreparedStatement;
import javax.swing.JOptionPane;
import java.sql.ResultSet;

/**
 *
 * @author Anchieta
 */

public class tGravar extends javax.swing.JFrame {

    /**
     * Creates new form tGravar
     */
    
    public String idImovel;
    
    public tGravar() {
        initComponents();
        Conectar();
    }
    
    public tGravar(String idImovel){
        this.idImovel = idImovel;
        initComponents();
    }
    
    public void limparCampos(){
        tfTitulo.setText("");
        taDesc.setText("");
        tfMetragem.setText("");
        tfValor.setText("");
        tfIptu.setText("");
        tfBairro.setText("");
        tfEndereco.setText("");
        spBanheiros.setValue(1);
        spSuites.setValue(1);
        spQuartos.setValue(1);
        cbTp_Negocio.setSelectedIndex(0);
                
       
    }
    /**
     * This method is called from within the constructor to initialize the form.
     * WARNING: Do NOT modify this code. The content of this method is always
     * regenerated by the Form Editor.
     */
    @SuppressWarnings("unchecked")
    // <editor-fold defaultstate="collapsed" desc="Generated Code">//GEN-BEGIN:initComponents
    private void initComponents() {

        jLabel1 = new javax.swing.JLabel();
        tfTitulo = new javax.swing.JTextField();
        jLabel2 = new javax.swing.JLabel();
        jScrollPane1 = new javax.swing.JScrollPane();
        taDesc = new javax.swing.JTextArea();
        jLabel3 = new javax.swing.JLabel();
        tfMetragem = new javax.swing.JTextField();
        jLabel4 = new javax.swing.JLabel();
        spSuites = new javax.swing.JSpinner();
        jLabel5 = new javax.swing.JLabel();
        spQuartos = new javax.swing.JSpinner();
        jLabel7 = new javax.swing.JLabel();
        spBanheiros = new javax.swing.JSpinner();
        jLabel8 = new javax.swing.JLabel();
        cbTp_imov = new javax.swing.JComboBox<>();
        jLabel9 = new javax.swing.JLabel();
        cbTp_Negocio = new javax.swing.JComboBox<>();
        jLabel10 = new javax.swing.JLabel();
        tfValor = new javax.swing.JTextField();
        jLabel11 = new javax.swing.JLabel();
        tfIptu = new javax.swing.JTextField();
        jLabel12 = new javax.swing.JLabel();
        cbCidade = new javax.swing.JComboBox<>();
        jLabel13 = new javax.swing.JLabel();
        tfBairro = new javax.swing.JTextField();
        jLabel14 = new javax.swing.JLabel();
        tfEndereco = new javax.swing.JTextField();
        btGravar = new javax.swing.JButton();
        btFtp = new javax.swing.JButton();
        btSair = new javax.swing.JButton();

        setDefaultCloseOperation(javax.swing.WindowConstants.EXIT_ON_CLOSE);
        setMinimumSize(new java.awt.Dimension(1000, 1000));

        jLabel1.setText("Titulo");

        jLabel2.setText("Descrição");

        taDesc.setColumns(20);
        taDesc.setRows(5);
        jScrollPane1.setViewportView(taDesc);

        jLabel3.setText("Metragem");

        jLabel4.setText("Quartos");

        spSuites.setModel(new javax.swing.SpinnerNumberModel(1, null, null, 1));

        jLabel5.setText("Banheiros");

        spQuartos.setModel(new javax.swing.SpinnerNumberModel(1, 1, null, 1));

        jLabel7.setText("Suites");

        spBanheiros.setModel(new javax.swing.SpinnerNumberModel(1, 1, null, 1));

        jLabel8.setText("Tipo de Imóvel");

        cbTp_imov.setModel(new javax.swing.DefaultComboBoxModel<>(new String[] { "Terrea", "Sobrado", "Condominio", "Duplex", "Flat", "Cobertura", "Kitnet", "Terreno-condominio", "Terreno-represa", " " }));

        jLabel9.setText("Tipo de Negócio");

        cbTp_Negocio.setModel(new javax.swing.DefaultComboBoxModel<>(new String[] { "Comprar", "Alugar", " " }));
        cbTp_Negocio.addActionListener(new java.awt.event.ActionListener() {
            public void actionPerformed(java.awt.event.ActionEvent evt) {
                cbTp_NegocioActionPerformed(evt);
            }
        });

        jLabel10.setText("Valor");

        jLabel11.setText("IPTU");

        jLabel12.setText("Cidade");

        cbCidade.setModel(new javax.swing.DefaultComboBoxModel<>(new String[] { "SP\tAdamantina", "SP\tAdolfo", "SP\tAguaí", "SP\tÁguas da Prata", "SP\tÁguas de Lindóia", "SP\tÁguas de Santa Bárbara", "SP\tÁguas de São Pedro", "SP\tAgudos", "SP\tAlambari", "SP\tAlfredo Marcondes", "SP\tAltair", "SP\tAltinópolis", "SP\tAlto Alegre", "SP\tAlumínio", "SP\tÁlvares Florence", "SP\tÁlvares Machado", "SP\tÁlvaro de Carvalho", "SP\tAlvinlândia", "SP\tAmericana", "SP\tAmérico Brasiliense", "SP\tAmérico de Campos", "SP\tAmparo", "SP\tAnalândia", "SP\tAndradina", "SP\tAngatuba", "SP\tAnhembi", "SP\tAnhumas", "SP\tAparecida", "SP\tAparecida D´oeste", "SP\tApiaí", "SP\tAraçariguama", "SP\tAraçatuba", "SP\tAraçoiaba da Serra", "SP\tAramina", "SP\tArandu", "SP\tArapeí", "SP\tAraraquara", "SP\tAraras", "SP\tArco-íris", "SP\tArealva", "SP\tAreias", "SP\tAreiópolis", "SP\tAriranha", "SP\tArtur Nogueira", "SP\tArujá", "SP\tAspásia", "SP\tAssis", "SP\tAtibaia", "SP\tAuriflama", "SP\tAvaí", "SP\tAvanhandava", "SP\tAvaré", "SP\tBady Bassitt", "SP\tBalbinos", "SP\tBálsamo", "SP\tBananal", "SP\tBarão de Antonina", "SP\tBarbosa", "SP\tBariri", "SP\tBarra Bonita", "SP\tBarra do Chapéu", "SP\tBarra do Turvo", "SP\tBarretos", "SP\tBarrinha", "SP\tBarueri", "SP\tBastos", "SP\tBatatais", "SP\tBauru", "SP\tBebedouro", "SP\tBento de Abreu", "SP\tBernardino de Campos", "SP\tBertioga", "SP\tBilac", "SP\tBirigui", "SP\tBiritiba-mirim", "SP\tBoa Esperança do Sul", "SP\tBocaina", "SP\tBofete", "SP\tBoituva", "SP\tBom Jesus Dos Perdões", "SP\tBom Sucesso de Itararé", "SP\tBorá", "SP\tBoracéia", "SP\tBorborema", "SP\tBorebi", "SP\tBotucatu", "SP\tBragança Paulista", "SP\tBraúna", "SP\tBrejo Alegre", "SP\tBrodowski", "SP\tBrotas", "SP\tBuri", "SP\tBuritama", "SP\tBuritizal", "SP\tCabrália Paulista", "SP\tCabreúva", "SP\tCaçapava", "SP\tCachoeira Paulista", "SP\tCaconde", "SP\tCafelândia", "SP\tCaiabu", "SP\tCaieiras", "SP\tCaiuá", "SP\tCajamar", "SP\tCajati", "SP\tCajobi", "SP\tCajuru", "SP\tCampina do Monte Alegre", "SP\tCampinas", "SP\tCampo Limpo Paulista", "SP\tCampos do Jordão", "SP\tCampos Novos Paulista", "SP\tCananéia", "SP\tCanas", "SP\tCândido Mota", "SP\tCândido Rodrigues", "SP\tCanitar", "SP\tCapão Bonito", "SP\tCapela do Alto", "SP\tCapivari", "SP\tCaraguatatuba", "SP\tCarapicuíba", "SP\tCardoso", "SP\tCasa Branca", "SP\tCássia Dos Coqueiros", "SP\tCastilho", "SP\tCatanduva", "SP\tCatiguá", "SP\tCedral", "SP\tCerqueira César", "SP\tCerquilho", "SP\tCesário Lange", "SP\tCharqueada", "SP\tClementina", "SP\tColina", "SP\tColômbia", "SP\tConchal", "SP\tConchas", "SP\tCordeirópolis", "SP\tCoroados", "SP\tCoronel Macedo", "SP\tCorumbataí", "SP\tCosmópolis", "SP\tCosmorama", "SP\tCotia", "SP\tCravinhos", "SP\tCristais Paulista", "SP\tCruzália", "SP\tCruzeiro", "SP\tCubatão", "SP\tCunha", "SP\tDescalvado", "SP\tDiadema", "SP\tDirce Reis", "SP\tDivinolândia", "SP\tDobrada", "SP\tDois Córregos", "SP\tDolcinópolis", "SP\tDourado", "SP\tDracena", "SP\tDuartina", "SP\tDumont", "SP\tEchaporã", "SP\tEldorado", "SP\tElias Fausto", "SP\tElisiário", "SP\tEmbaúba", "SP\tEmbu", "SP\tEmbu-guaçu", "SP\tEmilianópolis", "SP\tEngenheiro Coelho", "SP\tEspírito Santo do Pinhal", "SP\tEspírito Santo do Turvo", "SP\tEstrela D´oeste", "SP\tEstrela do Norte", "SP\tEuclides da Cunha Paulista", "SP\tFartura", "SP\tFernandópolis", "SP\tFernando Prestes", "SP\tFernão", "SP\tFerraz de Vasconcelos", "SP\tFlora Rica", "SP\tFloreal", "SP\tFlórida Paulista", "SP\tFlorínia", "SP\tFranca", "SP\tFrancisco Morato", "SP\tFranco da Rocha", "SP\tGabriel Monteiro", "SP\tGália", "SP\tGarça", "SP\tGastão Vidigal", "SP\tGavião Peixoto", "SP\tGeneral Salgado", "SP\tGetulina", "SP\tGlicério", "SP\tGuaiçara", "SP\tGuaimbê", "SP\tGuaíra", "SP\tGuapiaçu", "SP\tGuapiara", "SP\tGuará", "SP\tGuaraçaí", "SP\tGuaraci", "SP\tGuarani D´oeste", "SP\tGuarantã", "SP\tGuararapes", "SP\tGuararema", "SP\tGuaratinguetá", "SP\tGuareí", "SP\tGuariba", "SP\tGuarujá", "SP\tGuarulhos", "SP\tGuatapará", "SP\tGuzolândia", "SP\tHerculândia", "SP\tHolambra", "SP\tHortolândia", "SP\tIacanga", "SP\tIacri", "SP\tIaras", "SP\tIbaté", "SP\tIbirá", "SP\tIbirarema", "SP\tIbitinga", "SP\tIbiúna", "SP\tIcém", "SP\tIepê", "SP\tIgaraçu do Tietê", "SP\tIgarapava", "SP\tIgaratá", "SP\tIguape", "SP\tIlhabela", "SP\tIlha Comprida", "SP\tIlha Solteira", "SP\tIndaiatuba", "SP\tIndiana", "SP\tIndiaporã", "SP\tInúbia Paulista", "SP\tIpaussu", "SP\tIperó", "SP\tIpeúna", "SP\tIpiguá", "SP\tIporanga", "SP\tIpuã", "SP\tIracemápolis", "SP\tIrapuã", "SP\tIrapuru", "SP\tItaberá", "SP\tItaí", "SP\tItajobi", "SP\tItaju", "SP\tItanhaém", "SP\tItaóca", "SP\tItapecerica da Serra", "SP\tItapetininga", "SP\tItapeva", "SP\tItapevi", "SP\tItapira", "SP\tItapirapuã Paulista", "SP\tItápolis", "SP\tItaporanga", "SP\tItapuí", "SP\tItapura", "SP\tItaquaquecetuba", "SP\tItararé", "SP\tItariri", "SP\tItatiba", "SP\tItatinga", "SP\tItirapina", "SP\tItirapuã", "SP\tItobi", "SP\tItu", "SP\tItupeva", "SP\tItuverava", "SP\tJaborandi", "SP\tJaboticabal", "SP\tJacareí", "SP\tJaci", "SP\tJacupiranga", "SP\tJaguariúna", "SP\tJales", "SP\tJambeiro", "SP\tJandira", "SP\tJardinópolis", "SP\tJarinu", "SP\tJaú", "SP\tJeriquara", "SP\tJoanópolis", "SP\tJoão Ramalho", "SP\tJosé Bonifácio", "SP\tJúlio Mesquita", "SP\tJumirim", "SP\tJundiaí", "SP\tJunqueirópolis", "SP\tJuquiá", "SP\tJuquitiba", "SP\tLagoinha", "SP\tLaranjal Paulista", "SP\tLavínia", "SP\tLavrinhas", "SP\tLeme", "SP\tLençóis Paulista", "SP\tLimeira", "SP\tLindóia", "SP\tLins", "SP\tLorena", "SP\tLourdes", "SP\tLouveira", "SP\tLucélia", "SP\tLucianópolis", "SP\tLuís Antônio", "SP\tLuiziânia", "SP\tLupércio", "SP\tLutécia", "SP\tMacatuba", "SP\tMacaubal", "SP\tMacedônia", "SP\tMagda", "SP\tMairinque", "SP\tMairiporã", "SP\tManduri", "SP\tMarabá Paulista", "SP\tMaracaí", "SP\tMarapoama", "SP\tMariápolis", "SP\tMarília", "SP\tMarinópolis", "SP\tMartinópolis", "SP\tMatão", "SP\tMauá", "SP\tMendonça", "SP\tMeridiano", "SP\tMesópolis", "SP\tMiguelópolis", "SP\tMineiros do Tietê", "SP\tMiracatu", "SP\tMira Estrela", "SP\tMirandópolis", "SP\tMirante do Paranapanema", "SP\tMirassol", "SP\tMirassolândia", "SP\tMococa", "SP\tMoji Das Cruzes", "SP\tMogi Guaçu", "SP\tMoji-mirim", "SP\tMombuca", "SP\tMonções", "SP\tMongaguá", "SP\tMonte Alegre do Sul", "SP\tMonte Alto", "SP\tMonte Aprazível", "SP\tMonte Azul Paulista", "SP\tMonte Castelo", "SP\tMonteiro Lobato", "SP\tMonte Mor", "SP\tMorro Agudo", "SP\tMorungaba", "SP\tMotuca", "SP\tMurutinga do Sul", "SP\tNantes", "SP\tNarandiba", "SP\tNatividade da Serra", "SP\tNazaré Paulista", "SP\tNeves Paulista", "SP\tNhandeara", "SP\tNipoã", "SP\tNova Aliança", "SP\tNova Campina", "SP\tNova Canaã Paulista", "SP\tNova Castilho", "SP\tNova Europa", "SP\tNova Granada", "SP\tNova Guataporanga", "SP\tNova Independência", "SP\tNovais", "SP\tNova Luzitânia", "SP\tNova Odessa", "SP\tNovo Horizonte", "SP\tNuporanga", "SP\tOcauçu", "SP\tÓleo", "SP\tOlímpia", "SP\tOnda Verde", "SP\tOriente", "SP\tOrindiúva", "SP\tOrlândia", "SP\tOsasco", "SP\tOscar Bressane", "SP\tOsvaldo Cruz", "SP\tOurinhos", "SP\tOuroeste", "SP\tOuro Verde", "SP\tPacaembu", "SP\tPalestina", "SP\tPalmares Paulista", "SP\tPalmeira D´oeste", "SP\tPalmital", "SP\tPanorama", "SP\tParaguaçu Paulista", "SP\tParaibuna", "SP\tParaíso", "SP\tParanapanema", "SP\tParanapuã", "SP\tParapuã", "SP\tPardinho", "SP\tPariquera-açu", "SP\tParisi", "SP\tPatrocínio Paulista", "SP\tPaulicéia", "SP\tPaulínia", "SP\tPaulistânia", "SP\tPaulo de Faria", "SP\tPederneiras", "SP\tPedra Bela", "SP\tPedranópolis", "SP\tPedregulho", "SP\tPedreira", "SP\tPedrinhas Paulista", "SP\tPedro de Toledo", "SP\tPenápolis", "SP\tPereira Barreto", "SP\tPereiras", "SP\tPeruíbe", "SP\tPiacatu", "SP\tPiedade", "SP\tPilar do Sul", "SP\tPindamonhangaba", "SP\tPindorama", "SP\tPinhalzinho", "SP\tPiquerobi", "SP\tPiquete", "SP\tPiracaia", "SP\tPiracicaba", "SP\tPiraju", "SP\tPirajuí", "SP\tPirangi", "SP\tPirapora do Bom Jesus", "SP\tPirapozinho", "SP\tPirassununga", "SP\tPiratininga", "SP\tPitangueiras", "SP\tPlanalto", "SP\tPlatina", "SP\tPoá", "SP\tPoloni", "SP\tPompéia", "SP\tPongaí", "SP\tPontal", "SP\tPontalinda", "SP\tPontes Gestal", "SP\tPopulina", "SP\tPorangaba", "SP\tPorto Feliz", "SP\tPorto Ferreira", "SP\tPotim", "SP\tPotirendaba", "SP\tPracinha", "SP\tPradópolis", "SP\tPraia Grande", "SP\tPratânia", "SP\tPresidente Alves", "SP\tPresidente Bernardes", "SP\tPresidente Epitácio", "SP\tPresidente Prudente", "SP\tPresidente Venceslau", "SP\tPromissão", "SP\tQuadra", "SP\tQuatá", "SP\tQueiroz", "SP\tQueluz", "SP\tQuintana", "SP\tRafard", "SP\tRancharia", "SP\tRedenção da Serra", "SP\tRegente Feijó", "SP\tReginópolis", "SP\tRegistro", "SP\tRestinga", "SP\tRibeira", "SP\tRibeirão Bonito", "SP\tRibeirão Branco", "SP\tRibeirão Corrente", "SP\tRibeirão do Sul", "SP\tRibeirão Dos Índios", "SP\tRibeirão Grande", "SP\tRibeirão Pires", "SP\tRibeirão Preto", "SP\tRiversul", "SP\tRifaina", "SP\tRincão", "SP\tRinópolis", "SP\tRio Claro", "SP\tRio Das Pedras", "SP\tRio Grande da Serra", "SP\tRiolândia", "SP\tRosana", "SP\tRoseira", "SP\tRubiácea", "SP\tRubinéia", "SP\tSabino", "SP\tSagres", "SP\tSales", "SP\tSales Oliveira", "SP\tSalesópolis", "SP\tSalmourão", "SP\tSaltinho", "SP\tSalto", "SP\tSalto de Pirapora", "SP\tSalto Grande", "SP\tSandovalina", "SP\tSanta Adélia", "SP\tSanta Albertina", "SP\tSanta Bárbara D´oeste", "SP\tSanta Branca", "SP\tSanta Clara D´oeste", "SP\tSanta Cruz da Conceição", "SP\tSanta Cruz da Esperança", "SP\tSanta Cruz Das Palmeiras", "SP\tSanta Cruz do Rio Pardo", "SP\tSanta Ernestina", "SP\tSanta fé do Sul", "SP\tSanta Gertrudes", "SP\tSanta Isabel", "SP\tSanta Lúcia", "SP\tSanta Maria da Serra", "SP\tSanta Mercedes", "SP\tSantana da Ponte Pensa", "SP\tSantana de Parnaíba", "SP\tSanta Rita D´oeste", "SP\tSanta Rita do Passa Quatro", "SP\tSanta Rosa de Viterbo", "SP\tSanta Salete", "SP\tSanto Anastácio", "SP\tSanto André", "SP\tSanto Antônio da Alegria", "SP\tSanto Antônio de Posse", "SP\tSanto Antônio do Aracanguá", "SP\tSanto Antônio do Jardim", "SP\tSanto Antônio do Pinhal", "SP\tSanto Expedito", "SP\tSantópolis do Aguapeí", "SP\tSantos", "SP\tSão Bento do Sapucaí", "SP\tSão Bernardo do Campo", "SP\tSão Caetano do Sul", "SP\tSão Carlos", "SP\tSão Francisco", "SP\tSão João da Boa Vista", "SP\tSão João Das Duas Pontes", "SP\tSão João de Iracema", "SP\tSão João do Pau D´alho", "SP\tSão Joaquim da Barra", "SP\tSão José da Bela Vista", "SP\tSão José do Barreiro", "SP\tSão José do Rio Pardo", "SP\tSão José do Rio Preto", "SP\tSão José Dos Campos", "SP\tSão Lourenço da Serra", "SP\tSão Luís do Paraitinga", "SP\tSão Manuel", "SP\tSão Miguel Arcanjo", "SP\tSão Paulo", "SP\tSão Pedro", "SP\tSão Pedro do Turvo", "SP\tSão Roque", "SP\tSão Sebastião", "SP\tSão Sebastião da Grama", "SP\tSão Simão", "SP\tSão Vicente", "SP\tSarapuí", "SP\tSarutaiá", "SP\tSebastianópolis do Sul", "SP\tSerra Azul", "SP\tSerrana", "SP\tSerra Negra", "SP\tSertãozinho", "SP\tSete Barras", "SP\tSeverínia", "SP\tSilveiras", "SP\tSocorro", "SP\tSorocaba", "SP\tSud Mennucci", "SP\tSumaré", "SP\tSuzano", "SP\tSuzanápolis", "SP\tTabapuã", "SP\tTabatinga", "SP\tTaboão da Serra", "SP\tTaciba", "SP\tTaguaí", "SP\tTaiaçu", "SP\tTaiúva", "SP\tTambaú", "SP\tTanabi", "SP\tTapiraí", "SP\tTapiratiba", "SP\tTaquaral", "SP\tTaquaritinga", "SP\tTaquarituba", "SP\tTaquarivaí", "SP\tTarabai", "SP\tTarumã", "SP\tTatuí", "SP\tTaubaté", "SP\tTejupá", "SP\tTeodoro Sampaio", "SP\tTerra Roxa", "SP\tTietê", "SP\tTimburi", "SP\tTorre de Pedra", "SP\tTorrinha", "SP\tTrabiju", "SP\tTremembé", "SP\tTrês Fronteiras", "SP\tTuiuti", "SP\tTupã", "SP\tTupi Paulista", "SP\tTuriúba", "SP\tTurmalina", "SP\tUbarana", "SP\tUbatuba", "SP\tUbirajara", "SP\tUchoa", "SP\tUnião Paulista", "SP\tUrânia", "SP\tUru", "SP\tUrupês", "SP\tValentim Gentil", "SP\tValinhos", "SP\tValparaíso", "SP\tVargem", "SP\tVargem Grande do Sul", "SP\tVargem Grande Paulista", "SP\tVárzea Paulista", "SP\tVera Cruz", "SP\tVinhedo", "SP\tViradouro", "SP\tVista Alegre do Alto", "SP\tVitória Brasil", "SP\tVotorantim", "SP\tVotuporanga", "SP\tZacarias", "SP\tChavantes", "SP\tEstiva Gerbi" }));

        jLabel13.setText("Bairro");

        jLabel14.setText("Endereço");

        btGravar.setText("Gravar Dados");
        btGravar.addActionListener(new java.awt.event.ActionListener() {
            public void actionPerformed(java.awt.event.ActionEvent evt) {
                btGravarActionPerformed(evt);
            }
        });

        btFtp.setText("Selecionar Imagens");
        btFtp.setEnabled(false);
        btFtp.addActionListener(new java.awt.event.ActionListener() {
            public void actionPerformed(java.awt.event.ActionEvent evt) {
                btFtpActionPerformed(evt);
            }
        });

        btSair.setText("Sair");
        btSair.addActionListener(new java.awt.event.ActionListener() {
            public void actionPerformed(java.awt.event.ActionEvent evt) {
                btSairActionPerformed(evt);
            }
        });

        javax.swing.GroupLayout layout = new javax.swing.GroupLayout(getContentPane());
        getContentPane().setLayout(layout);
        layout.setHorizontalGroup(
            layout.createParallelGroup(javax.swing.GroupLayout.Alignment.LEADING)
            .addGroup(layout.createSequentialGroup()
                .addContainerGap()
                .addGroup(layout.createParallelGroup(javax.swing.GroupLayout.Alignment.LEADING)
                    .addComponent(btGravar)
                    .addComponent(jLabel12, javax.swing.GroupLayout.PREFERRED_SIZE, 97, javax.swing.GroupLayout.PREFERRED_SIZE)
                    .addComponent(jLabel13, javax.swing.GroupLayout.PREFERRED_SIZE, 97, javax.swing.GroupLayout.PREFERRED_SIZE)
                    .addComponent(jLabel14, javax.swing.GroupLayout.PREFERRED_SIZE, 97, javax.swing.GroupLayout.PREFERRED_SIZE)
                    .addComponent(jLabel4, javax.swing.GroupLayout.PREFERRED_SIZE, 97, javax.swing.GroupLayout.PREFERRED_SIZE)
                    .addComponent(jLabel3, javax.swing.GroupLayout.PREFERRED_SIZE, 97, javax.swing.GroupLayout.PREFERRED_SIZE)
                    .addComponent(jLabel2, javax.swing.GroupLayout.PREFERRED_SIZE, 97, javax.swing.GroupLayout.PREFERRED_SIZE)
                    .addComponent(jLabel1, javax.swing.GroupLayout.PREFERRED_SIZE, 97, javax.swing.GroupLayout.PREFERRED_SIZE)
                    .addGroup(layout.createParallelGroup(javax.swing.GroupLayout.Alignment.TRAILING)
                        .addComponent(jLabel10, javax.swing.GroupLayout.PREFERRED_SIZE, 97, javax.swing.GroupLayout.PREFERRED_SIZE)
                        .addComponent(jLabel8, javax.swing.GroupLayout.Alignment.LEADING, javax.swing.GroupLayout.PREFERRED_SIZE, 97, javax.swing.GroupLayout.PREFERRED_SIZE)))
                .addGroup(layout.createParallelGroup(javax.swing.GroupLayout.Alignment.LEADING, false)
                    .addGroup(layout.createSequentialGroup()
                        .addGap(54, 54, 54)
                        .addComponent(btFtp, javax.swing.GroupLayout.PREFERRED_SIZE, 149, javax.swing.GroupLayout.PREFERRED_SIZE)
                        .addPreferredGap(javax.swing.LayoutStyle.ComponentPlacement.RELATED, javax.swing.GroupLayout.DEFAULT_SIZE, Short.MAX_VALUE)
                        .addComponent(btSair, javax.swing.GroupLayout.PREFERRED_SIZE, 80, javax.swing.GroupLayout.PREFERRED_SIZE))
                    .addGroup(layout.createSequentialGroup()
                        .addGap(18, 18, 18)
                        .addGroup(layout.createParallelGroup(javax.swing.GroupLayout.Alignment.TRAILING, false)
                            .addComponent(tfMetragem, javax.swing.GroupLayout.Alignment.LEADING, javax.swing.GroupLayout.PREFERRED_SIZE, 101, javax.swing.GroupLayout.PREFERRED_SIZE)
                            .addComponent(tfTitulo, javax.swing.GroupLayout.Alignment.LEADING)
                            .addComponent(jScrollPane1, javax.swing.GroupLayout.Alignment.LEADING)
                            .addGroup(javax.swing.GroupLayout.Alignment.LEADING, layout.createSequentialGroup()
                                .addComponent(spQuartos, javax.swing.GroupLayout.PREFERRED_SIZE, javax.swing.GroupLayout.DEFAULT_SIZE, javax.swing.GroupLayout.PREFERRED_SIZE)
                                .addGap(41, 41, 41)
                                .addComponent(jLabel7, javax.swing.GroupLayout.PREFERRED_SIZE, 55, javax.swing.GroupLayout.PREFERRED_SIZE)
                                .addPreferredGap(javax.swing.LayoutStyle.ComponentPlacement.RELATED)
                                .addComponent(spSuites, javax.swing.GroupLayout.PREFERRED_SIZE, javax.swing.GroupLayout.DEFAULT_SIZE, javax.swing.GroupLayout.PREFERRED_SIZE)
                                .addGap(37, 37, 37)
                                .addComponent(jLabel5, javax.swing.GroupLayout.PREFERRED_SIZE, 54, javax.swing.GroupLayout.PREFERRED_SIZE)
                                .addPreferredGap(javax.swing.LayoutStyle.ComponentPlacement.RELATED)
                                .addComponent(spBanheiros, javax.swing.GroupLayout.PREFERRED_SIZE, javax.swing.GroupLayout.DEFAULT_SIZE, javax.swing.GroupLayout.PREFERRED_SIZE))
                            .addGroup(javax.swing.GroupLayout.Alignment.LEADING, layout.createSequentialGroup()
                                .addGroup(layout.createParallelGroup(javax.swing.GroupLayout.Alignment.LEADING)
                                    .addGroup(layout.createSequentialGroup()
                                        .addComponent(tfValor, javax.swing.GroupLayout.PREFERRED_SIZE, 119, javax.swing.GroupLayout.PREFERRED_SIZE)
                                        .addGap(148, 148, 148)
                                        .addGroup(layout.createParallelGroup(javax.swing.GroupLayout.Alignment.LEADING, false)
                                            .addComponent(jLabel9, javax.swing.GroupLayout.DEFAULT_SIZE, javax.swing.GroupLayout.DEFAULT_SIZE, Short.MAX_VALUE)
                                            .addComponent(jLabel11, javax.swing.GroupLayout.PREFERRED_SIZE, 106, javax.swing.GroupLayout.PREFERRED_SIZE)))
                                    .addComponent(cbTp_imov, javax.swing.GroupLayout.PREFERRED_SIZE, 174, javax.swing.GroupLayout.PREFERRED_SIZE))
                                .addPreferredGap(javax.swing.LayoutStyle.ComponentPlacement.RELATED)
                                .addGroup(layout.createParallelGroup(javax.swing.GroupLayout.Alignment.LEADING)
                                    .addComponent(cbTp_Negocio, javax.swing.GroupLayout.PREFERRED_SIZE, 95, javax.swing.GroupLayout.PREFERRED_SIZE)
                                    .addComponent(tfIptu, javax.swing.GroupLayout.DEFAULT_SIZE, 173, Short.MAX_VALUE)))
                            .addComponent(cbCidade, javax.swing.GroupLayout.Alignment.LEADING, javax.swing.GroupLayout.PREFERRED_SIZE, 200, javax.swing.GroupLayout.PREFERRED_SIZE)
                            .addComponent(tfBairro, javax.swing.GroupLayout.Alignment.LEADING)
                            .addComponent(tfEndereco, javax.swing.GroupLayout.Alignment.LEADING))))
                .addContainerGap(72, Short.MAX_VALUE))
        );
        layout.setVerticalGroup(
            layout.createParallelGroup(javax.swing.GroupLayout.Alignment.LEADING)
            .addGroup(layout.createSequentialGroup()
                .addGap(22, 22, 22)
                .addGroup(layout.createParallelGroup(javax.swing.GroupLayout.Alignment.BASELINE)
                    .addComponent(jLabel1)
                    .addComponent(tfTitulo, javax.swing.GroupLayout.PREFERRED_SIZE, javax.swing.GroupLayout.DEFAULT_SIZE, javax.swing.GroupLayout.PREFERRED_SIZE))
                .addGap(14, 14, 14)
                .addGroup(layout.createParallelGroup(javax.swing.GroupLayout.Alignment.LEADING)
                    .addComponent(jScrollPane1, javax.swing.GroupLayout.PREFERRED_SIZE, 73, javax.swing.GroupLayout.PREFERRED_SIZE)
                    .addComponent(jLabel2))
                .addPreferredGap(javax.swing.LayoutStyle.ComponentPlacement.UNRELATED)
                .addGroup(layout.createParallelGroup(javax.swing.GroupLayout.Alignment.BASELINE)
                    .addComponent(tfMetragem, javax.swing.GroupLayout.PREFERRED_SIZE, javax.swing.GroupLayout.DEFAULT_SIZE, javax.swing.GroupLayout.PREFERRED_SIZE)
                    .addComponent(jLabel3))
                .addGap(27, 27, 27)
                .addGroup(layout.createParallelGroup(javax.swing.GroupLayout.Alignment.BASELINE)
                    .addComponent(jLabel4)
                    .addComponent(spSuites, javax.swing.GroupLayout.PREFERRED_SIZE, javax.swing.GroupLayout.DEFAULT_SIZE, javax.swing.GroupLayout.PREFERRED_SIZE)
                    .addComponent(jLabel5)
                    .addComponent(spQuartos, javax.swing.GroupLayout.PREFERRED_SIZE, javax.swing.GroupLayout.DEFAULT_SIZE, javax.swing.GroupLayout.PREFERRED_SIZE)
                    .addComponent(jLabel7)
                    .addComponent(spBanheiros, javax.swing.GroupLayout.PREFERRED_SIZE, javax.swing.GroupLayout.DEFAULT_SIZE, javax.swing.GroupLayout.PREFERRED_SIZE))
                .addGap(35, 35, 35)
                .addGroup(layout.createParallelGroup(javax.swing.GroupLayout.Alignment.BASELINE)
                    .addComponent(jLabel8)
                    .addComponent(cbTp_imov, javax.swing.GroupLayout.PREFERRED_SIZE, javax.swing.GroupLayout.DEFAULT_SIZE, javax.swing.GroupLayout.PREFERRED_SIZE)
                    .addComponent(jLabel9)
                    .addComponent(cbTp_Negocio, javax.swing.GroupLayout.PREFERRED_SIZE, javax.swing.GroupLayout.DEFAULT_SIZE, javax.swing.GroupLayout.PREFERRED_SIZE))
                .addGap(43, 43, 43)
                .addGroup(layout.createParallelGroup(javax.swing.GroupLayout.Alignment.BASELINE)
                    .addComponent(jLabel10)
                    .addComponent(tfValor, javax.swing.GroupLayout.PREFERRED_SIZE, javax.swing.GroupLayout.DEFAULT_SIZE, javax.swing.GroupLayout.PREFERRED_SIZE)
                    .addComponent(jLabel11)
                    .addComponent(tfIptu, javax.swing.GroupLayout.PREFERRED_SIZE, javax.swing.GroupLayout.DEFAULT_SIZE, javax.swing.GroupLayout.PREFERRED_SIZE))
                .addGap(29, 29, 29)
                .addGroup(layout.createParallelGroup(javax.swing.GroupLayout.Alignment.BASELINE)
                    .addComponent(jLabel12)
                    .addComponent(cbCidade, javax.swing.GroupLayout.PREFERRED_SIZE, javax.swing.GroupLayout.DEFAULT_SIZE, javax.swing.GroupLayout.PREFERRED_SIZE))
                .addGap(18, 18, 18)
                .addGroup(layout.createParallelGroup(javax.swing.GroupLayout.Alignment.BASELINE)
                    .addComponent(jLabel13)
                    .addComponent(tfBairro, javax.swing.GroupLayout.PREFERRED_SIZE, javax.swing.GroupLayout.DEFAULT_SIZE, javax.swing.GroupLayout.PREFERRED_SIZE))
                .addGap(18, 18, 18)
                .addGroup(layout.createParallelGroup(javax.swing.GroupLayout.Alignment.BASELINE)
                    .addComponent(jLabel14)
                    .addComponent(tfEndereco, javax.swing.GroupLayout.PREFERRED_SIZE, javax.swing.GroupLayout.DEFAULT_SIZE, javax.swing.GroupLayout.PREFERRED_SIZE))
                .addGap(31, 31, 31)
                .addGroup(layout.createParallelGroup(javax.swing.GroupLayout.Alignment.BASELINE)
                    .addComponent(btGravar)
                    .addComponent(btFtp)
                    .addComponent(btSair))
                .addContainerGap(62, Short.MAX_VALUE))
        );

        pack();
    }// </editor-fold>//GEN-END:initComponents

    private void cbTp_NegocioActionPerformed(java.awt.event.ActionEvent evt) {//GEN-FIRST:event_cbTp_NegocioActionPerformed
        // TODO add your handling code here:
    }//GEN-LAST:event_cbTp_NegocioActionPerformed

    private void btSairActionPerformed(java.awt.event.ActionEvent evt) {//GEN-FIRST:event_btSairActionPerformed
        this.dispose();
        Desconectar();
    }//GEN-LAST:event_btSairActionPerformed

    private void btFtpActionPerformed(java.awt.event.ActionEvent evt) {//GEN-FIRST:event_btFtpActionPerformed
        tFTP ftp = new tFTP(idImovel);
        ftp.setVisible(true);
    }//GEN-LAST:event_btFtpActionPerformed

    private void btGravarActionPerformed(java.awt.event.ActionEvent evt) {//GEN-FIRST:event_btGravarActionPerformed
        String sqlConsulta, sqlGravar, titulo, desc, metragem, quartos, suites, banheiros, tpImovel, tpNegocio, valor, iptu, cidade, bairro, endereco, idSubcategoria = null;
        int result;
        
        titulo = tfTitulo.getText();
        desc = taDesc.getText();
        metragem = tfMetragem.getText();
        quartos = spQuartos.getValue().toString();
        suites = spSuites.getValue().toString();
        banheiros = spBanheiros.getValue().toString();
        tpNegocio = cbTp_Negocio.getSelectedItem().toString();
        valor = tfValor.getText();
        iptu = tfIptu.getText();
        cidade = cbCidade.getSelectedItem().toString();
        bairro = tfBairro.getText();
        endereco = tfEndereco.getText();
        
        tpImovel = "%" + cbTp_imov.getSelectedItem().toString() + "%";
        
        try{
            sqlConsulta = "Select id from tipo_imovel_subcategoria where subcategoria like ?";
            PreparedStatement stm = con.prepareStatement(sqlConsulta, ResultSet.TYPE_SCROLL_SENSITIVE, ResultSet.CONCUR_UPDATABLE);
            stm.setString(1, tpImovel);
            ResultSet rs = stm.executeQuery();
            if(rs.first()){
                idSubcategoria = rs.getString("id");
            } else {
                JOptionPane.showMessageDialog(null, "Esse tipo de imovel não existe!");
            }
        } catch(SQLException e){
            JOptionPane.showMessageDialog(null, "erro" + e);
        }
        
        try{
            //Grava o imovel no banco de dados
            sqlGravar = "INSERT INTO imovel (titulo, descricao, metragem, quartos, suites, banheiros, id_tipo_imovel_subcategorias, tipo_Negocio, valor, iptu, cidade, bairro, endereco)"
                    + "VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?)";
            PreparedStatement stm = con.prepareStatement(sqlGravar);
            stm.setString(1, titulo);
            stm.setString(2, desc);
            stm.setString(3, metragem);
            stm.setString(4, quartos);
            stm.setString(5, suites);
            stm.setString(6, banheiros);
            stm.setString(7, idSubcategoria);
            stm.setString(8, tpNegocio);
            stm.setString(9, valor);
            stm.setString(10, iptu);
            stm.setString(11, cidade);
            stm.setString(12, bairro);
            stm.setString(13, endereco);
            result = stm.executeUpdate();

            if(result > 0){
                JOptionPane.showMessageDialog(null, "Dados salvos com sucesso!");
                //Se a gravação der certo, essa é a rotina que pega o id do imovel
                String sqlIdImovel = "SELECT id FROM imovel ORDER BY id DESC LIMIT 1";
                PreparedStatement stmId = con.prepareStatement(sqlIdImovel, ResultSet.TYPE_SCROLL_SENSITIVE, ResultSet.CONCUR_UPDATABLE);
                ResultSet rs = stmId.executeQuery();
                if(rs.first()){
                    idImovel = rs.getString("id");
                    
                }
                btFtp.requestFocus();
                btFtp.setEnabled(true);
            } else {
                JOptionPane.showMessageDialog(null, "Erro ao gravar os dados!");
            }
        } catch(SQLException erro){
            JOptionPane.showMessageDialog(null, "erro" + erro);
        }
    }//GEN-LAST:event_btGravarActionPerformed

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
            java.util.logging.Logger.getLogger(tGravar.class.getName()).log(java.util.logging.Level.SEVERE, null, ex);
        } catch (InstantiationException ex) {
            java.util.logging.Logger.getLogger(tGravar.class.getName()).log(java.util.logging.Level.SEVERE, null, ex);
        } catch (IllegalAccessException ex) {
            java.util.logging.Logger.getLogger(tGravar.class.getName()).log(java.util.logging.Level.SEVERE, null, ex);
        } catch (javax.swing.UnsupportedLookAndFeelException ex) {
            java.util.logging.Logger.getLogger(tGravar.class.getName()).log(java.util.logging.Level.SEVERE, null, ex);
        }
        //</editor-fold>

        /* Create and display the form */
        java.awt.EventQueue.invokeLater(new Runnable() {
            public void run() {
                new tGravar().setVisible(true);
            }
        });
    }

    // Variables declaration - do not modify//GEN-BEGIN:variables
    private javax.swing.JButton btFtp;
    private javax.swing.JButton btGravar;
    private javax.swing.JButton btSair;
    private javax.swing.JComboBox<String> cbCidade;
    private javax.swing.JComboBox<String> cbTp_Negocio;
    private javax.swing.JComboBox<String> cbTp_imov;
    private javax.swing.JLabel jLabel1;
    private javax.swing.JLabel jLabel10;
    private javax.swing.JLabel jLabel11;
    private javax.swing.JLabel jLabel12;
    private javax.swing.JLabel jLabel13;
    private javax.swing.JLabel jLabel14;
    private javax.swing.JLabel jLabel2;
    private javax.swing.JLabel jLabel3;
    private javax.swing.JLabel jLabel4;
    private javax.swing.JLabel jLabel5;
    private javax.swing.JLabel jLabel7;
    private javax.swing.JLabel jLabel8;
    private javax.swing.JLabel jLabel9;
    private javax.swing.JScrollPane jScrollPane1;
    private javax.swing.JSpinner spBanheiros;
    private javax.swing.JSpinner spQuartos;
    private javax.swing.JSpinner spSuites;
    private javax.swing.JTextArea taDesc;
    private javax.swing.JTextField tfBairro;
    private javax.swing.JTextField tfEndereco;
    private javax.swing.JTextField tfIptu;
    private javax.swing.JTextField tfMetragem;
    private javax.swing.JTextField tfTitulo;
    private javax.swing.JTextField tfValor;
    // End of variables declaration//GEN-END:variables
}
