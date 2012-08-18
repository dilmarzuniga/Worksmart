<?php
session_start();
$user=$_SESSION['nombre'];
$id_user=$_SESSION['id_user'];

require_once 'admin/conexion.php';
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Home</title>
</head>
<link rel="stylesheet" href="css/consultas.css" />

<body>
<table width="1088" height="1014" border="1">
  <tr>
    <td width="218" height="159">&nbsp;</td>
    <td width="815">&nbsp;</td>
    <td width="33">&nbsp;</td>
  </tr>
  <tr>
    <td height="34">Bienvenido <?php
	if( strlen($user)==0){
	echo("<script>alert('Inicie Sesion para acceder al menu de usuario');</script>");
	header("location:Index.php?mostrar=2");
	}	
		echo("<font size=5>$user</font>");
		?> <a href="login.php">Cerrar Sesion</a> </td>
    
	<td rowspan="2">
	<?php @$accion=$_REQUEST['accion'];
	if($accion=='verplazas')
	{
			/*mysql_connect ('localhost','root','') or die (mysql_error());
			mysql_select_db ('empleos') or die (mysql_error());
			
			$conexion = mysql_connect ('localhost','root','') or die (msg_errores('CS'));
				mysql_select_db ('empleos') or die (msg_errores('SBD'));*/
				
		$queEmp = "SELECT p.nomb_empleo as nombre
				   FROM solicitudes as s
				   inner join plazas as p
				   on p.id_empleo = s.id_empleo
				   WHERE id_user = '$id_user'";	
				   
		$resEmp = mysql_query($queEmp, $conexion) or die(mysql_error());
		$totEmp = mysql_num_rows($resEmp);	 
		
	if ($totEmp> 0) {
            echo ("<TABLE width=100% border = 1>");
            echo ("<TR>");
            echo ("<TH width=40>Empresa</TH>");
			echo ("</TR>");
            for ($i=0; $i<$totEmp; $i++)
            {
                $resultado = mysql_fetch_array ($resEmp);
                echo ("<TR>");
               
                echo ("<TD align='center'>". $resultado["nombre"] . "</TD>");
                   
             }// FIN del FOR
             echo ("</TABLE>");
            			 }
						 else {
						 echo("No se encontraron datos");
						 }
			 }
	//include("procesos.php?accion='$accion'&id=$id_user");
	 ?></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td height="344"><p><a href="modcurri.php">Mi Curriculum</a></p>
    <p><a href="home.php?accion=verplazas">Ver Plazas Aplicadas </a></p>
    <p><a href="procesos.php?accion=bye&id=<?php echo $id_user?>">Eliminar Mi Cuenta</a>   </p>
    <a href="index.php">Volver</a>   </p></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
</table>
</body>
</html>
