<?php
session_start();
$user=$_SESSION['nombre'];
@$id=$_GET['id'];
@$accion=$_GET['accion'];
$id_user=$_SESSION['id_user'];

include_once 'admin/conexion.php';

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Home</title>
</head>
<link rel="stylesheet" href="css/home.css" />

<body>
<table width="1381" height="1009" border="1">
  <tr>
    <td width="212" height="167">&nbsp;</td>
    <td width="1106">&nbsp;</td>
    <td width="41">&nbsp;</td>
  </tr>
  <tr>
    <td height="21">Bienvenido <?php
	if( strlen($user)==0){
	echo("<script>alert('Inicie Sesion para acceder al menu de usuario');</script>");
	header("location:Index.php?mostrar=2");
	}	
		echo("<font size=5>$user</font>");
		?> <a href="login.php">Cerrar Sesion</a> </td>
    <td rowspan="2">
	  <?php
	if($accion=='alert'){
	echo("<script>alert('Datos Actualizados');</script>");
	}

$queEmp = "SELECT * FROM curriculum WHERE username = '$user'";	
$resEmp = mysql_query($queEmp, $conexion) or die(mysql_error());
$totEmp = mysql_num_rows($resEmp);	   
	if ($totEmp> 0) {
 		while ($rowEmp = mysql_fetch_assoc($resEmp)) {	
		//$rowEmp = mysql_fetch_assoc($resEmp);
		$id=$rowEmp["id_curriculum"];	
				$nombre = $rowEmp["nombres"];
				$apellidos = $rowEmp["apellidos"];
				$nacimiento=$rowEmp["fecha_nacimiento"];
				$telefono=$rowEmp["telefono"];
				$experiencia=$rowEmp["exp_laboral"];
				$dui=$rowEmp["dui"];
				$nit=$rowEmp["nit"];
				$profesion=$rowEmp["profesion"];
				$direccion=$rowEmp["direccion"];
				$referencia=$rowEmp["ref_personal"];
				$celular=$rowEmp["celular"];
				$prof_ref=$rowEmp["prof_ref"];
				$tel_ref=$rowEmp["tel_ref"];	
				$correo=$rowEmp["correo"];
				$correo_ref=$rowEmp["mail_ref"];
				$civil=$rowEmp["estado_civil"];
				$sexo=$rowEmp["sexo"];
				$basicos=$rowEmp["estudios_basicos"];
				$bachillerato=$rowEmp["bachillerato"];
				$superiores=$rowEmp["est_superiores"];
				$pais=$rowEmp["pais"];
				$mensaje=$rowEmp["mensaje_personal"];
				//$user=$_SESSION['nombre'];	
		}
	}
	else
	{
					$id="No data";	
				$nombre = "No data";
				$apellidos = "No data";
				$nacimiento="No data";
				$telefono="No data";
				$experiencia="No data";
				$dui="No data";
				$nit="No data";
				$profesion="No data";
				$direccion="No data";
				$referencia="No data";
				$celular="No data";
				$prof_ref="No data";
				$tel_ref="No data";	
				$correo="No data";
				$correo_ref="No data";
				$civil="No data";
				$sexo="No data";
				$basicos="No data";
				$bachillerato="No data";
				$superiores="No data";
				$pais="No data";
				$mensaje="No data";	
	}	
	include("procesos.php");
	?>
      <form id="form1" name="form1" method="post" action="procesos.php?accion=save&id=<?php echo $user?>">
        <table width="817" height="255" border="1">
          <tr>
            <td width="119">Nombres</td>
            <td width="171"><label>
              <input name="names" type="text" id="names" placeholder="<?php echo $nombre; ?>" />
            </label></td>
            <td width="121">Sexo</td>
            <td width="194"><label>
              <select name="sex" size="1" id="sex">
                <option placeholder="<?php echo $sexo; ?>" selected="selected"><?php echo $sexo; ?></option>
                <option placeholder="Masculino">Masculino</option>
                <option placeholder="Femenino">Femenino</option>
              </select>
            </label></td>
            <td width="178">Pa&iacute;s
              <input name="country" type="text" id="country" placeholder="<?php echo $pais; ?>"/></td>
          </tr>
          <tr>
            <td>Apellidos</td>
            <td><input name="last" type="text" id="last" placeholder="<?php echo $apellidos; ?>"/></td>
            <td>Estudios B&aacute;scos </td>
            <td><textarea name="basics" id="basics"><?php echo $basicos; ?></textarea></td>
            <td>Mensaje Personal</td>
          </tr>
          <tr>
            <td>Fecha Nacimiento </td>
            <td><input name="bird" type="text" id="bird" placeholder="<?php echo $nacimiento; ?>"/></td>
            <td>Bachillerato</td>
            <td><textarea name="bach" id="bach" ><?php echo $bachillerato; ?></textarea></td>
            <td><textarea name="msj" id="msj"><?php echo $mensaje; ?></textarea></td>
          </tr>
          <tr>
            <td>Tel&eacute;fono</td>
            <td><input name="tel" type="text" id="tel" placeholder="<?php echo $telefono; ?>"/></td>
            <td>Estudios Superiores </td>
            <td><textarea name="high" id="high" ><?php echo $superiores; ?></textarea></td>
            <td>&nbsp;</td>
          </tr>
          <tr>
            <td>DUI</td>
            <td><input name="iud" type="text" id="iud" placeholder="<?php echo $dui; ?>"/></td>
            <td>Experiencia Laboral </td>
            <td><input name="exp" type="text" id="exp" placeholder="<?php echo $experiencia; ?>"/></td>
            <td><label>
              <input name="Guardar" type="submit" id="Guardar" placeholder="Guardar" />
            </label></td>
          </tr>
          <tr>
            <td>NIT</td>
            <td><input name="tin" type="text" id="tin" placeholder="<?php echo $nit; ?>"/></td>
            <td>Profesi&oacute;n</td>
            <td><input name="prof" type="text" id="prof" placeholder="<?php echo $profesion; ?>"/></td>
            <td>&nbsp;</td>
          </tr>
          <tr>
            <td>Direccion</td>
            <td><input name="dir" type="text" id="dir" placeholder="<?php echo $direccion; ?>"/></td>
            <td>Referencia Personal </td>
            <td><input name="ref" type="text" id="ref" placeholder="<?php echo $referencia; ?>"/></td>
            <td>&nbsp;</td>
          </tr>
          <tr>
            <td>Celular</td>
            <td><input name="cel" type="text" id="cel" placeholder="<?php echo $celular; ?>"/></td>
            <td>Profesion Referencia </td>
            <td><input name="prof_ref" type="text" id="prof_ref" placeholder="<?php echo $prof_ref; ?>"/></td>
            <td>&nbsp;</td>
          </tr>
          <tr>
            <td>Estado Civil </td>
            <td><input name="marital" type="text" id="marital" placeholder="<?php echo $civil; ?>"/></td>
            <td>Telefono Referencia </td>
            <td><input name="tel_ref" type="text" id="tel_ref" placeholder="<?php echo $tel_ref; ?>"/></td>
            <td>&nbsp;</td>
          </tr>
          <tr>
            <td>Correo Electr&oacute;nico </td>
            <td><input name="mail" type="text" id="mail" placeholder="<?php echo $correo; ?>"/></td>
            <td>Correo Referencia </td>
            <td><input name="mail_ref" type="text" id="mail_ref" placeholder="<?php echo $correo_ref; ?>"/></td>
            <td>&nbsp;</td>
          </tr>
          <tr>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
          </tr>
          <tr>
            <td>&nbsp;</td>
            <td><label></label></td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
          </tr>
        </table>
    </form></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td height="344"><p><a href="home.php">Inicio</a></p>
      <p><a href="modcurri.php">Mi Curriculum</a></p>
    <p><a href="procesos.php?id=bye&id=<?php echo $id_user?>">Eliminar Mi Cuenta</a>   </p></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
</table>
</body>
</html>
