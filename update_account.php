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
    $nome = $_POST['nome'];
    $apelido = $_POST['apelido'];
    $morada = $_POST['morada'];
    $codigo_postal = $_POST['codigo_postal'];
    $telefone = $_POST['telefone'];
    $email = $_POST['email'];

    $sql = "UPDATE clientes SET nome='$nome', apelido='$apelido', morada='$morada', codigo_postal='$codigo_postal', telefone='$telefone', email='$email' WHERE id='$id'";

    if ($conn->query($sql) === TRUE) {
        $_SESSION['user_name'] = $nome;
        $_SESSION['user_email'] = $email;
        header("Location: account.php");
    } else {
        echo "Erro: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>
