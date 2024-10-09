<?php

$dsn = 'mysql:host=localhost;dbname=clinicanekodb';
$user = 'root';
$pass = '';

$conexao = new PDO($dsn, $user, $pass);

$conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

var_dump($conexao);

?>