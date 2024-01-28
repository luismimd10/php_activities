
<form action="saluda.php" method="get">
<label for="username">Introduce un número: </label>
<label for="username">Introduce otro número: </label>
<input type="text" name="numero" required>
<button type="submit">calcular</button>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $numero1 = $_POST["numero1"];
    $numero2 = $_POST["numero2"];

    
    if (!empty($numero1) && !empty($numero2)) {
        
        $resultado = $numero1 * $numero2;
        echo "<h2>El resultado de la multiplicación es: $resultado</h2>";
    } else {
        echo "<p>Por favor, introduce ambos números.</p>";
    }
}
?>

