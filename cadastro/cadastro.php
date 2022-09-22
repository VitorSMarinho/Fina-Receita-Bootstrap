<?php include('../header/cabecalho.php');?>

<!--Conteúdo-->
<div class="card p-3 m-4 mx-auto" style="width: 75%;">
  <div class="text-center d-flex justify-content-center">
    <p style="color: #236828; font-size: 20px;">Bem Vindo(a)!</p>
  </div>
  <div class="card-body">
    <form class="row g-3">
      <div class="col-md-6">
        <input type="text" class="form-control" id="nome" placeholder="Nome">
      </div>
      <div class="col-md-6">
        <input type="text" class="form-control" require="require" id="email" placeholder="Email">
      </div>
      <div class="col-md-6">
        <input type="password" class="form-control" id="senha" placeholder="Senha">
      </div>
      <div class="col-md-6">
        <input type="password" class="form-control" id="confsenha" placeholder="Confirmar senha">
      </div>
      <label style="color: #236828; font-size: 20px;">Data de nascimento</label>
      <div class="col-md-6">
        <input type="date">
      </div>
      <div>
      <p><label style="color: #236828; font-size: 20px;">Endereço</label></p>
      <p><input type="text" class="form-control" id="nome" placeholder="Preencher"></p>
      <p><label style="color: #236828; font-size: 20px;">Cidade</label></p>
      <p><input type="text" class="form-control" id="nome" placeholder="Preencher"></p>
      
      <p><label style="color: #236828; font-size: 20px;">Estado</label></p>
      <div class="col-md-4">
        <select class="form-control-sm">
          <option>Selecione</option>
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
    </form>
    <div class="form-check form-check-inline">
      <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
      <label class="form-check-label" for="inlineRadio1">Masculino</label>
    </div>
    <div class="form-check form-check-inline">
      <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
      <label class="form-check-label" for="inlineRadio2">Feminino</label>
    </div>
    <form class="row g-3">
      
      <div class="d-flex justify-content-center">
        <button type="submit" class="btn btn-primary" style="background-color:#4EB556; border:0; margin-top: 15px;">Cadastrar</button>
      </div>
    </form>
  </div>
</div>
<!--Conteúdo-->

<?php include('../footer/rodape.php');?>