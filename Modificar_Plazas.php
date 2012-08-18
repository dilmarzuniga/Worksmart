<?php
session_start();

require_once 'admin/conexion.php';

@$accion=$_GET['accion'];
if($accion=='alert'){
	echo("<script>alert('Plaza Actualizada');</script>");
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1252" />
<title>WORK SMART</title>
<link rel="stylesheet" type="text/css" href="style.css" />
<!--[if IE 6]>
	<script type="text/javascript" src="unitpngfix.js"></script>
<![endif]--> 
<style type="text/css">
<!--
.Estilo1 {font-size: 16px}
-->
</style>
</head>
<body class="details">
<div class="wrap">
	<div class="wrap">
<div class="header">
    	<div class="logo"><a href="Index.php"><img src="images/logo1.png" alt="" width="350" height="114" vspace="27" border="0" title="" /></a></div>
        
        <div id="menu">
            <ul>                                                                       
            <li><a href="Index.php">Inicio</a></li>
            <li><a href="Registrarse.php">Registrate</a></li>
            <li><a href="Empresas.php">Empresas</a></li>
            <li><a href="Contactanos.php">Cont&aacute;ctanos</a></li>
            <li><a href="Acerca de.php">Acerca de</a></li>
           
            </ul>
        </div>
          
    </div> <!--End of header-->

    <div class="menutips">
	<?php
	//session_start(); 
	@$id_empresa=$_SESSION['nombre'];
	if( strlen($id_empresa)==0){
	echo("<script>alert('Inicie Sesion para acceder al menu de empresas');</script>");
	header("location:Empresas.php?error=2");
	}	
		echo("<font size=5>$id_empresa</font>");
		?>
	      <br />
	        <a href="login.php">Cerrar Sesion</a>
		<script type="text/javascript" src="stmenu.js"></script>
		<script type='text/javascript' src='menu_empresas.js'></script>
	</div>
    <div class="tipsizquierdo">
    		<div class="left_content">
            	<h1>Modificar Plazas	</h1>
                
   	  </div>
    		<!--End of left_content-->
    		<!--End of right_content-->
<div class="clear">
   	  <p>A continuacion se desplegara una lista con todas las plazas correspondientes a esta empresa, mostrando un link con el cual se obtendran todos los datos de esa plaza de manera que asi se podra realizar cualquier modificacion.</p>
   	  <p><!--<a href="admin/ver_plazas.php" class="Estilo1">Ver las Plazas--><?php 
	  //include"ver_Plazas.php";
	  					
						require_once 'PHPPaging.lib.php';
						$paging= new PHPPaging;
						
						$paging-> verPost(true);
						
						$consulta = "select * from plazas where id_empresa='$id_empresa'";
						
						//$paging->mantenerVar('txtbusqueda');
						
						$paging->agregarConsulta($consulta);
						
						$paging->ejecutar();
						
						
						//$consult = mysql_query ($consulta, $conexion);
						//$nfilas = mysql_num_rows ($consult);			
						
						while ($p=$paging-> fetchResultado())
						{
							$n = $p['id_empleo'];
							$req = $p['requisitos_empleo'];
							echo '<table>';
							echo '<tr>';
								echo '<td><b> Nombre plaza: </b> </td><td>'.$p['nomb_empleo']. '</td>';
								//echo($plaza=$p['nomb_empleo']);
								echo '</td>';
							echo '</tr>';
							echo '<tr>';
								echo '<td><b> Requisitos: </b> </td><td>'.$p['requisitos_empleo']. '</td>';
								echo '</td>';
							echo '</tr>';
							echo '<tr>';
								echo '<td><b> Salario: </b></td><td>'.$p['salario']. '</td>';
								echo ("<a href='edit_plaza.php?empresa=$id_empresa&plaza=$n'> EDITAR ESTA PLAZA </a>");
								echo '</td>';
							echo '</tr>';
							echo '</table>';
							echo '<hr>';
						}
						echo '<br>';
						echo 'Páginas '.$paging->fetchNavegacion();
	  ?></a></p>
   	  <h3></h3>
   	  <p>&nbsp;</p>
</div>
    	<div class="clear"></div>
	</div><!--End of main_content-->
    
</div><!--End of wrap-->

<div class="footer">
	<div class="footer_content">
    	<div class="footer_tab1">
        	<h2>Cont&aacute;ctanos</h2>
        	<span class="email">Email:enterprise_solutionssv@gmail.com</span>
        	<div class="footer_info">
                <span class="orange">Tel&eacute;fono:</span>
                <p class="info">
                (+503)22255212
                </p>
				<span class="orange"> Dirección de oficina </span>
				<p class="info">
					Res. Santa Elena poligono "F" frente a ex-embajada
				</p>          
          </div> 
            <div class="footer_copyrights">
            <img src="images/logo_abajo.png" alt="" width="187" height="54" title="" /><br />
            &copy; 2009 All Rights Reserved
          </div>    
            
        
        </div> <!--End of footer_tab1-->
		<div class="footer_tab2">
        	<h2>&iquest;Tu primera entrevista? Aqu&iacute; te decimos qu&eacute; hacer </h2>
            <div class="favorites_box">
                <span class="fav_nr">1</span>
                <p class="favorites">Forma correcta de crear tu curriculum Vitae, qu&eacute; hacer y qu&eacute; se debe evitar...<a href="Tips_CVredaccionphp"> ver m&aacute;s</a> </p>           
            </div> 
            
            <div class="favorites_box">
                <span class="fav_nr">2</span>
                <p class="favorites">Preparando tu entrevista de trabajo. Ac&aacute; de presentamos una gu&iacute;a completa desde qu&eacute; debes decir hasta... <a href="tips_EntrevistaPres.html">ver m&aacute;s </a></p>           
            </div>        
            
            <div class="favorites_box">
                <span class="fav_nr">3</span>
                <p class="favorites">Innovando de la mano de la tecnolog&iacute;a, VIDEOCURRICULUM en nuestro centro multimedia...<a href="tips_multimedia.html"> ver m&aacute;s </a></p>           
            </div>        
 
        </div>
        <!--End of footer_tab2-->
<div class="footer_tab3">
        	<h2>Enlaces</h2>
                <div class="footer_links">
                    <ul>
                    <li><a href="Index.php">Inicio</a></li>
                    <li><a href="Registrarse.php">Reg&iacute;strate</a></li>
                    <li><a href="Empresas.php">Ingresa tu empresa </a></li>
                    <li><a href="#">Buscar trabajo </a></li>
                    <li><a href="curri_pas1.php">Sube tu curriculum </a></li>
                    <li><a href="tips2.html">Trucos y consejos </a></li>
                    <li><a href="Contactanos.php">Contact&aacute;ctanos</a></li>
                    </ul>
                </div> 
      </div> <!--End of footer_tab3-->      
        
        
        
             
        
    <div class="clear"></div>
	</div> <!--End of footer_content-->
</div><!--End of footer-->

</body>
</html>