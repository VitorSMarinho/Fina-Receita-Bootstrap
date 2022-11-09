<?php
session_start();

include "../conexao/conexao.php";

$logado = $_SESSION['email'];

if (empty($_SESSION) || $logado != "teste@teste.com") {
    unset($_SESSION['email']);
    unset($_SESSION['senha']);
    header("Location: ../home_page/home.php");
} else {
    include('../header/cabecalhoLogado.php');
}

?>

<div class="card mt-4 mb-4 mx-auto" style="width: 75%">
    <div class="card-header bg-success text-white">Usuários</div>
    <div class="card-body">
        <div class="row">
            <div class="col-2 mx-auto">
                <a href="../enviar_receita/envieReceita.php" class="btn btn-success">Nova Receita</a>
            </div>
            <div class="col-4">
                <input type="search" class="form-control" name="textoPesquisado" id="pesquisar" />
            </div>
            <div class="col-4">
                <button class="btn btn-primary" onclick="searchData()">Pesquisar</button>
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

<?php

if (!empty($_GET['search'])) {
    $data = $_GET['search'];
    $query = "SELECT * FROM receitas WHERE id LIKE '%$data%' or nome LIKE '%$data%' or receita LIKE '%$data%' ORDER BY id DESC";
    $resultado = mysqli_query($conexao, $query);

?>

    <table class="table table-hover table-striped mx-auto" style="width: 75%">
        <thead>
            <tr>
                <th>Id</th>
                <th>Receita</th>
                <th>Enviado por</th>
                <th>Tempo</th>
                <th>Redimento</th>
                <th>Imagem</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            <?php
            while ($linha = mysqli_fetch_array($resultado)) {
            ?>
                <tr>
                    <td><?php echo $linha["id"]; ?></td>
                    <td><?php echo $linha["receita"]; ?></td>
                    <td><?php echo $linha["nome"]; ?></td>
                    <td><?php echo $linha["tempo"]; ?></td>
                    <td><?php echo $linha["rendimento"]; ?></td>
                    <td><?php echo $linha["imagem"]; ?></td>
                    <td>
                        <a href="receitaEditar.php?id=<?php echo $linha['id']; ?>" class="btn btn-warning">Editar</a>
                        <a href="receitaDelete.php?id=<?php echo $linha['id']; ?>" class="btn btn-danger">Excluir</a>
                    </td>
                </tr>
            <?php
            }
            ?>
        </tbody>
    </table>

<?php

} else {
    $query = "select id, nome, receita, tempo, rendimento, imagem from receitas";
    $resultado = mysqli_query($conexao, $query);
?>

    <table class="table table-hover table-striped mx-auto" style="width: 75%">
        <thead>
            <tr>
                <th>Id</th>
                <th>Receita</th>
                <th>Enviado por</th>
                <th>Tempo</th>
                <th>Redimento</th>
                <th>Imagem</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            <?php
            while ($linha = mysqli_fetch_array($resultado)) {
            ?>
                <tr>
                    <td><?php echo $linha["id"]; ?></td>
                    <td><?php echo $linha["receita"]; ?></td>
                    <td><?php echo $linha["nome"]; ?></td>
                    <td><?php echo $linha["tempo"]; ?></td>
                    <td><?php echo $linha["rendimento"]; ?></td>
                    <td><?php echo $linha["imagem"]; ?></td>
                    <td>
                        <a href="receitaEditar.php?id=<?php echo $linha['id']; ?>" class="btn btn-warning">Editar</a>
                        <a href="receitaDelete.php?id=<?php echo $linha['id']; ?>" class="btn btn-danger">Excluir</a>
                    </td>
                </tr>
            <?php
            }
            ?>
        </tbody>
    </table>

<?php

}

?>

<script>
    var search = document.getElementById("pesquisar");

    pesquisar.addEventListener("keydown", function(event) {
        if (event.key === "Enter") {
            searchData();
        }
    });

    function searchData() {
        window.location = "receitas.php?search=" + search.value;
    }
</script>

<?php include('../footer/rodape.php'); ?>