<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>La Tienda de Fruta</title>
</head>
<body>
    <h2>Tienda de fruta</h2>
    <!-- Añadir cuantas frutas deseas -->
    <form method="POST">
        <?php
        $productos = ["Peras" => 1.5, "Platanos" => 2.0, "Sandía" => 5.0];
        foreach ($productos as $nombre => $precio) {
            $clave = strtolower($nombre);
            echo "<label>{$nombre} (€{$precio} cada una): ";
            echo "<input type='number' name='cantidad_{$clave}' min='0' value='0'>";
            echo "</label><br><br>";
        }
        ?>
        <input type="submit" value="Calcular Ticket">
    </form>
    <hr>
    <!-- Mostrar tabla con los datos de cuanto cuesta y su total -->
    <?php
    if ($_POST) {
        $productos = ["Peras" => 1.5, "Platanos" => 2.0, "Sandía" => 5.0];
        $total_ticket = 0;
        echo "<table border='1' cellpadding='8' cellspacing='0'>";
        echo "<tr><th>Producto</th><th>Cantidad</th><th>Precio Unitario</th><th>Total Linea</th></tr>";

        foreach ($productos as $nombre => $precio) {
            $clave = strtolower($nombre);
            $cantidad = isset($_POST["cantidad_{$clave}"]) ? (int)$_POST["cantidad_{$clave}"] : 0;
            $total_linea = $cantidad * $precio;
            $total_ticket += $total_linea;
            echo "<tr>";
            echo "<td>{$nombre}</td>";
            echo "<td>{$cantidad}</td>";
            echo "<td>€" . number_format($precio, 2) . "</td>";
            echo "<td>€" . number_format($total_linea, 2) . "</td>";
            echo "</tr>";
        }
        echo "</table>";
        echo "<h3>Total del ticket: €" . number_format($total_ticket, 2) . "</h3>";
    }
    ?>
</body>
</html>
