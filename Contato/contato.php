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

<div class="card p-3 m-4 mx-auto" style="width: 35%">
  <div class="text-center d-flex justify-content-center">
    <img src="img/chef.png" style="height: 2rem" />
    <p style="color: #236828">Contato</p>
  </div>
  <div class="card-body">
    <p class="lh-base">
      Suas opiniões, dúvidas, críticas, elogios e sugestões são muito
      importantes para nossa equipe.<br />
      Todas as mensagens recebidas são lidas e nos ajudam a aprimorar os
      serviços oferecidos, porém pedimos sua compreensão para o fato de que
      devido ao grande número de e-mails recebidos diariamente, nem sempre é
      possível oferecer um suporte individual para todos os usuários do
      site.<br />
      Para entrar em contato com a redação, envie um e-mail para
      lorem@ipsum.com.br.<br />
      Para contatos comerciais, envie um e-mail para lorem@ipsum.com.br
    </p>
  </div>
</div>

<!--Conteúdo-->

<?php include('../footer/rodape.php'); ?>