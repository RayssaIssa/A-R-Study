<?php
  include_once "db_connect.php";
  include_once "header.php";
  if (!isset($_SESSION["usuario_logado"]) || $_SESSION["usuario_logado"] !== true) {
    header("Location: entrar.php");
    exit;
  }
  $id_usuario = $_SESSION["user_id"];
  $query = "SELECT username, biografia, email, password_hash, foto FROM users WHERE id = $id_usuario";
  $resultado = $mysqli->query($query);

  if ($resultado->num_rows > 0) {
      $row = $resultado->fetch_assoc();
      $username = $row['username'];
      $email = $row['email'];
      $biografia = $row['biografia'];
      $caminho_foto_perfil = $row['foto'];
  } else {
      echo "Usuário não encontrado";
  }
  include_once('classes.php');
  include_once('gerencia.php');
  gerente();
  $mysqli->close();
?>
<!DOCTYPE html>
<html lang="pt-BR">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css" />
    <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet" />
    <title>Meu perfil - A&R Study</title>
    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="css/perfil.css">
    <link rel="stylesheet" href="css/notificacao.css">
    <link rel="stylesheet" href="css/notas.css">
  </head>
  <body>
    <!-- Modal de exclusão de perfil -->
    <section class="apagar">
      <span class="overlay"></span>
      <div class="modal-box">
        <i class='bx bx-error'></i>
        <h2>Atenção</h2>
        <h3>Tem certeza que deseja excluir seu perfil?</h3>
        <h3>Esta ação é irreversivel!</h3>
        <div class="buttons">
          <button class="close-btn">Fechar</button>
          <button type="button"><a href="excluir_perfil.php">Apagar Perfil</a></button>
        </div>
      </div>
    </section>
    <section class="home">
      <div class="form_container">
        <i class="uil uil-times form_close"></i>
        <!-- LEdição de Perfil -->
        <div class="form login_form">
          <form action="edit.php" id="uploadForm" method="post" enctype="multipart/form-data"> 
            <span class="title">Editar Perfil</span>
            <div class="input_box">
              <input type="text" name="username" placeholder="Nome" required value="<?php echo "$username"; ?>"/>
              <i class='bx bx-user email' ></i>
            </div>
            <div class="input_box">
              <input type="text" name="biografia" placeholder="Biografia" value="<?php echo "$biografia"; ?>"/>
              <i class='bx bx-book-reader email'></i>
            </div>
            <div class="input_box">
              <input type="email" name="email" placeholder="Email" required value="<?php echo "$email"; ?>"/>
              <i class='bx bx-envelope email'></i>
            </div>
            <div class="input_box">
              <input type="password" name="password" placeholder="Senha" />
              <i class="uil uil-lock password"></i>
              <i class="uil uil-eye-slash pw_hide"></i>
            </div><br>
            <div class="elementor-field-type-upload elementor-field-group elementor-column elementor-field-group-field_53c80dc elementor-col-50 elementor-field-required">
              <label for="form-field-field_53c80dc" class="elementor-field-label">
                Escolher foto de perfil
              </label>
              <input type="file" name="imagemm" accept="image/x-png,image/jpeg,image/jpg" id="form-field-field_53c80dc" class="elementor-field elementor-size-lg  elementor-upload-field">
              <p>Arquivos nos formatos: .png, .jpg, .jpeg<br>Tamanho máximo do arquivo: <b>10M</b></p>
            </div>
            <button class="button" id="enviar">Enviar alterações</button>
          </form>
        </div>
      </div>
    </section>
    <section class="home-section">
      <!-- Exibir mensagens de erro, se houver -->
      <?php if (!empty($_SESSION['msg'])): ?>
        <div>
          <ul class="notifications">
            <?php echo $_SESSION['msg']; ?>
          </ul>
        </div>
        <?php unset($_SESSION['msg']); ?>
      <?php endif; ?>
      <button class="modal-btn"><i class='bx bx-edit'></i></button>
      <!-- Card de perfil -->
      <div class="cards">
        <div class="card">
          <div class="img">
          <?php if ($caminho_foto_perfil) {
              echo '<img src="' . $caminho_foto_perfil . '" alt="Foto de Perfil">';
          } else {
              echo '<img src="images/user-desc.png" alt="Imagem Padrão">';
          }?>
          </div>
          <div class="infos">
            <div class="name">
              <h2><?php echo "$username"; ?></h2>
              <h4><?php echo "$email"; ?></h4>
            </div>
            <p id="biografia" class="text">
              <?php echo "$biografia"; ?>
            </p>
            <div class="links">
              <button id="form-open" class="follow button">Editar perfil</button>
              <button class="view show-modal">Apagar perfil</button>
            </div>
          </div>
        </div>
      </div> 
      <div class="modal" id="myModal">
        <main>
          <section id="criar-notas">
              <form method="POST" action="" class="form-notas" id="form-notas" autocomplete="off">
                <span class="fechar">&times;</span>
                  <div><input type="text" name="titulo_notas" autocomplete="off" placeholder="Título" id="titulo_notas" class="" /></div>
                  <div><textarea cols="40" rows="10" placeholder="Insira suas anotações aqui" autocomplete="off" name="descricao_notas"></textarea></div>
                  <div class="form-group">
                      <div class="row">
                          <div class="col-auto">
                              <label for="urgente">Importante:</label>
                          </div>
                          <div class="col-auto">
                              <input type="checkbox" class="form-check-input" name="urgente" value="1">
                          </div>
                      </div>
                  </div>
                  <button type="reset" class="view">Limpar texto</button>
                  <button class="follow" name="criar_notas">Salvar</button>
              </form>
          </section>
        </main>
      </div>
      <section>
        <div class="cardy-group botaon">
          <button class="botaon" value="Excluir todas as notas">
            
          </button>
        </div>
      </section>
      <section class="note">
        <h1>Minhas anotações</h1>
        <!-- Exibir as anotações existentes -->
        <section id="notas-importantes">
              <h6 class="titlee">Importante</h6>
              <div class="cardy-group">
                  <?php
                  $notasImportantes = new Notas();
                  $notasImportantes->busca($_SESSION['email'], 1);
                  ?>
              </div>
          </section>
          <section id="notas-restantes">
              <h6 class="titlee">Outras</h6>
              <div class="cardy-group">
                  <?php
                  $notas = new Notas();
                  $notas->busca($_SESSION['email'], 0);
                  ?>
              </div>
          </section>
        </section>
    </section>
    <!-- JavaScript -->
    <script src="js/scrip.js"></script>
    <script src="js/notas.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="js/update_image.js"></script>
    <script src="js/notificacao.js"></script>
    <script src="js/perfil.js"></script>
  </body>
</html>
