<!DOCTYPE html>
<html lang="es">
<head>
    <title>Login falso</title>
    <style>
        h2{
            color:red;
        }
        h2{
            color:green;
        }
    </style>
</head>
<body>
    <h1>Inicio de sesion</h1>
    <form action="" method="POST">
        <input type="text" name="user" placeholder="Usuario" required>
        <input type="password" name="con" placeholder="Contraseña" required>
        <input type="submit" value="Comprobar">
    </form>
    <hr>

<?php
    $user_per=["admin" => "1234","pepe" => "hola", "ana" => "secreto"];
    $encontrado = False;
    if (isset($_POST['user']) && isset($_POST['con'])){
        foreach($user_per as $usuario => $contraseña){
            if($usuario==$_POST['user'] && $contraseña==$_POST['con']){
                echo "<h2>Bienvenido ".$_POST ['user']."</h2>";
                $encontrado=True;
                break;
            }
        }
    }
        if(!$encontrado){
            $mensaje = "<h2>Acceso denegado<h2>";
            echo "$mensaje";
        }
?>
</body>
</html>
