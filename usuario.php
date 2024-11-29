<?php
    session_start();
    include('consultas.php');

    $nombre=$_POST['nombre'];
    $paterno=$_POST['paterno'];
    $materno=$_POST['materno'];
    $usuario=$_POST['usuario'];
    $clave=$_POST['contraseña'];

    $datos=guarda_usuarios($nombre, $paterno, $materno, $usuario, $clave);
    header('location: productos.html');
?>