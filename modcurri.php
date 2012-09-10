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
<div id="ban">Bienvenido <?php
	if( strlen($user)==0){
	echo("<script>alert('Inicie Sesion para acceder al menu de usuario');</script>");
	header("location:Index.php?mostrar=2");
	}	
		echo("<font size=5>$user</font>");
		?> 
		</div>
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
		  <ul id="options" class="fix">
    <li><a href="home.php">Inicio</a></li>
    <li><a href="modcurri.php">Mi Curriculum</a></li>
    <li><a href="procesos.php?id=bye&id=<?php echo $id_user?>">Eliminar Mi Cuenta</a></li>
    <li><a href="login.php">Cerrar Sesion</a></li>
    </ul>
    <p>
    <br />
    <br />
    </p>
    <h3> Datos de Curriculum</h3>
      <form id="form1" name="form1" method="post" action="procesos.php?accion=save&id=<?php echo $user?>">
      <p>
      		<br />
            Nombres
            <br />
            <label>
              <input name="names" type="text" id="names" value="<?php echo $nombre; ?>" />
            </label>
            <br />
            Sexo
            <br />
            <label>
              <select name="sex" size="1" id="sex">
                <option value="<?php echo $sexo; ?>" selected="selected"><?php echo $sexo; ?></option>
                <option value="Masculino">Masculino</option>
                <option value="Femenino">Femenino</option>
              </select>
            </label>
            <br />
            <br />
            Pa&iacute;s
            <br />
            <input name="country" type="text" id="country" value="<?php echo $pais; ?>"/>
            <br />
            Apellidos
            <br />
            <input name="last" type="text" id="last" value="<?php echo $apellidos; ?>"/>
            <br />
            Estudios B&aacute;scos
            <br />
            <textarea name="basics" id="basics"><?php echo $basicos; ?></textarea>
            <br />
            <br />
            Mensaje Personal
            <br />
            <textarea name="msj" id="msj"><?php echo $mensaje; ?></textarea>
            <br />
            <br />
            Fecha Nacimiento
            <br />
            <input name="bird" type="text" id="bird" value="<?php echo $nacimiento; ?>"/>
            <br />
            Bachillerato
            <br />
            <textarea name="bach" id="bach" ><?php echo $bachillerato; ?></textarea>
            <br />
            Tel&eacute;fono
            <br />
            <input name="tel" type="text" id="tel" value="<?php echo $telefono; ?>"/>
            <br />
            Estudios Superiores
            <br />
            <textarea name="high" id="high" ><?php echo $superiores; ?></textarea>
            <br />
            DUI
            <br />
            <input name="iud" type="text" id="iud" value="<?php echo $dui; ?>"/>
            <br />
            Experiencia Laboral
            <br />
            <input name="exp" type="text" id="exp" value="<?php echo $experiencia; ?>"/>
            <br />
            NIT
            <br />
            <input name="tin" type="text" id="tin" value="<?php echo $nit; ?>"/>
            <br />
            Profesi&oacute;n
            <br />
            <input name="prof" type="text" id="prof" value="<?php echo $profesion; ?>"/>
            <br />
            Direccion
            <br />
            <input name="dir" type="text" id="dir" value="<?php echo $direccion; ?>"/>
            <br />
            Referencia Personal
            <br />
            <input name="ref" type="text" id="ref" value="<?php echo $referencia; ?>"/>
            <br />
            Celular
            <br />
            <input name="cel" type="text" id="cel" value="<?php echo $celular; ?>"/>
            <br />
            Profesion Referencia 
            <br />
            <input name="prof_ref" type="text" id="prof_ref" value="<?php echo $prof_ref; ?>"/>
            <br />
            Estado Civil
            <br />
            <input name="marital" type="text" id="marital" value="<?php echo $civil; ?>"/>
            <br />
            Telefono Referencia
            <br />
            <input name="tel_ref" type="text" id="tel_ref" value="<?php echo $tel_ref; ?>"/>
            <br />
            Correo Electr&oacute;nico
            <br />
            <input name="mail" type="text" id="mail" value="<?php echo $correo; ?>"/>
            <br />
            Correo Referencia
            <br />
            <input name="mail_ref" type="text" id="mail_ref" value="<?php echo $correo_ref; ?>"/>
            <br />
            <br />
            <label>
              <input name="Guardar" type="submit" id="Guardar" value="Guardar" />
            </label>
	</p>
    </form>
    <div id="icon"> 
    	<img src="images/logo1.png" />
    </div>
</body>
</html>
