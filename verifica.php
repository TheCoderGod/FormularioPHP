<?php

$servidor = '127.0.0.1';
$usuario = 'root';
$senha = '';
$bancoDados = 'curso_php';

// Conexão usando mysqli
$conexao = mysqli_connect($servidor, $usuario, $senha, $bancoDados);

// Verifica se a conexão foi bem sucedida
if (!$conexao) {
    die("Problemas para conectar no banco. Verifique os dados: " . mysqli_connect_error());
}

// Recebe os dados do formulário
$login = $_POST["login"];
$senha = $_POST["senha"];

// Protege contra SQL Injection
$login = mysqli_real_escape_string($conexao, $login);
$senha = mysqli_real_escape_string($conexao, $senha);

// Consulta SQL
$selecao = mysqli_query($conexao, "SELECT * FROM cadastro WHERE login = '$login' AND senha = '$senha'");

// Verifica se a consulta retornou algum resultado
if (mysqli_num_rows($selecao) > 0) {
    echo "Bem vindo(a) <b>$login</b>";
} else {
    echo "Login e/ou senha inválidos! Volte e tente novamente.";
}

// Fecha a conexão
mysqli_close($conexao);
?>


