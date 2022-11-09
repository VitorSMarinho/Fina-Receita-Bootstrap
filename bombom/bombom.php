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
  Bombom de morango na travessa
</h1>
<div class="d-flex mx-auto flex-wrap justify-content-center" style="width: 75%">
  <img class="mb-1 rounded-3 img-fluid me-3 shadow-sm" src="./img/bombom.jpg" alt="bombom de morango foto" style="width: 400px" />
  <div class="rounded-3 mb-1 shadow-sm" style="width: 328px; background-color: #ffffff">
    <div class="mx-3 my-3">
      Bombom de morango na travessa é um prato de origem brasileira, feito com morango, chocolate e chantilly.
    </div>
    <div class="mx-3 rounded-3 mb-3 d-flex justify-content-around" style="background-color: #ffe3e3">
      <div class="d-flex m-3 flex-column" style="color: #236828">
        <div>
          <img src="./img/timer.png" alt="" style="height: fit-content" />
          <p>Tempo de preparo</p>
        </div>
        <div>
          <p>35 minutos</p>
        </div>
      </div>
      <div class="d-flex m-3 flex-column">
        <div style="color: #236828">
          <img src="./img/garfo.png" style="height: fit-content" alt="" />
          <p>Rendimento</p>
          <div>
            <p>10 porções</p>
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
      <li>250 g de chocolate ao leite</li>

      <li>250 g de chocolate meio amargo</li>

      <li>2 latas de leite condensado</li>

      <li>2 latas de creme de leite</li>

      <li>2 colheres de margarina</li>

      <li>2 caixas de morango</li>

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
        Coloque as latas de leite condensado em uma panela com a manteiga e faça uma massa como um brigadeiro mole.
      </li>

      <li>
        Coloque em uma travessa e, por cima deste brigadeiro mole, coloque os morangos cortados ao meio.
      </li>

      <li>
        Reserve para fazer a cobertura.
      </li>

      <li>
        Para fazer a cobertura, rale o chocolate ao leite e o meio amargo e misture ao creme de leite.
      </li>

      <li>
        Misture e coloque no micro-ondas durante 1 minuto.
      </li>

      <li>
        Retire e mexa
      </li>

      <li>
        Coloque de novo no micro-ondas por mais 1 minuto.
      </li>

      <li>Despeje a cobertura por cima dos morangos e leve à geladeira coberta por papel-filme.</li>

    </ol>

  </div>
</div>

<!--/Ingredients box-->

<!--/Conteúdo-->

<?php include('../footer/rodape.php'); ?>