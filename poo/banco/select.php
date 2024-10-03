<?php

include('conexao.php');

$query = "SELECT * FROM produtos limit 3";

$retorno = $conexao->query($query);

$registros = $retorno->fetchAll(PDO::FETCH_ASSOC);

echo '<hr>';

foreach($registros as $registro){
    echo 'Id:' .$registro['id'];
    echo '<br>Filme:' .$registro['filme'];
    echo '<br>Genero:' .$registro['genero'];
    echo '<br>Indicação:' .$registro['indicacao'];
    echo '<hr>';
    echo '<br>';
    
}

echo '<pre>';

print_r($registros);
?>