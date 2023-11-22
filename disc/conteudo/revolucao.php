<?php
  include_once "headerrr.php";
  include_once "../../classes.php";
  include_once "../../gerencia.php";
  gerente();
?>
  <head>
    <title>A&R Study - Revolução Industrial</title>
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
        <h1>Revolução Industrial</h1>
        <span class="anterior">Disciplinas ><a href="../historia.php"> História</a> > Revolução Industrial</span>
        <div class="conteudoo">
            <h4 class="tema">Idade Contemporânea</h4>
            <p class="texto">
            Em fins do século XVIII, o capitalismo consolidar-se-ia como sistema econômico e
            se caracterizaria pela acumulação de capital, pela propriedade privada, pela
            obtenção de lucro e pelo trabalho assalariado. A Revolução Industrial seria
            fundamental para esse acontecimento.
            </p>
            <section class="sessao">
                <h4 class="tema">Pioneirismo inglês</h4>
                <p class="texto">
                Em meados do século XVIII, a Inglaterra dava os primeiros passos da Revolução
                Industrial, transformando-se na maior potência da época até princípios do século
                XX devido ao seu avanço na produção. Acompanhe alguns dos fatores que
                possibilitaram a Inglaterra ser “mãe” da Revolução Industrial.
                </p><br>
                <ul class="lista">
                    <li>
                        <ul class="sub-lista">Políticos:
                            <li>
                                <b>Parlamentarismo</b>: Desde 1688 foi instalado na Inglaterra o sistema
                                parlamentarista de governo, que abriu espaço para a ação da burguesia, dando
                                fim ao Absolutismo Monárquico.
                            </li>
                            <li>
                                <b>Criação do Banco da Inglaterra:</b> ato do Parlamento que facilitou o
                                financiamento da burguesia inglesa para implantação de indústrias.
                            </li>
                        </ul>
                        <ul class="sub-lista">Econômicos:
                            <li>
                                <b>Acúmulo de Capitais:</b> A Idade Moderna é vista como a “fase de acumulação
                                primitiva de capitais”, onde a burguesia comercial, apoiada pelas idéias
                                mercantilistas, teria acumulado capitais para investir na produção industrial. A
                                Inglaterra, como teve um bom desenvolvimento comercial nesse período,
                                reuniu condições para seu desenvolvimento industrial.
                            </li>
                            <li>
                                <b>Reservas Minerais de carvão e ferro:</b> a Inglaterra encontrava em seu território
                                reservas abundantes de carvão e ferro, matérias-primas essenciais para a
                                primeira fase da Revolução Industrial.
                            </li>
                        </ul>
                        <ul class="sub-lista">Geográficos:
                            <li>
                                A Inglaterra estava afastada, no sentido territorial, da maioria dos grandes
                                conflitos europeus, tendo, por isso, um desenvolvimento interno melhorado.
                            </li>
                            <li>
                                Facilidade de transporte naval interno e internacional.
                            </li>
                        </ul>
                        <ul class="sub-lista">Sociais:
                            <li>
                                Mão-de-obra abundante devido as leis de cercamento (enclosure acts), que
                                afastavam os camponeses da terra, obrigando-os a partir para a cidade, onde
                                formavam o “exército industrial de reserva”.
                            </li>
                            <li>
                            Pensamento progressista, por parte da burguesia e da nobreza capitalista (Gentry)
                            </li>
                        </ul>
                    </li>
                </ul>
            </section>
        </div>
      </div>
    </section>
    <!-- JavaScript -->
    <script src="../../js/scrip.js"></script>
    <script src="../../js/notas.js"></script>
  </body>
</html>