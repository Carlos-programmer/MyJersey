<?php
    function conecta($consulta){
        $base=mysqli_connect("localhost", "root", "", "Login") or die ("Error al conectar a la base de datos");
        $datos=mysqli_query($base, $consulta);
        mysqli_close($base);
        return $datos;
    }

    function busca_usuarios(){
        $consulta="select * from usuarios";
        return $datos;
    }

    function guarda_usuarios($nombre, $paterno, $materno, $usuario, $clave){
        $consulta="INSERT INTO usuarios(id_usuario, nombre, a_paterno, a_materno, usuario, contraseña) VALUES (NULL, '$nombre', '$paterno', '$materno', '$usuario', '$clave')";
        $datos=conecta($consulta);
        return $datos;
    }

    function guarda_admin($nombre, $paterno, $materno, $usuario, $clave){
        $consulta="INSERT INTO administrador(id_administrador, nombre, a_paterno, a_materno, usuario, contraseña) VALUES (NULL, '$nombre', '$paterno', '$materno', '$usuario', '$clave')";
        $datos=conecta($consulta);
        return $datos;
    }
?>