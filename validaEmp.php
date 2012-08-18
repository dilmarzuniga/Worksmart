<?PHP
session_start();
/*$ho = 'localhost';
$pa = '';
$us='root';
$bdd='empleos';
*/
require_once 'admin/conexion.php';

echo("<link rel='stylesheet' href='css/estilo.css'>");
include("mensajes.php");
// Obtener valores introducidos en el formulario
$usuario = $_REQUEST['usuario'];
$pass = $_REQUEST['pass'];
$error = false;
// nombre usuario
if (trim($usuario) == "")
	{
		//echo(msg_errores('UV'));
		
		$error = true;
	}
// password
if (trim($pass) == "")
{
	//echo msg_errores('PV');
	$error = true;
}

// Si los datos son correctos, procesar formulario
if (isset($usuario) && $error==false)
{
	/*$conexion = mysql_connect ($ho, $us, $pa) or die (msg_errores('CS'));
	mysql_select_db ($bdd) or die (msg_errores('SBD'));*/
	$salt = substr ($usuario, 0, 1);
    $clave_crypt = crypt ($pass, $salt);
    $instruccion = "select * from usuario where username = '$usuario'" . " and password = '$clave_crypt'";
	//print($instruccion);
    $consulta = mysql_query ($instruccion, $conexion) or die (msg_errores('FS'));
    $nfilas = mysql_num_rows ($consulta);
	$resultado = mysql_fetch_array ($consulta);
//////////////////
//    $sql = "select name from company";
 //   $q = mysql_query ($sql, $conexion) or die (msg_errores('FS'));
//	$r = mysql_fetch_array ($q);
   mysql_close ($conexion);
	if ($nfilas == 1)
	{
		$_SESSION['id']=$resultado[0];
        $_SESSION['nombre'] = $resultado[1];
        $_SESSION['nivel'] = $resultado[4];
		$_SESSION['ho'] = $ho;
		$_SESSION['com'] = $resultado[0];

		$_SESSION['us'] = $us;
		$_SESSION['bdd'] = $bdd;
		$_SESSION['pa'] = $pa;
		//session_start();
		if($resultado[4]==2){
		header("location: Menu_Empresas.php");
		}
		else if($resultado[4]!=2){
		header("location: Empresas.php?error=1");
		}
				
	}
	else{
	header("location: Empresas.php?error=1");//header("location: Empresas.php?mostrar=error");
		}
}
else if($error==true){
header("location: Empresas.php?error=3");
}
//
?>

