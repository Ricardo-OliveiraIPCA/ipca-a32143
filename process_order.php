<?php
session_start();

if (!isset($_SESSION['user_id'])) {
    header("Location: login.html");
    exit();
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nome = $_POST['nome'];
    $morada = $_POST['morada'];
    $codigo_postal = $_POST['codigo_postal'];
    $telefone = $_POST['telefone'];
    $email = $_POST['email'];
    $metodo_pagamento = $_POST['metodo_pagamento'];
    $total_pagar = $_POST['total_pagar'];

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "ricardo_teste_web";

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Falha na conexão: " . $conn->connect_error);
    }

    $sql = "INSERT INTO pedidos (user_id, nome, morada, codigo_postal, telefone, email, metodo_pagamento, total_pagar)
            VALUES (?, ?, ?, ?, ?, ?, ?, ?)";

    $stmt = $conn->prepare($sql);
    if (!$stmt) {
        die("Erro na preparação da declaração: " . $conn->error);
    }

    $stmt->bind_param("issssssd", $_SESSION['user_id'], $nome, $morada, $codigo_postal, $telefone, $email, $metodo_pagamento, $total_pagar);

    if ($stmt->execute()) {
        header("Location: order_success.php");
        exit();
    } else {
        echo "Erro ao realizar o pedido: " . $stmt->error;
    }

    $stmt->close();
    $conn->close();
}
?>
