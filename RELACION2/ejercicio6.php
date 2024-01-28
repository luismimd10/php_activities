<?php

/*
Ejercicio 6
Escribe un programa que genere 15 números aleatorios y que los almacene en un array.
Rota los elementos de ese array, es decir, el elemento de la posición 0 debe pasar a la
posición 1, el de la 1 a la 2, etc. El número que se encuentra en la última posición debe
pasar a la posición 0. Finalmente, muestra el contenido del array del inicio y el array 
*/

$array_original = [];
for ($i = 0; $i < 15; $i++) {
    $array_original[] = rand(1, 100);
}


echo "Array original: ";
print_r($array_original);


$ultimo_elemento = array_pop($array_original);
$array_rotado = array_merge([$ultimo_elemento], $array_original);


echo "Array rotado: " ;
print_r($array_rotado);

?>


