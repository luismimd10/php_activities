<?

/* 4. Realiza un ejercicio en el que el usuario introduce dos números y
determine si son iguales. */

echo "Ingresa un número: ";
$numero1 = floatval(fgets(STDIN));

echo "Ingresa otro número: ";
$numero2 = floatval(fgets(STDIN));

if($numero1 == $numero2) {
    echo "Los números son iguales\n";
} else {
    echo "No son iguales\n";
}