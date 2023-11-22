<?php
  session_start();
  if(isset($_SESSION['usuario_logado'])) {
    include_once "db_connect.php";
    $id_usuario = $_SESSION["user_id"];
    $queryyn = "SELECT foto FROM users WHERE id = $id_usuario";
    $resultt = $mysqli->query($queryyn);
    if ($resultt->num_rows > 0) {
      $row = $resultt->fetch_assoc();
      $caminho_foto_perfil = $row['foto'];
    }
  }
?>
<!DOCTYPE html>
<html lang="pt-BR">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="css/style.css" />
  </head>
  <body>
    <!-- navbar -->
    <nav class="navbar">
      <div class="logo_item">
            <i class="bx bx-menu" id="sidebarOpen"></i>
              <img src="images/livro.png" id="logo" alt="A&R Study"><a href="index.php">
              <span class="titulo">A&R Study</span></a>
      </div>
      <div class="navbar_content">
        <i class="bi bi-grid"></i>
        <i class='bx bx-sun' id="darkLight"></i>
        <?php
          if(isset($_SESSION['usuario_logado'])) {
            if ($caminho_foto_perfil) {
                echo '<img src="' . $caminho_foto_perfil . '" alt="Foto de Perfil" class="profile" >';
            } else {
                echo '<img src="images/user-desc.png" alt="Imagem Padrão" class="profile" >';
            }
          } else {
              echo '<a href="entrar.php"><button class="button">Login</button></a>';
          }
        ?>
      </div>
    </nav>
      <div class="sidebar close">
        <ul class="nav-links">
          <li id="primeiro" style="margin-top: 40px;">
            <a href="index.php">
            <i class='bx bx-home'></i>
              <span class="link_name">Home</span>
            </a>
            <ul class="sub-menu blank">
              <li><a class="link_name" href="index.php">Home</a></li>
            </ul>
          </li>
          <li>
            <div class="iocn-link">
              <a>
                <i class='bx bx-library'></i>
                <span class="link_name">Disciplinas</span>
              </a>
              <i class='bx bxs-chevron-down arrow' ></i>
            </div>
            <ul class="sub-menu">
              <li><a class="link_name">Disciplinas</a></li>
              <li><a href="disc/artes.php" class="nav_link sublink">Artes</a></li>
              <li><a href="disc/biologia.php" class="nav_link sublink">Biologia</a></li>
              <li><a href="disc/espanhol.php" class="nav_link sublink">Espanhol</a></li>
              <li><a href="disc/filosofia.php" class="nav_link sublink">Filosofia</a></li>
              <li><a href="disc/fisica.php" class="nav_link sublink">Física</a></li>
              <li><a href="disc/geografia.php" class="nav_link sublink">Geografia</a></li>
              <li><a href="disc/historia.php" class="nav_link sublink">História</a></li>
              <li><a href="disc/ingles.php" class="nav_link sublink">Inglês</a></li>
              <li><a href="disc/matematica.php" class="nav_link sublink">Matemática</a></li>
              <li><a href="disc/portugues.php" class="nav_link sublink">Português</a></li>
              <li><a href="disc/quimica.php" class="nav_link sublink">Química</a></li>
              <li><a href="disc/sociologia.php" class="nav_link sublink">Sociologia</a></li>
            </ul>
          </li>
          <li>
            <?php
              if(isset($_SESSION['usuario_logado'])) {
                  echo "<a href='perfil.php'>
                          <i class='bx bx-user'></i>
                          <span class='link_name'>Meu perfil</span>
                        </a>
                        <ul class='sub-menu blank'>
                          <li><a class='link_name' href='perfil.php'>Meu perfil</a></li>
                        </ul>";
              } else {
                  echo "<a href='entrar.php'>
                          <i class='bx bx-user'></i>
                          <span class='link_name'>Meu perfil</span>
                        </a>
                        <ul class='sub-menu blank'>
                          <li><a class='link_name' href='entrar.php'>Meu perfil</a></li>
                        </ul>";
              }
            ?>
          </li>
          <li>
          <?php
              if(isset($_SESSION['usuario_logado'])) {
                  echo "<a href='chat/users.php'>
                          <i class='bx bx-chat'></i>
                          <span class='link_name'>Mensagens</span>
                        </a>
                        <ul class='sub-menu blank'>
                          <li><a class='link_name' href='chat/users.php'>Mensagens</a></li>
                        </ul>";
              } else {
                  echo "<a href='entrar.php'>
                          <i class='bx bx-chat'></i>
                          <span class='link_name'>Mensagens</span>
                        </a>
                        <ul class='sub-menu blank'>
                          <li><a class='link_name' href='entrar.php'>Mensagens</a></li>
                        </ul>";
              }
            ?>
          </li>
          <li>
          <?php
              if(isset($_SESSION['usuario_logado'])) {
                  echo "<a href='quest/questionario.html'>
                          <i class='bx bx-book-content'></i>
                          <span class='link_name'>Simulado</span>
                        </a>
                        <ul class='sub-menu blank'>
                          <li><a class='link_name' href='quest/questionario.html'>Simulado</a></li>
                        </ul>";
              } else {
                  echo "<a href='entrar.php'>
                          <i class='bx bx-book-content'></i>
                          <span class='link_name'>Simulado</span>
                        </a>
                        <ul class='sub-menu blank'>
                          <li><a class='link_name' href='entrar.php'>Simulado</a></li>
                        </ul>";
              }
            ?>
          </li>
          <?php
            if(isset($_SESSION['usuario_logado'])) {
                echo "<li>
                        <a href='logout.php'>
                        <i class='bx bx-log-out'></i>
                          <span class='link_name'>Sair</span>
                        </a>
                        <ul class='sub-menu blank'>
                          <li><a class='link_name' href='logout.php'>Sair</a></li>
                        </ul>
                      </li>";
            }
          ?>
        </ul>
      </div>
