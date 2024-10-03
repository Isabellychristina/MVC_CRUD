<?php

include('interacao.php');

$nome = $_POST["nome"];
$usuario = $_POST["usuario"];
$senha = $_POST["senha"];
$usuarioantigo = $_POST["usuarioantigo"];

$update = "UPDATE usuarios set
    nome = '$nome',
    usuario = '$usuario',
    senha = '$senha'
    where usuario = '$usuarioantigo'";

$retorno = $conexao->exec($update);

header("location: login.php");

?>