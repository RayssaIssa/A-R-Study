<?php
    include_once('classes.php');
    include_once('gerencia.php');
    gerente();
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="author" content="Roger Bernardo de Melo Lima">
    <!--FOLHA DE ESTILO-->
    <link rel="stylesheet" href="css/estilo.css" />
    <!--Bootstrap 4 -->
    <link rel="stylesheet" href="src/bootstrap/css/bootstrap.min.css" />
    <title>Cactus - Seu bloco de notas</title>
</head>
<body>
    <main class="fundo-padrao">
        <section id="criar-notas">
            <form method="POST" action="" class="form-notas" id="form-notas" autocomplete="off">
                <div><input type="text" name="titulo_notas" placeholder="Título" id="titulo_notas" class="" /></div>
                <div><textarea cols="40" rows="10" placeholder="Insira suas ideias aqui" name="descricao_notas"></textarea></div>
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
                <div class="form-inline">
                    <label for="cor">Cor: </label>
                    <select name="cor" class="form-control" id="select-cores" onchange="mudarCorForm()">
                        <option value="padrao">Padrão</option>
                        <option value="azul">Azul</option>
                        <option value="verde">Verde</option>
                        <option value="rosa">Rosa</option>
                        <option value="amarelo">Amarelo</option>
                    </select>
                </div>
                <button type="reset" class="btn">Limpar</button>
                <button class="btn btn-info" name="criar_notas">Ok</button>
            </form>
        </section>

        <section id="notas-importantes">
            <h6 class="title">Importante</h6>
            <div class="card-group">
                <?php
                $notasImportantes = new Notas();
                $notasImportantes->busca($_SESSION['email'], 1);
                ?>
            </div>
        </section>


        <section id="notas-restantes">
            <h6 class="title">Outras</h6>
            <div class="card-group">
                <?php
                $notas = new Notas();
                $notas->busca($_SESSION['email'], 0);
                ?>
            </div>
        </section>
    </main>


    <script src="src/jquery/jquery-3.4.1.min.js"></script>
    <script src="js/comportamento.js"></script>
    <script src="src/popper/popper.min.js"></script>
    <script src="src/bootstrap/js/bootstrap.min.js"></script>
    <script>
        $(document).ready(function() {
            $("form.anotacoes").click(function() {
                var idForm = $(this).attr("id");
                var divControle = "#" + idForm + " div.controles";
                $(divControle).show(500);
            });

            $("form.anotacoes").mouseleave(function() {
                var idForm = $(this).attr("id");
                var divControle = "#" + idForm + " div.controles";
                $(divControle).hide(500);
            });

            $
        });
    </script>
</body>

</html>