<?php

//MUDAR PORTA PARA 3307 NA ESCOLA E 3306 EM CASA

include 'conexao.php';

if (!$conexao) {
    die("Erro na conexão com o banco de dados: " . mysqli_connect_error());
}

$nome = $_POST['user'];
$email = $_POST['email'];
$senha = $_POST['senha'];


$sql_verificar_email = "SELECT * FROM cadastro WHERE email = '$email'";
$resultado_verificar_email = mysqli_query($conexao, $sql_verificar_email);

if (mysqli_num_rows($resultado_verificar_email) > 0) {
    header("Location: /luminus/cadastro.html?erro=1");
    exit();
}

$cadastrar = mysqli_query($conexao, "insert into cadastro(username, email, password) values ('$nome','$email','$senha')");

session_start();
$_SESSION["username"] = $username;
header("Location: /luminus/index.html");
exit();