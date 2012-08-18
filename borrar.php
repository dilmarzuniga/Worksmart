<?php 
   session_start();
						
						require_once 'PHPPaging.lib.php';
						require_once 'admin/conexion.php';
						/*
						$conexion = mysql_connect ('localhost','root','') or die (msg_errores('CS'));
       					 // Seleccionar base de datos
        				mysql_select_db ('empleos') or die (msg_errores('SBD'));*/
   $id = $_GET['id']; 
   echo 'el id es: '.$id;
   /*echo '<script language="javascript"> alert("El id es: " + $id); </script>';
   */
   mysql_query("delete from plazas where id_empleo = '".$_GET['id']."'",$conexion);
   
      					//$paging->mantenerVar('txtbusqueda');				
    
  header("Location:borrar_plazas.php"); 
?> 
