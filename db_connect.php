<?php
$host = "localhost";
$dbname = "study";
$usernamee = "root";
$password = "";

$mysqli = mysqli_connect($host, $usernamee, $password, $dbname);
if (!$mysqli)
    die("Erro de conexão: " . mysqli_connect_error());
else
    return $mysqli;
?>