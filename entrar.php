<?php 
  session_start();
  $is_invalid = false;
  $senhaIncorreta = false;
  if($_SERVER["REQUEST_METHOD"] === "POST"){
    $sql = sprintf("SELECT * FROM users 
                    WHERE email = '%s';",
                    $mysqli->real_escape_string($_POST["email"]));
    $result = $mysqli->query($sql);
    $user = $result->fetch_assoc();
    if($user){
        if(password_verify($_POST["password"], $user["password_hash"])){
            session_start();
            session_regenerate_id();
            $_SESSION['usuario_logado'] = true;
            $_SESSION['email'] = $user["email"];
            $_SESSION["user_id"] = $user["id"];
            header("Location: index.php");
            exit;
        }else{
            $senhaIncorreta = true;
        }
    }else{
        $is_invalid = true;
    }
  }
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css" />
    <link rel="stylesheet" href="css/login.css">
    <title>Entrar</title>
</head>
<body> 
    <!-- navbar -->
    <nav class="navbar">
      <a href="index.php">
        <div class="logo_item">
            <img src="images/livro.png" id="logo" alt="A&R Study"><span class="titulo">A&R Study</span>
        </div>
      </a>
      <div class="navbar_content">
        <i class='bx bx-sun' id="darkLight"></i>
      </div>
    </nav>
    <div class="container">
        <div class="forms">
            <div class="form login">
                <span class="title">Login</span>

                <form action="#" method="POST" autocomplete="off">
                <?php if ($is_invalid): ?>
                    <div class="error-text" 
                    style="color: rgb(214, 29, 29); 
                    padding: 5px 0 0 0;">Login incorreto</div>
                <?php endif; ?>
                <?php if ($senhaIncorreta): ?>
                    <div class="error-text" 
                    style="color: rgb(214, 29, 29); 
                    padding: 5px 0 0 0;">Senha incorreta</div>
                <?php endif; ?>
                    <div class="input-field">
                        <input type="text" name="email" id="email" placeholder="Insira seu email" required
                        value="<?= htmlspecialchars($_POST["email"] ?? ""); ?>">
                        <i class="uil uil-envelope icon"></i>
                    </div>
                    <div class="input-field">
                        <input type="password" name="password" id="password" class="password" placeholder="Insira sua senha" required>
                        <i class="uil uil-lock icon"></i>
                        <i class="uil uil-eye-slash showHidePw"></i>
                    </div>

                    <div class="checkbox-text">
                        <div class="checkbox-content">
                            <input type="checkbox" id="logCheck">
                            <label for="logCheck" class="text">Lembre me</label>
                        </div>
                        
                        <a href="#" class="text">Esqueceu a senha?</a>
                    </div>

                    <div class="input-field button">
                        <input type="submit" style="color: #fff;" value="Entrar">
                    </div>
                </form>

                <div class="login-signup">
                    <span class="text">Não tem uma conta?
                        <a href="cadastro" class="text">Cadastre-se</a>
                    </span>
                </div>
            </div>
        </div>
    </div>    
    <!-- JavaScript -->
    <script src="js/entrar.js"></script>
</body>
</html>