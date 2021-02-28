
<?php
include 'db.php';
include('includes/botones.php');
//error_reporting(0);
$varsesion = $_SESSION['user'];
if ($varsesion == null || ($varsesion = '')) {
    header("location: login.php");
    die();
}
/*******Cerrar sesion al cerrar ventana*******/
//antes de hacer los cálculos, compruebo que el usuario está logueado
//utilizamos el mismo script que antes
if ($_SESSION["autentificado"] != "SI") {
    //si no está logueado lo envío a la página de autentificación
    header("Location: login.php");
} else {
    //sino, calculamos el tiempo transcurrido
    $fechaGuardada = $_SESSION["ultimoAcceso"];
    $ahora = date("Y-n-j H:i:s");
    $tiempo_transcurrido = strtotime($ahora) - strtotime($fechaGuardada);
    //comparamos el tiempo transcurrido
    if ($tiempo_transcurrido >= 1200) {
        //si pasaron 10 minutos o más
        //envío al usuario a la pag. de autenticación
        header("Location: logout.php");
        //sino, actualizo la fecha de la sesión
    } else {
        $_SESSION["ultimoAcceso"] = $ahora;
    }
}
?>


<?php
$fullPath="";
$dir = Array ( "00. GRADO TRANSICIÓN", "01. GRADO PRIMERO", "02. GRADO SEGUNDO", "03. GRADO TERCERO", "04. GRADO CUARTO", "05. GRADO QUINTO", "06. GRADO SEXTO", "07. GRADO SEPTIMO", "08. GRADO OCTAVO", "09. GRADO NOVENO", "10. GRADO DECIMO", "11. GRADO ONCE", "12. PSICOORIENTACIÓN"); 
$subdir = Array ("Transicion 1", "Transicion 2", "Transicion 3", "Primero 1", "Primero 2", "Segundo 1", "Segundo 2", "Segundo 3", "Tercero 1", "Tercero 2", "Cuarto 1", "Cuarto 2", "Quinto 1", "Quinto 2", "Quinto 3", "Sexto 1", "Sexto 2", "Sexto 3", "Sexto 4", "Septimo 1", "Septimo 2", "Septimo 3", "Octavo 1", "Octavo 2", "Octavo 3", "Noveno 1", "Noveno 2", "Noveno 3", "Decimo 1", "Decimo 2", "Decimo 3", "Once 1", "Once 2", "Once 3", "TALLERES");
$long = count($dir);
$code  = null;

$code .= "<ul  class='collapsible'>"; //lista anidada grados 

foreach ($dir as $e1) {

$dir   = opendir($path);

        $code .= "<li><div class='collapsible-header'>
        <i class='material-icons'>filter_list</i>" . substr("$e1", 4) . "</div> <div class='collapsible-body'>";

        $code .= "<ul  class='collapsible'>"; //lista anidada curso

        $path2   = $path . $e1 . "/";

        $sub_dir = opendir($path2);

        foreach ($subdir as $e2) {

            if (is_dir($path2 . $e2) && $e2 != "." && $e2 != "..") {

                $code .= "<li><div class='collapsible-header'><i class='material-icons'>filter_list</i>$e2</div> 

                 <div class='collapsible-body'>";

                $code .= "<ul  class='collapsible'>"; //lista anidada materia

                $path3    = $path2 . $e2 . "/";

                $sub_dir2 = opendir($path3);

                while ($e3 = readdir($sub_dir2)) {

                     if (is_dir($path3 . $e3) && $e3 != "." && $e3 != "..") {

                         $code .= "<li><div class='collapsible-header'><i class='material-icons'>filter_list</i>$e3</div> <div class='collapsible-body'>";

                         $code .= "<ul>"; //lista anidada

                         $path4    = $path3 . $e3 . "/";

                         $sub_dir3 = opendir($path4);

                         $code .= "<form action='procesar.php?u=admin-master.php' method='post' enctype='multipart/form-data'>";

                         $code .= "<input type='hidden' name='rutadir' value='$path4' />"; 

                         $code .= "<input type='file' name='archivo'/>";

                         $code .= "<input type='submit' value='Subir' class='btn'/>  </form>";

                         while ($e4 = readdir($sub_dir3)) {

                             if (is_file($path4 . $e4) && $e4 != "." && $e4 != "..") {

                                 echo $code;

                                 $code = "";

                                 $code .= '<li> <div class="row"><div class="col s2"> <button onclick=clickaction(this) id="delete_file.php?path='.$path4.$e4.'&u=admin-master.php" data-target="modal1" class="btn btn-small modal-trigger right">Eliminar</button></div>';

                                 $code .= " <div class='col s5'><a href='$path4$e4' download='$e4'><i class='material-icons'>cloud_download</i> $e4</a></div></div></li>";
                                }
                        }
                         $code .= "</ul></div></li>";
                     }
                 }
                $code .= "</ul></div></li>";
            }
        }
        $code .= "</ul></div></li>";
}

echo $code .= "</ul>";
$code = "";
?>
</section>
    <!-- Modal Structure -->
    <div id="modal1" class="modal">
        <div class="modal-content">
            <h4>Eliminar Archivo</h4>
            <p>¿Desea realmente eliminar el archivo seleccionado?</p>
        </div>
        <div class="modal-footer">
            <a href="" id="IdEliminar" class="modal-close waves-effect waves-green btn-flat">Aceptar</a>
            <a href="#" id="" class="modal-close waves-effect waves-green btn-flat">Cancelar</a>
        </div>
    </div>

    <!-- cambiar el  valor del href-->
    <script>
    function clickaction(datos) {
        document.getElementById('IdEliminar').href = datos.id;
    }
    </script>
    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <!-- Inicializa los JavaScript -->
    <script>
    document.addEventListener('DOMContentLoaded', function() {
        M.AutoInit();
    });

    //js fixed header
    window.onscroll = function() {
        myFunction()
    };
    var header = document.getElementById("myHeader");
    var logo = document.getElementById("logo");
    var sticky = header.offsetTop;
    function myFunction() {
        if (window.pageYOffset > sticky) {
            header.classList.add("sticky");
            logo.classList.remove("hide");
        } else {
            header.classList.remove("sticky");
            logo.classList.add("hide");
        }
    }
    document.addEventListener('DOMContentLoaded', function() {
        var elems = document.querySelectorAll('.modal');
        var instances = M.Modal.init(elems, options);
    });
    </script>
     <footer class="page-footer blue-grey darken-3 center" id="footer">
          <div class="container">
            <div class="row">
              <div class="col l6 s12">
                <h5 class="white-text">Diseñada y desarrollada por: Ing. Jeferson Fonseca Soto.</h5>
              </div>
              <div class="col l4 offset-l2 s12">
                <a href="https://www.facebook.com/tovaropa" target="_blank"><img src="./images/redes/fb.png"
                        style="border-radius: 50%; width:50px; height:50px;" alt="@tovaropa"></a>
              </div>
            </div>
          </div>
          <div class="footer-copyright center">
            <div class="container">
            © 2020 Copyright Ing. Jeferson Leonel Fonseca Soto
            </div>
          </div>
        </footer>
</body>

</html>



