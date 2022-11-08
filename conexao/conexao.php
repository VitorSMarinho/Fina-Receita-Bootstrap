<?php
$servidor = "localhost";
$username = "root";
$password = "";
$dbname = "finareceita";

$conexao = mysqli_connect($servidor, $username, $password) or die("Não foi possível conectar");

mysqli_select_db($conexao, $dbname);

?>

<!--Teste-->