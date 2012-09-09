<?php
	include_once("header.php");
	include_once("admin/conexion.php");
?>

 <div class="menutips">
	<?php
	session_start(); 
	@$id_empresa=$_SESSION['nombre'];
	if( strlen($id_empresa)==0){
	echo("<script>alert('Inicie Sesion para acceder al menu de empresas');</script>");
	header("location:Empresas.php?error=2");
	}	
		echo("<font size=5>$id_empresa</font>");
		?>
	      <br />
	        <a href="login.php">Cerrar Sesion</a>
		<script type="text/javascript" src="stmenu.js"></script>
		<script type='text/javascript' src='menu_empresas.js'></script>
	</div>
    <div class="tipsizquierdo">
		<div class="left_content">
            
   	  <p>Detalle de usuario:</p>
   	  <!--<a href="admin/ver_plazas.php" class="Estilo1">Ver las Plazas--><?php 
	  //include"ver_Plazas.php";
	  				
					//creando la consulta
					$query = "select * from curriculum as c
							  inner join usuario as u
							  on u.username = c.username
							  where id_user  = " . $_GET['id'] . ";";
					
					$rs = mysql_query($query) or die(mysql_error());
					$row = mysql_fetch_array($rs)or die(mysql_error());

					echo "<h1>Curr&iacute;culum Vitae </h1>";
					$tabla = "<table align='center'> ";
					
					$tabla .= "
							<tr>
								<td><h2>DATOS PERSONALES</h2></td>
								<td rowspan='3' height='150' width='150' align='center' style='border:1px solid #000;'>Foto</td>
							</tr>
							<tr>
								<td><p><label class='pral'>Nombre y apellidos:  </label> " . " " . $row['nombres'] . " " . $row['apellidos'] . "</p>
									<p><b><label class='pral'>G&eacute;nero: </label>" . $row['sexo'] . "</p>
								</td>
						   </tr>
						   <tr>
								<td>";
					$tabla .= "
									<p><label class='pral'>Lugar y fecha de nacimiento: </label>" . $row['pais'] . " " . $row['fecha_nacimiento'] . "</p>
								</td>
								</tr>
								<tr>
									<td>
									<p><label class='pral'> DUI: </label>" . $row['dui'] . "</p>
									<p><label class='pral'> NIT: </label>" . $row['nit'] . "</p>
									</td>
								</tr>
							<tr>";
				    $tabla .= "
							<tr>
								<td>
									<p><label class='pral'>Direccion: </label>" . $row['direccion'] . "</p>
									<p><label class='pral'>Estado civil: </label>" . $row['estado_civil'] ." </p>
									<p><label class='pral'>Nacionalidad: </label>" . $row['pais'] . "</p>
									<p><label class='pral'>Correo electr&oacute;nico: </label>" . $row['correo'] . "</p>
								</td>
							</tr>
							<tr>
								<td><h2>DATOS PROFESIONALES </h2></td>
							</tr>
							<tr>
								<td>
								<p><label class='pral'>Estudios b&aacute;sicos:</label> " . $row['estudios_basicos'] . "</p>
								<p><label class='pral'>Bachillerato:</label> " . $row['bachillerato'] ." </p>
								<p><label class='pral'>Estudios superiores:</label> " . $row['est_superiores'] . "</p>
								<p><label class='pral'>Experiencia laboral: </label>" . $row['exp_laboral'] . "</p>
								</td>
							</tr>
							<tr>
								<td><label class='pral'>Presentaci&oacute;n: </label>" . $row['mensaje_personal'] . "</td>
							</tr>
						  </table>";
							
					echo $tabla;
	  ?>
   	  <h3></h3>
   	  <p>&nbsp;</p>
		</div>
    	<div class="clear"></div>
	</div><!--End of main_content-->
 </div>
<?php
	include_once("footer.php");
?>