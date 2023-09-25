<?php
//array numericos
$carros = array(1 => "BMW", 2 => "Veloster", 3 => "Hilux");
$carros[] = "Amarok";
$carros[10] = "Camaro";
echo $carros[10];

$motos = array();
$motos = "Yamaha";
$motos = "Honda";
$motos = "Suzuki";
echo $motos[5];
echo "<br>";

$clientes = ["Rodrigo", "Felipe", "Bia"];
print_r($clientes);
echo "<hr>";

//count contador)
$totalClientes = count($clientes);
echo $totalClientes;
echo "<hr>";

//Foreach percorre o array (para cada)
foreach ($carros as $valor) {
    echo $valor . "<br>";
}

// Arrays associativos
$pessoa = array("nome" => "Michelle", "idade" => 38, "altura" => 1.65);
$pessoa["cidade"] = "Itabuna";
echo $pessoa["nome"];

foreach ($pessoa as $indice => $valor) {
    echo $indice . ":" . $valor . "<br>";
}
echo "<hr>";
//Arrays Multidimensionais
$times = array(
    "cariocas" => array("campeao" => "vasco", "vice" => "flamengo", "terceiro" => "botafogo"),
    "paulistas" => array("campeao" => "São Paulo", "vice" => "Santos", "terceiro" => "Corinthians"),
    "baianos" => array("campeao" => "Bahia", "vice" => "Vitória", "terceiro" => "Itabuna")
);
echo $times["cariocas"][1];
echo "<br>";

foreach ($times["cariocas"] as $indice => $valor) {
    echo $indice . ":" . $valor . "<br>";
}

echo $times["paulistas"][1];
echo "<br>";

foreach ($times["paulistas"] as $indice => $valor) {
    echo $indice . ":" . $valor . "<br>";
}

echo $times["baianos"][1];
echo "<br>";

foreach ($times["baianos"] as $indice => $valor) {
    echo $indice . ":" . $valor . "<br>";
}
