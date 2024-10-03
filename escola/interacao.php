<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "escola";
 
//Criando conexão
$conexao = new mysqli($servername, $username, $password, $dbname);
 
//Verificar conexão
if($conexao->connect_error){
    die("Falha ao conectar ao banco: ".$conexao->connect_error);
}
//echo"Conectado com sucesso.";
 
?>
 
