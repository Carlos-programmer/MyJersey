<?php
    $nombre=$_POST['nombre'];
    $ap=$_POST['paterno'];
    $am=$_POST['materno'];
    $usuario=$_POST['usuario'];
    $clave=$_POST['contraseña'];

    $datos=guarda_admin($nombre, $paterno, $materno, $usuario, $clave);
    header('location: admin.php');
?>