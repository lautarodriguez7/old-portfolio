<?php

    $usuario = $_POST['usuario'];
    $clave = $_POST['clave'];
    $entrar = $_POST['entrar'];

    session_start();
    $_SESSION['usuario']=$usuario;

    include('conexion.php');
    $consulta = "SELECT * FROM usuarios WHERE usuario='$usuario' AND clave='$clave'";

    $resultado = mysqli_query($conexion, $consulta);

    $filas=mysqli_num_rows($resultado);

    if(isset($entrar)) {
        if($filas) {
            header('Location:../sesion-abierta.php');
        } else {
            header('Location:../sesion.php');
        }    
    } else {
        
    }
  
    mysqli_free_resulta($resultado);
    mysqli_close($conexion);
?>