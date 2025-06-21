<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Tablas de Multiplicar</title>
</head>
<body>

<h1>Tablas de Multiplicar</h1>

<form method="post">
    <h2>Tabla con FOR</h2>
    Número: <input type="number" name="numFor" required>
    <button type="submit" name="generarFor">Generar</button>
</form>

<form method="post">
    <h2>Tabla con WHILE</h2>
    Número: <input type="number" name="numWhile" required>
    <button type="submit" name="generarWhile">Generar</button>
</form>

<form method="post">
    <h2>Tabla con DO WHILE</h2>
    Número: <input type="number" name="numDoWhile" required>
    <button type="submit" name="generarDoWhile">Generar</button>
</form>

<hr>

<?php
if (isset($_POST['generarFor'])) {
    $n = $_POST['numFor'];
    echo "<h3>Tabla del $n con FOR</h3>";
    for ($i = 1; $i <= 10; $i++) {
        echo "$n x $i = " . ($n * $i) . "<br>";
    }
}

if (isset($_POST['generarWhile'])) {
    $n = $_POST['numWhile'];
    echo "<h3>Tabla del $n con WHILE</h3>";
    $i = 1;
    while ($i <= 10) {
        echo "$n x $i = " . ($n * $i) . "<br>";
        $i++;
    }
}

if (isset($_POST['generarDoWhile'])) {
    $n = $_POST['numDoWhile'];
    echo "<h3>Tabla del $n con DO WHILE</h3>";
    $i = 1;
    do {
        echo "$n x $i = " . ($n * $i) . "<br>";
        $i++;
    } while ($i <= 10);
}
?>

</body>
</html>
