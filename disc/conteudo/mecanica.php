<?php
  include_once "headerrr.php";
  include_once "../../classes.php";
  include_once "../../gerencia.php";
  gerente();
?>
  <head>
    <title>A&R Study - Mecânica</title>
  </head>
  <body>
    <section class="home-section">
    <div class="modal" id="myModal">
      <main>
        <section id="criar-notas">
            <form method="POST" action="" class="form-notas" id="form-notas" autocomplete="off">
              <span class="fechar">&times;</span>
                <div><input type="text" name="titulo_notas" placeholder="Título" id="titulo_notas" class="" /></div>
                <div><textarea cols="40" rows="10" placeholder="Insira suas anotações aqui" name="descricao_notas"></textarea></div>
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
    <button class="modal-btn"><i class='bx bx-edit'></i></button>
      <div class="conteudos">
        <h1>Mecânica</h1>
        <span class="anterior">Disciplinas ><a href="../fisica.php"> Física</a> > Mecânica</span>
        <div class="conteudoo">
            <h4 class="tema">Trabalho Mecânico</h4>
            <p class="texto">
            Realizar trabalho, em Física, implica a transferência de energia de um sistema para
            outro e, para que isso ocorra, são necessários uma <b>força</b> e um <b>deslocamento</b> adequados.
            Seja uma força constante F  que desloca um objeto entre os pontos <b>A</b> (inicial) e <b>B</b> (final), 
            onde o deslocamento A &rarr; B é dado pelo vetor d.
            </p>
        </div>
      </div>
    </section>
    <!-- JavaScript -->
    <script src="../../js/scrip.js"></script>
    <script src="../../js/notas.js"></script>
  </body>
</html>
