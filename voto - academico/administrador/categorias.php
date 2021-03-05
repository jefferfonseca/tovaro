<?php
require_once("../funciones.php");	
require_once("../conexionBD.php");
$link=conectarse();
//***Leer variables del sistema******
$estado=mysql_query("select * from general",$link);
$leer= mysql_fetch_array($estado);
//****** Verificamos si existe la cookie *****/
if(isset($_COOKIE['VotaDatAdmin'])) {
	
	//****Agregar una nueva categor�a*******
	if (isset($_POST['envia_categoria'])) {
		if ((borra_espacios($_POST['nombre_cat'])!="")and(borra_espacios($_POST['descripcion_cat'])!="")) {
			$fnombre_cat=borra_espacios($_POST['nombre_cat']);
			$fdescripcion_cat=borra_espacios($_POST['descripcion_cat']);
		}
		else {
			include_once("encabezado.html");
			print "<strong>Debe llenar todos los campos<br />";
			print"<br /><a href='javascript:history.go(-1)'>Volver al formulario</a></strong></div></body></html>";
			exit;
		}
		
		//*****Validamos que no exista una  categor�a duplicada**** 
		$duplica=0;
		$resp3=mysql_query("select * from categorias",$link);
		while($row3 = mysql_fetch_array($resp3)) {
		        if (cambia_mayuscula($fnombre_cat)==cambia_mayuscula($row3["nombre"])){
		               $duplica=1;
		        }
		}
		if ($duplica==1) {
		        include_once("encabezado.html");
		        print "<strong>Ya existe una categor&iacutea con este nombre<br />";
		        print"<br /><a href='javascript:history.go(-1)'>Volver al formulario</a></strong></div></body></html>";
		        exit;
		}
		
		//******Guardamos los datos en la BD ******
		$cons_sql  = sprintf("INSERT INTO categorias(nombre,descripcion) VALUES(%s,%s)", comillas($fnombre_cat),comillas($fdescripcion_cat));
		mysql_query($cons_sql,$link);

		//****obtener el id de la categoria guardada
		$id_cat=mysql_insert_id($link);

		//******Guardamos los datos de control ******
                $ffecha=date("Y-m-d");
                $fhora=date("G:i:s");
                $fip = $_SERVER['REMOTE_ADDR'];
                $faccion="Admin_Crea_Categoria (id:".$id_cat.")";
                $cons_sql5  = sprintf("INSERT INTO control(c_fecha,c_hora,c_ip,c_accion,c_idest) VALUES(%s,%s,%s,%s,%d)", comillas($ffecha), comillas($fhora), comillas($fip), comillas($faccion),$_COOKIE['VotaDatAdmin']);
mysql_query($cons_sql5,$link);

	}
	//****Actualizar informaci�n de la categoria*******
	if (isset($_POST['edita_cat'])) {
		if (($_POST['nombre_cat']!="")and($_POST['descripcion_cat']!="")) {
			$fnombre_cat=borra_espacios($_POST['nombre_cat']);
			$fdescripcion_cat=borra_espacios($_POST['descripcion_cat']);
		}
		else {
			include_once("encabezado.html");
			print "<strong>Debe llenar todos los campos<br />";
			print"<br /><a href='javascript:history.go(-1)'>Volver al formulario</a></strong></div></body></html>";
			exit;
		}
		//****Actualizar en la BD*******
		$cons_sql3  = sprintf("UPDATE categorias SET nombre=%s, descripcion=%s WHERE id=%d", comillas($fnombre_cat),comillas($fdescripcion_cat), $_POST['identificador']);
		mysql_query($cons_sql3,$link);
	
		//******Guardamos los datos de control ******
                $ffecha=date("Y-m-d");
                $fhora=date("G:i:s");
                $fip = $_SERVER['REMOTE_ADDR'];
                $faccion="Admin_Actualiza_Categoria (id:".$_POST['identificador'].")";
                $cons_sql5  = sprintf("INSERT INTO control(c_fecha,c_hora,c_ip,c_accion,c_idest) VALUES(%s,%s,%s,%s,%d)", comillas($ffecha), comillas($fhora), comillas($fip), comillas($faccion),$_COOKIE['VotaDatAdmin']);
mysql_query($cons_sql5,$link);
	
	}
	echo '<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">';
	echo '<html>';
	echo '<head>';
	echo '<title>'.$leer['institucion'].' - Categor&iacuteas de votaci&oacuten</title>';
	echo '<link href="../estilo4.css" rel="stylesheet" type="text/css" />';
	echo '</head>';
	echo '<body>';
	echo '<h1>'.$leer['institucion'].'</h1>';
	echo '<h2>CATEGOR&IacuteAS DE VOTACI&OacuteN</h2>';
	echo '<div align="center">';	
	//*****Formulario para agregar una categor�a *******
	if((isset($_GET['agrega']))and($_GET['agrega']=="ok")) { 
		echo '<form name="addcat" action="categorias.php" method="post">';
	        echo '<table>';
	        echo '<tr>';
	        echo '<td style="text-align:right;"><label for="nombre_cat">';
	        echo '<strong>Nombre:</strong>';
	        echo '</label></td>';
	        echo '<td><input type="text" name="nombre_cat" size="30" maxlength="50" title="Escriba el nombre de la categoria" />';
	        echo '</td></tr>';
	        echo '<tr>';
	        echo '<td style="text-align:right;"><label for="descripcion_cat">';
	        echo '<strong>Descripci&oacuten:</strong>';
	        echo '</label></td>';
	        echo '<td><input type="text" name="descripcion_cat" size="30" maxlength="50" title="Escriba la descripci&oacuten de la categor&iacutea" />';
	        echo '</td></tr>';	        

	        echo '<tr><td class="cen" colspan="2"><input type="submit" name="envia_categoria" value="Guardar" title="Agregar categor&iacutea" />&nbsp&nbsp&nbsp&nbsp';
		echo '<input type="button" name="Cancel" value="Cancelar" onclick="window.location =\'categorias.php\' "/></td></tr>';
		echo '</form></table>';
	}
	else {
		echo '<div class=cen>';
		echo '<strong><a href="categorias.php?agrega=ok" title="Agregar categor&iacutea">Agregar categor&iacutea</a></strong>';
		echo '</div>';
	}
	
	//*****Formulario para editar categor�a *******
	if((isset($_GET['id'])) and (isset($_GET['editar'])) and ($_GET['editar']=="ok")) { 
		$resp4=mysql_query(sprintf("select * from categorias where md5(id)=%s",comillas($_GET['id'])),$link);
        	if ($row4 = mysql_fetch_array($resp4)) {	

			echo '<br /><form name="editacat" action="categorias.php" method="post">';
		       	echo '<table>';
		       	echo '<tr>';
		        echo '<td style="text-align:right;"><label for="nombre_cat">';
		        echo '<strong>Nombre:</strong>';
		        echo '</label></td>';
		        echo '<td><input type="text" name="nombre_cat" value="'.$row4['nombre'].'" size="30" maxlength="50" title="Escriba el nombre de la categor&iacutea" />';
		        echo '</td></tr>';
		        echo '<tr>';
		        echo '<td style="text-align:right;"><label for="descripcion_cat">';
		        echo '<strong>Descripci&oacuten:</strong>';
		        echo '</label></td>';
		        echo '<td><input type="text" name="descripcion_cat" value="'.$row4['descripcion'].'" size="30" maxlength="50" title="Escriba la descripci&oacuten de la categor&iacutea" />';
		        echo '</td></tr>';		        
				echo '<input type="hidden" name="identificador" value="'.$row4['id'].'" />';
		        echo '<tr><td class="cen" colspan="2"><input type="submit" name="edita_cat" value="Guardar" title="Agregar categor&iacutea" />&nbsp&nbsp&nbsp&nbsp';
			echo '<input type="button" name="Cancel" value="Cancelar" onclick="window.location =\'categorias.php\' "/></td></tr>';
			echo '</form></table>';
		}
		else {
		      	echo '<table>';
		        echo '<tr><td class="cen"><strong>No hay datos para la categor&iacutea</strong></td></tr>';
		        echo '</table>';
		}	
	}
	//******Mostrar mensaje para borrar categor�a*******
	if((isset($_GET['id']))and(isset($_GET['elimina']))and($_GET['elimina']=="0")) {		
		
		$resp5=mysql_query(sprintf("select * from categorias where md5(id)=%s",comillas($_GET['id'])),$link);
	        if ($row5 = mysql_fetch_array($resp5)) {
				//****Verificar que no existan candidatos para eliminar la categor�a******
				$resp9=mysql_query(sprintf("select id from candidatos where representante=%d",$row5['id']),$link);
				if (!$row9 = mysql_fetch_array($resp9)) {
					echo '<br /><div class="cen"><strong>';
					echo '¿Desea borrar la categor&iacutea '.$row5['nombre'].' del sistema? ';
					echo '<a href="categorias.php?id='.$_GET['id'].'&elimina=1" title="Borrar categor&iacutea del sistema">Si</a>&nbsp&nbsp&nbsp&nbsp';
					echo '<a href="categorias.php" title="Cancelar la eliminaci&oacuten de la categor&iacutea">No</a>';
					echo '</strong></div>';
				}
				else {
					echo '<br /><strong>Advertencia: Debe borrar primero los candidatos que pertenecen a la categor&iacutea '.$row5['nombre'].'.</strong>';
				}
		}
		else {
			echo '<table>';
		        echo '<tr><td class="cen"><strong>No hay datos para la categor&iacutea</strong></td></tr>';
		        echo '</table>';
		}
	}
	
	//*****Eliminar categor�a******
	if((isset($_GET['id']))and(isset($_GET['elimina']))and($_GET['elimina']=="1")) {
		$resp6=mysql_query(sprintf("select * from categorias where md5(id)=%s",comillas($_GET['id'])),$link);
	        $row6 = mysql_fetch_array($resp6);
		$resp2=mysql_query(sprintf("delete from categorias where md5(id)=%s",comillas($_GET['id'])),$link);

		//******Guardamos los datos de control ******
                $ffecha=date("Y-m-d");
                $fhora=date("G:i:s");
                $fip = $_SERVER['REMOTE_ADDR'];
                $faccion="Admin_Borra_Categor&iacutea (Nombre:".$row6['nombre'].")";
                $cons_sql5  = sprintf("INSERT INTO control(c_fecha,c_hora,c_ip,c_accion,c_idest) VALUES(%s,%s,%s,%s,%d)", comillas($ffecha), comillas($fhora), comillas($fip), comillas($faccion),$_COOKIE['VotaDatAdmin']);
mysql_query($cons_sql5,$link);

	}
	
	//****MUESTRA LA TABLA DE CATEGOR�AS******
	echo '<br /><table>';
	echo '<thead><tr><th>NOMBRE</th><th colspan="2">OPCIONES</th></tr></thead>';
	$ContAdm=0;
	$resp=mysql_query(sprintf("select * from categorias order by id"),$link);
	while($row = mysql_fetch_array($resp)) {		
			echo '<tr>';
			echo '<td>'.$row['nombre'].' ('.$row['descripcion'].')</td>';
			echo '<td class="cen"><a href="categorias.php?id='.md5($row['id']).'&editar=ok" title="Editar categor&iacutea"><img src="../iconos/lapiz.png" border="0" width="20px" border="0" alt="Editar" /></a></td>';
			echo '<td class="cen"><a href="categorias.php?id='.md5($row['id']).'&elimina=0" title="Borrar categor&iacutea"><img src="../iconos/delete.png" border="0" alt="Borrar" /></a></td></tr>';
			$ContAdm=$ContAdm+1;		
	}
	if($ContAdm==0) {
		echo '<tr><td colspan="3"><strong>No existe informaci&oacuten para mostrar</strong></td></tr>';
	}
	echo '</table><br />';
	echo '</div>';
	echo '</body>';
	echo '</html>';
}
else {
	include_once("encabezado.html");
      	echo '<table>';
        echo '<tr><td class="cen"><strong>Su sesi&oacuten ha finalizado, por favor vuelva a ingresar al sistema</strong></td></tr>';
        echo '</table></div></body></html>';
}
mysql_close($link);
?>
