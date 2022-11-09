<?php

if (isset($_POST) && !empty($_POST)) {
    $id = $_POST["Id"];
    $nome = $_POST["Nome"];
    $email = $_POST["Email"];
    $nascimento = $_POST["Nascimento"];
    $endereco = $_POST["Endereco"];
    $cidade = $_POST["Cidade"];
    $estado = $_POST["Estado"];
    $sexo = $_POST["Sexo"];
    include "../conexao/conexao.php";
    $query = "update usuarios set nome = '$nome', email = '$email', nascimento = '$nascimento', endereco = '$endereco', cidade = '$cidade', estado = '$estado', sexo = '$sexo' where id = " . $id;
    $resultado = mysqli_query($conexao, $query);

    header("Location: usuarios.php?mensagem=Usuário editado com sucesso");
    exit();
} else if (isset($_GET["id"]) && !empty($_GET["id"])) {
    include "../conexao/conexao.php";
    $query = "select * from usuarios where id = " . $_GET["id"];
    $resultado = mysqli_query($conexao, $query);
    $dados = mysqli_fetch_array($resultado);

    $id = $dados["id"];
    $nome = $dados["nome"];
    $email = $dados["email"];
    $nascimento = $dados["nascimento"];
    $endereco = $dados["endereco"];
    $cidade = $dados["cidade"];
    $estado = $dados["estado"];
    $sexo = $dados["sexo"];
} else {
    header("Location: usuarios.php?erro=Selecione um registro para editar");
    exit();
}
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

<div class="card p-3 m-4 mx-auto" style="width: 75%;">
    <div class="text-center d-flex justify-content-center">
        <p style="color: #236828; font-size: 20px;">Editar Usuário</p>
    </div>
    <div class="card-body">
        <form class="row g-3" action="./usuarioEditar.php" method="post">
            <div class="col-md-6">
                <input type="text" class="form-control" name="Id" value="<?php echo $id; ?>" readonly id="Id" placeholder="ID">
            </div>
            <div class="col-md-6">
                <input type="text" class="form-control" name="Nome" value="<?php echo $nome; ?>" id="Nome" placeholder="Nome">
            </div>
            <div class="col-md-6">
                <input type="text" class="form-control" name="Email" value="<?php echo $email; ?>" require="require" id="email" placeholder="Email">
            </div>
            <label style="color: #236828; font-size: 20px;">Data de nascimento</label>
            <div class="col-md-6">
                <input type="date" name="Nascimento" id="Nascimento" value="<?php echo $nascimento; ?>">
            </div>
            <div>
                <p><label style="color: #236828; font-size: 20px;">Endereço</label></p>
                <p><input type="text" class="form-control" name="Endereco" id="Endereco" value="<?php echo $endereco; ?>" placeholder="Preencher"></p>
                <p><label style="color: #236828; font-size: 20px;">Cidade</label></p>
                <p><input type="text" class="form-control" name="Cidade" id="Cidade" value="<?php echo $cidade; ?>" placeholder="Preencher"></p>

                <p><label style="color: #236828; font-size: 20px;">Estado</label></p>
                <div class="col-md-4">
                    <p><input type="text" maxlength="2" class="form-control" name="Estado" id="estado" style="width:60px" value="<?php echo $estado; ?>"></p>
                </div>
            </div>
            <label style="color: #236828; font-size: 20px;">Sexo</label>
            <p><input type="text" maxlength="1" class="form-control" name="Sexo" id="sexo" style="width:60px" value="<?php echo $sexo; ?>"></p>

            <div class="d-flex justify-content-center">
                <button type="submit" class="btn btn-primary" style="background-color:#4EB556; border:0; margin-top: 15px;">Editar usuário</button>
            </div>
        </form>
    </div>
</div>

<?php include('../footer/rodape.php'); ?>