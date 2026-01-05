<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Test AutoEvaluado</title>
    <style>
        .correcta { color: green; font-weight: bold; }
        .incorrecta { color: red; font-weight: bold; }
    </style>
</head>
<body>
    <h2>Test AutoEvaluado</h2>

    <!-- Creacion de las preguntas -->
    <form method="POST">
        <p><strong>Pregunta 1:</strong> ¿Donde puedes entrar al palacio blanco de Hollow Knight?</p>
        <label><input type="radio" name="p1" value="a"> Paramos Fungicos</label><br>
        <label><input type="radio" name="p1" value="b"> Cuenca Antigua</label><br>
        <label><input type="radio" name="p1" value="c"> Bocasucia</label><br><br>

        <p><strong>Pregunta 2:</strong> ¿Cuando te da un mineral palido la anciana con el agijon onirico en hollow Knight?</p>
        <label><input type="radio" name="p2" value="a"> Con 300 esencias</label><br>
        <label><input type="radio" name="p2" value="b"> Con 500 esencias</label><br>
        <label><input type="radio" name="p2" value="c"> Con 900 esencias</label><br><br>

        <p><strong>Pregunta 3:</strong> ¿Como se desbloquea el DLC del Hogar de los dioses en Hollow Knight?</p>
        <label><input type="radio" name="p3" value="a"> En canales reales con una lave elegante</label><br>
        <label><input type="radio" name="p3" value="b"> Derrotando a todos los boses y enfrentarte a destello</label><br>
        <label><input type="radio" name="p3" value="c"> En canales reales con una llave simple</label><br><br>

        <input type="submit" value="Enviar respuestas">
    </form>
    <hr>

    <!-- Resultado del test -->
    <?php
    if ($_POST) {
        $respuestasCorrectas = ["p1" => "b", "p2" => "a", "p3" => "c"];
        $aciertos = 0;
        $totalPreguntas = count($respuestasCorrectas);
        echo "<h3>Resultado del test:</h3>";
        echo "<ul>";
        foreach ($respuestasCorrectas as $pregunta => $correcta) {
            $respuestaUsuario = isset($_POST[$pregunta]) ? $_POST[$pregunta] : null;
            if ($respuestaUsuario === $correcta) {
                $aciertos++;
                echo "<li>Pregunta " . substr($pregunta, 1) . ": <span class='correcta'>Correcta</span></li>";
            } else {
                echo "<li>Pregunta " . substr($pregunta, 1) . ": <span class='incorrecta'>Incorrecta</span></li>";
            }
        }
        echo "</ul>";
        echo "<p><strong>Has sacado un {$aciertos} de {$totalPreguntas}.</strong></p>";
    }
    ?>
</body>
</html>
