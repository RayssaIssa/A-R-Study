<?php
    include_once "include_session.php";
    include_once "db_connect.php";

    $id_usuario = $_SESSION["user_id"];
    $username = $_POST['username'];
    $biografia = $_POST['biografia'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $password_hash = password_hash($_POST["password"], PASSWORD_DEFAULT);
    
    if(isset($_FILES["imagemm"]) && $_FILES["imagemm"]["error"] == 0) {
      $imagem = "./images/img/" . $_FILES["imagemm"]["name"];
      if(move_uploaded_file($_FILES["imagemm"]["tmp_name"], $imagem)) {
        $sql = "UPDATE users SET username='$username', biografia='$biografia', password_hash='$password_hash', foto='$imagem' WHERE id='$id_usuario';";
        $query = mysqli_query($mysqli, $sql);
        if(mysqli_affected_rows($mysqli)){
          $_SESSION['msg'] = 'Perfil editado com sucesso!';
          header("Location: perfil.php");
          exit;
        } else{
          $_SESSION['msg'] = 'Não foi possivel editar os dados perfil';
          header("Location: perfil.php");
          echo "Erro: " . mysqli_connect_error();
        }
      }}else{
        $sql = "UPDATE users SET username='$username', biografia='$biografia', password_hash='$password_hash' WHERE id='$id_usuario';";
        $query = mysqli_query($mysqli, $sql);
        if(mysqli_affected_rows($mysqli)){
          $_SESSION['msg'] = 'Perfil editado com sucesso!';
          header("Location: perfil.php");
          exit;
        } else{
          $_SESSION['msg'] = 'Não foi possivel editar os dados perfil';
          header("Location: perfil.php");
          echo "Erro: " . mysqli_connect_error();
        }
      }

      mysqli_close($mysqli);
?>