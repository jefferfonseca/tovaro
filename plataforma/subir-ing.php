<?php include('includes/botones.php');?>


        <form action='procesar-ing.php?u=admin-master.php' method='post' enctype='multipart/form-data' class="container">

            <h5 class="white-text">Geometría Sexto</h5>
            <input type='hidden' name='r1' value='<?php echo $path?>/06. GRADO SEXTO/Sexto 3/Geometría/'/>
            <input type='file' name='f1'/>

            <h5 class="white-text">Ética Sexto</h5>
            <input type='hidden' name='r2' value='<?php echo $path?>/06. GRADO SEXTO/Sexto 3/Ética y Valores/'/>
            <input type='hidden' name='r3' value='<?php echo $path?>/06. GRADO SEXTO/Sexto 4/Ética y Valores/'/>
            <input type='file' name='f2'/>

            <h5 class="white-text">PdI Noveno</h5>
            <input type='hidden' name='r4' value='<?php echo $path?>/09. GRADO NOVENO/Noveno 2/Proyecto de Investigación/'/>
            <input type='file' name='f3'/>

            <h5 class="white-text">Educación para la Democrácia</h5>
            <input type='hidden' name='r5' value='<?php echo $path?>/06. GRADO SEXTO/Sexto 2/Proyecto de Democracia/'/>
            <input type='hidden' name='r6' value='<?php echo $path?>/06. GRADO SEXTO/Sexto 3/Proyecto de Democracia/'/>
            <input type='file' name='f4'/>

            <h5 class="white-text">TIC de Ambiente y Aprendizaje</h5>
            <input type='hidden' name='r7' value='<?php echo $path?>/10. GRADO DECIMO/Decimo 1/TIC de Ambiente y Aprendizaje/'/>
            <input type='file' name='f5'/>

            <h5 class="white-text">Instalación y Configuración del Sistema Operativo</h5>
            <input type='hidden' name='r8' value='<?php echo $path?>/10. GRADO DECIMO/Decimo 1/Instalación y Configuración del Sistema Operativo/'/>
            <input type='file' name='f6'/>

            <h5 class="white-text">Electrónica</h5>
            <input type='hidden' name='r9' value='<?php echo $path?>/11. GRADO ONCE/Once 1/Electrónica/'/>
            <input type='file' name='f7'/>

            <h5 class="white-text">Infraestructura, Diseño e Instrumentación de Redes LAN</h5>
            <input type='hidden' name='r10' value='<?php echo $path?>/11. GRADO ONCE/Once 1/Infraestructura, Diseño e Instrumentación de Redes LAN/'/>
            <input type='file' name='f8'/>

            <h5 class="white-text">Competencias Investigativas y Diseño de Proyectos</h5>
            <input type='hidden' name='r11' value='<?php echo $path?>/11. GRADO ONCE/Once 1/Competencias Investigativas y Diseño de Proyectos/'/>
            <input type='file' name='f9'/>
            <br>
            <input type='submit' value='Subir' class='btn'/>  
        </form>

    </section>

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

            © 2020 Copyright

            </div>

          </div>

        </footer>

</body>

</html>

