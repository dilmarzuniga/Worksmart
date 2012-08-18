<?php
//session_start();
include "mensajes.php";
require_once 'admin/conexion.php';

echo("<link rel='stylesheet' href='css/estilos.css'>");
@accion=$_GET['accion'];


 //// inicio ricaldone
 
 if($accion=='verplazas'){
 //mysql_connect ('localhost','root','') or die (mysql_error());
 //mysql_select_db ('empleos') or die (mysql_error());
 mysql_query="select * from solicitudes where id_user=$user";
 
 }
 
 function c_empresas()
 {

        $pag="empresas.php";
        $tab="catalogoempresas";
        $campo="id_empresa";
        // Conectar con el servidor de base de datos
        //$conexion = mysql_connect ($_SESSION['ho'], $_SESSION['us'], $_SESSION['pa']) or die (msg_errores('CS'));
        //$conexion = mysql_connect ('localhost','root','') or die (msg_errores('CS'));
        // Seleccionar base de datos
        //mysql_select_db ('empleos') or die (msg_errores('SBD'));
        //mysql_select_db ('guia') or die (msg_errores('SBD'));
        // Enviar consulta
        $comando = "select * from empresas order by nombre";

        $consulta = mysql_query ($comando, $conexion)
                    or die (msg_errores('FS'));
        // Mostrar resultados de la consulta
        $nfilas = mysql_num_rows ($consulta);
        if ($nfilas > 0)
        {
            echo ("<CENTER> <TABLE width=60% border = 1>");
            echo ("<TR>");
            echo ("<TH width=186>Nombre</TH>");
            echo ("<TH width=161>Telefono</TH>");
			echo ("<TH width=161>Fax</TH>");
			echo ("<TH width=161>Direccion</TH>");
			echo ("<TH width=161>Correo</TH>");
			echo ("<TH width=161>Tipo</TH>");
			echo ("<TH width=161>Descripcion</TH>");
            echo ("</TR>");
            for ($i=0; $i<$nfilas; $i++)
            {
                $resultado = mysql_fetch_array ($consulta);
                echo ("<TR>");
               
                echo ("<TD align='Left'>$resultado[1]</TD>");
                echo ("<TD align='Left'>$resultado[7]</TD>");
                echo ("<TD align='Left'>$resultado[8]</TD>");
				echo ("<TD align='Left'>$resultado[4]</TD>");
				echo ("<TD align='Left'>$resultado[6]</TD>");
				echo ("<TD align='Left'>$resultado[9]</TD>");
				echo ("<TD align='Left'>$resultado[10]</TD>");
   
             }// FIN del FOR
             echo ("</TABLE></center>");
             echo ("<div align='center'><a name='nuevo'></DIV>");
          } // IF NFILAS > 0
          else
          {
            echo(msg_varios('TV')); //Tabla vacia
          }// fin else
 }//fin function

function ver_categorias()
{
		$pag="Buscar_Trabajos.php";
        $tab="catalogotrabajos";
        $campo="id_empleo";
		
		 //$conexion = mysql_connect ($_SESSION['ho'], $_SESSION['us'], $_SESSION['pa']) or die (msg_errores('CS'));
        //$conexion = mysql_connect ('localhost','root','') or die (msg_errores('CS'));
        // Seleccionar base de datos
        //mysql_select_db ('empleos') or die (msg_errores('SBD'));
        //mysql_select_db ('guia') or die (msg_errores('SBD'));
        // Enviar consulta
        $comando = "select categoria from plazas";
		$consulta = mysql_query ($comando, $conexion)
                    or die (msg_errores('FS'));
        // Mostrar resultados de la consulta
		echo ("<link rel='stylesheet' type='text/css' href='style.css'>");
        $nfilas = mysql_num_rows ($consulta);
        if ($nfilas > 0)
        {
			
            echo ("<CENTER> <TABLE class='t_categ'>");
            /*echo ("<TR>");
			echo ("<TH width=186>Nombre Empleo</TH>");
            echo ("<TH width=161>Descripcion</TH>");
			echo ("<TH width=161>Salario</TH>");
			echo ("<TH width=161>Requisitos</TH>");
            echo ("</TR>");*/
			echo("<tr>");
			echo ("<th class='encabezado'> Trabajos ordenados por categorías </th>");
			echo ("</tr>");
			echo ("</br>");
			
            for ($i=0; $i<$nfilas; $i++)
            {
                $resultado = mysql_fetch_array ($consulta);
                echo ("<TR>");
               
                echo ("<TD align='Left' class='celda'><a href='$resultado[0]' class='categ'> $resultado[0]</TD>");
               /*	echo ("<TD align='Left'>$resultado[2]</TD>");
                echo ("<TD align='Left'>$resultado[3]</TD>");
				echo ("<TD align='Left'>$resultado[5]</TD>");
				 */ 
             }// FIN del FOR
             echo ("</TABLE></center>");
			 echo ("</style>");
             echo ("<div align='center'><a name='nuevo'></DIV>");
          } // IF NFILAS > 0
          else
          {
            echo(msg_varios('TV')); //Tabla vacia
          }// fin else
		
}
?>	