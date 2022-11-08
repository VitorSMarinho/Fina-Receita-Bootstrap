<?php
include('../header/cabecalho.php');
include "../conexao/conexao.php";

$query = "select id, nome, email, nascimento, endereco, cidade, estado, sexo from usuarios";
$resultado = mysqli_query($conexao, $query);
?>

<div class="card mt-4 mb-4 mx-auto" style="width: 75%">
    <div class="card-header bg-primary text-white">Usuários</div>
    <div class="card-body">
        <div class="row">
            <div class="col-2 mx-auto">
                <a href="../cadastro/cadastro.php" class="btn btn-success">Novo Usuário</a>
            </div>
            <div class="col-2">
                <select name="opcao" class="form-control">
                    <option selected="selected" value="0">Todos</option>
                    <option value="1">Por Nome</option>
                    <option value="2">Por Código</option>
                </select>
            </div>
            <div class="col-4">
                <input type="text" class="form-control" name="textoPesquisado" />
            </div>
            <div class="col-2">
                <button class="btn btn-primary">Pesquisar</button>
            </div>
        </div>
    </div>
</div>

<?php

if (isset($_GET["sucesso"]) && !empty($_GET["sucesso"])) {
?>
    <div class="alert alert-success">
        <?php echo $_GET["sucesso"]; ?>
    </div>
<?php
}

if (isset($_GET["erro"]) && !empty($_GET["erro"])) {
?>
    <div class="alert alert-danger">
        <?php echo $_GET["erro"]; ?>
    </div>
<?php
}

?>

<table class="table table-hover table-striped mx-auto" style="width: 75%">
    <thead>
        <tr>
            <th>Id</th>
            <th>Nome</th>
            <th>E-mail</th>
            <th>Nascimento <br> Ano/Mês/Dia</th>
            <th>Endereço</th>
            <th>Cidade</th>
            <th>Estado</th>
            <th>Sexo</th>
            <th></th>
        </tr>
    </thead>
    <tbody>
        <?php
        while ($linha = mysqli_fetch_array($resultado)) {
        ?>
            <tr>
                <td><?php echo $linha["id"]; ?></td>
                <td><?php echo $linha["nome"]; ?></td>
                <td><?php echo $linha["email"]; ?></td>
                <td><?php echo $linha["nascimento"]; ?></td>
                <td><?php echo $linha["endereco"]; ?></td>
                <td><?php echo $linha["cidade"]; ?></td>
                <td><?php echo $linha["estado"]; ?></td>
                <td><?php echo $linha["sexo"]; ?></td>
                <td>
                    <a href="usuarioEditar.php?id=<?php echo $linha['id']; ?>" class="btn btn-warning">Editar</a>
                    <a href="usuarioDelete.php?id=<?php echo $linha['id']; ?>" class="btn btn-danger">Excluir</a>
                </td>
            </tr>
        <?php
        }
        ?>
    </tbody>
</table>

<?php include('../footer/rodape.php'); ?>