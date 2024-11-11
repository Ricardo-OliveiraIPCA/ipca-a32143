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
    <title>RicardoStore - Pesquisa</title>
    <link rel="stylesheet" href="CSS/styles.css">
    <link rel="stylesheet" href="CSS/main.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <script src="JS/search.js" defer></script>
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
            <div class="account-menu">
                <i class="far fa-user"></i> Conta
            </div>
            <div class="account-dropdown" id="accountDropdown">
                <div class="dropdown-arrow"></div>
                <button class="login-button" onclick="window.location.href='login.html'">INICIAR SESSÃO</button>
                <button class="register-button" onclick="window.location.href='register.html'">CRIAR CONTA</button>
            </div>
        </div>
        
        <script>
        document.querySelector('.account-menu').addEventListener('click', function() {
            document.getElementById('accountDropdown').classList.toggle('show');
        });
        
        window.onclick = function(event) {
            if (!event.target.matches('.account-menu')) {
                var dropdowns = document.getElementsByClassName('account-dropdown');
                for (var i = 0; i < dropdowns.length; i++) {
                    var openDropdown = dropdowns[i];
                    if (openDropdown.classList.contains('show')) {
                        openDropdown.classList.remove('show');
                    }
                }
            }
        };
        </script>        

        <div class="cart">
            <a href="cart.html" id="cart-icon">
                <i class="fas fa-shopping-cart"></i>
                <span id="cart-count">0</span>
            </a>
        </div>

    </header>
    <main>
        <div id="search-results"></div>
        <div id="no-results" style="display:none;">
            <h2>Produto não encontrado</h2>
            <p>Desculpe, mas não encontramos nenhum produto com esse nome.</p>
        </div>
    </main>

    <footer>
        <div class="footer-container">
            <div class="footer-column">
                <h3>Sobre</h3>
                <ul>
                    <li><a href="about_us.html">Quem Somos</a></li>
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

    <script src="scripts.js" defer></script>
    <script src="search.js" defer></script>

</body>
</html>
