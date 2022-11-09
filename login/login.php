<?php
if (empty($_SESSION)) {
    session_start();
    unset($_SESSION['email']);
    unset($_SESSION['senha']);
    include('../header/cabecalho.php');
} else {
    unset($_SESSION['email']);
    unset($_SESSION['senha']);
}

include "../conexao/conexao.php";
?>

<!--Conteúdo-->
<div class="card p-3 m-4 mx-auto" style="width: 65%; height:400px">
    <div class="text-center d-flex justify-content-center mt-5">
        <p style="color: #236828; font-size: 20px;">Bem Vindo(a) de volta!</p>
    </div>
    <div class="d-flex justify-content-center">
        <form action="./testeLogin.php" class="row g-3 col-md-4" method="POST">
            <div class="mt-3 row">
                <input type="text" class="form-control" name="email" require="require" id="email" placeholder="Email">
            </div>
            <div class="mt-3 row">
                <label for="inputPassword2" class="visually-hidden">Password</label>
                <input type="password" name="senha" class="form-control" id="senha" placeholder="Senha">
            </div>
            <div class="mt-3 row">
                <input type="submit" name="submit" class="btn btn-primary mb-3" style="background-color:#4EB556; border:0"></input>
            </div>
        </form>
    </div>
</div>
<!--Conteúdo-->

<?php include('../footer/rodape.php'); ?>