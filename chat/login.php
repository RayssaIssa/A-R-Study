<?php 
  session_start();
  if(isset($_SESSION['usuario_logado'])){
    header("location: users.php");
  }
?>

<?php include_once "header.php"; ?>
<body>
  <div class="voltar-bolinha">
    <a href="../index.php">
      <i class="fas fa-arrow-left"></i>
    </a>
  </div>
  <div class="wrapper">
    <section class="form login">
      <header>Chat</header>
      <form action="#" method="POST" enctype="multipart/form-data" autocomplete="off">
        <div class="error-text"></div>
        <div class="field input">
          <label>Email</label>
          <input type="text" name="email" placeholder=" Digite seu email" required>
        </div>
        <div class="field input">
          <label>Senha</label>
          <input type="password" name="password" placeholder="Digite sua senha" required>
          <i class="fas fa-eye"></i>
        </div>
        <div class="field button">
          <input type="submit" name="submit" value="Iniciar uma conversa">
        </div>
      </form>
      <div class="link">Ainda não possui uma conta? <a href="index.php">Criar uma conta</a></div>
    </section>
  </div>
  
  <script src="javascript/pass-show-hide.js"></script>
  <script src="javascript/login.js"></script>

</body>
</html>
