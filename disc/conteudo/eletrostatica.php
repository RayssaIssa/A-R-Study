<?php
  include_once "headerrr.php";
  include_once "../../classes.php";
  include_once "../../gerencia.php";
  gerente();
?>
  <head>
    <title>A&R Study </title>
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
        <h1>Eletrostática</h1>
        <span class="anterior">Disciplinas ><a href="../fisica.php"> Física</a></span>
        <p>
        A Eletrostática é a área da Física responsável por estudar as cargas elétricas desconsiderando seu movimento. Ela aborda propriedades e comportamentos das cargas, como força, campo e potencial elétricos, diferentemente da Eletrodinâmica, que estuda a dinâmica das cargas, ou seja, as cargas elétricas em movimento. É regida por dois princípios: o princípio da atração e repulsão das cargas elétricas e o princípio de conservação das cargas.

Saiba mais: Óptica — a área da Física que busca compreender fenômenos relacionados à luz

Resumo sobre Eletrostática
Eletrostática significa “elétron estacionário”. É uma área da Física que estuda as cargas elétricas desconsiderando seu movimento.

As cargas elétricas podem ser positivas ou negativas, que se referem aos prótons e elétrons.

Existem três tipos de eletrização: atrito, contato e indução eletrostática.

A força elétrica é uma força de interação entre as cargas elétricas.

Cargas com o mesmo sinal têm força elétrica repulsiva, já cargas com sinais opostos têm força elétrica atrativa.

Potencial elétrico se trata do trabalho da força elétrica necessário para conseguirmos mover uma carga de um ponto a outro.

O campo elétrico surge ao redor das cargas elétricas, tendo sua orientação dependente do sinal da carga elétrica.

A energia potencial elétrica existe sempre que houver interação entre as cargas elétricas.

Enquanto a Eletrostática é responsável pelo estudo das cargas elétricas em repouso, a Eletrodinâmica é responsável pelo estudo das cargas elétricas em movimento.

O que é Eletrostática?
A Eletrostática é uma área da física voltada para o estudo das cargas elétricas em repouso. A nomenclatura “eletrostática” vem do grego elektron, cujo significado é “elétron”, e statikos, que significa “estacionário”, portanto “elétron estacionário”. Assim, o nome se dá em razão do seu foco ser nas cargas elétricas estáticas, ou seja, cargas em repouso, com o estudo de seu comportamento, propriedades e fenômenos relacionados.

Propriedades da Eletrostática
→ Carga elétrica
Intrínseca à matéria, a carga elétrica é uma propriedade física que se origina das partículas subatômicas, prótons e elétrons. Elas podem ser positivas ou negativas, mas por convenção a carga positiva é o próton, e a carga negativa é o elétron.

A carga elétrica é quantizada, o que quer dizer que ela possui um valor mínimo de ±1,6 ∙10−19 C
 (positivo para prótons e negativo para elétrons), conhecido como carga elementar. É impossível encontrar corpos eletrizados com menos dessa quantidade. Sua unidade de medida, de acordo com o Sistema Internacional de Unidades, é o Coulomb, representado pela letra C.

→ Eletrização
Para que ocorra a transferência da carga elétrica de um corpo a outro, é preciso que ocorra algum processo de eletrização, que pode ser por contato, atrito ou indução.

Eletrização por contato
A eletrização por contato ocorre quando colocamos um corpo eletricamente carregado em contato com outro corpo. Com isso, ambos os corpos passarão a ter o mesmo sinal e a mesma quantidade de carga elétrica, já que houve uma transferência de cargas, como podemos ver na imagem abaixo.
        </p>
      </div>
    </section>
    <!-- JavaScript -->
    <script src="../../js/scrip.js"></script>
    <script src="../../js/notas.js"></script>
  </body>
</html>
