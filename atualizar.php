<?php
session_start();

$user = $_POST['username'];
$email = $_POST['email'];

$hostname = "localhost";
$username = "root";
$password = "";

$mysqli = new mysqli($hostname, $username, $password, 'pw');

$sql = "UPDATE user SET username='" . $user . "', email='" . $email . "' WHERE username='" . $_SESSION['username'] . "'";
$result = $mysqli->query($sql);

if (!$result){
    echo " <p>Houve um erro </p > ";
}
else{
    $_SESSION['username'] = $user;
    header("Location:usuario/index.php");
}
