<?php

class Calculadora 
{
    
    public function somar($n1, $n2)
    {
        echo '<hr>';
        echo "A Soma de $n1 e $n2 é : " .  $n1+$n2;
        echo '<hr>';
    }

    public function subtrair($n1, $n2)
    {
        echo "A Subtração de $n1 e $n2 é : " .  $n1-$n2;
        echo '<hr>';
    }

    public function dividir($n1, $n2)
    {
        echo "A Divisão de $n1 e $n2 é : " .  $n1/$n2;
        echo '<hr>';
    }

    public function multiplicar($n1, $n2)
    {
        echo "A Multiplicação de $n1 e $n2 é : " .  $n1*$n2;
        echo '<hr>';
    }

}


$calculadora = new Calculadora();
$calculadora-> somar(4,5);
$calculadora-> subtrair(47,25);
$calculadora-> dividir(16,4);
$calculadora-> multiplicar(21,45);


?>