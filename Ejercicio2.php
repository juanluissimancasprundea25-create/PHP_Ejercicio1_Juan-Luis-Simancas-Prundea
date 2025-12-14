<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Generador de CSS Dinámico</title>
</head>
<body>
<h2>Diseña tu propia web</h2>

<!-- Parte HTML -->
<form method="POST">
    <label>Color de fondo: 
        <input type="color" name="color_fondo" value="<?php echo isset($_POST['color_fondo']) ? $_POST['color_fondo'] : '#ffffff'; ?>">
    </label>
<br>
<br>
    <label>Tamaño de letra (px): 
        <input type="number" name="tam_letra" min="10" max="50" value="<?php echo isset($_POST['tam_letra']) ? $_POST['tam_letra'] : '16'; ?>">
    </label>
<br>
<br>
    <label>Título: 
        <input type="text" name="titulo" value="<?php echo isset($_POST['titulo']) ? htmlspecialchars($_POST['titulo']) : 'Mi título'; ?>">
    </label>
<br>
<br>
    <label>Alineación del texto:
        <select name="alineacion">
            <option value="left" <?php echo (isset($_POST['alineacion']) && $_POST['alineacion'] == 'left') ? 'selected' : ''; ?>>Izquierda</option>
            <option value="center" <?php echo (isset($_POST['alineacion']) && $_POST['alineacion'] == 'center') ? 'selected' : ''; ?>>Centro</option>
            <option value="right" <?php echo (isset($_POST['alineacion']) && $_POST['alineacion'] == 'right') ? 'selected' : ''; ?>>Derecha</option>
        </select>
    </label>
<br>
<br>
    <input type="submit" value="Aplicar estilo">
</form>
<hr>

<!-- Parte PHP -->
<?php
$fondo = isset($_POST['color_fondo']) ? $_POST['color_fondo'] : '#ffffff';
$tam_letra = isset($_POST['tam_letra']) ? (int)$_POST['tam_letra'] : 16;
$titulo = isset($_POST['titulo']) ? htmlspecialchars($_POST['titulo']) : 'Mi título';
$alineacion = isset($_POST['alineacion']) ? $_POST['alineacion'] : 'left';
?>
<div style="background-color: <?php echo $fondo; ?>; padding: 20px; border: 1px solid #ccc;">
    <h1 style="font-size: <?php echo $tam_letra; ?>px; text-align: <?php echo $alineacion; ?>;">
        <?php echo $titulo; ?>
    </h1>
</div>
</body>
</html>
