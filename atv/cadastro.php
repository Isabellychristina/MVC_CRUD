<?php

include('interacao.php');

$query = 'SELECT * FROM usuario';

$retorno = $conexao->query($query);

$registros = $retorno->fetchAll(PDO::FETCH_ASSOC);

echo '
<a href="inserir.php">
<button type="button">
    Inserir
    </button>
</a>
<br>';

echo '<hr>';
foreach($registros as $registro){
    echo 'Nome:' .$registro['nome'];
    echo '<br>Sobrenome:' .$registro['sobrenome'];
    echo '<br>Email:' .$registro['email'];
    echo '<br>Senha:' .$registro['senha'];
    echo '<br><a href="atualizar.php?email='.$registro['email'];
    echo '"><img src="editar.png" width=2%<a><a>';
    echo '<hr>';
    echo '<br>';
    echo '&nbsp&nbsp';
    echo '<img src="deletar.png" width=2%';
    echo '<hr width=30% align="left">';
    echo '<pre>';
}