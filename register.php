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
    $nome = $_POST['nome'];
    $apelido = $_POST['apelido'];
    $morada = $_POST['morada'];
    $codigo_postal = $_POST['codigo_postal'];
    $telefone = $_POST['telefone'];
    $email = $_POST['email'];
    $password = password_hash($_POST['password'], PASSWORD_BCRYPT);

    $sql = "INSERT INTO clientes (nome, apelido, morada, codigo_postal, telefone, email, password) VALUES ('$nome', '$apelido', '$morada', '$codigo_postal', '$telefone', '$email', '$password')";

    if ($conn->query($sql) === TRUE) {
        session_start();
        $_SESSION['user_id'] = $conn->insert_id;
        $_SESSION['user_name'] = $nome;
        $_SESSION['user_email'] = $email;
        header("Location: account.php");
    } else {
        echo "Erro: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>
