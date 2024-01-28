<?

/* 8. Determinar el tipo de triángulo. Haz un programa que pida la longitud de
los tres lados de un triángulo y determine si es triángulo equilátero, isósceles
o escaleno. */

echo "Introduce la longitud de los tres lados de tu triángulo: ";
$longitud = floatval(fgets(STDIN));

if($longitud <= 5) {
    echo "Tu triángulo es equilátero\n";
} elseif($longitud > 5 && $longitud <= 10) {
    echo "Tu triángulo es isósceles\n";
} elseif($longitud > 10 && $longitud <= 30) {
    echo "Tu triángulo es escaleno\n";
} else {
    echo "Has introducido un número demasiado grande, dudo mucho que eso sea un triángulo\n";
}