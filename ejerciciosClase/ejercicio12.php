<?php

$cadena = "2,3,4,1,5,3,6,7,8,1,10,0,20";
$array = explode(",", $cadena);
$cadena2 = [];

for ($i = 0; $i < count($array); $i++){
    if((int)$array[$i] == 0){
        $cadena2[$i] = 0;
        break;
    } else {
        $cadena2[$i] = $array[$i];
        for ($x = 1; $x <= $cadena2[$i]; $x++){
            $cadena2[$i + $x] = "_";
        }
        $i += $x-1;
    }
}

$new = implode(",", $cadena2);
echo $new;

?>