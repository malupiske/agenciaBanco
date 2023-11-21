<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Visualizar Clientes</title>
    <style>
        body {
            font-family: 'Montserrat', sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }

        header {
            background-color: #ADD8E6;
            padding: 20px;
            text-align: center;
            color: white;
            font-size: 24px;
        }

        .container {
            width: 80%;
            margin: auto;
            padding: 20px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        th, td {
            border: 1px solid #ddd;
            padding: 12px;
            text-align: left;
        }

        th {
            background-color: #ADD8E6;
            color: white;
        }

        a {
            display: inline-block;
            margin-top: 1rem;
            padding: 10px;
            background-color: #ADD8E6;
            color: white;
            text-decoration: none;
            border: 5px solid #ADD8E6;
            border-radius: 5px;
        }

        a:hover {
            background-color: #87CEEB;
        }
    </style>
</head>
<body>
    <header>
        Visualizar Clientes
    </header>
    <div class="container">
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>Email</th>
                    <th>Telefone</th>
                    <th>CPF</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    // Exemplo de dados fictícios. Você substituirá isso com dados reais do seu banco de dados.
                    $clientes = array(
                        array('1', 'Cliente 1', 'cliente1@example.com', '(123) 456-7890', '123.456.789-01'),
                        array('2', 'Cliente 2', 'cliente2@example.com', '(456) 789-0123', '234.567.890-12')
                        // Adicione mais dados conforme necessário
                    );

                    foreach ($clientes as $cliente) {
                        echo "<tr>";
                        foreach ($cliente as $valor) {
                            echo "<td>$valor</td>";
                        }
                        echo "</tr>";
                    }
                ?>
            </tbody>
        </table>
        <a href="telaprincipal.php">Voltar para Cadastro</a>
    </div>
</body>
</html>
