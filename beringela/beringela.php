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
  Beringela recheada com Frango Fit.
</h1>
<div class="d-flex mx-auto flex-wrap justify-content-center" style="width: 75%">
  <img class="mb-1 rounded-3 img-fluid me-3 shadow-sm" src="./img/beringela.jpg" alt="beringela foto" style="width: 400px" />
  <div class="rounded-3 mb-1 shadow-sm" style="width: 328px; background-color: #ffffff">
    <div class="mx-3 my-3">
      Beringela recheada com frango, ideal para servir como entrada ou acompanhamento.
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
            <p>4 porções</p>
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
      <li>2 beringelas grandes</li>

      <li>3 colheres de sopa de suco de limão</li>

      <li>3 colheres de sopa de óleo</li>

      <li>1/2 cebola picada</li>

      <li>1 dente de alho amassado</li>

      <li>1 xícara de chá de legumes cozidos picados</li>

      <li>1 xícara de chá de frango cozido e desfiado</li>

      <li>1 colher de sopa de azeitonas picadas</li>

      <li>1 tomate médio picado</li>

      <li>Sal e pimenta - do - reino a gosto</li>

      <li>50 g de mussarela fatiada</li>

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
        Corte as beringelas ao meio no sentido do comprimento e coloque - as em uma peneira.
      </li>

      <li>
        Regue com o suco de limão, polvilhe o sal e deixe descansar por 15 minutos, cobertas com um prato pesado.
      </li>

      <li>
        Em seguida, lave e retire a parte da polpa com uma colher.
      </li>

      <li>
        Pique a polpa e reserve separadamente.
      </li>

      <li>
        Aqueça o óleo, doure a cebola, o alho e junte a polpa picada reservada.
      </li>

      <li>Refogue rapidamente e adicione os ingredientes restantes, exceto a mussarela.</li>

      <li>Misture bem e cozinhe até ficarem incorporados (mais ou menos 10 minutos).</li>

      <li>Retire, deixe esfriar um pouco e recheie as beringelas cortadas e reservadas.</li>

      <li>Distribua - as sobre um refratário previamente untado, cubra com as fatias de mussarela.</li>

      <li>Leve ao forno até que a mussarela derreta e/ou fique douradinha.</li>

    </ol>

  </div>
</div>

<!--/Ingredients box-->

<!--/Conteúdo-->

<?php include('../footer/rodape.php'); ?>