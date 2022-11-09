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
  Sonho
</h1>
<div class="d-flex mx-auto flex-wrap justify-content-center" style="width: 75%">
  <img class="mb-1 rounded-3 img-fluid me-3 shadow-sm" src="./img/sonho.jpg" alt="sonho foto" style="width: 400px" />
  <div class="rounded-3 mb-1 shadow-sm" style="width: 328px; background-color: #ffffff">
    <div class="mx-3 my-3">
      A bola de Berlim (português europeu) ou sonho (português brasileiro) é um bolo tradicional da culinária alemã.
    </div>
    <div class="mx-3 rounded-3 mb-3 d-flex justify-content-around" style="background-color: #ffe3e3">
      <div class="d-flex m-3 flex-column" style="color: #236828">
        <div>
          <img src="./img/timer.png" alt="" style="height: fit-content" />
          <p>Tempo de preparo</p>
        </div>
        <div>
          <p>90 minutos</p>
        </div>
      </div>
      <div class="d-flex m-3 flex-column">
        <div style="color: #236828">
          <img src="./img/garfo.png" style="height: fit-content" alt="" />
          <p>Rendimento</p>
          <div>
            <p>8 porções</p>
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
      <li>1 kg de farinha de trigo</li>

      <li>10 g de fermento para pão</li>

      <li>1 ovo</li>

      <li>1 xícara de açúcar</li>

      <li>1 pitada de sal</li>

      <li>1/2 xícara de óleo</li>

      <li>1/2 l de leite morno</li>

      <li>1/2 l de leite</li>

      <li>1 gema</li>

      <li>2 colheres de sopa de maizena</li>

      <li>1 lata de leite condensado</li>

      <li>Açúcar a gosto</li>

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
        Dissolva o fermento com o leite morno, depois coloque o açúcar e os demais ingredientes.
      </li>

      <li>
        Sove a massa até que fique sem grudar nas mãos.
      </li>

      <li>
        Faça bolinhas do tamanho que preferir e deixe a massa crescer por mais ou menos 1 hora.
      </li>

      <li>
        Após isso, frite em óleo quente e recheie.
      </li>

      <li>
        Para preparar o recheio é só misturar todos ingredientes e leva ao fogo, sempre mexendo, até engrossar.
      </li>

      <li>
        Se preferir você pode rechear com brigadeiro que fica muito bom!.
      </li>

    </ol>

  </div>
</div>

<!--/Ingredients box-->

<!--/Conteúdo-->

<?php include('../footer/rodape.php'); ?>