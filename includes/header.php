<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="description"
        content="Es el Sitio Web Oficial de la Institución Educativa Técnica Tomás Vásquez Rodríguez">
    <title>TOVARO</title>

    <link rel="stylesheet" href="css\header.css">
    <link rel="stylesheet" href="css\slider.css">
    <link rel="stylesheet" href="css\styles.css">

    <link rel="icon" href="images\Escudo.png" type="image/png">
    
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
    <header>
        <!-- <div class="navbar-fixed">  Pega el menu a la parte de arriba -->
        <div class="navbar">
            <div class="row header">
                <div class="col s12 m1 l1 center"> <img src="./images\Escudo.png" alt="tovaro" width=70px height=90px>
                </div>
                <div class="col s12 m10 l4 center">
                    <h5>Institución Educativa Técnica<br>Tomás Vásquez Rodríguez</h5>
                    <p>"Con pensamiento triunfador, buscamos la excelencia"</p>
                </div>
            </div>
            <nav class="blue-grey lighten-1" id="myHeader">
                <div class="nav-wrapper">
                    <a class="hide" id="logo"><img style="padding: 10px;" src="./images/Escudo.png" alt="tovaro"
                            width=50px height=100%></a>

                    <a href="#" data-target="menu-responsive" class="sidenav-trigger right">
                        <i class="material-icons">menu</i>
                    </a>

                    <!--lista de menus de navegación-->
                    <ul class="right hide-on-med-and-down">
                        <li class="<?php if($menu=="Inicio"){echo"active";}?>"><a href="index.php">Inicio</a></li>

                        <li class="<?php if($menu=="Institución"){echo"active";}?>"><a href="#" class="dropdown-trigger"
                                data-target="institucion">
                                Institución                      
                                <i class="material-icons right">arrow_drop_down</i>
                            </a>
                        </li>

                        <li class="<?php if($menu=="TOVARO"){echo"active";}?>"><a href="live.php" target="_blank">TOVARO Live</a></li>

                        <li class="<?php if($menu=="Especialidades"){echo"active";}?>"><a href="#" class="dropdown-trigger"
                                data-target="esp">
                                Especialidades
                                <i class="material-icons right">arrow_drop_down</i>
                            </a>
                        </li>

                        <li><a href="https://compucol.co/colegios/paipaiettomasvasquezr/"  target="_blank">Sistema de Notas</a></li>
                        <li><a href="plataforma/index.php" target="_blank">Plataforma</a></li>
                        <li class="<?php if($menu=="Contacto"){echo"active";}?>"><a href="contacto.php">Contáctenos</a></li>
                    </ul>

                </div>
            </nav>

   
 <!--Submenus NO responsives -->

            <!-- Lista de Institución -->
            <ul id="institucion" class="dropdown-content" style="background-color: transparent;">
                <li></li>
                <li><a href="nosotros.php" class="white">Reseña Histórica</a></li>
                <li><a href="simbolos.php" class="white">Simbolos Institucionales</a></li>
                <li><a href="sedes.php" class="white">Sedes</a></li>
                <li><a href="docentes.php" class="white">Docentes</a></li>
                <li><a href="gobierno-escolar.php" class="white">Gobierno Escolar</a></li>
                <li><a href="proyectos.php" class="white">Proyectos</a></li>
                <li><a href="https://tovaro2020.wixsite.com/psicoorientacion" class="white" target="_blank">Sicoorientación</a></li>
            </ul>

            <!-- Lista de especialidades -->
            <ul id="esp" class="dropdown-content" style="background-color: transparent;">
                <li></li>
                <li><a href="redes.php" class="white">Redes y sistemas</a></li>
                <li><a href="salud.php" class="white">Salud</a></li>
                <li><a href="turismo.php" class="white">Turismo</a></li>
            </ul>

        <!-- Submenus responsives -->
            
             <!-- Lista de Institución -->
             <ul id="institucion-responsive" class="dropdown-content" style="background-color: transparent;">
                <li>></li>
                <li><a href="nosotros.php" class="white">Reseña Histórica</a></li>
                <li><a href="simbolos.php" class="white">Simbolos Institucionales</a></li>
                <li><a href="sedes.php" class="white">Sedes</a></li>
                <li><a href="docentes.php" class="white">Docentes</a></li>
                <li><a href="gobierno-escolar.php" class="white">Gobierno Escolar</a></li>
                <li><a href="proyectos.php" class="white">Proyectos</a></li>
                <li><a href="https://tovaro2020.wixsite.com/psicoorientacion" class="white" target="_blank">Sicoorientación</a></li>
            </ul>

            <!-- Lista de especialidades -->
            <ul id="esp-responsive" class="dropdown-content" style="background-color: transparent;">
                <li>></li>    
                <li><a href="redes.php" class="white">Redes y sistemas</a></li>
                <li><a href="salud.php" class="white">Salud</a></li>
                <li><a href="turismo.php" class="white">Turismo</a></li>
            </ul>

        <!-- Sidenav -->
            <ul class="sidenav" id="menu-responsive">
                <li class="<?php if($menu=="Inicio"){echo"active";}?>"><a href="index.php">Inicio</a></li>

                <li class="<?php if($menu=="Institución"){echo"active";}?>"><a href="#" class="dropdown-trigger"
                        data-target="institucion-responsive">
                        Institución
                        <i class="material-icons right">arrow_drop_down</i>
                    </a>
                </li>

                <li class="<?php if($menu=="TOVARO"){echo"active";}?>"><a href="live.php" target="_blank">TOVARO Live</a></li>

                <li class="<?php if($menu=="Especialidades"){echo"active";}?>"><a href="#" class="dropdown-trigger"
                        data-target="esp-responsive">
                        Especialidades
                        <i class="material-icons right">arrow_drop_down</i>
                    </a>
                </li>
                <li><a href="https://compucol.co/colegios/paipaiettomasvasquezr/" target="_blank">Sistema de Notas</a></li>

                <li><a href="plataforma/index.php" target="_blank">Plataforma</a></li>
                <li class="<?php if($menu=="Contacto"){echo"active";}?>"><a href="contacto.php">Contáctenos</a></li></ul>
        </div>
    </header>

    
