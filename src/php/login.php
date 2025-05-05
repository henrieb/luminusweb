<?php

//MUDAR PORTA PARA 3307 NA ESCOLA E 3306 EM CASA

include 'conexao.php';

if (!$conexao) {
    die("Erro na conexão com o banco de dados: " . mysqli_connect_error());
}

$username = mysqli_real_escape_string($conexao, $_POST["user"]);
$password = $_POST["senha"];

$sql = "SELECT * FROM cadastro WHERE username = '$username' and password = '$password' ";

$resultado = mysqli_query($conexao, $sql);
if (!$resultado) {
    die("Erro na consulta SQL: " . mysqli_error($conexao));
}

if (mysqli_num_rows($resultado) == 1) {
    $usuario = mysqli_fetch_assoc($resultado);
    session_start();
    $_SESSION["username"] = $username;
    header("Location: /luminus/index.html");
    exit();
} else {
    // Redireciona para login.html com erro na URL
    header("Location: /luminus/login.html?erro=1");
    exit();
}

mysqli_close($conexao);