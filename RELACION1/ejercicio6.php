<?

/* 6. Realiza un ejercicio en el que el usuario introduzca un número del 1 al 7 y
el determine qué día de la semana es. */

echo "Ingresa un número del 1 al 7: ";
$numero = floatval(fgets(STDIN));

if($numero == 1) {
    echo "Es lunes\n";
} elseif($numero == 2) {
    echo "Es martes\n";
} elseif($numero == 3) {
    echo "Es miercoles\n";
} elseif($numero == 4) {
    echo "Es jueves\n";
} elseif($numero == 5) {
    echo "Es viernes\n";
} elseif($numero == 6) {
    echo "Es sabado\n";
} elseif($numero == 7) {
    echo "Es domingo\n";
} else{
    echo "Te has equivocado, pon un número del 1 al 7\n";
}

    