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
    <title>RicardoStore - Pedido Realizado com Sucesso!</title>
    <link rel="stylesheet" href="CSS/order_success.css">
    <script src="JS/order_success.js" defer></script>
</head>
<body>
    <div class="success-message">
        <h1>Pedido realizado com sucesso!</h1>
        <p>Explore mais de todos os produtos que temos a oferecer!</p>
        <a href="product.php" class="btn">Produtos</a>
    </div>
</body>
</html>
