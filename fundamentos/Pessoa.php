<?php
//Classse é o modelo da Pessoa 
class Pessoa{
// Atributos são as caracteristicas da pessoa . 
public $cabelo;
public $cor_olhos;
public $altura;
public $cor_pele;
public $nome;

// Métodos são as ações da Pessoa
function __construct($cabelo, $olhos, $altura, $pele, $nome){
    $this->cabelo = $cabelo;
    $this->cor_olhos = $olhos;
    $this->altura = $altura;
    $this->cor_pele = $pele;
    $this->nome = $nome;
}


function apresentar_pessoa(){
    echo"
    <br>Dados da Pessoa:
    <br>Nome:$this->nome
    <br>Altura: $this->altura
    <br>Tipo de Cabelo: $this->cabelo
    <br>Cor da Pele: $this->cor_pele
    <br>Cor dos Olhos: $this->cor_olhos
    ";
}
}

// Criat o objeto = Instanciar o objeto
$pessoa = new Pessoa("Castanhos","verde",1.67,"Marrom Bombom","Flávia");

$pessoa1 = new Pessoa("Cacheado","Castanhos",1.55, "Marrom Bombom", "Rayane");

//Usando os métodos d classe Pessoa
$pessoa->apresentar_pessoa();
echo "<br><br>";
$pessoa1->apresentar_pessoa();





?>