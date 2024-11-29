<?php
    $usuario=$_POST['usuario'];
    $clave=$_POST['contraseña'];

    $base=mysqli_connect("localhost", "root", "", "login") or die ("Error al conectar a la base de datos");
    $consulta="select * from usuarios where usuario='$usuario' and contraseña='$clave'";
    $datos=mysqli_query($base, $consulta);

    if ($fila=mysqli_fetch_assoc($datos)) {
        $_SESSION['id_usuario']=$fila['id_usuario'];
        $_SESSION['name']=$fila['nombre'];
        $_SESSION['paterno']=$fila['a_paterno'];
        $_SESSION['materno']=$fila['a_materno'];
        $_SESSION['usuario']=$fila['usuario'];

        header('location: productos.html');
    }
    else {
        header('location:error.html');
    }
?>