<?php
session_start();
include "../conexao/conexao.php";
//echo "<pre>";
//print_r($_REQUEST);
//echo "</pre>";
if (isset($_POST['submit']) && !empty($_POST['email']) && !empty($_POST['senha'])) {

    $email = $_POST['email'];
    $senha = hash('sha512', $_POST['senha']);

    //print_r('Email: ' . $email);
    //print_r('Senha: ' . $senha);

    $sql = "SELECT * FROM usuarios WHERE email = '$email' and senha = '$senha'";
    $resultado = $conexao->query($sql);

    echo "<pre>";
    print_r($resultado);
    echo "</pre>";

    if (mysqli_num_rows($resultado) < 1) {
        //print_r('Não existe');
        unset($_SESSION['email']);
        unset($_SESSION['senha']);
        header('Location: login.php');
    } else {
        //print_r('Existe');
        $_SESSION['email'] = $email;
        $_SESSION['senha'] = $senha;
        header('Location: ../home_page/home.php');
    }
} else {
    header('Location: login.php');
}

?>

<!--Teste-->