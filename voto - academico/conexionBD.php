<?php

function conectarse()

{

//Conexion remota

$db_host="host17.latinoamericahosting.com:3306"; // Host BD al que conectarse, habitualmente es localhost
$db_nombre="tovaroed_academico"; // Nombre de la Base de Datos que se desea utilizar
$db_user="tovaroed_dx"; // Nombre del usuario con permisos para acceder a la BD
$db_pass="1049629422SantiF*"; // contrase&ntildea del usuario de la BD


//Conexion local
/*
$db_host="localhost"; // Host BD al que conectarse, habitualmente es localhost

$db_nombre="educovota"; // Nombre de la Base de Datos que se desea utilizar

$db_user="educolibre"; // Nombre del usuario con permisos para acceder a la BD

$db_pass="educovota"; // contrase&ntildea del usuario de la BD
*/
// Ahora estamos realizando una conexi&oacuten y la llamamos $link
$link=mysql_connect($db_host, $db_user, $db_pass) or die ("Error conectando a la base de datos.");

// Seleccionamos la base de datos que nos interesa

mysql_select_db($db_nombre ,$link) or die("Error seleccionando la base de datos.");

// Retornamos $link  para hacer consultas a la BD.

return $link;

}
//$link=conectarse();

?>
