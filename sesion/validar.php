<?php

    $usuario = $_POST['usuario'];
    $clave = $_POST['clave'];

    session_start();

    $conexion = mysqli_connect('localhost','root','','sesion');
    $consulta = "SELECT * FROM usuarios WHERE usuario='$usuario' AND clave='$clave'";

    $resultado = mysqli_query($conexion, $consulta);

    $filas=mysqli_num_rows($resultado);


    if($filas) {
        header('Location:../sesion-abierta.php');
        '<h1>Bienvenido . $usuario</h1>';
    } else {
        header('Location:../sesion.php');
        '<h1>ERROR EN LA AUTENTIFICACION</h1>';
    }

    mysqli_free_resulta($resultado);
    mysqli_close($conexion);
?>