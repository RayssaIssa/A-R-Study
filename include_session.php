<?php
    session_start();

    include_once "db_connect.php";
    
    $user = $_SESSION['user_id'];
    $sqlName = "SELECT * FROM users WHERE id = '$user";
    $resultName = mysqli_query($mysqli, $sqlName);
    $dadosName = $resultName;

    //mysqli_close($mysqli);

?>