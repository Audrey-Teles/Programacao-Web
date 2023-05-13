<?php
session_start();

$hostname = "localhost";
$username = "root";
$password = "";

$mysqli = new mysqli($hostname,$username, $password, 'pw');


if($mysqli->errno){
    header("Location:index.html");
}

$sql = "DELETE FROM user WHERE username='".$_SESSION['username']."'";

$result = $mysqli->query($sql);

if (!$result){
    echo "<p>Houve um erro</p>";
}
else{
    session_destroy();
    header("Location:cadastro.html");
}