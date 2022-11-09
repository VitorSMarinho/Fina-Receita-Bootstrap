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
  Pizza de Mussarela
</h1>
<div class="d-flex mx-auto flex-wrap justify-content-center" style="width: 75%">
  <img class="mb-1 rounded-3 img-fluid me-3 shadow-sm" src="./img/pizza-mussarela.jpg" alt="imagem pizza de mussarela" style="width: 400px" />
  <div class="rounded-3 mb-1 shadow-sm" style="width: 328px; background-color: #ffffff">
    <div class="mx-3 my-3">
      A pizza de Mussarela é coberta com molho de tomate, queijo tipo
      mussarela, azeitona pretas, orégano e massa com fermentação natural.
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
            <p>8 pedaçoes</p>
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
    <p><u>Massa:</u></p>
    <ul class="lh-lg">
      <li>500 g de farinha de trigo</li>

      <li>2 tabletes de fermento biológico</li>

      <li>1 colher de chá de sal</li>

      <li>1 colher de chá de açúcar</li>

      <li>1 colher de sopa de óleo</li>

      <li>1 copo de água morna</li>
    </ul>
    <p><u>Recheio:</u></p>
    <ul class="lh-lg">
      <li>500 g de queijo de mussarela</li>

      <li>Molho de tomate a gosto</li>

      <li>Tomate em rodelas a gosto</li>

      <li>Orégano a gosto</li>
    </ul>
  </div>
</div>

<div class="mx-auto rounded-3 shadow-sm" style="background-color: #ffffff; width: 75%">
  <div class="d-flex align-items-center m-3 justify-content-center">
    <img class="mt-3" src="./img/pan.png" alt="" style="height: 3rem" />
    <h2 class="fs-4" style="color: #236828">Modo de preparo</h2>
  </div>
  <div class="rounded-3 m-3">
    <p><u>Massa:</u></p>
    <ol class="lh-lg">
      <li>
        Em uma tigela juntar os ingredientes, acrescentando a água aos
        poucos.
      </li>

      <li>
        Bata a massa até que fique com uma consistência homogênea e
        elástica.
      </li>

      <li>
        Deixe descansar em um recipiente por 30 minutos, ou até que a massa
        dobre de tamanho.
      </li>

      <li>Enquanto a massa descansa, deixe o forno aquecendo.</li>

      <li>Dica: jogue uma bolinha de massa dentro de um copo de água.</li>

      <li>A bolinha irá parar no fundo.</li>

      <li>Quando ela subir, a massa estará pronta para ser cozida.</li>
    </ol>
    <p><u>Recheio:</u></p>
    <ol class="lh-lg">
      <li>
        Após a massa estar descansada, estique-a com um rolo de madeira,
        sobre a mesa.
      </li>

      <li>Acomode a massa em uma forma de pizza.</li>

      <li>
        Depois é só colocar o recheio na seguinte ordem: molho de tomate,
        queijo mussarela, rodelas de tomate e orégano.
      </li>

      <li>
        Deixe cozinha por 20 minutos em fogo médio, ou até que a massa fique
        crocante.
      </li>

      <li>Depois retire e deixe esfriar.</li>

      <li>Sirva em seguida.</li>
    </ol>
  </div>
</div>

<!--/Ingredients box-->

<!--/Conteúdo-->

<?php include('../footer/rodape.php'); ?>