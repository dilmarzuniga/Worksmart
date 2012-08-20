<link rel="stylesheet" href="../admin/css/estilo.css">
<?php
session_start();
include "mensajes.php";

require_once 'admin/conexion.php';

$accion=$_GET['accion'];
@$id_plaza=$_GET['plaza'];
echo("<script>alert('hola');</script>");
$error=false;
$nombre_plaza=$_REQUEST['nombre_plaza'];
$salario=$_REQUEST['salario'];
$descripcion=$_REQUEST['descrip'];
$requisitos=$_REQUEST['requisitos'];
$tipo=$_REQUEST['combo_tipo'];
$genero=$_REQUEST['genero'];
$rango=$_REQUEST['rango'];
$vehiculo=$_REQUEST['vehiculo'];
$dpto=$_REQUEST['combo_depto'];
$cat=$_REQUEST['combo_categoria'];
if($accion='new'){

if ($nombre_plaza=='')
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
    print(msg_errores('V')) ;
	*/
}

else
{
    //$salt = substr ($username, 0, 1);
	//$pwd_crypt = crypt ($pwd, $salt);
	
	
	//$conexion = mysql_connect ($_SESSION['ho'], $_SESSION['us'], $_SESSION['pa'])
	//or die (msg_errores('CS'));
	/*$conexion = mysql_connect ('localhost','root','') or die (msg_errores('CS'));
    
    mysql_select_db ("empleos") or die (msg_errores('SBD'));*/
    $comando = "Insert into empleos(descripcion,salario,nomb_empleo,requisitos_empleo) values('$descripcion','$salario','$nombre_plaza',$requisitos)";
    $consulta = mysql_query($comando,$conexion) or die (msg_errores('FI')) ;
    mysql_close($conexion);
	header("location:../curri_pas1.php");
}
}//fin if accion = ''

if($accion=='update'){
mysql_query("
UPDATE  `empleos`.`plazas` SET  
descripcion='$mensaje',salario='$salario',nomb_empleo='$nombre_plaza',requisitos_empleo='$requisitos',tipo_contrato='$tipo',genero='$genero',Edad_rango='$rango',vehiculo='$vehiculo',depto_plaza='$dpto',Categoria='$cat' WHERE  id_empleo =  '$id_plaza' ");
//mysql_query($comando,$conexion) or die (mysql_error()) ;
echo("<script>document.location.href='Modificar_Plazas.php?accion=alert'</script>");
		 		  }
}
?>