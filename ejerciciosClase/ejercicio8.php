<?php

$aleatorio = array();

for ($i = o; $i < 5; $i++){
    $random = rand(20, 30);
    $aleatorio[] = $random;
}

echo "Esto son los 5 números aletorios entre el 20 y el 30: <br>";
print_r($aleatorio);

?>