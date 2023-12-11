<?php

include "./const.php";
include('conexao.php');

if(isset($_POST['email']) || isset($_POST['senha'])) {

    if(strlen($_POST['email']) == 0) {
        echo "Preencha seu e-mail";
    } else if(strlen($_POST['senha']) == 0) {
        echo "Preencha sua senha";
    } else {

        $email = $mysqli->real_escape_string($_POST['email']);
        $senha = $mysqli->real_escape_string($_POST['senha']);

        $sql_code = "SELECT * FROM usuarios WHERE email = '$email' AND senha = '$senha'";
        $sql_query = $mysqli->query($sql_code) or die("Falha na execução do código SQL: " . $mysqli->error);

        $quantidade = $sql_query->num_rows;

        if($quantidade == 1) {
            
            $usuario = $sql_query->fetch_assoc();

            if(!isset($_SESSION)) {
                session_start();
            }

            $_SESSION['id'] = $usuario['id'];
            $_SESSION['nome'] = $usuario['nome'];

            header("Location: painel.php");

        } else {
            echo "Falha ao logar! E-mail ou senha incorretos";
        }

    }

}
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
        <h1>Bem-vindo, acesse sua conta</h1>
        <form action="#" method="POST">
            <div id="login-fields">
                <input type="text" name="email" id="email" class="text-field" placeholder="Email">
                <input type="password" name="senha" id="pass" class="text-field" placeholder="Senha">
            </div>
            <input type="submit" value="Entrar">
        </form>
        <a href="cadastro.php">Cadastrar-se</a>
    </div>
</body>
</html>