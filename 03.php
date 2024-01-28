<?php

/* Ejercicio 3
Realiza un programa que nos diga cuántos dígitos tiene un número introducido por teclado.*/


echo "Ingrese un número: ";
$numero = abs(intval(readline()));

$numeroComoCadena = strval($numero);
$cantidadDigitos = strlen($numeroComoCadena);
echo "El número $numero tiene $cantidadDigitos dígitos";
?>