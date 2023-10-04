<?php

$par = array();

for ($i = 2; $i <= 100; $i += 2){
    $par[] = $i;
}

echo "Esto son los números pares encontrados entre el 1 y el 100: <br>";
foreach ($par as $numero){
    echo $numero . ",";
}

?>