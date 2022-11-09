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
  Salmão Grelhado.
</h1>
<div class="d-flex mx-auto flex-wrap justify-content-center" style="width: 75%">
  <img class="mb-1 rounded-3 img-fluid me-3 shadow-sm" src="./img/salmao.jpg" alt="salmão grelhado foto" style="width: 400px" />
  <div class="rounded-3 mb-1 shadow-sm" style="width: 328px; background-color: #ffffff">
    <div class="mx-3 my-3">
      Salmão grelhado é uma receita simples e deliciosa, que pode ser feita em casa com poucos ingredientes.
    </div>
    <div class="mx-3 rounded-3 mb-3 d-flex justify-content-around" style="background-color: #ffe3e3">
      <div class="d-flex m-3 flex-column" style="color: #236828">
        <div>
          <img src="./img/timer.png" alt="" style="height: fit-content" />
          <p>Tempo de preparo</p>
        </div>
        <div>
          <p>20 minutos</p>
        </div>
      </div>
      <div class="d-flex m-3 flex-column">
        <div style="color: #236828">
          <img src="./img/garfo.png" style="height: fit-content" alt="" />
          <p>Rendimento</p>
          <div>
            <p>2 porções</p>
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
      <li>2 postas de salmão</li>

      <li>Sal</li>

      <li>Sumo de 2 limões</li>

      <li>1 colher (chá) de massa de alho</li>

      <li>1 pitada de sal</li>

      <li>Coentro picado a gosto</li>

      <li>50 ml de azeite</li>

      <li>1 raminho de coentro</li>

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
        Tempere as postas de um dia para o outro em sal e limão.
      </li>

      <li>
        Na hora de grelhar, prepare o molho, misturando todos os ingredientes.
      </li>

      <li>
        Pincele as postas com o raminho de coentro.
      </li>

      <li>
        Grelhe, pincelando com o molho sempre que vira.
      </li>

      <li>
        Na última virada, cubra as postas com os ingredientes do molho.
      </li>

      <li>
        Deixe alourar um pouco mais para aderir bem e está pronto.
      </li>

    </ol>

  </div>
</div>

<!--/Ingredients box-->

<!--/Conteúdo-->

<?php include('../footer/rodape.php'); ?>