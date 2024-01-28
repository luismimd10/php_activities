<?php
if (isset($_GET["numero1"])){
    $numero1 = $_GET['numero1'];
    $numero2 = $_GET['numero2'];

    $resultado = $numero1 * $numero2;

    echo "el resultado es $resultado";
}else{
        echo "A mi no me hackeas";
}
?>
