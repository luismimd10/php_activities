<?

/* 1. Crea una biblioteca de funciones matemáticas que contenga las siguientes
funciones. Recuerda que puedes usar unas dentro de otras si es necesario.
a. esCapicua: Devuelve verdadero si el número que se pasa como parámetro es
capicúa y falso en caso contrario.
b. esPrimo: Devuelve verdadero si el número que se pasa como parámetro es primo
y falso en caso contrario. */



// Función para verificar si un número es capicúa
function esCapicua($numero) {
    $numeroInvertido = invertirNumero($numero);
    return $numero == $numeroInvertido;
}

// Función para invertir un número
function invertirNumero($numero) {
    $numeroInvertido = 0;
    $cociente = $numero;

    while ($cociente != 0) {
        $resto = $cociente % 10;
        $numeroInvertido = $numeroInvertido * 10 + $resto;
        $cociente = (int)($cociente / 10);
    }

    return $numeroInvertido;
}

// primo
function esPrimo($numero) {
    if ($numero <= 1) {
        return false;
    }

    for ($i = 2; $i <= sqrt($numero); $i++) {
        if ($numero % $i == 0) {
            return false;
        }
    }

    return true;
}



echo "Ingresa un número para ver si es capicuo: ";
$numeroCapicua = floatval(fgets(STDIN));

if (esCapicua($numeroCapicua)) {
    echo "El número $numeroCapicua es capicuo.\n";
} else {
    echo "El número $numeroCapicua NO es capicuo.\n";
}



echo "Ingresa un número para ver si es primo: ";
$numeroPrimo = floatval(fgets(STDIN));

if (esPrimo($numeroPrimo)) {
    echo "El número $numeroPrimo es primo.\n";
} else {
    echo "El número $numeroPrimo NO es primo.\n";
}

?>
