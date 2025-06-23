<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Calculo de Salario</title>
</head>
<body>
    <h2>Calculo de salario</h2>
    <form method="post">
        Nombre: <input type="text" name="nombre" required><br><br>

        Horas trabajadas: <input type="number" name="horas" required><br><br>

        Categoría:
        <select name="categoria" required>
            <option value="">Selecciona una categoría</option>
            <option value="jefe">Jefe</option>
            <option value="administrativo">Administrativo</option>
            <option value="operador">Operador</option>
            <option value="practicante">Practicante</option>
        </select><br><br>

        <input type="submit" value="Calcular Salario">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nombre = $_POST["nombre"];
        $horas = $_POST["horas"];
        $categoria = $_POST["categoria"];
        $pagoHora = 0;

        
        switch ($categoria) {
            case "jefe":
                $pagoHora = 450;
                break;
            case "administrativo":
                $pagoHora = 350;
                break;
            case "operador":
                $pagoHora = 350;
                break;
            case "practicante":
                $pagoHora = 150;
                break;
            default:
                echo "<p>Categoría no válida.</p>";
                exit();
        }

        $salarioBruto = $horas * $pagoHora;
        $descuento = $salarioBruto * 0.1;
        $salarioNeto = $salarioBruto - $descuento;

        echo "<h3>Salario:</h3>";
        echo "Nombre del empleado: $nombre<br>";
        echo "Horas trabajadas: $horas<br>";
        echo "Salario Bruto: $$salarioBruto<br>";
        echo "Descuento: $$descuento<br>";
        echo "Salario Neto: $$salarioNeto<br>";
    }
    ?>
</body>
</html>
