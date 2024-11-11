<?php
session_start();
if (!isset($_SESSION['user_id'])) {
    header("Location: login.html");
    exit();
}
?>

<!DOCTYPE html>
<html lang="pt">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="Imagens/Icon.png" type="image/x-icon">
    <title>RicardoStore - Minha Conta</title>
    <link rel="stylesheet" href="CSS/styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <script src="JS/scripts.js" defer></script>
</head>
<body>

<header>
        <div class="logo"><a href="product.php" class="logo-link">RicardoStore</a></div>
        <nav>
            <ul>
                <li><a href="#"></a></li>
                <li><a href="#"></a></li>
            </ul>
        </nav>
        
        <div class="search-bar">
            <i class="fas fa-search"></i>
            <input type="text" id="search" placeholder="Pesquisar...">
        </div>
        <div class="user-menu">
            <a href="account.php"><i class="far fa-user"></i> Conta</a>
        </div> 
        <div class="cart">
            <a href="cart.php" id="cart-icon">
                <i class="fas fa-shopping-cart"></i>
                <span id="cart-count">0</span>
            </a>
        </div>

    </header>

    <div class="account-container">
        <h2>Bem-vindo, <?php echo htmlspecialchars($_SESSION['user_name']); ?>!</h2>
        <form class="account-form" action="update_account.php" method="POST">
            <input type="text" name="nome" placeholder="Nome" value="<?php echo htmlspecialchars($_SESSION['user_name']); ?>" required>
            <input type="text" name="apelido" placeholder="Apelido" required>
            <input type="text" name="morada" placeholder="Morada" required>
            <input type="text" name="codigo_postal" placeholder="Código Postal" required>
            <input type="tel" name="telefone" placeholder="Telefone" required>
            <input type="email" name="email" placeholder="Email" value="<?php echo htmlspecialchars($_SESSION['user_email']); ?>" required>
            <button type="submit">Atualizar Dados</button>
        </form>
        <form class="account-form" action="update_password.php" method="POST">
            <h3>Mudar Password</h3>
            <input type="password" name="current_password" placeholder="Password Atual" required>
            <input type="password" name="new_password" placeholder="Nova Password" required>
            <button type="submit">Mudar Password</button>
        </form>
        <a href="logout.php" class="logout-button">Sair</a>
    </div>

</body>
</html>
