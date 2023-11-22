<?php
session_start();
if (strlen($_POST["password"]) < 4) {
    $_SESSION['erro'] = 'A senha deve possuir pelo menos 4 caracteres!';
    header('Location: cadastro.php');
    exit();
}
if (!preg_match("/[a-z]/i", $_POST["password"])) {
    $_SESSION['erro'] = 'A senha deve conter pelo menos uma letra';
    header('Location: cadastro.php');
    exit();
}
if (!preg_match("/[0-9]/", $_POST["password"])) {
    $_SESSION['erro'] = 'A senha deve conter pelo menos um número';
    header('Location: cadastro.php');
    exit();
}
if ($_POST["password"] !== $_POST["password_confirmation"]) {
    $_SESSION['erro'] = 'As senhas devem corresponder';
    header('Location: cadastro.php');
    exit();
}

$password_hash = password_hash($_POST["password"], PASSWORD_DEFAULT);

include_once "db_connect.php";

$sql = "INSERT INTO users (username, email, password_hash) VALUES (?, ?, ?)";

$stmt = mysqli_stmt_init($mysqli);

if (!mysqli_stmt_prepare($stmt, $sql)){
    die ("SQL erro: " . $mysqli->error);
}
$stmt->bind_param("sss", $_POST["username"], $_POST["email"], $password_hash);

if ($stmt->execute()) { 
    $_SESSION['usuario_logado'] = true;
    $_SESSION['email'] = $_POST["email"];
    $_SESSION["user_id"] = $stmt->insert_id;
    $image = "images/user-desc.png";
    $sql2 = mysqli_query($mysqli, "UPDATE users SET foto = '{$image}' WHERE id = {$_SESSION["user_id"]}");
    header("Location: index.php");
    exit;
} else {
    if ($mysqli->errno === 1062) {
        $_SESSION['erro'] = 'Este email já existe';
        header('Location: cadastro.php');
        exit();
    } else {
        die($mysqli->error . " " . $mysqli->errno); 
    }
}
?>