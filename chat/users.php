<?php 
  session_start();
  include_once "php/config.php";
  if(!isset($_SESSION['usuario_logado'])){
    header("location: login.php");
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
    <section class="users">
      <header>
        <div class="content">
          <?php 
            $sql = mysqli_query($conn, "SELECT * FROM users WHERE id = {$_SESSION['user_id']}");
            if(mysqli_num_rows($sql) > 0){
              $row = mysqli_fetch_assoc($sql);
            }
          ?>
          <img src="../<?php echo $row['foto']; ?>" alt="">
          <div class="details">
            <span><?php echo $row['username'] ?></span>
            <p><?php echo $row['statu']; ?></p>
          </div>
        </div>
        <a href="php/logout.php?logout_id=<?php echo $row['id']; ?>" class="logout">Sair</a>
      </header>
      <div class="search">
        <span class="text">Selecione um usuário para conversar</span>
        <input type="text" placeholder="Digite um nome para pesquisar...">
        <button><i class="fas fa-search"></i></button>
      </div>
      <div class="users-list">
  
      </div>
    </section>
  </div>

  <script src="javascript/users.js"></script>

</body>
</html>
