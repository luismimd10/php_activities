<?

/* 3. Usando la librería del ejercicio 1. Muestra los números capicúa que hay entre 1 y
99999. */

include ("ejercicio1.php");

echo "Números capicuos entre 1 y 99999:\n";
for ($i = 1; $i <= 99999; $i++) {
    if (esCapicua($i)) {
        echo $i . "\n";
    }
}