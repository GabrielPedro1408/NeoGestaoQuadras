<nav id="sidebar">
    <div id="sidebar-content">
        <ul id="side-items">
            <li class="side-item" data-item="dashboard">
                <a href="../PHP/dashboard.php">
                        <i class="fas fa-chart-line fa-xl"></i>
                        <span class="item-description">
                            Dashboard
                        </span>
                    <div class="direita">
                        <i class="fa-solid fa-chevron-right fa-sm"></i>
                    </div>
                </a>
            </li>
            <li class="side-item" data-item="financeiro" id="financeiro-item">
                <a href="#" id="financeiro-toggle">
                    <i class="fa-solid fa-dollar-sign fa-xl"></i>
                    <span class="item-description">Financeiro</span>
                    <div class="direita">
                        <i class="fa-solid fa-chevron-right fa-sm"></i>
                    </div>
                </a>
                <ul class="submenu-financeiro" style="display: none;">
                    <li><a href="../PHP/ListagemContas.php">Listagem de Contas</a></li>
                    <li><a href="../PHP/FluxoFinanceiro.php">Fluxo Financeiro</a></li>
                </ul>
            </li>
            <li class="side-item" data-item="funcionamento">
                <a href="../PHP/Funcionamento.php">
                    <i class="fa-solid fa-wrench fa-xl"></i>
                    <span class="item-description">
                        Funcionamento
                    </span>
                    <div class="direita">
                        <i class="fa-solid fa-chevron-right fa-sm"></i>
                    </div>
                </a>
            </li>
            <li class="side-item" data-item="quadras">
                <a href="../PHP/Quadras.php">
                    <i class="fa-solid fa-futbol fa-xl"></i>
                    <span class="item-description">
                        Quadras
                    </span>
                    <div class="direita">
                        <i class="fa-solid fa-chevron-right fa-sm"></i>
                    </div>
                </a>
            </li>
            <li class="side-item" data-item="agendamentos">
                <a href="../PHP/Agendamentos.php"> 
                <i class="fa-solid fa-calendar fa-xl"></i>
                <span class="item-description"> 
                    Agendamentos 
                </span>
                <div class="direita">
                    <i class="fa-solid fa-chevron-right fa-sm"></i>
                </div>
                </a>
            </li>
            <li class="side-item" data-item="clientes">
                <a href="../PHP/Clientes.php">
                    <i class="fa fa-user fa-xl"></i>
                    <span class="item-description">
                        Clientes
                    </span>
                    <div class="direita">
                        <i class="fa-solid fa-chevron-right fa-sm"></i>
                    </div>
                </a>
            </li>
            <li class="side-item" data-item="logout">
                <a href="../PHP/logout.php" style="text-decoration:none">
                    <i class="fa-solid fa-arrow-right-from-bracket fas-xxxl"></i>
                    <span class="item-description">
                    Logout
                    </span>
                    <div class="direita">
                        <i class="fa-solid fa-chevron-right fa-sm"></i>
                    </div>
                </a>
            </li>
        </ul>
    </div>
</nav>
