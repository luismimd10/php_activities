<?

/* 2. Usando la librería del ejercicio 1. Muestra los números primos que hay entre 1 y
1000. */

include ("ejercicio1.php");

echo "Numeros primos de 1 a 1000: \n";
for ($i = 1; $i <= 1000; $i++) {
    if (esPrimo($i)) {
        echo $i . "\n";
    }
}