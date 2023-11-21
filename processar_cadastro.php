<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome_cliente = $_POST["nome"];
    $email_cliente = $_POST["email"];
    $telefone_cliente = $_POST["telefone"];
    $cpf_cliente = $_POST["cpf"];

    
    $id_gerente = $_SESSION['id_gerente']; 

    $servername = "localhost";
    $username = "root";
    $password = "root";
    $dbname = "saep";

  
    $conn = new mysqli($servername, $username, $password, $dbname);

  
    if ($conn->connect_error) {
        die("Falha na conexão com o banco de dados: " . $conn->connect_error);
    }

    
    $sql = "INSERT INTO cliente (nome, email, telefone, cpf, id_gerente) VALUES (?, ?, ?, ?, ?)";
    
    
    $stmt = $conn->prepare($sql);

  
    if ($stmt) {
        $stmt->bind_param("ssssi", $nome_cliente, $email_cliente, $telefone_cliente, $cpf_cliente, $id_gerente);

     
        if ($stmt->execute()) {
            header("Location: cadastrarcliente.php");
            exit();
        } else {
          
            echo "Erro ao cadastrar cliente: " . $stmt->error;
        }

       
        $stmt->close();
    } else {
     
        echo "Erro na preparação da consulta: " . $conn->error;
    }

    
    $conn->close();
}
?>
