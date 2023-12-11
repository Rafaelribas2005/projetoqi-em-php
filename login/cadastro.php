<?php

include "./const.php"

?>






<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?= DESCRIPTION ?>">
    <meta name="keywords" content="<?= KEYWORDS ?>">
    <meta name="author" content="<?= AUTHOR ?>">
    <link rel="stylesheet" href="./assets/css/style.css">
    <title><?= TITLE ?></title>
</head>

<body>
    
    <div class="login">
        <h1>Bem-vindo</h1>
        <form action="#" method="post">
            <div id="login-fields">
                <input type="text" name="user" id="user" class="text-field" placeholder="Usuário">
                <input type="Email" name="Email" id="Email" class="text-field" placeholder="Email">
                <input type="password" name="pass" id="pass" class="text-field" placeholder="Senha">
            </div>
            <input type="submit" value="Entrar">
        </form>
        <a href="./index.php">Já tem uma conta?, acesse aqui</a>
    </div>
</body>
</html>