<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Clientes</title>
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
            font-family: 'Montserrat', sans-serif;
        }

        .container {
            width: 50%;
            margin: auto;
            margin-top: 10rem;
            right: 20px;
        }

        .form-group {
            margin-bottom: 20px;
        }

        input {
            font-family: 'Montserrat', sans-serif;
            width: 100%;
            padding: 10px;
            box-sizing: border-box;
            border: 5px solid #ADD8E6;
            border-radius: 5px;
        }

        button {
            background-color: #ADD8E6;
            color: white;
            padding: 10px;
            border: 5px solid #ADD8E6;
            font-size: 20px;
            border-radius: 5px;
            position: fixed;
            margin-top: 5%;
            right: 48%;
        }

        .label {
            font-family: 'Montserrat', sans-serif;
            font-size: 30px;
            margin-bottom: 20px;
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
            transition: background-color 0.3s ease-in-out;
            font-family: 'Montserrat', sans-serif;
}
    </style>
    </head>
<body>
    <div class="container">
        <h2 style: >Cadastro de Clientes</h2>
        <form action="processar_cadastro.php" method="post">
            <div class="form-group">
                <label for="nome">Nome:</label1>
                <input type="text" id="nome" name="nome" required>
            </div>
            <div class="form-group">
                <label for="email">Email:</label2>
                <input type="email" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="telefone">Telefone:</label>
                <input type="text" id="telefone" name="telefone" required>
            </div>
            <div class="form-group">
                <label for="nome">CPF:</label>
                <input type="text" id="cpf" name="cpf" required>
                
            </div>
            <button type="submit">Cadastrar</button>
        </form>
        <a href="telaprincipal.php">Voltar para Lista de Clientes</a>
</div>
</body>
</html>
   