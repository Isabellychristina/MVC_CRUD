<?php

$nome = $_GET ['nome'];
$nota1 = $_GET ['n1'];
$nota2 = $_GET ['n2'];
$nota3 = $_GET ['n3'];
$nota4 = $_GET ['n4'];
 

$media = ($nota1 + $nota2 + $nota3 + $nota4) / 4;


echo "A media entre as notas $nota1 + $nota2 + $nota3 + $nota4 é $media";

$status = ($media<7)? "REPROVADO" : "APROVADO";

echo "$nome $status";


?>

