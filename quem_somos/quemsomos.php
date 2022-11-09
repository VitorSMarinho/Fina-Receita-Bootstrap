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

<div class="card p-3 m-4 mx-auto  d-flex align-items-center" style="width: 35%; height:400px">
  <div class="text-center d-flex justify-content-center mt-4">
    <img src="img/chef.png" style="height: 2rem" />
    <p style="color: #236828">Quem somos</p>
  </div>
  <div class="card-body mt-5">
    <p class="lh-lg" style="color: #236828">
      Estudantes do curso em Tecnologia em Sistemas para Internet.<br />
      Igor Micali<br />
      Vitor dos Santos Marinho<br />
      William Fernandes Pereira
    </p>
  </div>
</div>

<!--/Conteúdo-->

<?php include('../footer/rodape.php'); ?>