<?php
if (empty($_SESSION)) {
  session_start();
}

include "../conexao/conexao.php";

$logado = $_SESSION['email'];
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Homepage</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />
  <link rel="stylesheet" href="css/style.css">
</head>

<body style="background-color: #f0f0f0">
  <!--Menu-->

  <nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #db0138">
    <div class="container-fluid">
      <a class="navbar-brand ms-2" href="../home_page/home.php"><img src="./img/FinaReceita.png" alt="logo" style="height: 3rem" /></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <!--Search Engine-->

      <div class="collapse navbar-collapse ms-4 me-2" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0 d-flex align-items-center">
          <li class="nav-item ms-3 mt-3">
            <div class="log">
              <a href="../login/sair.php" style="text-decoration: none; color:white">
                <p class="d-flex align-items-center"><img src="./img/enter.png" alt="sair" style="height: 2em;" />
                  Sair
                </p>
              </a>
            </div>
          </li>

          <li class="nav-item ms-5 mt-3">
            <div class="log">
              <a href="../enviar_receita/envieReceita.php" style="text-decoration: none; color:white">
                <p class="d-flex align-items-center"><img src="./img/notes.png" alt="sair" style="height: 2em;" />
                  Enviar Receita
                </p>
              </a>
            </div>
          </li>
          <?php

          if ($logado == "teste@teste.com") {
          ?> <li class="nav-item ms-5 mt-3">
              <div class="log">
                <a href="../usuarios/usuarios.php" style="text-decoration: none; color:white">
                  <p class="d-flex align-items-center"><img src="./img/edit.png" alt="cadastrar-se" style="height: 2em;" />Editar Usuários
                  </p>
                </a>
              </div>
            </li>

          <?php
          }

          ?>
          <li class="nav-item ms-3 mt-3">
            <div class="log ms-5">
              <?php
              echo "<p style='color:white'>Bem vindo $logado</p>";
              ?>
            </div>
          </li>


        </ul>
        <form class="d-flex">
          <input class="form-control me-2" type="search" placeholder="Digite sua busca!" aria-label="Search" />
          <button class="btn btn-outline-light" type="submit">Buscar</button>
        </form>
      </div>

      <!--/Search Engine-->
    </div>
  </nav>

  <!--Categories Menu-->

  <div class="d-flex flex-wrap d-flex justify-content-evenly" style="background-color: #c60c34">
    <!--Dropdown 1-->

    <div class="dropdown">
      <a class="btn btn-danger dropdown-toggle" style="background-color: #c60c34; border-style: none" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
        Doces
      </a>

      <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
        <li><a class="dropdown-item" href="../bolo_cenoura/bolo_cenoura.php">Bolo de cenoura</a></li>
        <li><a class="dropdown-item" href="../bombom/bombom.php">Bombom na Travessa</a></li>
        <li><a class="dropdown-item" href="../brigadeiro/brigadeiro.php">Brigadeiro</a></li>
        <li><a class="dropdown-item" href="../pudim/pudim.php">Pudim de leite</a></li>
        <li><a class="dropdown-item" href="../sonho/sonho.php">Sonho</a></li>
      </ul>
    </div>

    <!--/Dropdown 1-->

    <!--Dropdown 2-->

    <div class="dropdown">
      <a class="btn btn-danger dropdown-toggle" style="background-color: #c60c34; border-style: none" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
        Salgados
      </a>

      <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
        <li><a class="dropdown-item" href="../espeto/espeto.php">Espeto com Legumes</a></li>
        <li><a class="dropdown-item" href="../feijoada/feijoada.php">Feijoada</a></li>
        <li><a class="dropdown-item" href="../hotdog/hotdog.php">Hot Dog</a></li>
        <li><a class="dropdown-item" href="../lasanha/lasanha.php">Lasanha</a></li>
        <li><a class="dropdown-item" href="../macarrao/macarrao.php">Macarrão a Bolonhesa</a></li>
        <li><a class="dropdown-item" href="../pizza/pizza.php">Pizza de Mussarela</a></li>
        <li><a class="dropdown-item" href="../taco/taco_mexicano.php">Taco</a></li>
      </ul>
    </div>

    <!--/Dropdown 2-->

    <!--Dropdown 3-->

    <div class="dropdown">
      <a class="btn btn-danger dropdown-toggle" style="background-color: #c60c34; border-style: none" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
        Alimentação Saudável
      </a>

      <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
        <li><a class="dropdown-item" href="../beringela/beringela.php">Beringela e Frango Fit</a></li>
        <li><a class="dropdown-item" href="../omelete_fit/omelete_fit.php">Omelete Fit</a></li>
        <li><a class="dropdown-item" href="../omelete_forno/omelete_forno.php">Omelete de Forno</a></li>
        <li><a class="dropdown-item" href="../salada/salada.php">Grão de Bico e Bacalhau</a></li>
        <li><a class="dropdown-item" href="../salmao_grelhado/salmao_grelhado.php">Salmão Grelhado</a></li>
        <li><a class="dropdown-item" href="../tabule/tabule.php">Tabule</a></li>
      </ul>
    </div>

    <!--/Dropdown 3-->
  </div>

  <!--/Categories Menu-->

  <!--/Menu-->