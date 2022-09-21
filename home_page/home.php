<?php include('../header/cabecalho.php');?>

    <!--SlideShow BootStrap-->
    <div
      class="card mx-auto w-50"
      style="background-color: #f0f0f0; border-style: none"
    >
      <div
        id="carouselExampleIndicators"
        class="carousel slide"
        data-bs-ride="carousel"
      >
        <div class="carousel-indicators">
          <button
            type="button"
            data-bs-target="#carouselExampleIndicators"
            data-bs-slide-to="0"
            class="active"
            aria-current="true"
            aria-label="Slide 1"
          ></button>
          <button
            type="button"
            data-bs-target="#carouselExampleIndicators"
            data-bs-slide-to="1"
            aria-label="Slide 2"
          ></button>
          <button
            type="button"
            data-bs-target="#carouselExampleIndicators"
            data-bs-slide-to="2"
            aria-label="Slide 3"
          ></button>
        </div>

        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="img/hot-dog.jpg" class="w-100" alt="..." />
          </div>

          <div class="carousel-item">
            <img
              src="img/lasanha.png"
              class="d-block w-100 img-fluid"
              alt="..."
            />
          </div>

          <div class="carousel-item">
            <img src="img/taco.jpg" class="d-block w-100 img-fluid" alt="..." />
          </div>
        </div>

        <button
          class="carousel-control-prev"
          type="button"
          data-bs-target="#carouselExampleIndicators"
          data-bs-slide="prev"
        >
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>

        <button
          class="carousel-control-next"
          type="button"
          data-bs-target="#carouselExampleIndicators"
          data-bs-slide="next"
        >
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
    </div>
    <!--SlideShow BootStrap-->

    <!-- Titulo da Seção -->
    <div
      id="receitas"
      class="w-100 fs-3"
      style="
        background-color: #c60c34;
        height: 60px;
        display: flex;
        align-items: center;
        justify-content: center;
      "
    >
      <p style="margin-top: 15px; color: #f0f0f0">Receitas</p>
    </div>
    <!-- Fim Titulo da Seção -->

    <!--Conteúdo-->
    <section class="container" style="margin-bottom: 50px; margin-top: 50px">
      <div class="card mb-3">
        <div class="row g-3">
          <div class="col-12 col-md-6 col-lg-4">
            <img src="img/hot-dog.jpg" class="img-fluid rounded-start" />
          </div>
          <div class="col-12 col-md-6 col-lg-6">
            <div class="card-body">
              <h5 class="card-title">Hot Dog norte-americano.</h5>
              <p class="card-text">
                O preparo típico do cachorro-quente é colocando a salsicha com o
                molho agridoce, picles à base de pepino, mostarda e ketchup.
              </p>
            </div>
          </div>
        </div>
      </div>
      <div class="card mb-3">
        <div class="row g-3">
          <div class="col-12 col-md-6 col-lg-4">
            <img
              src="img/lasanha.png"
              class="img-fluid rounded-start"
              alt="..."
            />
          </div>
          <div class="col-12 col-md-6 col-lg-6">
            <div class="card-body">
              <h5 class="card-title">Lasanha à bolonhesa.</h5>
              <p class="card-text">
                A Lasanha à Bolonhesa é composta por uma deliciosa massa,
                recheada com molho à bolonhesa, carne moída e presunto, coberta
                com molho branco e mussarela.
              </p>
            </div>
          </div>
        </div>
      </div>
      <div class="card">
        <div class="row g-3">
          <div class="col-12 col-md-6 col-lg-4">
            <img src="img/taco.jpg" class="img-fluid rounded-start" alt="..." />
          </div>
          <div class="col-12 col-md-6 col-lg-6">
            <div class="card-body">
              <h5 class="card-title">Taco mexicano.</h5>
              <p class="card-text">
                A tortilha de milho é aberta e crocante, e sobre ela vão
                frijoles refritos, queijo, carne ou frango, alface, tomate,
                guacamole e sour cream.
              </p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Fim Conteúdo-->

    <!-- Titulo da Seção -->
    <div
      id="experimente"
      class="w-100 fs-3"
      style="
        background-color: #c60c34;
        height: 60px;
        display: flex;
        align-items: center;
        justify-content: center;
        margin-top: 40px;
      "
    >
      <p style="margin-top: 15px; color: #f0f0f0">Experimente também</p>
    </div>
    <!-- /Titulo da Seção -->

    <!-- Conteudo experimente também -->
    <section class="container" style="margin-bottom: 50px; margin-top: 50px">
      <div class="row g-3">
        <div class="col-12 col-md-6 col-lg-4">
          <div class="card">
            <img
              src="img/espeto.jpg"
              alt="Um espeto de carne com legumes"
              class="card-img-top"
            />
            <div class="card-body">
              <h5 class="card-title">Espeto com legumes</h5>
              <p class="card-text">
                O espetinho de carne com legumes é uma ótima pedida. Seja
                servido como um vegetal lateral ou como prato principal.
              </p>
            </div>
          </div>
        </div>
        <div class="col-12 col-md-6 col-lg-4">
          <div class="card">
            <img
              src="img/feijoada.jpg"
              alt="Uma panela de feijoada"
              class="card-img-top"
            />
            <div class="card-body">
              <h5 class="card-title">Feijoada rápida</h5>
              <p class="card-text">
                A feijoada é um prato que consiste num guisado de feijões-pretos
                com vários tipos de carne de porco e de boi.
              </p>
            </div>
          </div>
        </div>
        <div class="col-12 col-md-6 col-lg-4">
          <div class="card">
            <img
              src="img/pizza-mussarela.jpg"
              alt="Um espeto de carne com legumes"
              class="card-img-top"
            />
            <div class="card-body">
              <h5 class="card-title">Pizza de mussarela</h5>
              <p class="card-text">
                A pizza de Mussarela é coberta com molho de tomate, queijo tipo
                mussarela, azeitona pretas, orégano e massa com fermetalão
                natural.
              </p>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- /Conteudo experimente também -->

  <?php include('../footer/rodape.php');?>