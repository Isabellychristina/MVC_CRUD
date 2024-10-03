<?php

include('interacao.php');

$nome = $_POST["nome"];
$usuario = $_POST["usuario"];
$senha = $_POST["senha"];

$comando = "

INSERT INTO usuarios (nome, usuario, senha)
VALUES('$nome','$usuario','$senha')";

$retorno = $conexao->query($comando);

header("location: login.php");
