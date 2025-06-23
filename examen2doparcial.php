<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Evaluar Calificaciones</title>
</head>
<body>
<!-- Pongo un color de fondo y hago que se centre la informacion -->
<style>
        body {
            background-color:yellow;
            text-align: center;
        }
    </style>


<h2>Formulario de Evaluación</h2>

<!-- Pido la informacion para los formularios -->

<form method="POST">
    Nombre del alumno: <input type="text" name="nombre"><br><br>
    Género:
    <input type="radio" name="genero" value="Masculino">Masculino
    <input type="radio" name="genero" value="Femenino">Femenino<br><br>
    Materia: <input type="text" name="materia"><br><br>

    Calificación 1: <input type="number" name="c1"><br>
    Calificación 2: <input type="number" name="c2"><br>
    Calificación 3: <input type="number" name="c3"><br><br>

    <input type="submit" value="Evaluar">
</form>
 
<?php
// Guarda la informacion de los formularios
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST["nombre"];
    $genero = $_POST["genero"];
    $materia = $_POST["materia"];
    $c1 = $_POST["c1"];
    $c2 = $_POST["c2"];
    $c3 = $_POST["c3"];

    // Se calcula el promedio de las calificaciones
    $promedio = ($c1 + $c2 + $c3) / 3;

    // Determinar estatus
    if ($promedio <= 69) {
        $estatus = "Reprobado";
    } elseif ($promedio >= 70 && $promedio <= 95) {
        $estatus = "Ordinario";
    } elseif ($promedio >= 96) {
        $estatus = "Exento";
    }

    // Muestra los resultados de los formularios junto al promedio y al estatus
    echo "<h3>Resultado</h3>";
    echo "Nombre: $nombre<br>";
    echo "Género: $genero<br>";
    echo "Materia: $materia<br>";
    echo "Calificación 1: $c1<br>";
    echo "Calificación 2: $c2<br>";
    echo "Calificación 3: $c3<br>";
    echo "Promedio: " .$promedio . "<br>";
    echo "Estatus: $estatus<br>";
}
?>

</body>
</html>

