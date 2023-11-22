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
    <section class="form signup">
      <header>Chat</header>
      <form action="#" method="POST" enctype="multipart/form-data" autocomplete="off">
        <div class="error-text"></div>
        <div class="name-details">
          <div class="field input">
            <label>Nome</label>
            <input type="text" name="fname" placeholder="Nome" required>
          </div>
          <div class="field input">
            <label>Sobrenome</label>
            <input type="text" name="lname" placeholder="Sobrenome" required>
          </div>
        </div>
        <div class="field input">
          <label>Email</label>
          <input type="text" name="email" placeholder="Digite seu email" required>
        </div>
        <div class="field input">
          <label>Senha</label>
          <input type="password" name="password" placeholder="Digite sua senha" required>
          <i class="fas fa-eye"></i>
        </div>
        <div class="field image">
          <label>Selecione uma imagem</label>
          <input type="file" name="image" accept="image/x-png,image/gif,image/jpeg,image/jpg" required>
        </div>
        <div class="field button">
          <input type="submit" name="submit" value="Iniciar uma conversa">
        </div>
      </form>
      <div class="link">Já possui uma conta? <a href="login.php">Faça login</a></div>
    </section>
  </div>

  <script src="javascript/pass-show-hide.js"></script>
  <script src="javascript/signup.js"></script>

</body>
</html>
