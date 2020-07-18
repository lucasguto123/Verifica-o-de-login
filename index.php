<?php
session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Primeira Página de Login</title>
    <link rel="stylesheet" href="login.css" />
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <script type="text/javascript" src="http://code.jquery.com/jquery-1.7.2.min.js"></script>
    <script type="text/javascript" src="login.js"></script>
</head>

<body>
    <div class="login-page">
        <?php
        if (isset($_SESSION['nao_autenticado'])) :
        ?>
            <div class="msg">
                <p>ERRO: Usuário ou senha inválidos</p>
            </div>
        <?php
        endif;
        unset($_SESSION['nao_autenticado']);
        ?>
        <div class="form">
            <form class="register-form">
                <input type="text" placeholder="name">
                <input type="password" placeholder="password">
                <input type="text" placeholder="email address">
                <button>create</button>
                <p class="message">Already registered? <a href="#">Sign In</a></p>
            </form>
            <form action="login.php" method="POST" class="login-form">
                <input name="usuario" type="text" placeholder="username">
                <input name="senha" type="password" placeholder="password">
                <button>login</button>
                <p class="message">Not registered? <a href="#">Creat an account</a></p>
            </form>
        </div>
    </div>
</body>

</html>