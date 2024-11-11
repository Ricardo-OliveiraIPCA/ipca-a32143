<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ricardo_teste_web";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "SELECT id, nome, email, password FROM clientes WHERE email='$email'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        if (password_verify($password, $row['password'])) {
            session_start();
            $_SESSION['user_id'] = $row['id'];
            $_SESSION['user_name'] = $row['nome'];
            $_SESSION['user_email'] = $row['email'];
            header("Location: account.php");
        } else {
            echo "Password incorreta.";
        }
    } else {
        echo "Email não encontrado.";
    }
}

$conn->close();
?>
