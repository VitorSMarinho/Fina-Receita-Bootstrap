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
  Hot Dog norte-americano
</h1>
<div class="d-flex mx-auto flex-wrap justify-content-center" style="width: 75%">
  <img class="mb-1 rounded-3 img-fluid me-3 shadow-sm" src="./img/hotdog.jpg" alt="hotdog foto" style="width: 400px" />
  <div class="rounded-3 mb-1 shadow-sm" style="width: 328px; background-color: #ffffff">
    <div class="mx-3 my-3">
      Hot dog é um sanduíche feito com salsicha, pão e molhos.
    </div>
    <div class="mx-3 rounded-3 mb-3 d-flex justify-content-around" style="background-color: #ffe3e3">
      <div class="d-flex m-3 flex-column" style="color: #236828">
        <div>
          <img src="./img/timer.png" alt="" style="height: fit-content" />
          <p>Tempo de preparo</p>
        </div>
        <div>
          <p>30 minutos</p>
        </div>
      </div>
      <div class="d-flex m-3 flex-column">
        <div style="color: #236828">
          <img src="./img/garfo.png" style="height: fit-content" alt="" />
          <p>Rendimento</p>
          <div>
            <p>10 porção</p>
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
      <li>10 salsichas</li>

      <li>Molho de tomate</li>

      <li>Água</li>

      <li>3 tomates</li>

      <li>2 pimentões</li>

      <li>2 cebolas</li>

      <li>1 colher de chá rasa de sal</li>

      <li>1/2 colher de chá rasa de pimenta em pó</li>

      <li>Orégano a gosto</li>

      <li>Maionese a gosto</li>

      <li>10 pães</li>

      <li>Molho rosé a gosto</li>

      <li>Catchup a gosto</li>

      <li>Batata palha</li>

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
        Coloque as salsichas em uma panela com molho de tomate e um pouco de água, deixe ferver e desligue o fogo e reserve.
      </li>

      <li>
        Corte os tomates, os pimentões e as cebolas em tiras bem finas.
      </li>

      <li>
        Não retirar as sementes do tomate, raspe para que fique com a água do tomate.
      </li>

      <li>
        Misture toda a verdura e tempere com o sal, a pimenta em pó,o orégano a gosto, misture tudo e coloque no fogo baixo.
      </li>

      <li>
        Deixe apenas esquentar um pouco, retire do fogo e reserve.
      </li>

      <li>Corte um pão no meio, passe um pouco do molho de cenoura e maionese, coloque 1 salsicha com 1 colher do molho de tomate.</li>

      <li>Coloque a salada de verdura molho rosé a gosto, catchup a gosto e cubra com batata palha.</li>

    </ol>

  </div>
</div>

<!--/Ingredients box-->

<!--/Conteúdo-->

<?php include('../footer/rodape.php'); ?>