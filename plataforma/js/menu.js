    /* 
            
            <!--script para detectar el ancho de la pantalla y el ancho del navegador-->
            
            if (screen.width < 1280)
                  document.write("Mediana")
              else
                  document.write(window.innerWidth) */
    //document.write(window.innerWidth)


    $(document).ready(main);

    var contador = 2;

    function main() {
        $('#menu_bar').click(function () {
            // $('nav').toggle(); 

            if (contador == 2) {
                left: '-100%'

            }

            if (contador == 1) {
                $('nav').animate({
                    left: '0'
                });
                contador = 0;
            } else {
                contador = 1;
                $('nav').animate({
                    left: '-100%'
                });
            }

        });

    };
