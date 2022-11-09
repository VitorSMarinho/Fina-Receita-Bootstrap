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

<div class="card p-3 m-4 mx-auto" style="width: 50%">
  <div class="text-center d-flex justify-content-center">
    <img src="img/chef.png" style="height: 2rem" />
    <p style="color: #236828">Salgados</p>
  </div>


  <div class="card mb-3" style="max-width: 800px;">
    <div class="row g-0">
      <div class="col-md-4">
        <img src="img//espeto.jpg" class="img-fluid rounded-start" alt="...">
      </div>
      <div class="col-md-8">
        <div class="card-body">
          <a href="../espeto/espeto.php" style="text-decoration: none; color:black">
            <h5 class="card-title">Espeto com legumes</h5>
            <p class="card-text">
              <p>Deliciosa receita de espeto com legumes, ideal para servir como entrada ou acompanhamento.
              </p>
              <div>
                <button type="button" class="btn btn-outline-success">Ver mais</button>
              </div>
          </a>
        </div>
      </div>
    </div>
  </div>


  <div class="card mb-3" style="max-width: 800px;">
    <div class="row g-0">
      <div class="col-md-4">
        <img src="img/feijoada.png" class="img-fluid rounded-start" alt="...">
      </div>
      <div class="col-md-8">
        <div class="card-body">
          <a href="../feijoada/feijoada.php" style="text-decoration: none; color:black">
            <h5 class="card-title">Feijoada</h5>
            <p class="card-text">A feijoada é um prato típico brasileiro. Ela é feita com vários tipos de carnes, suina e bovina que são cozidas juntamente com feijão preto.
              Proporcionando um sabor inigualável.</p>
            <div>
              <button type="button" class="btn btn-outline-success">Ver mais</button>
            </div>
          </a>
        </div>
      </div>
    </div>
  </div>

  <div class="card mb-3" style="max-width: 800px;">
    <div class="row g-0">
      <div class="col-md-4">
        <img src="img/hotdog.jpg" class="img-fluid rounded-start" alt="...">
      </div>
      <div class="col-md-8">
        <div class="card-body">
          <a href="../hotdog/hotdog.php" style="text-decoration: none; color:black">
            <h5 class="card-title">Hot dog norte-americano</h5>
            <p class="card-text">Hot dog é um sanduíche feito com salsicha, pão e molhos.</p>
            <div>
              <button type="button" class="btn btn-outline-success">Ver mais</button>
            </div>
          </a>
        </div>
      </div>
    </div>
  </div>


  <div class="card mb-3" style="max-width: 800px;">
    <div class="row g-0">
      <div class="col-md-4">
        <img src="img/lasanha.png" class="img-fluid rounded-start" alt="...">
      </div>
      <div class="col-md-8">
        <div class="card-body">
          <a href="../lasanha/lasanha.php" style="text-decoration: none; color:black">
            <h5 class="card-title">Lasanha a Bolonhesa</h5>
            <p class="card-text">A receita de lasanha de carne moída, também conhecida como lasanha à bolonhesa, é um clássico!
              Ela pode ter vários molhos e recheios. Tem essa especifidade pela sua montagem em camadas.</p>
            <div>
              <button type="button" class="btn btn-outline-success">Ver mais</button>
            </div>
          </a>
        </div>
      </div>
    </div>
  </div>

  <div class="card mb-3" style="max-width: 800px;">
    <div class="row g-0">
      <div class="col-md-4">
        <img src="img/macarrao.jpg" class="img-fluid rounded-start" alt="...">
      </div>
      <div class="col-md-8">
        <div class="card-body">
          <a href="../macarrao/macarrao.php" style="text-decoration: none; color:black">
            <h5 class="card-title">Macarrão a Bolonhesa</h5>
            <p class="card-text">Com origem em Bolonha , na Itália , este molho continha carne moída (carne bovina ou suína), pasta de tomate e vegetais como cebola, cenoura e aipo.</p>
            <div>
              <button type="button" class="btn btn-outline-success">Ver mais</button>
            </div>
          </a>
        </div>
      </div>
    </div>
  </div>

  <div class="card mb-3" style="max-width: 800px;">
    <div class="row g-0">
      <div class="col-md-4">
        <img src="img/pizza-mussarela.jpg" class="img-fluid rounded-start" alt="...">
      </div>
      <div class="col-md-8">
        <div class="card-body">
          <a href="../pizza/pizza.php" style="text-decoration: none; color:black">
            <h5 class="card-title">Pizza de Mussarela</h5>
            <p class="card-text">Típico prato italiano a mais simples e fabulosa receita. </br> A pizza de Mussarela é coberta com molho de tomate, queijo tipo mussarela, azeitona pretas, orégano e massa com fermentação natural.</p>
            <div>
              <button type="button" class="btn btn-outline-success">Ver mais</button>
            </div>
          </a>
        </div>
      </div>
    </div>
  </div>

  <div class="card mb-3" style="max-width: 800px;">
    <div class="row g-0">
      <div class="col-md-4">
        <img src="img/taco.jpg" class="img-fluid rounded-start" alt="...">
      </div>
      <div class="col-md-8">
        <div class="card-body">
          <a href="../taco/taco_mexicano.php" style="text-decoration: none; color:black">
            <h5 class="card-title">Tacos Mexicano</h5>
            <p class="card-text">Taco é um prato de origem mexicana, feito com tortilla de milho, carne, queijo, cebola, pimenta, salsa e molho de tomate.</p>
            <div>
              <button type="button" class="btn btn-outline-success">Ver mais</button>
            </div>
          </a>
        </div>
      </div>
    </div>
  </div>





  <button type="button" class="col-lg-2 mx-auto btn btn-outline-secondary" style="display: none;">Ver mais</button>
</div>


<!--/Conteúdo-->

<?php include('../footer/rodape.php'); ?>