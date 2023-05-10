<?php

$register_user = $_POST['usuario'];
$register_email = $_POST['email'];
$register_password = md5($_POST['senha']);

$hostname = "localhost";
$username = "root";
$password = "";

$mysqli = new mysqli($hostname,$username, $password, 'pw');


if($mysqli->errno){
    header("Location:cadastro.html");
}

$sql = "INSERT INTO user(username, email, password, admin) VALUES ('".$register_user."', '".$register_email."', '".$register_password."', 0)";

$result = $mysqli->query($sql);

if (!$result){
    echo "<p>Houve um erro</p>";
}
else{
    header("Location:login.html");
}
