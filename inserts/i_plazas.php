<link rel="stylesheet" href="file:///C|/wamp/www/Site-Agosto 03-08-2010/admin/css/estilo.css">
<?php
session_start();
include "../mensajes.php";
include_once '../admin/conexion.php';


$error=false;
$accion=$_GET['accion'];
@$id_plaza=$_GET['plaza'];
$id_empresa=$_GET['empresa'];
$error=false;
$nombre_plaza=$_REQUEST['nombre_plaza'];
$salario=$_REQUEST['salario'];
$descripcion=$_REQUEST['descripcion'];
$requisitos=$_REQUEST['requisitos'];
$tipo=$_REQUEST['combo_tipo'];
$genero=$_REQUEST['genero'];
$rango=$_REQUEST['rango'];
$vehiculo=$_REQUEST['vehiculo'];
$dpto=$_REQUEST['combo_depto'];
$cat=$_REQUEST['combo_categoria'];

if($accion=='new'){

	if ($nombre_plaza==' ')
	{
		$error = true;
		$errores["nombre_plaza"]="El Campo <strong>NOMBRE DE PLAZA</strong> es Obligatorio";
	}
	if ($salario=='')
	{
		$error = true;
		$errores["salario"]="El Campo <strong>SALARIO</strong> es Obligatorio";
	}
	if ($descripcion=='')
	{
		$error = true;
		$errores["descripcion"]="El Campo <strong>DESCRIPCION</strong> es Obligatorio";
	}

	if ($requisitos=='')
	{
		$error = true;
		$errores["requisitos"]="El Campo <strong>REQUISITO</strong> es Obligatorio";
	}
	/*
	if ($pwd2=='')
	{
		$error = true;
		$errores["pwd2"]="El Campo <strong>REPETIR</strong> es Obligatorio";
	}
	if ($pwd != $pwd2)
	{
		$error = true;
		$errores["pwd3"]="La contraseña no coincide";
	}
	if($check != 1)
	{
	$error=true;
	$errores["check"]="No ha aceptado las condiciones de uso";
	}
	*/
	if ($error == true)
	{
		print("<STRONG>DATOS CON ERRORES</STRONG><br>");
		print($errores['nombre_plaza']."</BR>");
		print($errores['salario']."</BR>");
		print($errores['descripcion']."</BR>");
		/*print($errores['pwd']."</BR>");
		print($errores['pwd2']."</BR>");
		print($errores['pwd3']."</BR>");
		print($errores['check']."</BR>");
		*/
		print(msg_errores('V')) ;

	}

	else
	{
		//$salt = substr ($username, 0, 1);
		//$pwd_crypt = crypt ($pwd, $salt);
		
		$comando = "Insert into plazas(id_empresa,salario,nomb_empleo,requisitos_empleo,descripcion,tipo_contrato,genero,Edad_rango,vehiculo,depto_plaza,Categoria)values('$id_empresa','".$_REQUEST['salario']."','".$_REQUEST['nombre_plaza']."','".$_REQUEST['requisitos']."','".$_REQUEST['descripcion']."','".$_REQUEST['combo_tipo']."','".$_REQUEST['genero']."','".$_REQUEST['rango']."','".$_REQUEST['vehiculo']."','".$_REQUEST['combo_depto']."','".$_REQUEST['combo_categoria']."')";
		echo "<script type=\"text/javascript\">alert(\"Fotos guardadas\");</script>";
		$consulta = mysql_query($comando,$conexion) or die (msg_errores('FI')) ;
		mysql_close($conexion);
		?>
		<script language="JavaScript">
			alert("Plaza ingresada con exito");
		</script>
		<?php
	header("location:../Ingresar_Plazas.php");
	
}
}//fin if accion='new'

	if($accion=='update')
	{

		mysql_query("
		UPDATE  plazas SET  
		descripcion='$descripcion',
		salario='$salario',
		nomb_empleo='$nombre_plaza',
		requisitos_empleo='$requisitos',
		tipo_contrato='$tipo',
		genero='$genero',
		Edad_rango='$rango',
		vehiculo='$vehiculo',
		depto_plaza='$dpto',
		Categoria='$cat' WHERE  id_empleo =  '$id_plaza' ");
		
		header("location:../Modificar_Plazas.php?accion=alert");
					  
	}
?>