<?php
session_start();

$host = "localhost";
$user = "root";
$password = "root";
$database = "saep";

$conn = mysqli_connect($host, $user, $password, $database);

if (!isset($_SESSION['id_gerente'])) {
    header('Location: index.php');
    exit();
}

include 'conexao.php';

$sql_clientes = "SELECT id, nome FROM cliente";
$resultado_clientes = $conn->query($sql_clientes);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css" media="screen" />
</head>
<body>
<div class="top-bar">
    <h2>Bem-vindo, <?php echo $_SESSION['id_gerente']; ?>!</h2>
    <a class="logout" href="index.php">Logout</a>
</div>
<div class="container">
    <button class="buttan1" onclick="window.location.href='cadastrarcliente.php'">Cadastrar Cliente</button>

    <div class="list-container">
        <h3>Lista de Clientes</h3>
        <table class="tabelaClientes" id="tabelaClientes">
            <tr>
                <th>Id</th>
                <th>Nome</th>
                <th>Ações</th>
            </tr>
            <?php
            if ($resultado_clientes->num_rows > 0) {
                while ($row = $resultado_clientes->fetch_assoc()) {
                    echo "<tr>";
                    echo "<td>" . $row["id"] . "</td>";
                    echo "<td>" . $row["nome"] . "</td>";
                    echo "<td class='actions'>";
                    echo "<a href='visualizar_cliente.php?cliente_id=" . $row["id"] . "'>Visualizar</a>";
                    echo "<a href='excluir_cliente.php?cliente_id=" . $row["id"] . "'>Excluir</a>";
                    echo "<a href='adicionar_cartao.php?cliente_id=" . $row["id"] . "'>Adicionar Cartão</a>";
                    echo "</td>";
                    echo "</tr>";
                }
            } else {
                echo "<tr><td colspan='3'>Nenhum cliente encontrado</td></tr>";
            }
            ?>
        </table>
    </div>
</div>
    

    <style>
        body {
            background-image: linear-gradient(to right, #ADD8E6, #AFEEEE);
            background-repeat: no-repeat;
            background-size: cover;
            overflow: hidden;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            font-size: 'Montserrat', sans-serif;
        }

        .container {
            text-align: center;
        }

        .top-bar{
            background-color: #ADD8E6;
            color: white;
            padding: 10px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            font-size: 20px;
            font-family: 'Montserrat', sans-serif;
            position: absolute;
            top: 0%;
            border-radius: 5px;
            width: 100%;
            padding-left: 40px;
        }

        .logout {
            background-color: #FFFAFA;
            color: #ADD8E6;
            padding: 10px;
            display: flex;
            justify-content: flex-end;
            align-items: center;
            font-size: 20px;
            font-family: 'Montserrat', sans-serif;
            border: 5px solid #ADD8E6; 
            border-radius: 15px;
            text-decoration: none;
            margin: 30px;
        }


         .list-container {
            background-color: #ADD8E6;
            color: white;
            padding: 10px;
            font-size: 20px;
            font-family: 'Montserrat', sans-serif;
            border: 5px solid #ADD8E6; 
            border-radius: 5px; 
            text-decoration: none;
            margin: 30px;
            text-align: center; 
        }

        .buttan1 {
            background-color: #ADD8E6;
            color: white;
            padding: 10px;
            border: 5px solid #ADD8E6; 
            font-size: 20px;
            border-radius: 5px; 
            position: fixed;
            top: 40px;
            right: 130px;
        }


        .buttan2 {
            background-color: #ADD8E6;
            color: white;
            padding: 10px;
            border: 5px solid #ADD8E6; 
            font-size: 20px;
            border-radius: 5px; 
            position: fixed;
            top: 80%;
            right: 70%;
            transform: translate(50%, -50%);
        }

        .buttan3 {
            background-color: #ADD8E6;
            color: white;
            padding: 10px;
            border: 5px solid #ADD8E6; 
            font-size: 20px;
            border-radius: 5px; 
            position: fixed;
            top: 80%; 
            right: 30%;
            transform: translate(30%, -50%);
        }




        .list-container {
            text-align: center;
        }

        .list-container {
        margin-top: 20px;
}

        .client-item {
            margin: 10px;
            display: flex;
            justify-content: space-between;
            align-items: center; 
        }

        .client-details {
            display: flex;
            align-items: center;
        }

        .client-details button {
            margin-left: 10px;
        }

        .tabelaClientes {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        .tabelaClientes th, .tabelaClientes td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }

        .tabelaClientes th {
            background-color: #ADD8E6;
            color: white;
        }

        .tabelaClientes tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        .tabelaClientes tr:hover {
            background-color: #ddd;
        }
    </style>