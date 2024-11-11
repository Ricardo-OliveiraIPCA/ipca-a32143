<?php
session_start();
if (!isset($_SESSION['user_id'])) {
    header("Location: login.html");
    exit();
}

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ricardo_teste_web";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_SESSION['user_id'];
    $current_password = $_POST['current_password'];
    $new_password = password_hash($_POST['new_password'], PASSWORD_BCRYPT);

    $sql = "SELECT password FROM clientes WHERE id='$id'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        if (password_verify($current_password, $row['password'])) {
            $sql = "UPDATE clientes SET password='$new_password' WHERE id='$id'";
            if ($conn->query($sql) === TRUE) {
                header("Location: account.php");
            } else {
                echo "Erro: " . $sql . "<br>" . $conn->error;
            }
        } else {
            echo "Password atual incorreta.";
        }
    }
}

$conn->close();
?>
