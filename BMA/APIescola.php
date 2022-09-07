<?php
error_reporting(E_ALL ^ E_WARNING);
session_start();
$pedido = $_GET["pedido"] ?? '';

function verificaLogin($username, $password)
{

    require("connection.php");
    $login = "SELECT pass, username,nome, email, count(*) as contagem FROM users WHERE username = :nome";
    $sth  = $dbh->prepare($login);
    $sth->bindParam(":nome", $username);
    $sth->execute();
    $query = $sth->fetchObject();
    $userPassword = $query->pass;
    $_SESSION['nomeProfessor'] = $query->nome;
    //$_SESSION['userEmail'] = $query->email;
    //$_SESSION['userImagem'] = $query->imagem;
    $res = $query->contagem;
    if ($res == 0) {
        header("Location:index.php");
        $_SESSION['erro'] = '<span class="text-danger fs-3"> Utilizador não existe!</span>';
    }
    if ($res == 1) {
        if ($password == "") {
            header("Location:index.php");
            $_SESSION['erro'] = '<span class="text-danger fs-3"> Introduza uma password!</span>';
        } elseif ($password != $userPassword) {
            header("Location:index.php");
            $_SESSION['erro'] = '<span class="text-danger fs-3">Password Errada!</span>';
        } elseif ($password == $userPassword) {
            header("Location:entrada.php");
            $_SESSION['boasVindas'] = '<span class="text-dark fs-1">Bem vindo </span>';
        }
    }
}
if ($pedido == 'verificaFuncionario') {
    $user = $_POST['username'] ?? '';
    $password = $_POST['password'] ?? '';
    verificaLogin($user, $password);
}






/*
session_start();
$nomeProfessor = $_SESSION['userLogado'];

// primeira coisa a meter nas páginas - verificação de sessão

session_start();
if (!isset($_SESSION['boasVindas'])) {
    header('Location:index.php');
    exit();
} */