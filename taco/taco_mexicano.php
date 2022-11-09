<?php
session_start();

include "../conexao/conexao.php";

if (empty($_SESSION)) {
  unset($_SESSION['email']);
  unset($_SESSION['senha']);
  include('../header/cabecalho.php');
} else {
  include('../header/cabecalhoLogado.php');
}
?>


<!--Conteúdo-->

<!--Imgbox and information chart-->

<h1 class="fs-3 p-3 mx-auto text-center" style="color: #236828; width: 75%">
  Taco
</h1>
<div class="d-flex mx-auto flex-wrap justify-content-center" style="width: 75%">
  <img class="mb-1 rounded-3 img-fluid me-3 shadow-sm" src="./img/taco.jpg" alt="taco foto" style="width: 400px" />
  <div class="rounded-3 mb-1 shadow-sm" style="width: 328px; background-color: #ffffff">
    <div class="mx-3 my-3">
      Taco é um prato de origem mexicana, feito com tortilla de milho, carne, queijo, cebola, pimenta, salsa e molho de tomate.
    </div>
    <div class="mx-3 rounded-3 mb-3 d-flex justify-content-around" style="background-color: #ffe3e3">
      <div class="d-flex m-3 flex-column" style="color: #236828">
        <div>
          <img src="./img/timer.png" alt="" style="height: fit-content" />
          <p>Tempo de preparo</p>
        </div>
        <div>
          <p>40 minutos</p>
        </div>
      </div>
      <div class="d-flex m-3 flex-column">
        <div style="color: #236828">
          <img src="./img/garfo.png" style="height: fit-content" alt="" />
          <p>Rendimento</p>
          <div>
            <p>20 porções</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<!--/Imgbox and information chart-->

<!--Ingredients box-->

<div class="mx-auto rounded-3 shadow-sm" style="background-color: #ffffff; width: 75%">
  <div class="d-flex align-items-center m-3 justify-content-center">
    <img class="mt-3" src="./img/apron.png" alt="" style="height: 3rem" />
    <h2 class="fs-4" style="color: #236828">Ingredientes</h2>
  </div>
  <div class="rounded-3 m-3">

    <ul class="lh-lg">
      <li>1 pacote médio de massa para pastel</li>

      <li>Chilli</li>

      <li>400 g de carne de moida</li>

      <li>1 colher (chá) de óleo</li>

      <li>2 cebolas médias picadas</li>

      <li>Pimenta a gosto</li>

      <li>4 colheres (sopa) de extrato de tomate</li>

      <li>2 colheres (sopa) de mostarda</li>

      <li>2 xícaras (chá) de feijão preto cozido</li>

      <li>150 g de queijo mussarela</li>

      <li>sal a gosto</li>

      <li>Guacamole</li>

      <li>1 abacate médio</li>

      <li>Pimenta a gosto</li>

      <li>1 cebola média picada</li>

      <li>Suco de 1 limão médio</li>

      <li>3 colheres (sopa) de azeite de oliva</li>

      <li>Acompanhamentos</li>

      <li>1/2 maço de alface picado</li>

      <li>250 g de queijo mussarela picado</li>

      <li>4 tomates sem pele picados</li>

    </ul>

  </div>
</div>

<div class="mx-auto rounded-3 shadow-sm" style="background-color: #ffffff; width: 75%">
  <div class="d-flex align-items-center m-3 justify-content-center">
    <img class="mt-3" src="./img/pan.png" alt="" style="height: 3rem" />
    <h2 class="fs-4" style="color: #236828">Modo de preparo</h2>
  </div>
  <div class="rounded-3 m-3">

    <ol class="lh-lg">
      <li>
        Tortilhas
      </li>

      <li>
        Sapeque 1 masas de pastel por vez em uma frigideira antiaderente, até a mesma ficar tostada.
      </li>

      <li>
        Chilli
      </li>

      <li>
        Doure a cebola, depois a carne moída, em seguida coloque o extrato de tomate, a mostarda, pimenta, sal e diexe apurar por uns 10 minutos.
      </li>

      <li>
        Bata no liquidificador com um pouco do próprio caldo o feijão.
      </li>

      <li>Em seguida, quando o molho estiver quase seco, despeje o feijão e após o queijo mussarela.</li>

      <li>Deixe cozer até ficar com consistência de pasta, bem grossa.</li>

      <li>O Chilli deve ficar bem picante. Sirva quente.</li>

      <li>Guacamole</li>

      <li>Retire a polpa do abacate. Bata todos os ingredientes no liquidificador.</li>

      <li>Modo de servir</li>

      <li>Coloque cada item em cumbucas, inclusive o alface, o tomate picado e o quiejo picado.</li>

      <li>Monte o Taco: primeiro, com a massa tostada, coloque uma colher de sopa do chilli, em seguida o queijo para derreter, após o tomate picado, o alface e por ultimo uma colher de sopa rasa de guacamole.</li>

      <li>Feche o taco, como uma tortilha ou pastel.</li>

    </ol>

  </div>
</div>

<!--/Ingredients box-->

<!--/Conteúdo-->

<?php include('../footer/rodape.php'); ?>