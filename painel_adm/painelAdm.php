<?php
session_start();

include "../conexao/conexao.php";

$logado = $_SESSION['email'];

if (empty($_SESSION) || $logado != "administrador@finareceita.com") {
  unset($_SESSION['email']);
  unset($_SESSION['senha']);

  header("Location: ../home_page/home.php");
} else {
  include('../header/cabecalhoLogado.php');
}

?>


<!--Conteúdo-->

<div class="card p-3 m-4 mx-auto" style="width: 20%; height:400px">
  <div class="text-center d-flex justify-content-center">
    <img src="img/eng.png" style="height: 2rem" />
    <p style="color: #236828">Painel do Administrador</p>
  </div>
  <div class="d-flex flex-column align-items-center">
    <a class="m-5" href="../receitas/receitas.php"><button type="button" class="btn btn-warning btn-lg">Receitas Enviadas</button></a>
    <a class="m-4" href="../usuarios/usuarios.php"><button type="button" class="btn btn-warning btn-lg">Contas Cadastradas</button></a>
  </div>
  <div class="card-body">

  </div>
</div>

<!--/Conteúdo-->

<?php include('../footer/rodape.php'); ?>