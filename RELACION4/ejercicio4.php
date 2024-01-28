<?

/* 4. Crea una biblioteca de funciones para arrays (de una dimensión) de números
enteros que contenga las siguientes funciones:
a. generaArrayInt: Genera un array de tamaño n con números aleatorios cuyo
intervalo es 0, 100.
b. minimoArrayInt: Devuelve el mínimo del array que se pasa como parámetro.
c. maximoArrayInt: Devuelve el máximo del array que se pasa como parámetro. */



function generaArrayInt($n) {
    $array = array();

    for ($i = 0; $i < $n; $i++) {
        $array[] = rand(0, 100);
    }

    return $array;
}

function minimoArrayInt($array) {
    return min($array);
}

function maximoArrayInt($array) {
    return max($array);
}

$tamanoArray = 10;
$arrayAleatorio = generaArrayInt($tamanoArray);

echo "Array generado: " . implode(", ", $arrayAleatorio) . "\n";
echo "Mínimo del array: " . minimoArrayInt($arrayAleatorio) . "\n";
echo "Máximo del array: " . maximoArrayInt($arrayAleatorio) . "\n";

echo "Número mínimo del array: " . minimoArrayInt(generaArrayInt(10)) . "\n";
echo "Número máximo del array: " . maximoArrayInt(generaArrayInt(10)) . "\n";

?>

