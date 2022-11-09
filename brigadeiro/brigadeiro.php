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
  Brigadeiro.
</h1>
<div class="d-flex mx-auto flex-wrap justify-content-center" style="width: 75%">
  <img class="mb-1 rounded-3 img-fluid me-3 shadow-sm" src="./img/brigadeiro.jpg" alt="brigadeiro foto" style="width: 400px" />
  <div class="rounded-3 mb-1 shadow-sm" style="width: 328px; background-color: #ffffff">
    <div class="mx-3 my-3">
      O brigadeiro é um doce típico da culinária brasileira, de origem paulista, o qual rapidamente se difundiu pelo resto do país.
    </div>
    <div class="mx-3 rounded-3 mb-3 d-flex justify-content-around" style="background-color: #ffe3e3">
      <div class="d-flex m-3 flex-column" style="color: #236828">
        <div>
          <img src="./img/timer.png" alt="" style="height: fit-content" />
          <p>Tempo de preparo</p>
        </div>
        <div>
          <p>25 minutos</p>
        </div>
      </div>
      <div class="d-flex m-3 flex-column">
        <div style="color: #236828">
          <img src="./img/garfo.png" style="height: fit-content" alt="" />
          <p>Rendimento</p>
          <div>
            <p>30 porções</p>
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
      <li>1 caixa de leite condensado</li>

      <li>1 colher (sopa) de margarina sem sal</li>

      <li>7 colheres (sopa) de achocolatado</li>

      <li>Chocolate granulado</li>

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
        Em uma panela funda, acrescente o leite condensado, a margarina e o achocolatado (ou 4 colheres de sopa de chocolate em pó).
      </li>

      <li>
        Cozinhe em fogo médio e mexa até que o brigadeiro comece a desgrudar da panela.
      </li>

      <li>
        Deixe esfriar e faça pequenas bolas com a mão passando a massa no chocolate granulado.
      </li>
    </ol>

  </div>
</div>

<!--/Ingredients box-->

<!--/Conteúdo-->

<?php include('../footer/rodape.php'); ?>