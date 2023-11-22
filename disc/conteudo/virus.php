<?php
  include_once "headerrr.php";
  include_once "../../classes.php";
  include_once "../../gerencia.php";
  gerente();
?>
  <head>
    <title>A&R Study - Virus</title>
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
        <h1>Virus</h1>
        <span class="anterior">Disciplinas ><a href="../biologia.php"> Biologia</a> > Virus</span>
        <div class="conteudoo">
            <h4 class="tema">Virus</h4>
            <p class="texto">
            Não existe um consenso absoluto a respeito
            do fato de os vírus serem ou não vivos. De um lado, existem aqueles que dizem que os vírus não
            são vivos porque eles não possuem células nem metabolismo próprio. Por outro lado, defendendo
            o ponto de vista de que os vírus são vivos, existe o fato de existem modificações na descendência
            dos vírus (ou seja, os filhos não são exatamente iguais ao pais), permitindo que eles participem das
            dinâmicas evolutivas.<br>
            Não se sabe também a origem dos vírus, embora duas hipóteses sejam possíveis: uma diz que os
            vírus vieram de uma “simplificação exagerada” de algumas células; outra diz que os vírus surgiram a
            partir da combinação de moléculas não vivas.<br>
            Os vírus são formados por uma capa proteica chamada <b>capsídeo viral</b> e por uma molécula de
            <b>RNA</b> ou <b>DNA</b>, mas nunca os dois (DNA e RNA) ao mesmo tempo. 
            Alguns vírus possuem ainda um <b>envelope viral</b> feito a partir da membrana plasmática da célula hospedeira.<br><br>
            Os vírus são <b>parasitos intracelulares obrigatórios</b>, o que significa que eles precisam invadir células
            para viver e se reproduzir. O tipo de célula que eles invadem depende das proteínas do capsídeo ou do
            envelope, que se ligam às proteínas da membrana da célula invadida. Após invadir a célula, o vírus
            pode seguir um ciclo de vida <b>lítico</b> ou <b>lisogênico</b>.<br>
            No <b>CICLO LÍTICO</b>, o vírus entra na célula, usa a maquinaria celular para produzir as proteínas
            virais e copiar seu material genético até que a célula esteja cheia de novos vírus. Esses novos vírus podem
            sair arrebentando a célula hospedeira ou sair por uma espécie “exocitose”, levando um pedaço da
            membrana para fazer o envelope viral.<br>
            No <b>CICLO LISOGÊNICO</b>, o material genético do vírus é incorporado ao da célula. Toda vez que a
            célula se multiplicar por mitose, o genoma viral é copiado. Depois que a célula sofrer várias mitoses,
            o vírus ativa o modo lítico e se multiplica em várias células ao mesmo tempo.<br>
            Eventualmente, uma forma mais agressiva (virulenta) do vírus pode surgir, causando uma <b>pandemia</b> 
            (doença que afeta o mundo todo), uma <b>epidemia</b> (doença que afeta uma grande extensão territorial) ou mesmo uma <b>endemia</b> (doença que afeta
            uma área restrita), como várias gripes fizeram no passado. Um grande problema das gripes é o reservatório animal (animais que agem como backup do
            vírus) e sua alta variabilidade, o que faz com que as vacinas contra a gripe precisem ser atualizadas frequentemente.<br><br>
            Doenças virais bem comuns nas provas do ENEM são aquelas transmitidas pelo <i>Aedes aegypti</i>, um
            mosquito preto de listras brancas que transmite a dengue, a chikungunya, a zika e a febre amarela.<br>
            Outro vírus importante é o HIV. A infecção por HIV não causa sintomas nos primeiros anos, mas
            o estágio mais avançado é aquele conhecido por aids. O HIV ataca os linfócitos, células de defesa
            do organismo, fazendo com que o paciente perca imunidade. O vírus segue o ciclo lítico, mas como ele
            é um retrovírus ele tem um RNA ao invés de DNA. Esse RNA é usado como base para a produção de
            um DNA através da transcrição reversa.<br>
            Apesar de hoje em dia a qualidade e a expectativa de vida dos pacientes com HIV sejam muito
            melhores do que há 30 anos, ainda não existe cura para essa doença. A único meio de evitar a infecção
            é usando preservativos.<br>
            Outra DST viral muito comum é o HPV (papiloma vírus humano), que não causa sintomas na maioria
            dos casos, mas algumas variantes do vírus podem causar verrugas ou até mesmo câncer de colo de
            útero. Hoje em dia existem vacinas contra o HPV, além do exame de colo de útero (Papanicolau) para
            detecção de lesões pré-câncer.<br>
            Mas vírus não apenas ruins: eles podem ser usados na biotecnologia justamente por sua capaci-
            dade de entrar em células e colocar seu genoma lá, vírus podem ser usados como vetores de clonagem molecular.
            </p>
        </div>
      </div>
    </section>
    <!-- JavaScript -->
    <script src="../../js/scrip.js"></script>
    <script src="../../js/notas.js"></script>
  </body>
</html>