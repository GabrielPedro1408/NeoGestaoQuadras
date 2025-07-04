<?php
    include_once 'conexao.php';
    session_start();
    // Verifica se foi efetuado o login
    if(!isset($_SESSION['username'])){
        header("Location: login.php?error=Você precisa fazer login para acessar esta página.");
        exit;
    }
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../CSS/dashboard.css">
    <link rel="stylesheet" href="../components/header.css">
    <link rel="stylesheet" href="../components/sidebar.css">
    <link rel="shortcut icon" href="../images/financeiro.png" type="image/x-icon">
    <link rel="stylesheet" href="../CSS/bootstrap.min.css">
    <link rel="stylesheet" href="../CSS/fontawesome.min.css">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <title>NPL Quadras</title>
</head>
<body>
<script>
  localStorage.setItem('activeItem', 'dashboard');
</script>
<div class="full-content">
    <?php require '../components/sidebar.php';?> 
    <div id="main-content">
        <header><?php require '../components/header.php';?> </header> 
        <div class="container">

            <div class="title">
                <h2>Bem-Vindo, <label for="nomeEmpresa">Neo Gestão</label></h2>
            </div>

            <div class="divisao"></div>
            <div class="subtitle">
                <h6>DASHBOARD</h6>
            </div>

            <!-- cards -->

            <div class="cards">
                <!-- card 1 -->
                <div class="card-1">
                    <div class="icone-1">
                        <i class="fa-solid fa-gears fa-2xl"></i>
                    </div>
                    <div class="text">
                        <h5>Quadras Funcionando:</h5> 
                        <h4><label for="quadrasFuncionando">5</label></h4>
                    </div>
                    <div class="bottom-card">
                        <a href="#"><p>VER POR COMPLETO</p><i class="fa-solid fa-arrow-right"></i></a>
                    </div>
                </div>
                <!-- card 2 -->
                <div class="card-2">
                    <div class="icone-2">
                        <i class="fa-solid fa-calendar fa-2xl"></i>
                    </div>

                    <div class="text"> 
                        <h5>Horários Agendados</h5>
                        <h4><label for="agendamentosDiario">27</label></h4>
                    </div>

                    <div class="bottom-card">
                        <a href="#"><p>VER POR COMPLETO</p><i class="fa-solid fa-arrow-right"></i></a>
                    </div>
                </div>
                <!-- card3 -->
                <div class="card-3">
                    <div class="icone-3">
                        <i class="fa-solid fa-cart-shopping fa-2xl"></i>
                    </div>

                    <div class="text">
                        <h5>Contas a Receber</h5>
                        <h4>R$<label for="contasReceber">780,00</label></h4>
                    </div>

                    <div class="bottom-card">
                        <a href="#"><p>VER POR COMPLETO</p><i class="fa-solid fa-arrow-right"></i></a>
                    </div>
                </div>
                <!-- card 4 -->
                <div class="card-4">
                    <div class="icone-4">
                        <i class="fa-solid fa-file-invoice-dollar fa-2xl"></i>
                    </div>

                    <div class="text">
                        <h5>Contas a Pagar</h5>
                        <h4>R$<label for="contasPagar">420,00</label></h4>
                    </div>

                    <div class="bottom-card">
                        <a href="#"><p>VER POR COMPLETO</p><i class="fa-solid fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>

            <!-- gráficos -->
            <div class="graficos">
                <div class="grafico-clientes">
                    <canvas id="grafico-clientes"></canvas>
                </div>
                <div class="grafico-contas-a-receber">
                    <canvas id="grafico-contas-a-receber"></canvas>
                </div>
            </div>
            
            <!-- relatorios -->

    <div class="agenda">    
        <div class="quadras-lista">
            <h4>Próximos Agendamentos:</h4>
            <div class="main-text">
                <div class="relogio">
                    <i class="fa-solid fa-clock fa-2xl"></i>
                </div>
                <div class="horarios">
                    <h5><label for="Quadra1">Quadra 1</label></h5>
                <div class="lista-horarios">
                    <span>13:30</span>
                    <span>14:30</span>
                    <span>15:30</span>
                </div>
                </div>
                <div class="horarios">
                    <h5><label for="Quadra2">Quadra 2</label></h5>
                    <div class="lista-horarios">
                        <span>14:00</span>
                        <span>15:00</span>
                        <span>16:00</span>
                    </div>
                </div>
                <div class="horarios">
                    <h5><label for="Quadra2">Quadra 3</label></h5>
                    <div class="lista-horarios">
                        <span>14:00</span>
                        <span>15:00</span>
                        <span>16:00</span>
                    </div>
                </div>
                <div class="horarios">
                    <h5><label for="Quadra2">Quadra Beach</label></h5>
                    <div class="lista-horarios">
                        <span>14:00</span>
                        <span>15:00</span>
                        <span>16:00</span>
                    </div>
                </div>
                <div class="horarios">
                    <h5><label for="Quadra2">Quadra Society</label></h5>
                    <div class="lista-horarios">
                        <span>14:00</span>
                        <span>15:00</span>
                        <span>16:00</span>
                    </div>
                </div>
                <div class="horarios">
                    <h5><label for="Quadra2">Quadra Society</label></h5>
                    <div class="lista-horarios">
                        <span>14:00</span>
                        <span>15:00</span>
                        <span>16:00</span>
                    </div>
                </div>
            </div>
           
        </div>
        <div class="bottom-horario">
            <a href="Agendamentos.php"><span>VER POR COMPLETO</span><i class="fa-solid fa-arrow-right"></i></a>
        </div>
    </div> 
