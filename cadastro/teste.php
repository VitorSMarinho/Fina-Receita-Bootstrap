<?php
$titulo = "Cadastro de Usuários";
include('../header/cabecalho.php');

if (isset($_POST) && !empty($_POST)) {
    if (empty($_POST["Nome"])) {
        echo "<pre>";
        print_r($_POST);
        echo "</pre>";
?>
        <div class="alert alert-danger">
            O campo nome não pode estar vazio
        </div>
    <?php

    } else if (empty($_POST["Login"])) {
        echo "<pre>";
        print_r($_POST);
        echo "</pre>";
    ?>
        <div class="alert alert-danger">
            O campo login não pode estar vazio
        </div>
<?php
    }
}
?>

<div class="card">

    <div class="card-header">
        <h3>Cadastro de Usuários</h3>
    </div>

    <div class="card-body">
        <div class="row">
            <div class="col-md-4 offset-4">
                <form action="./teste.php" method="post">
                    <div class="form-group">
                        <label>Nome</label>
                        <input type="text" name="Nome" class="form-control" />
                    </div>

                    <div class="form-group">
                        <label>Login</label>
                        <input type="text" name="Login" class="form-control" />
                    </div>

                    <div class="form-group">
                        <label>Senha</label>
                        <input type="password" name="Senha" class="form-control" />
                    </div>

                    <div class="form-group">
                        <label>Ativo ?</label>
                        <input type="checkbox" name="Ativo" class="form-check" />
                    </div>

                    <div class="form-group">
                        <button class="btn btn-success" type="submit">Cadastrar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

</div>

<?php include('../footer/rodape.php'); ?>