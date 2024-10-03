<?php

//classe contas
class contas 
{
    // variaveis publicas
    public $saldo;
    public $titular;

    // metodo para fazer saque
    // parametros é o que esta dentro dos parenteses

    public function sacar($valor)
    {
    // br = quebra de linha
        echo "<hr>Saque Efetuado Valor: <br> $valor <\br><br>";
        $this->saldo = $this->saldo - $valor;

    }

    
    //metodo para depositar
    public function depositar($valor)
    {
        echo "<hr>Deposito Efetuado valor: <br> $valor <\br><br>";
        $this->saldo = $this->saldo + $valor;

    }


    //Retorna o saldo atual
    public function verSaldo()
    {
        return $this->saldo;
    }


}

$conta1 = new Contas();
$conta2 = new Contas();

$conta1->titular = 'Luciana de Souza Lima';
$conta2->titular = 'Aline de Oliveira';

$conta1->depositar(500);
$conta2->depositar(1000);

echo '<pre>';
var_dump($conta1);
echo '<hr>';
var_dump($conta2);


echo '<hr>';
echo 'Saldo atual em Conta1: ' . $conta1->verSaldo();
echo '<br>';
echo 'Saldo atual em Conta1: ' . $conta1->verSaldo();

echo '<hr>';
$conta1->sacar(400);
$conta2->sacar(600);
echo '<hr>';
echo 'Saldo atual em Conta1: ' . $conta1->verSaldo();
echo '<br>';
echo 'Saldo atual em Conta2: ' . $conta2->verSaldo();

echo '<hr>';
echo 'Titular da Conta1: ' . $conta1->titular;
echo '<br>';
echo 'Titular da Conta2: ' . $conta2->titular;


?>
