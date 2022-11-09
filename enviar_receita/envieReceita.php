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

<div class="card p-3 m-4 mx-auto" style="width: 75%;">
  <div class="text-center d-flex justify-content-center">
    <img src="img/chef.png" style="height: 3rem;" />
    <p style="color: #236828; font-size: 20px;">Envie sua receita</p>
  </div>
  <div class="card-body">
    <form class="row g-3">
      <div class="col-md-6">
        <input type="text" class="form-control" id="inputEmail4" placeholder="Seu nome">
      </div>
      <div class="col-md-6">
        <input type="text" class="form-control" id="inputPassword4" placeholder="Nome da receita">
      </div>
      <div class="col-12" style="display: flex; align-items: center; justify-content: center">
        <label for="file" class="col-12" id="enviarimagem" style="margin-right: 15px;">Adicionar fotos</label>
        <input type="file" id="file" accept="image/*" class="col-12">
        <label for="inputAddress2" class="form-label">Tempo de preparo</label>
        <input type="text" class="form-control" id="inputAddress2" style="width: 50px; margin-left: 15px;">
        <label for="inputCity" class="form-label" style="margin-left: 15px;">Rendimento</label>
        <input type="text" class="form-control" id="inputCity" style="width:50px; margin-left: 15px;">
      </div>
      <div class="textdesc">
        <div class="text-center d-flex justify-content-center">
          <img src="img/apron.png" style="height: 3rem" />
          <p style="color: #236828; font-size: 20px;">Ingredientes</p>
        </div>
        <p style="color: #236828; font-weight: bold;">Escreva cada ingrediente por linha e, para separar, não use hífen, númeração ou outro marcador.</p>
        <textarea class="form-control" rows="5" placeholder="Ex: 3 ovos."></textarea>
      </div>
      <div class="textdesc">
        <div class="text-center d-flex justify-content-center">
          <img src="img/pan.png" style="height: 2rem" />
          <p style="color: #236828; font-size: 20px;">Modo de preparo</p>
        </div>
        <p style="color: #236828; font-weight: bold;">Descreva os passos por linha e, para separar, não use hífen, númeração ou outro marcador.</p>
        <textarea class="form-control" rows="5" placeholder="Ex: Bata todos os ingredientes..."></textarea>
      </div>
      <div class="textdesc">
        <div class="text-center d-flex justify-content-center">
          <p style="color: #236828; font-size: 20px;">Antes de enviar</p>
        </div>
        <ul style="color: #236828; font-size: 20px;">
          <li>Revise sua receita para ter certeza que as quantidades estão corretas e todos os intens estão listados.</li>
          <li>Por favor, só envie fotos tiradas por você, fotos tiradas da internet não serão aceitas e você ainda corre risco de ter seu cadastro removido do site.</li>
          <li>As informações serão posteriormente formatadas pela equipe do site.</li>
        </ul>
        <button type="submit" class="btn btn-primary" style="background-color:#4EB556; border:0; margin-top: 15px;">Enviar Receita</button>
      </div>
    </form>
  </div>
</div>

<!--/Conteúdo-->

<?php include('../footer/rodape.php'); ?>