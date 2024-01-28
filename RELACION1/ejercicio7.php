<?

/* 7. Una persona sólo puede conducir si tiene carnet de conducir y si es mayor
de 18 años. Haz un programa que pida por pantalla estas dos condiciones y
determine si puede o no conducir */

echo "¿Tienes carnet de conducir?, si es así introduce 1: ";
$carnet = floatval(fgets(STDIN));

echo "¿Eres mayor de edad?, si es así introduce 2: ";
$edad = floatval(fgets(STDIN));

if($carnet == 1 && $edad == 2) {
    echo "Puedes conducir\n";
} else{
    echo "No puedes conducir\n";
}
