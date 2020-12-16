<!DOCTYPE html>
<html lang="en">

<?php session_start(); ?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    
    <script src="js/jquery-3.4.1.min.js"></script>
    <script src="js/index.js"></script>
    <script src="js/pokemons.js"></script>
    <title>Aru-Web</title>
</head>

<body>

    <nav>
        <div id='titulo-nav'>
        Bienvenido, Lautaro! <br>
        <a href="index.php" id='cerrar-sesion'>Cerrar Sesion <?php session_destroy(); ?></a>
        </div>
        <div id='contenedor-nav'>
            <a class='nav' href="">INICIO</a>
            <a class='nav' href="#section-par">SOBRE MI</a>
            <a class='nav' href="#contenedor-fotos">FOTOS</a>
            <a class='nav' href="#section-formulario">CONTACTAME</a>
        </div>

    </nav>
    <header>
        <div class='absoluto'>
            <h1 id='titulo-header'>Bienvenidos a la Aru Web</h1>
            <video id='video-header'onloadedmetadada="this.muted=true" autoplay loop>
                <source src="videos/macbook.mp4">
            </video>
        </div>
    </header>

    <section id='section-par'>
        <img src="fotos/pexels5.jpg" class='imagen' alt="">
        <div id='contenedor-par'>

            <div id='par1' class='parrafos'>
                <h1><b>¿Quien soy?</b></h1> <br>
                <p> 
                    Mi nombre es Lautaro Rodriguez, tengo 27 años, soy Desarrollador Web y casi Analista en Sistemas. <br>
                    Naci en Ferré, Buenos Aires pero por trabajo y estudio vine a vivir a Rosario, ciudad que terminó siendo mi segunda casa.
                    Mi vida está abocada al Desarrollo Web, al cual intento mejorar y aprender dia a dia mas sobre el mismo,
                    actualmente trabajo en la Caja de Jubilaciones de Abogados.
                </p>
            </div>

            <div id='par2' class='parrafos'>
                <h1><b>¿Como soy?</b></h1> <br>
                <p> 
                    Soy una persona alegre, entusiasta, responsable y competitivo (sanamente). Siempre que algo me guste trato de dar el 101% necesario para poder mejorar
                    y aprender lo mas posible del tema. <br>
                    Me gusta mucho compartir un buen mate (o cerveza/fernet segun el momento) y sociabilizar. <br>
                    Soy alguien que busca sus mayores defectos y trata de cambiarlos dia tras dia, ya sea hacia mi persona o en el ambito laboral.
                     <br>
                    Me gusta mucho el futbol, asique soy de jugar 1-2 partidos por semana, voy al gimnasio y soy muy apasionado de los videojuegos,
                    actualmente estoy jugando shooters en primera persona (CS:GO especificamente).
                </p>
            </div>
        </div>
    </section>

    <section id='section-fotos'>
        <div id='contenedor-fotos'>
            <ul>
                <li class="enlaces activo" data-nombre='todos' onclick='seleccion(this)'>TODOS</li>
                <li class="enlaces" data-nombre='web' onclick='seleccion(this)'>WEB</li>
                <li class="enlaces" data-nombre='ilustraciones' onclick='seleccion(this)'>ILUSTRACIONES</li>
                <li class="enlaces" data-nombre='diseños' onclick='seleccion(this)'>DISEÑOS</li>
            </ul>
            <div class='fotos'>
                <div class='caja filtro web'><img  class='imagen' src="fotos/pexels5.jpg" alt=""></div>
                <div class='caja filtro ilustraciones'><img  class='imagen' src="fotos/pexels1.jpg" alt=""></div>
                <div class='caja filtro diseños'><img  class='imagen' src="fotos/pexels5.jpg" alt=""></div>
                <div class='caja filtro web'><img  class='imagen' src="fotos/pexels5.jpg" alt=""></div>
                <div class='caja filtro ilustraciones'><img  class='imagen' src="fotos/pexels1.jpg" alt=""></div>
                <div class='caja filtro diseños'><img  class='imagen' src="fotos/pexels5.jpg" alt=""></div>
                <div class='caja filtro web'><img  class='imagen' src="fotos/pexels5.jpg" alt=""></div>
                <div class='caja filtro ilustraciones'><img  class='imagen' src="fotos/pexels1.jpg" alt=""></div>
                <div class='caja filtro diseños'><img  class='imagen' src="fotos/pexels5.jpg" alt=""></div>
                <div class='caja filtro web'><img  class='imagen' src="fotos/pexels5.jpg" alt=""></div>
                <div class='caja filtro ilustraciones'><img  class='imagen' src="fotos/pexels1.jpg" alt=""></div>
                <div class='caja filtro diseños'><img  class='imagen' src="fotos/pexels5.jpg" alt=""></div>
            </div>
        </div>

    </section>
    <section id='section-formulario'>
        <img src="fotos/pexels1.jpg" alt="" class='imagen'>
        <div id='contenedor-formulario'>
            <form action="" method='POST' id='formulario'>
                <h2 id='titulo'>CONTACTAME</h2> <br><br>
                <input type="text" class='formulario-input' name='nombre' onfocusout ='prueba(this);' required>  
                <label for="" class='formulario-label'>Nombre completo</label><br>
            
                <input type="text" class='formulario-input' name='email' onfocusout ='prueba(this);' required>
                <label for="" class='formulario-label'>E-mail</label><br>
            
                <input type="text" class='formulario-input' name='telefono' onfocusout ='prueba(this);' required>
                <label for="" class='formulario-label'>Telefono</label><br>
                 
                <textarea type="text" class='formulario-input' name='mensaje' style="height: 150px" onfocusout ='prueba(this);' required> </textarea>
                <label for="" class='formulario-label'>Mensaje</label><br><br>
            
                <input type="submit" class='formulario-submit' name='enviar' value='ENVIAR'>
            </form>
            <div id='envio'>
                <?php include("correo/correo.php"); ?>
            </div>
        </div>
 
        <div id='contenedor-poke'>
            <label for="" style='margin:10px; font-weight: 800;'>Escriba el numero de pokemon que quiere ver:</label><br>
            <input type="text" id='poke-input' class='formulario-input'>  
            <input type="submit" id='poke-boton' class='formulario-submit' value='BUSCAR' onclick="pokemon()">
            <div id='poke'>
            </div>
        </div>
    </section>

    <footer>
        <div id='footer'>
            <a class="fb-ic mr-3 redes" role="button" href="https://www.facebook.com/Lautarodriguez17/"><i class="fab fa-lg fa-facebook-f"></i></a>
            <a class="ins-ic mr-3 redes" role="button" href="https://www.instagram.com/lautarodriguez17/"><i class="fab fa-lg fa-instagram"></i></a>
            <a class="ins-ic mr-3 redes" role="button" href="https://twitter.com/LautaRodriguez7"><i class="fab fa-lg fa-twitter"></i></a>
            <a class="ins-ic mr-3 redes" role="button" href="https://www.youtube.com/channel/UCT6SSLvMcyS-J18NZ2au76A"><i class="fab fa-lg fa-youtube"></i></a>
        </div>
    </footer>

</body>
</html>