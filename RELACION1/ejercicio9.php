<?

/* 9. Escribe un programa que muestre tu horario de clase mediante una tabla.
Intercala código HTML y PHP para familiarizarte con éste último. Utiliza la
etiqueta <table> de HTML. */
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Horario de Clases</title>
    <style>
        table {
            width: 50%;
            border-collapse: collapse;
            margin: 20px;
        }

        th, td {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }

        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>

<?php

$horario = array(
    "Lunes" => array("8:00 AM - 9:30 AM", "Matemáticas"),
    "Martes" => array("10:00 AM - 11:30 AM", "Historia"),
    "Miércoles" => array("1:00 PM - 2:30 PM", "Ciencias"),
    "Jueves" => array("9:00 AM - 10:30 AM", "Inglés"),
    "Viernes" => array("11:00 AM - 12:30 PM", "Educación Física")
);
?>

<h2>Horario de Clases</h2>

<table>
    <tr>
        <th>Día</th>
        <th>Hora</th>
        <th>Materia</th>
    </tr>

    <?php
    
    foreach ($horario as $dia => $clase) {
        echo "<tr>";
        echo "<td>$dia</td>";
        echo "<td>{$clase[0]}</td>";
        echo "<td>{$clase[1]}</td>";
        echo "</tr>";
    }
    ?>
</table>

</body>
</html>
