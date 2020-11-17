<?php $menu="Institución"; include('includes/header.php');?>

<!--------------------- Titulo ------------------------------>
<div class="">
    <h4 class="center white-text"><b>DIRECTORIO DE DOCENTES</b></h4>
    <br>
</div>

<!--------------------- Docentes Directivos ------------------------------>

<div class="section grey">
    <h3 class="center white-text">Directivos Docentes</h3>
</div>
<br>
    
<div class="row white ">
    <div class="col s12  opacity">
        <div class="row">
        <br>

            <!-- Leer archivo csv con php para crear dodentes-->
            <?php
            $linea = 0;
            //Abrimos nuestro archivo
            $archivo = fopen("./lista_docentes/directivos.csv", "r");
            //Lo recorremos fila por fila  con el while
            while (($docente = fgetcsv($archivo, ",")) == true) {
                $num = count($docente);
                $linea++;
                //Recorremos las columnas de esa fila
                for ($columna = 0; $columna <  $num; $columna++) {
                        ?>
                        <!--- Asignación de valores 
                        $docente[0] = Apellidos del docente
                        $docente[1] = Nombre del docente
                        $docente[2] = Apellidos del docente
                        $docente[3] = Celular
                        $docente[4] = E-mail
                        $docente[5] = Área
                        $docente[6] = Cargo
                        --->

                        <!--- Docentes Directivos --->
                        <div class="col s12 m7 l2 center ">
                            <img src="./images/<?php echo $docente[0]?>.png" alt="" width= auto height= 140 >
                            <h5 class="blue-text text-darken-4"><b><?php echo $docente[1] .' ' . $docente[2]?></b></h5>
                            <!--- crea el link directo para WhatsApp --->
                            <p class="black-text" style="margin: 0;"><b>Celular: </b><a href="https://wa.me/+57<?php echo $docente[3]?>" target="_blank">+57<?php echo $docente[3]?></a></p>
                            <p class="black-text" style="margin: 0;"><b>E-mail: </b><?php echo $docente[4]?></p>
                            <p class="black-text" style="margin: 0;"><b>Cargo: </b><?php echo $docente[5] ?></p>
                            <p class="black-text" style="margin: 0;"><b>Área: </b><?php echo $docente[6] ?></p>
                            <br><br><br>
                        </div>
                        

            <?php 
            break;//rompre ciclo for (si no, se repite el dato la cantidad de columnas que exista)
                }//cierre del for
            }//cierre del while

            //Cerramos el archivo
            fclose($archivo);
            ?>
        </div>
        <br>
    </div>
</div>


<!--------------------- Docentes Secundaria ------------------------------>
<div class="section grey">
    <h3 class="center white-text">Docentes Secundaria</h3>
</div>
<br>

<div class="row white">
    <div class="col s12 opacity">
        <div class="row">
        <br>

            <!-- Leer archivo csv con php para crear dodentes-->
            <?php
            $linea = 0;
            //Abrimos nuestro archivo
            $archivo = fopen("./lista_docentes/secundaria.csv", "r");
            //Lo recorremos fila por fila  con el while
            while (($docente = fgetcsv($archivo, ",")) == true) {
                $num = count($docente);
                $linea++;
                //Recorremos las columnas de esa fila
                for ($columna = 0; $columna <  $num; $columna++) {
                        ?>
                        <!--- Asignación de valores 
                        $docente[0] = Apellidos del docente
                        $docente[1] = Nombre del docente
                        $docente[2] = Apellidos del docente
                        $docente[3] = Celular
                        $docente[4] = E-mail
                        $docente[5] = Área
                        $docente[6] = Cargo
                        --->

                        <!--- Docentes Secundaria --->
                        <div class="col s12 m6 l4 center ">
                            <img src="./images/<?php echo $docente[0]?>.png" alt="" width= auto height= 140 >
                            <h5 class="blue-text text-darken-4"><b><?php echo $docente[1] .' ' . $docente[2]?></b></h5>
                            <!--- crea el link directo para WhatsApp --->
                            <p class="black-text" style="margin: 0;"><b>Celular: </b><a href="https://wa.me/+57<?php echo $docente[3]?>" target="_blank">+57<?php echo $docente[3]?></a></p>
                            <p class="black-text" style="margin: 0;"><b>E-mail: </b><?php echo $docente[4]?></p>
                            <p class="black-text" style="margin: 0;"><b>Cargo: </b><?php echo $docente[5] ?></p>
                            <p class="black-text" style="margin: 0;"><b>Área: </b><?php echo $docente[6] ?></p>
                            <br><br><br>
                        </div>
            <?php 
            break;//rompre ciclo for (si no, se repite el dato la cantidad de columnas que exista)
                }//cierre del for
            }//cierre del while

            //Cerramos el archivo
            fclose($archivo);
            ?>
        </div>
        <br>
    </div>
