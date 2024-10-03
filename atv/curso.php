<?php

class Curso{

    // meus atributos
    private $descricao;
    private $preco;

    // metodo
    public function getDetalhes(){
        return "O produto {$this->descricao}  custa {$this->preco} reais";


    } 

    // usar o set para validar a entrada do valor
    public function setDescricao($valor){
        $this-> descricao = $valor;


    } 

    // usar o set para validar a entrada do valor
    public function setPreco($valor){
        $this->preco = $valor;


    } 

    // usar o get para validar a saida do valor
    public function getDescricao(){
        return $this->descricao;

    } 

    // usar o get para validar a saida do valor
    public function getPreco(){
        return $this->preco;


    } 

}


$c1 = new Curso;
$c1->setDescricao = ['Pacote Office'];
$c1->setPreco = 250;

echo $c1->getDetalhes();