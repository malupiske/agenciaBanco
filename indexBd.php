<?php
session_start();
$host = "localhost";
$user = "root";
$password = "root";
$database = "saep";

$conn = mysqli_connect($host, $user, $password, $database);


if (!$conn) {
    die("Falha na conexão: " . mysqli_connect_error());
}

$email = $_POST['email'];
$senha = $_POST['senha'];


$sql = "SELECT * FROM gerente WHERE email = '$email' AND senha = '$senha'";
$resultado = $conn->query($sql);




if ($resultado->num_rows > 0) {
  
    session_start();




    $row = $resultado->fetch_assoc();
    $_SESSION['id_gerente'] = $row['id'];





    header('Location:telaprincipal.php');
} else {
  
    header('Location: index.php?erro=1');
}





$conn->close();
?>
