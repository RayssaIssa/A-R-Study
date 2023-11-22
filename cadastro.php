<?php
session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css" />
    <link rel="stylesheet" href="css/login.css">
    <title>Cadastro</title>
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
        <i class="bi bi-grid"></i>
        <i class='bx bx-sun' id="darkLight"></i> 
      </div>
    </nav>
    <div class="container">
        <div class="forms" style="height: 530px;">
            <div class="form singup">
            <span class="title">Cadastro</span>

                <form action="singup.php" method="POST" id="singup" autocomplete="off" novalidate>
                    <!-- Exibir mensagens de erro, se houver -->
                    <?php if (!empty($_SESSION['erro'])): ?>
                        <div style="color: red;padding: 5px 0 0 0;">
                            <?php echo $_SESSION['erro']; ?>
                        </div>
                        <?php unset($_SESSION['erro']); ?>
                    <?php endif; ?>
                    <div class="input-field" style="margin-top: 10px;">
                        <input type="text" name="username" id="username" placeholder="Insira seu nome" required
                        value="<?= htmlspecialchars($_POST["username"] ?? ""); ?>">
                        <i class="uil uil-user"></i>
                    </div>
                    <div class="input-field">
                        <input type="text" name="email" id="email" placeholder="Insira seu email" required
                        value="<?= htmlspecialchars($_POST["email"] ?? ""); ?>">
                        <i class="uil uil-envelope icon"></i>
                    </div>
                    <div class="input-field">
                        <input type="password" name="password" id="password" class="password" placeholder="Crie uma senha" required>
                        <i class="uil uil-lock icon"></i>
                        <i class="uil uil-eye-slash showHidePw"></i>
                    </div>
                    <div class="input-field">
                        <input type="password" name="password_confirmation" id="password_confirmation" class="password" placeholder="Confirme sua senha" required>
                        <i class="uil uil-lock icon"></i>
                        <i class="uil uil-eye-slash showHidePw"></i>
                    </div>

                    <div class="checkbox-text">
                        <div class="checkbox-content">
                            <input type="checkbox" id="termCon">
                            <label for="termCon" class="text">Eu li e aceito os <a href="#">termos e serviços</a></label>
                        </div>
                    </div>

                    <div class="input-field button">
                        <input type="submit" style="color: #fff;" value="Cadastrar">
                    </div>
                </form>

                <div class="login-signup">
                    <span class="text">Já tem uma conta?
                        <a href="entrar.php" class="text">Entrar</a>
                    </span>
                </div>
            </div>
        </div>
    </div>    
    <!-- JavaScript -->
    <script src="js/entrar.js"></script>
</body>
</html>