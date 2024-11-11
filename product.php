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
    <title>RicardoStore - Produtos</title>
    <link rel="stylesheet" href="CSS/styles.css">
    <link rel="stylesheet" href="CSS/main.css"/>
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
    <main>
        <div class="slider">
            <div class="slides">
                <img src="Imagens/Slide 1.png" alt="Slide 1">
                <img src="Imagens/Slide 2.png" alt="Slide 2">
                <img src="Imagens/Slide 3.png" alt="Slide 3">
            </div>
            <button class="prev" onclick="plusSlides(-1)">&#10094;</button>
            <button class="next" onclick="plusSlides(1)">&#10095;</button>
        </div>
        <div id="product-list"></div>
    </main>
    <footer>
        <div class="footer-container">
            <div class="footer-column">
                <h3>Sobre</h3>
                <ul>
                    <li><a href="#">Quem Somos</a></li>
                </ul>
            </div>
            <div class="footer-column">
                <h3>Informações</h3>
                <ul>
                    <li><a href="#">Pagamentos</a></li>
                    <li><a href="#">Serviço Pós-Venda</a></li>
                    <li><a href="#">Termos e Condições</a></li>
                    <li><a href="#">Política de Cookies</a></li>
                    <li><a href="#">Política de Privacidade</a></li>
                    <li><a href="#">Livro de Reclamações</a></li>
                </ul>
            </div>
            <div class="footer-column">
                <h3>Contacta-nos</h3>
                <ul>
                    <li><a href="ricardostore@gmail.com">ricardostore@gmail.com</a></li>
                </ul>
            </div>
            <div class="footer-column">
                <h3>Redes Sociais</h3>
                <ul>
                    <li><a href="#">Facebook</a></li>
                    <li><a href="#">Instagram</a></li>
                    <li><a href="#">YouTube</a></li>
                </ul>
            </div>
        </div>
        <p>&copy; 2024 RicardoStore. Todos os direitos reservados.</p>
    </footer>
</body>
</html>
