<?php
$host = 'localhost';
$usuario = 'root';
$senha_bd = 'root';
$banco = 'saep';


$conn = new mysqli($host, $usuario, $senha_bd, $banco);



if ($conn->connect_error) {
    die("Falha na conexão: " . $conn->connect_error);
}
?>