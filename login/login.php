<?php include('../header/cabecalho.php');?>

<!--Conteúdo-->
<div class="card p-3 m-4 mx-auto" style="width: 65%;">
    <div class="text-center d-flex justify-content-center">
        <p style="color: #236828; font-size: 20px;">Bem Vindo(a) de volta!</p>
    </div>
    <div class="d-flex justify-content-center">
        <form class="row g-3 col-md-4">
            <div class="mt-3 row">
                <input type="text" class="form-control" require="require" id="email" placeholder="Email">
            </div>
            <div class="mt-3 row">
                <label for="inputPassword2" class="visually-hidden">Password</label>
                <input type="password" class="form-control" id="inputPassword2" placeholder="Senha">
            </div>
            <div class="mt-3 row">
                <button type="submit" class="btn btn-primary mb-3" style="background-color:#4EB556; border:0">Entrar</button>
            </div>
        </form>
    </div>
</div>
<!--Conteúdo-->

<?php include('../footer/rodape.php');?>