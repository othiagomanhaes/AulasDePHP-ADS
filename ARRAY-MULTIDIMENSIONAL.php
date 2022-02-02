<?php
//Construí Arrays separadamente
$frutasVermelhas = array (
    "Melancia", "Cereja",
    "Framboesa", "morango"
);

$frutasCitricas = array (
    "Laranja", "Limão",
    "Abacaxi", "Mexerica"
);

$frutasTropicais = array (
    "Goiaba", "Maracujá",
    "Banana", "Manga"
);

//Também posso construir Arrays juntos
$arraysMultidimensional = array (
    'vermelhas' => array (
        'melancia',
        'cereja',
        'framboesa',
        'morango'
    ),

    'citricas' => array (
        'laranja',
        'limão',
        'abacaxi',
        'mexerica'
        ),
);

print_r($arraysMultidimensional);

//Posso pegar arrays separados e colocar tudo juntos
$juntandoArrays = array (
    'Tropicais' => $frutasTropicais,
    'Citricas' => $frutasCitricas,
    'Vermelhas' => $frutasVermelhas,
);

print_r($juntandoArrays);


?>