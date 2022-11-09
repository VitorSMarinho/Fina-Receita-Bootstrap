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
  Lasanha
</h1>
<div class="d-flex mx-auto flex-wrap justify-content-center" style="width: 75%">
  <img class="mb-1 rounded-3 img-fluid me-3 shadow-sm" src="./img/lasanha.png" alt="lasanha foto" style="width: 400px" />
  <div class="rounded-3 mb-1 shadow-sm" style="width: 328px; background-color: #ffffff">
    <div class="mx-3 my-3">
      Lasanha é um prato de origem italiana, feito com massa de lasanha, molho de tomate, queijo mussarela, presunto e molho branco.
    </div>
    <div class="mx-3 rounded-3 mb-3 d-flex justify-content-around" style="background-color: #ffe3e3">
      <div class="d-flex m-3 flex-column" style="color: #236828">
        <div>
          <img src="./img/timer.png" alt="" style="height: fit-content" />
          <p>Tempo de preparo</p>
        </div>
        <div>
          <p>50 minutos</p>
        </div>
      </div>
      <div class="d-flex m-3 flex-column">
        <div style="color: #236828">
          <img src="./img/garfo.png" style="height: fit-content" alt="" />
          <p>Rendimento</p>
          <div>
            <p>15 porção</p>
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
      <li>500 g de massa de lasanha</li>

      <li>500 g de carne moída</li>

      <li>2 caixas de creme de leite</li>

      <li>3 colheres de manteiga</li>

      <li>3 colheres de farinha de trigo</li>

      <li>500 g de presunto</li>

      <li>500 g de mussarela</li>

      <li>Sal a gosto</li>

      <li>2 copos de leite</li>

      <li>1 cebola ralada</li>

      <li>3 colheres de óleo</li>

      <li>1 caixa de molho de tomate</li>

      <li>3 dentes de alho amassados</li>

      <li>1 pacote de queijo ralado</li>

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
        Cozinhe a massa segundo as orientações do fabricante, despeje em um refratário com água gelada para não grudar e reserve.
      </li>

      <li>
        Refogue o alho, a cebola, a carne moída, o molho de tomate, deixe cozinhar por 3 minutos e reserve.
      </li>

      <li>
        Derreta a margarina, coloque as 3 colheres de farinha de trigo e mexa.
      </li>

      <li>
        Despeje o leite aos poucos e continue mexendo.
      </li>

      <li>
        Por último, coloque o creme de leite, mexa por 1 minuto e desligue o fogo.
      </li>

      <li>Despeje uma parte do molho à bolonhesa em um refratário, a metade da massa, a metade do presunto, a metade da mussarela, todo o molho branco e o restante da massa.</li>

      <li>Repita as camadas até a borda do recipiente.</li>

      <li>Finalize com o queijo ralado e leve ao forno alto (220° C), preaquecido, por cerca de 20 minutos.</li>

    </ol>

  </div>
</div>

<!--/Ingredients box-->

<!--/Conteúdo-->

<?php include('../footer/rodape.php'); ?>