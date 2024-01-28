<?

/* 5. Realiza un ejercicio en el que el usuario introduzca 3 números y determine
cuál de los tres es mayor. */

echo "Ingresa un número: ";
$numero1 = floatval(fgets(STDIN));

echo "Ingresa otro número: ";
$numero2 = floatval(fgets(STDIN));

echo "Ingresa otro número: ";
$numero3 = floatval(fgets(STDIN));

if ($numero1 > $numero2 && $numero1 > $numero3) {
    echo "El primer número ($numero1) es el mayor.\n";
} elseif ($numero2 > $numero1 && $numero2 > $numero3) {
    echo "El segundo número ($numero2) es el mayor.\n";
} elseif ($numero3 > $numero1 && $numero3 > $numero2) {
    echo "El tercer número ($numero3) es el mayor.\n";
} else {
    echo "Los números son iguales.\n";
}
