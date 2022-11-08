<?php
include('../header/cabecalho.php');

if (isset($_POST) && !empty($_POST)) {
  if (empty($_POST["Nome"])) {
?>
    <div class="alert alert-danger">
      O campo nome não pode estar vazio
    </div>
  <?php

  } else if (empty($_POST["Email"])) {
  ?>
    <div class="alert alert-danger">
      O campo e-mail não pode estar vazio
    </div>
  <?php
  } else if (empty($_POST["Senha"])) {
  ?>
    <div class="alert alert-danger">
      O campo senha não pode estar vazio
    </div>
  <?php
  } else if (empty($_POST["ConfSenha"])) {
  ?>
    <div class="alert alert-danger">
      Por favor confirme sua senha.
    </div>
  <?php
  } else if (empty($_POST["Nascimento"])) {
  ?>
    <div class="alert alert-danger">
      Por favor informe sua data de nascimento
    </div>
  <?php
  } else if (empty($_POST["Endereco"])) {
  ?>
    <div class="alert alert-danger">
      Por favor informe seu endereço
    </div>
  <?php
  } else if (empty($_POST["Cidade"])) {
  ?>
    <div class="alert alert-danger">
      Por favor informe sua cidade
    </div>
  <?php
  } else if (empty($_POST["Estado"])) {
  ?>
    <div class="alert alert-danger">
      Por favor informe seu Estado
    </div>
  <?php
  } else if (empty($_POST["inlineRadio1"]) && empty($_POST["inlineRadio2"])) {
  ?>
    <div class="alert alert-danger">
      Por favor selecione seu sexo
    </div>
  <?php
  } else if (($_POST["Senha"]) != ($_POST["ConfSenha"])) {
  ?>
    <div class="alert alert-danger">
      As senhas digitadas não são iguais
    </div>
    <?php
  } else {
    include "../conexao/conexao.php";
    $nome = $_POST["Nome"];
    $email = $_POST["Email"];
    $senha = hash('sha512', $_POST["Senha"]);
    $nascimento = $_POST["Nascimento"];
    $endereco = $_POST["Endereco"];
    $cidade = $_POST["Cidade"];
    $estado = $_POST["Estado"];
    if (empty($_POST["inlineRadio1"])) {
      $sexo = "F";
    }
    if (empty($_POST["inlineRadio2"])) {
      $sexo = "M";
    }

    $query = "insert into usuarios (nome, email, senha, nascimento, endereco, cidade, estado, sexo) values('$nome', '$email', '$senha', '$nascimento', '$endereco', '$cidade', '$estado', '$sexo')";
    $resultado = mysqli_query($conexao, $query);
    if ($resultado == 1) {
    ?>
      <div class="alert alert-success">
        Usuário Inserido com Sucesso
      </div>
<?php
    }
  }
}
?>

<!--Conteúdo-->
<div class="card p-3 m-4 mx-auto" style="width: 75%;">
  <div class="text-center d-flex justify-content-center">
    <p style="color: #236828; font-size: 20px;">Bem Vindo(a)!</p>
  </div>
  <div class="card-body">
    <form class="row g-3" action="./cadastro.php" method="post">
      <div class="col-md-6">
        <input type="text" class="form-control" name="Nome" id="Nome" placeholder="Nome">
      </div>
      <div class="col-md-6">
        <input type="text" class="form-control" name="Email" require="require" id="email" placeholder="Email">
      </div>
      <div class="col-md-6">
        <input type="password" class="form-control" name="Senha" id="Senha" placeholder="Senha">
      </div>
      <div class="col-md-6">
        <input type="password" class="form-control" name="ConfSenha" id="ConfSenha" placeholder="Confirmar senha">
      </div>
      <label style="color: #236828; font-size: 20px;">Data de nascimento</label>
      <div class="col-md-6">
        <input type="date" name="Nascimento" id="Nascimento">
      </div>
      <div>
        <p><label style="color: #236828; font-size: 20px;">Endereço</label></p>
        <p><input type="text" class="form-control" name="Endereco" id="Endereco" placeholder="Preencher"></p>
        <p><label style="color: #236828; font-size: 20px;">Cidade</label></p>
        <p><input type="text" class="form-control" name="Cidade" id="Cidade" placeholder="Preencher"></p>

        <p><label style="color: #236828; font-size: 20px;">Estado</label></p>
        <div class="col-md-4">
          <select class="form-control-sm" name="Estado" id="Estado">
            <option></option>
            <option>SP</option>
            <option>RJ</option>
            <option>AC</option>
            <option>AL</option>
            <option>AP</option>
            <option>AM</option>
            <option>BA</option>
            <option>CE</option>
            <option>DF</option>
            <option>ES</option>
            <option>GO</option>
            <option>MA</option>
            <option>MT</option>
            <option>MS</option>
            <option>MG</option>
            <option>PA</option>
            <option>PB</option>
            <option>PR</option>
            <option>PE</option>
            <option>PI</option>
            <option>RN</option>
            <option>RS</option>
            <option>RO</option>
            <option>RR</option>
            <option>SC</option>
            <option>SE</option>
            <option>TO</option>
          </select>
        </div>
      </div>
      <label style="color: #236828; font-size: 20px;">Sexo</label>

      <div class="form-check form-check-inline">
        <input class="form-check-input" type="radio" name="inlineRadio1" id="inlineRadio1" value="option1">
        <label class="form-check-label" for="inlineRadio1">Masculino</label>
      </div>
      <div class="form-check form-check-inline">
        <input class="form-check-input" type="radio" name="inlineRadio2" id="inlineRadio2" value="option2">
        <label class="form-check-label" for="inlineRadio2">Feminino</label>
      </div>
      <div class="d-flex justify-content-center">
        <button type="submit" class="btn btn-primary" style="background-color:#4EB556; border:0; margin-top: 15px;">Cadastrar</button>
      </div>
    </form>
  </div>
</div>
<!--Conteúdo-->

<?php include('../footer/rodape.php'); ?>