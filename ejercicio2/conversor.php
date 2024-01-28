<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conversor de Euros a Dólares</title>
</head>
<body>

<?php
$tasaCambio = 1.12;


if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $cantidadEuros = $_POST["cantidadEuros"];

 
    if (is_numeric($cantidadEuros) && $cantidadEuros >= 0) {
        
        $cantidadDolares = $cantidadEuros * $tasaCambio;
        echo "<h2>€ $cantidadEuros euros son aproximadamente $$cantidadDolares dólares.</h2>";
    } else {
        echo "<p>Por favor, introduce una cantidad válida en euros.</p>";
    }
}
?>


<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
    <label for="cantidadEuros">Cantidad en euros:</label>
    <input type="text" name="cantidadEuros" id="cantidadEuros" required>

    <button type="submit">Convertir a Dólares</button>
</form>

</body>
</html>
