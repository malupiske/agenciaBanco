<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport">
    <title>Banco MJF</title>
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
        }

        .login-container {
            width: 400px;
            background-color: rgba(255, 255, 255, 0.3);
            border-radius: 5%;
            padding: 30px;
            text-align: center;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
        }

        .loginh {
            font-size: 30px;
            top: 0%;
            left: 50%;
            transform: translate(-50%, -50%);
            margin-left: 5px;
            position : absolute;

        }

        .email,
        .senha {
        font-size: 30px;
        margin-bottom: 20px;
}

        #email,
        #senha {
        width: 100%;
        padding: 15px;
        box-sizing: border-box;
        border-radius: 10px;
    }

    .entrar {
        font-size: 24px; 
        background-color: #ADD8E6;  
        color: white; 
        padding: 20px 40px; 
        cursor: pointer;
        margin-top: 15px; 
        border-radius: 20px;  
    }
    </style>

</head>

<body>
    <div class="login-container">
        <h class="loginh">Login Gerência</h>
        <?php
        if (isset($_GET['erro']) && $_GET['erro'] == '1') {
            echo '<p class="aviso">E-mail ou senha incorretos. Tente novamente.</p>';
        }
        ?>
        <form action="indexBd.php" method="post">
            <label for="email">E-mail:</label>
           
            <input type="email" id="email" name="email" required>
           
            <label for="senha">Senha:</label>
           
            <input type="password" id="senha" name="senha" required>
           
            <button type="submit">Entrar</button>
        </form>
    </div>
</body>
</html>
