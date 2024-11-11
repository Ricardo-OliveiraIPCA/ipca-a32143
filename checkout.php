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
    <title>RicardoStore - Finalizar Compra</title>
    <link rel="stylesheet" href="CSS/checkout.css">
    <link rel="stylesheet" href="CSS/styles.css">
    <script src="JS/checkout.js" defer></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
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
    <main>
        <h1 style="font-size: 36px;">Finalizar Compra</h1>
        <form id="checkout-form" method="post" action="process_order.php">
            <h2>Dados Pessoais</h2>
            <label for="nome">Nome:</label>
            <input type="text" id="nome" name="nome" required>
            <label for="morada">Morada:</label>
            <input type="text" id="morada" name="morada" required>
            <label for="codigo_postal">Código Postal:</label>
            <input type="text" id="codigo_postal" name="codigo_postal" required>
            <label for="telefone">Telefone:</label>
            <input type="text" id="telefone" name="telefone" required>
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>
            <h2>Método de Pagamento</h2>
            <label for="metodo_pagamento">Escolha o método de pagamento:</label>
            <select id="metodo_pagamento" name="metodo_pagamento" required>
                <option value="cartao_credito">Cartão de Crédito</option>
                <option value="paypal">PayPal</option>
                <option value="transferencia_bancaria">Transferência Bancária</option>
            </select>
            <p>Total a Pagar: <span id="total-pagar">€0,00</span></p>
            <input type="hidden" id="total_pagar_hidden" name="total_pagar" value="">
            <button type="submit">Finalizar Compra</button>
        </form>
    </main>
</body>
</html>
