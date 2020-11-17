<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="description"
        content="Sitio Web Oficial de la Institución Educativa Técnica Tomás Vásquez Rodríguez">
    <title>TOVARO</title>

    <link rel="stylesheet" href="css\header.css">
    <link rel="stylesheet" href="css\styles.css">
    <link rel="stylesheet" href="css\live.css">

    <link rel="icon" href="./images\Escudo.png" type="image/png" />

    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    
    <!--Import Google Font-->
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@500&display=swap" rel="stylesheet">
   
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>

      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    
</head>

<body>
 
<div class="parallax-container">

  <div class="parallax"><img src="./images/emisora/4.jpg" ></div>
  <div class="row">
    <div class="col s12 m4" id="side">

      <ul>
        <li class="center"><img src="./images\Escudo.png" alt=""></li>

        <!--Lista de podcast-->
        <?php 
        $path = "./emisora/";
        $code = null;
        $cond = null;

        $dir = opendir($path);

        //carga la lista de carpetas que exitan para reproducir
        while ($e1 = readdir($dir)) {
            $path2 = $path . $e1 . "/";

            if (is_dir($path2) && $e1 != "." && $e1 != "..") {
                $sub_dir = opendir($path2);
                $code = "<hr><li class='playlist-element'><a href='#' onclick=cargarContenido(this) id='$path2' class='valign-wrapper'>". substr("$e1", 3) . "</a></li>";
                echo $code;
            }
        }
        ?>
      </ul>
      <hr>
    </div>

    <div class="row">

      <!-- Imagen de la playlist -->
      <div class="col s12 m4 center" id="playlist-img">
        
      </div>

      <!-- Nombre de la playlist -->
      <div class="col s12 m4">
        <h5 id="playlist-name"></h5>
        <p id="podcast-name"></p>
      </div>


      <!-- playlist -->
      <div class="col s12 m8" id="playlist">
       
      </div>
    </div>
  </div><!--cierre div row principal-->
</div><!--cierre div parallax-->
    





<!--script de la emisora para el cambio de audio-->
<script src="js/emisora.js"></script>
<!--JavaScript at end of body for optimized loading-->
<script type="text/javascript" src="js/materialize.min.js"></script>
<!-- Inicializa los JavaScript -->

<script>
    document.addEventListener("DOMContentLoaded", function () {
        M.AutoInit();
    });
</script>

<footer class="page-footer blue-grey darken-3">
  <!--parte del reproductor-->
  <div id='contenid' class="center">
    <audio src="" controls autoplay loop> <p>Tu navegador no implementa el elemento audio</p></audio>
    <br>
  </div>

  <div class="footer-copyrigh blue-grey darken-1 center">
      © 2020 | Institución Educativa Técnica Tomás Vásquez Rodríguez
  </div>
</footer>
