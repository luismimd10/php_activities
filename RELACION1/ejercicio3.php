<?

/* 3. Realiza un ejercicio en el que usuario introduzca un número y determine si
es par o impar */

echo "Ingresa un número: ";
$numero = floatval(fgets(STDIN));

if ($numero % 2 == 0) {
    echo "El número es par\n";
} else {
    echo "El número es impar\n";
}