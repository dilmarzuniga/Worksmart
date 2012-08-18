<?php 
@$accion=$_GET['accion'];
@$id=$_GET["id"];
require_once 'admin/conexion.php';

/*mysql_connect ('localhost','root','') or die (mysql_error());
mysql_select_db ('empleos') or die (mysql_error());*/
if($accion=='save'){
				$nombre = $_POST['names'];
				$apellidos = $_REQUEST['last'];
				$nacimiento=$_REQUEST['bird'];
				$telefono=$_REQUEST['tel'];
				$experiencia=$_REQUEST['exp'];
				$dui=$_REQUEST['iud'];
				$nit=$_REQUEST['tin'];
				$profesion=$_REQUEST['prof'];
				$direccion=$_REQUEST['dir'];
				$referencia=$_REQUEST['ref'];
				$celular=$_REQUEST['cel'];
				$prof_ref=$_REQUEST['prof_ref'];
				$tel_ref=$_REQUEST['tel_ref'];	
				$correo=$_REQUEST['mail'];
				$correo_ref=$_REQUEST['mail_ref'];
				$civil=$_REQUEST['marital'];
				$sexo=$_REQUEST['sex'];
				$basicos=$_REQUEST['basics'];
				$bachillerato=$_REQUEST['bach'];
				$superiores=$_REQUEST['high'];
				$pais=$_REQUEST['country'];
				$mensaje=$_REQUEST['msj'];
				
	  mysql_query("
UPDATE  `empleos`.`curriculum` SET  
`nombres` =  '$nombre',
`apellidos` =  '$apellidos',
`direccion` =  '$direccion',
fecha_nacimiento='$nacimiento',
telefono='$telefono',
exp_laboral='$experiencia',
dui='$dui',
nit='$nit',
profesion='$profesion',
direccion='$direccion',
ref_personal='$referencia',
celular='$celular',
prof_ref='$prof_ref',
tel_ref='$tel_ref',	
correo='$correo',
mail_ref='$correo_ref',
estado_civil='$civil',
sexo='$sexo',
estudios_basicos='$basicos',
bachillerato='$bachillerato',
est_superiores='$superiores',
pais='$pais',
mensaje_personal='$mensaje' WHERE  username =  '".$id."'");
//mysql_query($comando,$conexion) or die (mysql_error()) ;
echo("<script>document.location.href='modcurri.php?accion=alert'</script>");
		 		  }
				  
		 		  
				  
				  else if($accion=='bye'){
				  mysql_query("INSERT into mensajes (id_user,mensaje,leido) VALUES ($id,'borrar la cuenta',0)");
				  echo("Ha sido enviada la solicitud para desactivar su cuenta, clic <a href='home.php'>aqui</a> para regresar");
				  //echo(header("location:home.php"));
				  }
			
	  ?>