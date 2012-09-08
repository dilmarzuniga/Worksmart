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
		<link rel="stylesheet" href="css/home.css" />
	</head>
<body>
	<div id="main">
	<p> Bienvenido/a <?php
	if( strlen($user)==0){
	echo("<script>alert('Inicie Sesion para acceder al menu de usuario');</script>");
		header("location:Index.php?mostrar=2");
	}	
		echo("<span id=\"name\">$user</span></p>");
		?> 
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
	 ?>
	 <ul id="options">
    <li><a href="modcurri.php">Mi Curriculum</a></li>
    <li><a href="home.php?accion=verplazas">Ver Plazas Aplicadas </a></li>
    <li><a href="procesos.php?accion=bye&id=<?php echo $id_user?>">Eliminar Mi Cuenta</a></li>
    <li><a href="Index.php">Volver</a></li>
    </ul>
    <p>
    	<a href="login.php">Cerrar Sesion</a>
    </p>
    </div>
    <div id="imagen">
    	<img src="images/logo1.png" />
    	<p>
    	Todos los derechos reservados
    	</p>
    </div>
    <div id="ambiente">
    	<img src="images/hoja.png" /> 
    	<p>
    	<br />
    	Worksmart Protege el medio ambiente
    	<br />
    	por medio del uso de colores que permiten una menor
    	<br />
    	emisi&oacute;n de Kw/h
    	</p>
    </div>
</body>
</html>
