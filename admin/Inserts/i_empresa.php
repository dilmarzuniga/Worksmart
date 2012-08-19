<link rel="stylesheet" href="../../css/consultas.css">
<br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br />
<?php
session_start();
include "../../mensajes.php";

$error = false;
$username = $_REQUEST['username'];
$nombre = $_REQUEST['nombre'];
$pwd = $_REQUEST['pwd'];
$nivel = 2;

$contacto=$_REQUEST['contacto'];
$direccion=$_REQUEST['dir'];
$departamento=$_REQUEST['dpto'];
$correo=$_REQUEST['mail'];
$telefono=$_REQUEST['tel'];
$fax=$_REQUEST['fax'];
$tipo=$_REQUEST['tipo'];
$descripcion=$_REQUEST['dsc'];


if ($username=='')
{
    $error = true;
    $errores["codigo"]="El Campo <strong>NOMBRE DE USUARIO</strong> es Obligatorio";
}
if ($nombre=='')
{
    $error = true;
    $errores["nombre"]="El Campo <strong>NOMBRE</strong> es Obligatorio";
}
if ($pwd=='')
{
    $error = true;
    $errores["pwd"]="El Campo <strong>PASSWORD</strong> es Obligatorio";
}




if($telefono=='') 
{
$telefono=0;
}
if($fax=='') 
{
$fax=0;
}





if ($error == true)
{
    print("<STRONG>DATOS CON ERRORES</STRONG><br>");
    print($errores['codigo']."</BR>");
    print($errores['nombre']."</BR>");
    print($errores['pwd']."</BR>");
    print(msg_errores('V')) ;
}
else
{
    $salt = substr ($username, 0, 1);
	$pwd_crypt = crypt ($pwd, $salt);
	echo "$clave_crypt";
	
	$conexion = mysql_connect ('localhost','root','') or die (msg_errores('CS'));
    
    mysql_select_db ("empleos") or die (msg_errores('SBD'));
   	
    $comando = "Insert into empresas(id_empresa,nombre,password,persona_contacto,direccion,departamento,email,telefono,fax,tipo,descripcion,usrnivel) values('$username','$nombre','$pwd_crypt','$contacto','$direccion','$departamento','$correo','$telefono','$fax','$tipo','$descripcion',$nivel)";
	$comando2 = "Insert into usuario(userName,nombre,password,nivel) values('$username','$nombre','$pwd_crypt',$nivel)";

    $consulta = mysql_query($comando,$conexion) or die (msg_errores('FI')) ;
	$consulta2 = mysql_query($comando2,$conexion) or die (msg_errores('FI')) ;
    mysql_close($conexion);
	header("location:../newemp.php");
}
?>