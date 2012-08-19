<?php
//session_start();
include "../mensajes.php";
echo("<link rel='stylesheet' href='css/estilos.css'>");

require_once 'conexion.php';

 function c_empresas()
 {

        $pag="empresas.php";
        $tab="catalogoempresas";
        $campo="id_empresa";
        // Conectar con el servidor de base de datos
        //$conexion = mysql_connect ($_SESSION['ho'], $_SESSION['us'], $_SESSION['pa']) or die (msg_errores('CS'));

        // Enviar consulta
        $comando = "select * from empresas order by nombre";

        $consulta = mysql_query ($comando, $conexion)
                    or die (msg_errores('FS'));
        // Mostrar resultados de la consulta
        $nfilas = mysql_num_rows ($consulta);
        if ($nfilas > 0)
        {
            echo ("<TABLE width=100% border = 1>");
            echo ("<TR>");
            echo ("<TH width=186>Nombre</TH>");
            echo ("<TH width=161>Telefono</TH>");
			echo ("<TH width=161>Fax</TH>");
			echo ("<TH width=261>Direccion</TH>");
			echo ("<TH width=161>Correo</TH>");
			echo ("<TH width=161>Tipo</TH>");
			echo ("<TH width=261>Descripcion</TH>");
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
             echo ("</TABLE>");
            echo("<A HREF=otro()><div align = 'center'>Siguiente>></div>");
			 //echo ("
          } // IF NFILAS > 0
          else
          {
            echo(msg_varios('TV')); //Tabla vacia
          }// fin else
 }//fin function

function c_usuarios()
 {

        $pag="ver_users.php";
        $tab="catalogousuarios";
        $campo="username";
        // Conectar con el servidor de base de datos
        //$conexion = mysql_connect ($_SESSION['ho'], $_SESSION['us'], $_SESSION['pa']) or die (msg_errores('CS'));
        
        $comando = "SELECT * FROM  `usuario` WHERE nivel =3";

        $consulta = mysql_query ($comando, $conexion)
                    or die (msg_errores('FS'));
        // Mostrar resultados de la consulta
        $nfilas = mysql_num_rows ($consulta);
        if ($nfilas > 0)
        {
            echo ("<TABLE width=40% border = 1 align='center'>");
            echo ("<TR>");
            echo ("<TH width=186>Nombre</TH>");
            echo ("<TH width=161>Nombre Usuario</TH>");
            echo ("</TR>");
            for ($i=0; $i<$nfilas; $i++)
            {
                $resultado = mysql_fetch_array ($consulta);
                echo ("<TR>");
               
                echo ("<TD align='left'>$resultado[2]</TD>");
                echo ("<TD align='left'>$resultado[1]</TD>");
   
             }// FIN del FOR
             echo ("</TABLE>");
            //echo("<A HREF=otro()><div align = 'center'>Siguiente>></div>");
			 //echo ("
          } // IF NFILAS > 0
          else
          {
            echo(msg_varios('TV')); //Tabla vacia
          }// fin else
 }//fin function VER USUARIOS 1
 
 
 function c_admin()
 {

        $pag="ver_admin.php";
        $tab="catalogoadmin";
        $campo="username";
        // Conectar con el servidor de base de datos
        //$conexion = mysql_connect ($_SESSION['ho'], $_SESSION['us'], $_SESSION['pa']) or die (msg_errores('CS'));
        
        // Enviar consulta
        $comando = "SELECT * FROM  `usuario` WHERE nivel =1";

        $consulta = mysql_query ($comando, $conexion)
                    or die (msg_errores('FS'));
        // Mostrar resultados de la consulta
        $nfilas = mysql_num_rows ($consulta);
        if ($nfilas > 0)
        {
            echo ("<TABLE width=40% border = 1 align='center'>");
            echo ("<TR>");
            echo ("<TH width=206>Nombre</TH>");
            echo ("<TH width=161>Nombre Usuario</TH>");
            echo ("</TR>");
            for ($i=0; $i<$nfilas; $i++)
            {
                $resultado = mysql_fetch_array ($consulta);
                echo ("<TR>");
               
                echo ("<TD align='left'>$resultado[2]</TD>");
                echo ("<TD align='left'>$resultado[1]</TD>");
   
             }// FIN del FOR
             echo ("</TABLE>");
            //echo("<A HREF=otro()><div align = 'center'>Siguiente>></div>");
			 //echo ("
          } // IF NFILAS > 0
          else
          {
            echo(msg_varios('TV')); //Tabla vacia
          }// fin else
 }//fin function VER ADMINS
 
//inicio de funcion ver plazas
function c_plazas()
 {

        $pag="ver_plazas.php";
        $tab="catalogoplazas";
        $campo="id_empleo";
        // Conectar con el servidor de base de datos
        
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
            echo ("<TH width=186>Nombre Empleo</TH>");
            echo ("<TH width=161>Descripcion</TH>");
			echo ("<TH width=161>Salario</TH>");
			echo ("<TH width=161>Requisitos/TH>");
            echo ("</TR>");
            for ($i=0; $i<$nfilas; $i++)
            {
                $resultado = mysql_fetch_array ($consulta);
                echo ("<TR>");
               
                echo ("<TD align='Left'><a href='$resultado[4]'>$resultado[4]</TD></a>");
                echo ("<TD align='Left'>$resultado[2]</TD>");
				echo ("<TD align='Left'>$resultado[3]</TD>");
                echo ("<TD align='Left'>$resultado[5]</TD>");
   
             }// FIN del FOR
             echo ("</TABLE></center>");
             echo ("<div align='center'><a name='nuevo'></DIV>");
          } // IF NFILAS > 0
          else
          {
            echo(msg_varios('TV')); //Tabla vacia
          }// fin else
 }//fin function
?>	