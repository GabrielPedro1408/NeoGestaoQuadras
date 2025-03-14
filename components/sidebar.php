<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../CSS/sidebar.css">
    <script type="module" src="../components/sidebar.js"></script>
    <title>Side-Bar</title>
</head>
<body>
<nav id="sidebar">

<div id="sidebar-content">
    <div id="user">
        <img src="images/henderson_.jpeg" alt="Avatar" id="user-avatar">

        <p id="user-info">
            <span class="item-description">
                Henderson Baitolão
            </span>
            <span class="item-description">
                Professor de Web
            </span>
        </p>
    </div>

    <ul id="side-items">
        <li class="side-item active">
            <a href="dashboard.php">
                <i class="fa-solid fa-chart-line"></i>
                <span class="item-description">
                    Dashboard
                </span>
            </a>
        </li>
        <li class="side-item">
            <a href="Cliente.php">
                <i class="fa-solid fa-person-walking-luggage"></i>
                <span class="item-description">
                    Clientes
                </span>
            </a>
        </li>
        <li class="side-item">
            <a href="Produto.php">
                <i class="fa-solid fa-bag-shopping"></i>
                <span class="item-description">
                    Produto
                </span>
            </a>
        </li>
        <li class="side-item">
            <a href="user.php">
                <i class="fa-solid fa-user"></i>
                <span class="item-description">
                    User
                </span>
            </a>
        </li>
    </ul>

    <button id="open-btn">
        <i id="open-btn-icon" class="fa-solid fa-chevron-right"></i>
    </button>
</div>

<div id="logout">
    <a href="logout.php" style="text-decoration:none">
        <button id="logout-btn">
            <i class="fa-solid fa-arrow-right-from-bracket"></i>
            <span class="item-description">
                Logout
            </span>
        </button>
    </a>
</div>

</nav>
</body>
</html>