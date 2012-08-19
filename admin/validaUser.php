<?PHP
session_start();

require_once 'conexion.php';

echo("<link rel='stylesheet' href='css/estilo.css'>");
include("../mensajes.php");
// Obtener valores introducidos en el formulario
$usuario = $_POST['usuario'];
$pass = $_POST['pass'];
$error = false;
// nombre usuario
if (trim($usuario) == "")
	{
		$error = true;
	}
// password
if (trim($pass) == "")
{
	$error = true;
}
if ($error==true){
header("location: index2.php");
}

// Si los datos son correctos, procesar formulario
if (isset($usuario) && $error==false)
{

	$salt = substr($usuario, 0, 1);
    $clave_crypt = crypt($pass, $salt);
	echo "$clave_crypt";
    $instruccion = "select * from usuario where username = '$usuario' AND password = '$clave_crypt' AND nivel=1";
	//print($instruccion);
    $consulta = mysql_query ($instruccion, $conexion) or die (msg_errores('FS'));
    $nfilas = mysql_num_rows ($consulta);
	$resultado = mysql_fetch_array ($consulta);

   mysql_close ($conexion);
	if ($nfilas == 1)
	{
        $_SESSION['usuario_valido'] = $resultado[1];
		$_SESSION['nombre']=$resultado[2];
        $_SESSION['nivel'] = $resultado[3];
		$_SESSION['ho'] = $ho;
		$_SESSION['com'] = $r[0];

		$_SESSION['us'] = $us;
		$_SESSION['bdd'] = $bdd;
		$_SESSION['pa'] = $pa;
		header("location: admin.html");
	}
	else{
	//echo(msg_errores('FC'));
	header("location: index2.php");
	}
}
//
?>

