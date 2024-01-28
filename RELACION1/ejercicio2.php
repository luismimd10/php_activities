<?php

/* 2. Realiza un ejercicio en el que el usuario introduzca un número y determine
si es positivo, negativo o cero. */

echo "Ingresa un número: ";
$numero = floatval(fgets(STDIN));

if ($numero > 0) {
    echo "El número es positivo.\n";
} elseif ($numero < 0) {
    echo "El número es negativo.\n";
} else {
    echo "El número es cero.\n";
}

?>