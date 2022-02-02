<?php
//DECLARANDO ARRAYS NUMÉRICOS

//Um array vazio
$carros = Array();

//Primeira forma de declarar um array
$carros = Array("Fusca", "Monza", "Passat");

print_r($carros);
array_splice($carros, 1, 2);
print_r($carros);

//Segunda forma de declarar um array
$carros = ["Fusca", "Monza", "Passat"];

//Terceira forma de declaração de array
$carros[0] = "Fusca";
$carros[1] = "Monza";
$carros[2] = "Passat";

//Quarta forma de declaração de array
$carros[] = "Fusca";
$carros[] = "Monza";
$carros[] = "Passat";


//DECLARANDO ARRAYS ASSOCIATIVOS (USANDO STRINGS COMO ÍNDICES)

//Primeira forma

$carros = Array(
    'vw' => 'Fusca',
    'chevrolet' => 'Monza',
    'fiat' => 'Tempra',
);

//Segunda forma
$carros = [
    'vw' => 'Fusca',
    'chevrolet' => 'Monza',
    'fiat' => 'Tempra',
];

//Terceira forma
$carros['vw'] = 'Fusca';
$carros['chevrolet'] = 'Monza';
$carros['fiat'] = 'Tempra';

//DECLARANDO ARRAYS NUMÉRICOS ASSOCIATIVOS

$carros = Array(
    'vw' => 'fusca',
    '0' => 'Passat',
    'chevrolet' => 'Monza',
    '1' => 'Chevette',
    'fiat' => 'Tempra',
    '2' => 'Uno',
);
?>