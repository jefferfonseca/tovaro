<ul>
        <!--Lista de podcast-->
        <?php 
       //GET trae la dirección de la carpeta que se seleccionó
        $path = $_GET['u'];
        $code = null;
        $cond = null;

        $dir = opendir($path);

        //carga la lista de carpetas que exitan para reproducir
        while ($e1 = readdir($dir)) {
            $path2 = $path . $e1;

            if ($e1 != "." && $e1 != "..") {
                //imprime la playlist
                $code = "<hr><li class='playlist-element'><a href='#' onclick=reproducir(this) id='$path2' class='valign-wrapper'><i class='material-icons'>play_circle_outline</i>  $e1</a></li>";
                echo $code;
            }
        }
        ?>
        <hr>
</ul>
