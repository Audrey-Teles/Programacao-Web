<?php
session_start();

$email_post = $_POST['email'];
$senha_post = md5($_POST['senha']);

$hostname = "localhost";
$username = "root";
$password = "";

$mysqli = new mysqli($hostname,$username, $password, 'pw');


if($mysqli->errno){
    header("Location:cadastro.html");
}

$sql = "SELECT * FROM user WHERE email LIKE '".$email_post."' AND password LIKE '".$senha_post."'";

$result = $mysqli->query($sql);

if(!$result){
    echo "Houve um erro!";
}
else{
    if($result->num_rows < 1){
        echo "<p>Email ou senha incorretos!</p>";
    }
    else{
        $usuario_logado = mysqli_fetch_assoc($result);

        $_SESSION['username'] = $usuario_logado['username'];
        header("Location:usuario/index.php");
    }
}


