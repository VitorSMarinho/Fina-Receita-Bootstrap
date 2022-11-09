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
  Tabule
</h1>
<div class="d-flex mx-auto flex-wrap justify-content-center" style="width: 75%">
  <img class="mb-1 rounded-3 img-fluid me-3 shadow-sm" src="./img/tabule.jpg" alt="tabule foto" style="width: 400px" />
  <div class="rounded-3 mb-1 shadow-sm" style="width: 328px; background-color: #ffffff">
    <div class="mx-3 my-3">
      Tabule é um prato de origem árabe, feito com trigo, tomate, pepino, cebola, salsa, hortelã, limão e azeite.
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
      <li>45 g de trigo para kibe</li>

      <li>200 g de tomate picado sem sementes</li>

      <li>1 cebola picada</li>

      <li>2 pepinos picados</li>

      <li>1 maço de salsinha picada</li>

      <li>3 colheres (sopa) de suco de limão</li>

      <li>2 colheres (sopa) de azeite</li>

      <li>Sal e pimenta-do-reino a gosto</li>

      <li>1/4 colher (chá) de noz-moscada</li>

      <li>Hortelã picada</li>

      <li>Salsa picada</li>

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
        Em um recipiente, deixe o trigo de molho por 2 horas.
      </li>

      <li>
        Lave bem o trigo em água corrente, escorra e esprema nas mão para retirar o excesso de umidade.
      </li>

      <li>
        Passe a cebola picada em água fria e escorra bem.
      </li>

      <li>
        Junte os outros ingredientes (menos o tomate) e deixe tampado na geladeira por pelo menos 8 horas.
      </li>

      <li>
        Acrescente os tomates na hora de servir.
      </li>

    </ol>

  </div>
</div>

<!--/Ingredients box-->

<!--/Conteúdo-->

<?php include('../footer/rodape.php'); ?>