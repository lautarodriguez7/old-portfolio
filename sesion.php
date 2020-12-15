
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/styles.css">
    <script src="js/index.js"></script>

    <title>INICIAR SESION</title>
</head>
<body>
<img src="fotos/pexels1.jpg" style='width:100%; height:auto; position:fixed;'alt="">

<div id="myModal" class="modall">

            <div id="modal-contenido">
                <h3 style='margin-left:26%;'>INICIE SESION</h3>
                <div id='contenedor-sesion'>
                    <form action="sesion/validar.php" method='POST'>
                        <input type="text" class='formulario-input' name='usuario' onfocusout ='prueba(this);' required> 
                        <label for="" class='sesion-label formulario-label'>USUARIO</label>
                        <br>
                        <input type="password" class='formulario-input' name='clave' onfocusout ='prueba(this);' required>
                        <label for="" class='sesion-label formulario-label'>CONTRASEÑA</label>

                        <input type="submit" value='INICIAR' name='entrar' class='formulario-submit'>
                    </form>
                </div>
            </div>
        </div>
</body>
</html>