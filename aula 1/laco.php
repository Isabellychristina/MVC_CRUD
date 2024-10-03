<?php
    $i = 1;
    while ($i <= 7){
    // para numeros pares
        if ($i % 2 == 0){

            echo "$i é um número par.";
            echo "<br>";            
        }
        $i++;
    }

    //while = verifica depois executa
    //do = executa e depois verifica
    echo "<br>";

    $x = 1;
    do {
        echo $x;
        echo "<br>";
        $x++;        
    } while ($x <= 6);
    echo "<br>";


    //incremental vale $y++ 1 quando o $y = 0

    echo "<br>";

    //if resumido separado por ? and : , é utilizado para interagir php no obj forms
    // se a condição for = 3 ele pula com o CONTINUE, se a condição for = 3 ele para com o BREAK   

    $y = 0;
    do {
        $y++; 
        if($y == 4) continue;
        echo $y;
        echo "<br>";
    } while ($y < 6);

    echo "<br>";

    // for = ele só trabalha com numero de 0 até 10

    for ($x = 0; $x <= 10; $x++) {
        echo "O número é: $x <br>";
    }

    // foreach usado quando é um array , ele passa por cada posição de nosso vetor
    echo "<br>";

    $cores = array ("vermelho", "verde", "azul", "amarelo");
    foreach ($cores as $cor) {
        echo "$cor <br>";
    }

    //
    echo "<br>";

    // idade pertence a nome, então : Isabelly tem 23 anos;
    $membros = array ("Isabelly"=>"23", "Pedro"=>"21", "Guilherme"=>"17", "Thales"=>"19");
    foreach ($membros as $nome => $idade) {
        echo "$nome : $idade <br>";
    }


    
?>