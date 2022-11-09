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
  Espeto com legumes.
</h1>
<div class="d-flex mx-auto flex-wrap justify-content-center" style="width: 75%">
  <img class="mb-1 rounded-3 img-fluid me-3 shadow-sm" src="./img/espeto.jpg" alt="espeto foto" style="width: 400px" />
  <div class="rounded-3 mb-1 shadow-sm" style="width: 328px; background-color: #ffffff">
    <div class="mx-3 my-3">
      Deliciosa receita de espeto com legumes, ideal para servir como entrada ou acompanhamento.
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
            <p>6 porções</p>
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
      <li>800g de alcatra em cubos</li>

      <li>Sal e pimenta-do-reino a gosto</li>

      <li>1 cebola roxa em cubos</li>

      <li>200g de tomates-cerejas</li>

      <li>1 pimentão amarelo em cubos</li>

      <li>1 pimentão verde em cubos</li>

      <li>Azeite para regar</li>

      <li>Farofa e vinagrete para acompanhar</li>

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
        Tempere a carne com sal e pimenta.
      </li>

      <li>
        Em espetinhos de madeira para churrasco, intercale cubos de carne, de cebola, de tomate-cereja e de pimentão amarelo e verde.
      </li>

      <li>
        Repita o procedimento fazendo mais camadas e fazendo mais espetinhos até acabarem os ingredientes.
      </li>

      <li>
        Coloque em uma fôrma com grelha, regue com azeite e leve ao forno médio, preaquecido, por 20 minutos ou até dourar.
      </li>

      <li>
        Retire e sirva em seguida, acompanhado de farofa e vinagrete.
      </li>

    </ol>

  </div>
</div>

<!--/Ingredients box-->

<!--/Conteúdo-->

<?php include('../footer/rodape.php'); ?>