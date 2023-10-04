<?php

function eliminarDuplicados($cadena){
    $valores = explode(',', $cadena)
    $sinDuplicar = array_unique($valores);
    $sinduplicados = implode(',', $sinDuplicar);

    return $sinduplicados;
}

$principal = "1,2,3,2,4,1,5";
$sinduplicados = eliminarDuplicados($principal);

echo "Cadena original: " . $principal . "\n";
echo "Cadena sin duplicados: " . $sinduplicados . "\n";

?>