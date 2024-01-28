<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Resultado</title>
</head>
<body>

<h2>Resultado de la Calculadora PHP</h2>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtener los números del formulario
    $numero1 = $_POST["numero1"];
    $numero2 = $_POST["numero2"];

    // Validar que ambos valores sean números
    if (is_numeric($numero1) && is_numeric($numero2)) {
        // Realizar operaciones
        $suma = $numero1 + $numero2;
        $resta = $numero1 - $numero2;
        $multiplicacion = $numero1 * $numero2;

        // Verificar la división por cero antes de realizar la operación
        $division = ($numero2 != 0) ? $numero1 / $numero2 : "No es posible dividir por cero";
        
        // Mostrar resultados
        echo "Suma: $suma <br>";
        echo "Resta: $resta <br>";
        echo "Multiplicación: $multiplicacion <br>";
        echo "División: $division <br>";
    } else {
        echo "Por favor, ingresa valores numéricos.";
    }
} else {
    echo "Acceso no permitido.";
}
?>

</body>
</html>