</div>


<!--------------------- Docentes Primaria ------------------------------>
<div class="section grey">
    <h3 class="center white-text">Docentes Primaria</h3>
</div>
<br>

<div class="row white">
    <div class="col s12 opacity">
        <div class="row">
        <br>

            <!-- Leer archivo csv con php para crear dodentes-->
            <?php
            $linea = 0;
            //Abrimos nuestro archivo
            $archivo = fopen("./lista_docentes/primaria.csv", "r");
            //Lo recorremos fila por fila  con el while
            while (($docente = fgetcsv($archivo, ",")) == true) {
                $num = count($docente);
                $linea++;
                //Recorremos las columnas de esa fila
                for ($columna = 0; $columna <  $num; $columna++) {
                        ?>
                        <!--- Asignación de valores 
                        $docente[0] = Apellidos del docente
                        $docente[1] = Nombre del docente
                        $docente[2] = Apellidos del docente
                        $docente[3] = Celular
                        $docente[4] = E-mail
                        $docente[5] = Área
                        $docente[6] = Cargo
                        --->

                        <!--- Docente Secundaria --->
                        <div class="col s12 m6 l4 center ">
                            <img src="./images/<?php echo $docente[0]?>.png" alt="" width= auto height= 140 >
                            <h5 class="blue-text text-darken-4"><b><?php echo $docente[1] .' ' . $docente[2]?></b></h5>
                            <!--- crea el link directo para WhatsApp --->
                            <p class="black-text" style="margin: 0;"><b>Celular: </b><a href="https://wa.me/+57<?php echo $docente[3]?>" target="_blank">+57<?php echo $docente[3]?></a></p>
                            <p class="black-text" style="margin: 0;"><b>E-mail: </b><?php echo $docente[4]?></p>
                            <p class="black-text" style="margin: 0;"><b>Cargo: </b><?php echo $docente[5] ?></p>
                            <p class="black-text" style="margin: 0;"><b>Área: </b><?php echo $docente[6] ?></p>
                            <br><br><br>
                        </div>
            <?php 
            break;//rompre ciclo for (si no, se repite el dato la cantidad de columnas que exista)
                }//cierre del for
            }//cierre del while

            //Cerramos el archivo
            fclose($archivo);
            ?>
       </div>
        <br>
    </div>
</div>


<!--------------------- Docentes Sedes ------------------------------>
<div class="section grey">
    <h3 class="center white-text">Docentes Sedes</h3>
</div>   
<br>

<div class="row white">
    <div class="col s12 opacity">
        <div class="row">
        <br>

            <!-- Leer archivo csv con php para crear dodentes-->
            <?php
            $linea = 0;
            //Abrimos nuestro archivo
            $archivo = fopen("./lista_docentes/sedes.csv", "r");
            //Lo recorremos fila por fila  con el while
            while (($docente = fgetcsv($archivo, ",")) == true) {
                $num = count($docente);
                $linea++;
                //Recorremos las columnas de esa fila
                for ($columna = 0; $columna <  $num; $columna++) {
                        ?>
                        <!--- Asignación de valores 
                        $docente[0] = Apellidos del docente
                        $docente[1] = Nombre del docente
                        $docente[2] = Apellidos del docente
                        $docente[3] = Celular
                        $docente[4] = E-mail
                        $docente[5] = Área
                        $docente[6] = Cargo
                        --->

                        <!--- Docente Sedes --->
                        <div class="col s12 m6 l4 center ">
                            <img src="./images/<?php echo $docente[0]?>.png" alt="" width= auto height= 140 >
                            <h5 class="blue-text text-darken-4"><b><?php echo $docente[1] .' ' . $docente[2]?></b></h5>
                            <!--- crea el link directo para WhatsApp --->
                            <p class="black-text" style="margin: 0;"><b>Celular: </b><a href="https://wa.me/+57<?php echo $docente[3]?>" target="_blank">+57<?php echo $docente[3]?></a></p>
                            <p class="black-text" style="margin: 0;"><b>E-mail: </b><?php echo $docente[4]?></p>
                            <p class="black-text" style="margin: 0;"><b>Cargo: </b><?php echo $docente[5] ?></p>
                            <p class="black-text" style="margin: 0;"><b>Sede: </b><?php echo $docente[6] ?></p>
                            <br><br><br>
                        </div>
            <?php 
            break;//rompre ciclo for (si no, se repite el dato la cantidad de columnas que exista)
                }//cierre del for
            }//cierre del while

            //Cerramos el archivo
            fclose($archivo);
            ?>
        </div>
        <br>
    </div>
</div>


<?php include('includes/footer.php');?>
