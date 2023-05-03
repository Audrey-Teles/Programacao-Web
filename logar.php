<?php
session_start();


$usuario = "Audrey";
$senha = "202cb962ac59075b964b07152d234b70";

$usuario_post = $_POST['usuario'];
$senha_post = md5($_POST['senha']);

if($usuario_post == $usuario){
    if ($senha_post == $senha){
        $_SESSION['usuario_logado'] = $usuario_post;
        header("Location:usuario/index.php");
    }
    else{
        echo "Usuário ou senha incorretos";
    }
}
else{
    echo "Usuário ou senha incorretos";
}


