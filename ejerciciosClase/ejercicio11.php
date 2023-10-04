<?php

function encontrarLider($ldr){
    $x = count($ldr);
    $lideres = [];
    $derecha = $ldr[$x - 1];

    array_push($lideres, $derecha);

    for ($i = $x - 2; $i >= 0; $i--){
        if ($ldr[$i] > $derecha){
            array_push($lideres, $ldr[$i]);
            $derecha = $ldr[$i];
        }
    }

    $lideres = array_reverse($lideres);

    return $lideres;
}

$ldr = [55, 14, 33, 44, 1, 21, 10];
$resultado = encontrarLider($ldr);
print_r($resultado);

?>