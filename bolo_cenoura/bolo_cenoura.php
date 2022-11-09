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
  Bolo de Cenoura com cobertura de Chocolate
</h1>
<div class="d-flex mx-auto flex-wrap justify-content-center" style="width: 75%">
  <img class="mb-1 rounded-3 img-fluid me-3 shadow-sm" src="./img/cenoura.jpg" alt="bolo cenoura foto" style="width: 400px" />
  <div class="rounded-3 mb-1 shadow-sm" style="width: 328px; background-color: #ffffff">
    <div class="mx-3 my-3">
      Bolo de cenoura com cobertura de chocolate é uma receita simples e deliciosa, perfeita para o lanche da tarde ou para servir como sobremesa.
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
      <li>1/2 xícara (chá) de óleo</li>

      <li>3 cenouras médias raladas</li>

      <li>4 ovos</li>

      <li>2 xícaras (chá) de açúcar</li>

      <li>2 e 1/2 xícaras (chá) de farinha de trigo</li>

      <li>1 colher (sopa) de fermento em pó</li>

      <li>1 colher (sopa) de manteiga</li>

      <li>3 colheres (sopa) de chocolate em pó</li>

      <li>1 xícara (chá) de açúcar</li>

      <li>1 xícara (chá) de leite</li>

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
        Em um liquidificador, adicione a cenoura, os ovos e o óleo, depois misture.
      </li>

      <li>
        Acrescente o açúcar e bata novamente por 5 minutos.
      </li>

      <li>
        Em uma tigela ou na batedeira, adicione a farinha de trigo e depois misture novamente.
      </li>

      <li>
        Acrescente o fermento e misture lentamente com uma colher.
      </li>

      <li>
        Asse em um forno preaquecido a 180° C por aproximadamente 40 minutos.
      </li>

      <li>
        Despeje em uma tigela a manteiga, o chocolate em pó, o açúcar e o leite, depois misture.
      </li>

      <li>
        Leve a mistura ao fogo e continue misturando até obter uma consistência cremosa, depois despeje a calda por cima do bolo.
      </li>

    </ol>

  </div>
</div>

<!--/Ingredients box-->

<!--/Conteúdo-->

<?php include('../footer/rodape.php'); ?>