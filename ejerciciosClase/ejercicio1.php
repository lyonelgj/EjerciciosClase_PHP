<?php

$entero = 55;
$float = 5.55;
$cadena = 'Carlos Sainz';
$cadena2 = "Ferrari";
$boolean = true;

$mensaje = $cadena . $cadena2;
echo $mensaje;
echo "<br>";

$nombre = "Fernando Alonso";
$dorsal = 14;
$mundiales = 2;
$piloto = "$nombre es un piloto de Fórmula 1 que lleva el número $dorsal y ha ganado un total de $mundiales campeonatos mundiales durante su carrera";
print ($piloto);
echo "<br>";

define('Gravedad',  9.8);
const descubridor = "Isaac Newton";

var_dump($entero);
var_dump($float);
var_dump($cadena);
var_dump($boolean);
var_dump(Gravedad);
var_dump(descubridor);


$numCadena = "1";
$numero = (int)$numCadena;
var_dump($numero);

$PrimerDorsal = 33;
$Actual = &$PrimerDorsal;
$Actual = 1;

echo "El primer dorsal de verstappen es el $PrimerDorsal"


?>