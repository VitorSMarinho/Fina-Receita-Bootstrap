<?php
if (isset($_GET["id"]) && !empty($_GET["id"])) {
    include "../conexao/conexao.php";
    $query = "delete from receitas where id = " . $_GET["id"];
    $resultado = mysqli_query($conexao, $query);
    if ($resultado) {
        header("Location: receitas.php?sucesso=Excluído com sucesso");
        exit();
    } else {
        header("Location: receitas.php?erro=Ocorreu algum erro");
        exit();
    }
} else {
    header("Location: receitas.php?erro=Selecione um registro para excluir");
    exit();
}
?>

<!--Teste-->