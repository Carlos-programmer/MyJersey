<?php
    $usuario=$_POST['usuario'];
    $clave=$_POST['contraseña'];

    $base=mysqli_connect("localhost", "root", "", "login") or die ("Error al conectar a la base de datos");
    $consulta="SELECT * FROM administrador WHERE usuario='$usuario' and contraseña='$clave'";
    $datos=mysqli_query($base, $consulta);

    if ($fila=mysqli_fetch_assoc($datos)) {
        $_SESSION['id_administrador']=$fila['id_administrador'];
        $_SESSION['nombre']=$fila['nombre'];
        $_SESSION['ap']=$fila=['a_paterno'];
        $_SESSION['am']=$fila['a_materno'];
        $_SESSION['user']=$fila['usuario'];
        
        header('location: admin.php');
    }
    else {
        header('location: error.html');
    }
?>