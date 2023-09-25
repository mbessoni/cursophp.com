<?php
//***********escalares************
$nome = "Michelle";
var_dump($nome);
if (is_string($nome)) :
    echo "É uma string";
else :
    echo "Não é uma string";
endif;
//inteiro
$idade = 30;
var_dump($idade);
if (is_int($idade)) :
    echo "É um inteiro";
else :
    echo "Não é um inteiro";
endif;
//float
$peso = 85.5;
var_dump($peso);
if (is_float($peso)) :
    echo "É um float";
else :
    echo "Não é um float";
endif;
//boolean
$admin = false; //false ou true
var_dump($admin);
if (is_int($admin)) :
    echo "É um booleano";
else :
    echo "Não é um booleano";
endif;

//**************compostos**************
//array
$carros = array("Gol", "Uno", "Camaro");
var_dump($carros);
//object
class Cliente
{
    public $nome;
    public function atribuirNome($nome)
    {
        $this->$nome = $nome;
    }
}

$cliente = new Cliente();
var_dump($cliente);

if (is_int($cliente)) :
    echo "É um objeto";
else :
    echo "Não é um objeto";
endif;

//***********especiais************
// NULL

$cidade = NULL;
var_dump($NULL);
 
// Resource