</div>

    <!-- end main -->
    </div>
    <?php 
        /* seleciono a quantidade de clientes cadastrado nos ultimos 6 meses */
        try{
        $clientes = $pdo->prepare(
        
        "SELECT 
        DATE_FORMAT(data_cadastro, '%m - %Y') AS mes_ano,
        COUNT(*) AS total_clientes

        FROM 
        clientes

        WHERE 
        data_cadastro BETWEEN DATE_SUB(NOW(), INTERVAL 6 MONTH) AND NOW()

        GROUP BY
        mes_ano

        ORDER BY
        mes_ano");
        }

        /* caso não consiga fazer a consulta */
        catch(PDOException $e){
            echo $e;
        }

        /* passando para um vetor, para usar no gráfico */
        $clientes -> execute();
        $result = $clientes->fetchAll(PDO::FETCH_ASSOC);

        $mes_ano = [];
        $total_clientes = [];

        foreach ($result as $row){
            $mes_ano[] = $row['mes_ano'];
            $total_clientes[] = $row['total_clientes'];
        }

    ?>
    <script>
    
    /* função para pegar os últimos 6 meses */
    function seisMeses() {
    
    const hoje = new Date();
    const ultimosMeses = [];

    for (let i = 0; i < 6; i++) {
        const mes = new Date(hoje);

        mes.setMonth(hoje.getMonth() - i);

        ultimosMeses.push(mes.toLocaleString('default', { month: 'long'}));
    }
    return ultimosMeses.reverse();
    }

    /* gráfico clientes */
    const mes_ano = <?php echo json_encode($mes_ano);?>;
    const total_clientes = <?php echo json_encode($total_clientes);?>;

    const ctx1 = document.getElementById('grafico-clientes');
    const grafico1 = new Chart(ctx1, {
        type: 'line',
        data: {
            labels: mes_ano,
            datasets: [{
                label: 'Novos Clientes',
                data: total_clientes,
                backgroundColor: ['rgb(221, 187, 33)'],
                borderColor: ['rgba(5, 62, 97, 0.733)'],
                borderWidth: 1
            }]
        },
        options: {
            animations:{
                tension: {
                duration: 9000,
                easing: 'easeInQuad',
                from: 0.1,
                to: 0.4,
                loop: true
            }
            },
        scales: {
            y: {
            min: 0,
            max: 70
            }
        }
        }
    });

    /* grafico contas a receber */
    const ctx2 = document.getElementById('grafico-contas-a-receber').getContext('2d');
        const grafico2 = new Chart(ctx2, {
            type: 'bar',
            data: {
                labels: seisMeses(),
                datasets: [{
                    label: 'Faturamento (mil)',
                    data: [80.000, 91.000, 73.000, 59.000, 80.000, 72.000],
                    backgroundColor: [
                        'rgba(221, 187, 33, 0.56)',
                        'rgba(221, 187, 33, 0.51)',
                        'rgba(221, 187, 33, 0.53)',
                        'rgba(221, 187, 33, 0.49)',
 
                    ],
                    borderWidth: 1
                }]
            },
            options: {
                responsive: true,
                plugins: {
                    legend: { display: true }
                },
                scales: {
                    y: { beginAtZero: true }
                }
            }
        });
    </script>
    <script src="../components/sidebar.js"></script>
    </body>
</html>