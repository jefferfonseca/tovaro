
<?php include('includes/header.php');?>
<?php
session_start();

//<--Periodos y ciclos predeterminados-->
$periodo = "Periodo I";
$ciclo = "Ciclo I";

//Habilitación de periodos
$statusPI = "disabled";
$statusPII = "disabled";
$statusPIII = "disabled";
$statusPVI = "disabled";

//Habilitación de ciclos
$statusCI = "disabled";
$statusCII = "disabled";
$statusCIII = "disabled";
$statusCIV = "disabled";
$statusCNiv = "disabled";


if (isset($_SESSION['periodo'])) {
    $_SESSION['periodo'] = $periodo = isset($_POST['periodo']) ? $_POST['periodo'] : $_SESSION['periodo'];
} else {
    $_SESSION['periodo'] = $periodo;
}

if (isset($_SESSION['ciclo'])) {
    $_SESSION['ciclo'] = $ciclo = isset($_POST['ciclo']) ? $_POST['ciclo'] : $_SESSION['ciclo'];
} else {
    $_SESSION['ciclo'] = $ciclo;
}
/*
//valida que en el primer periodo solo ingrese a ciclo III
if ($_SESSION['periodo'] == "Periodo I") {
    if ($_SESSION['ciclo'] != "Ciclo III") {
        $_SESSION['ciclo'] = $ciclo = "Ciclo III";
        echo '<script type="text/javascript">alert("No existe información para mostrar sobre el Periodo y Ciclo especificado.")</script>';
    }
}
*/
//Impreme valor de la variable de sesión
//echo '<script type="text/javascript">alert("C= ' . $_SESSION['ciclo'] . '")</script>';

switch ($periodo) {
    case "Periodo I":
        $path = "Iperiodo";
        $statusCI = "disabled";
        $statusCII = "disabled";
        $statusCIII = "disabled";
        $statusCIV = "disabled";
        $statusCNiv = "disabled";
        break;
    case "Periodo II":
        $path = "IIperiodo";
        $statusCI = "disabled";
        $statusCII = "disabled";
        $statusCIII = "disabled";
        $statusCIV = "disabled";
        $statusCNiv = "disabled";
        break;
    case "Periodo III":
        $path = "IIIperiodo";
        $statusCI = "disabled";
        $statusCII = "disabled";
        $statusCIII = "disabled";
        $statusCVI = "disabled";
        $statusCNiv = "disabled";
        break;
    case "Periodo IV":
        $path = "IVperiodo";
        $statusCI = "disabled";
        $statusCII = "disabled";
        $statusCIII = "disabled";
        $statusCIV = "disabled";
        $statusCNiv = "disabled";
        break;
    default:
        $path = $periodo;
}

switch ($ciclo) {
    case "Ciclo I":
        $path .= "CI/";
        break;
    case "Ciclo II":
        $path .= "CII/";
        break;
    case "Ciclo III":
        $path .= "CIII/";
        break;
    case "Nivelación":
        $path .= "Nivelacion/";
        break;
    default:
        $path .=  $ciclo ;
}

?>

<header>
    <!-- <div class="navbar-fixed">  Pega el menu a la parte de arriba -->

    <div class="navbar">
        <div class="row header">
            <div class="col s12 m1 l1 center"><img src="images\Escudo.png" alt="tovaro" width="70px" height="90px" /></div>
            <div class="col s12 m10 l4 center">
                <h5>
                    Institución Educativa Técnica<br />
                    Tomás Vásquez Rodríguez
                </h5>
                <p>"Con pensamiento triunfador, buscamos la excelencia"</p>
            </div>
        </div>

        <nav class="blue-grey lighten-1" id="myHeader">
            <div class="nav-wrapper">
                <h4 href="#" class="center-align"><?php echo $periodo . ' - ' . $ciclo ?></h4>
                <!-- <a class="hide" id="logo"><img style="padding: 10px;" src="images/Escudo.png" alt="tovaro"
                            width=50px height=100%></a> -->
                <?php 
                    if ($_SESSION["autentificado"] != "SI"){
                        echo '<a href="login.php" class="right valign-wrapper"><i class="large material-icons">account_circle</i>Iniciar Sesión</a>';
                    }
                ?>
            </div>
        </nav>
    </div>
</header>


<section>
    <!--configuración de Periodo -->
    <form action="" method="POST">
        <input type="submit" class="btn <?php echo statusPI;?>" name="periodo" value="Periodo I">
        <input type="submit" class="btn <?php echo statusPII;?>" name="periodo" value="Periodo II">
        <input type="submit" class="btn <?php echo $statusPIII;?>" name="periodo" value="Periodo III">
        <input type="submit" class="btn <?php echo $statusPVI;?>" name="periodo" value="Periodo IV">
    
        <?php

       
        if ($_SESSION["autentificado"] == "SI") {
            if ($_SESSION["solves"] != "hide"){
                echo '<a href="solves.php" class="btn right indigo darken-4 ">Solves</a>';
                echo '<a href="subir-ing.php" class="btn right indigo darken-4 ">Subir</a>';
            }
            echo '<a href="logout.php" class="right white-text">Cerrar sesión</a>';
        }
        ?>
    </form>

    <!--configuración de Ciclos -->
    <form action="" method="POST">
        <br />       
        <input type="submit" class="btn <?php echo $statusCI;?>" name="ciclo" value="Ciclo I" />
        <input type="submit" class="btn <?php echo $statusCII;?>" name="ciclo" value="Ciclo II" />
        <input type="submit" class="btn <?php echo $statusCIII;?>" name="ciclo" value="Ciclo III" />
        <input type="submit" class="btn <?php echo $statusCIV;?>" name="ciclo" value="Ciclo IV" />
        <input type="submit" class="btn <?php echo $statusCNiv;?>" name="ciclo" value="Nivelación" />
      
    </form>
</section>
