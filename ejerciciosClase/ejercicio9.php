<?php

$array = array(1, 2, 'antonio', 200, 'pepe');
$contenido = count($array);

for ($i = $contenido - 1; $i >= 0; $i--){
    echo $array[$i] . "<br>";
}
?>