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

	 <script language="javascript">
		/*confirmacion(id_plaza)
		{
			confirm("Está seguro/a que desea eliminar este registro?");
			if(confirm)
			{
				window.location="borrar.php?id="+id_plaza;
			}
			else
			{
				window.location="borrar_plazas.php"; 
			}  
		}*/
	</script> 
</style>
<script type="text/javascript" src="stmenu.js"></script>
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
		
	    <p>
	      <?php
	session_start(); 
	@$id_empresa=$_SESSION['nombre'];
	if( strlen($id_empresa)==0){
	echo("<script>alert('Inicie Sesion para acceder al menu de empresas');</script>");
	header("location:Empresas.php?error=2");
	}	
		echo("<font size=5>$id_empresa</font>");
		?>
	      <br />
	        <a href="login.php">Cerrar Sesion</a>
	        <script type='text/javascript' src='menu_empresas.js'></script>
      </p>
	    <p>
	      
</p>
    </div>
    <div class="tipsizquierdo">
    		<div class="left_content">
            	<h1>Borrar  Plazas	</h1>
                
   	  </div>
    		<!--End of left_content-->
    		<!--End of right_content-->
<div class="clear">
   	  <p>
	  <?php
	  	//session_start();
						
						require_once 'PHPPaging.lib.php';
						require_once 'admin/conexion.php';
						/*
						mysql_connect ('localhost','root','') or die (msg_errores('CS'));
       					 // Seleccionar base de datos
        				mysql_select_db ('empleos') or die (msg_errores('SBD'));
						*/
						$paging= new PHPPaging;
						
						$paging-> verPost(true);
						
						$consulta = "select * from plazas where id_empresa = '$id_empresa'";
						
						//$paging->mantenerVar('txtbusqueda');
						
						$paging->agregarConsulta($consulta);
						
						$paging->ejecutar();
						
						echo '<table border="0" cellspacing=1 cellpading=1>'; 
      					echo '<tr>';
	  					echo '<td>&nbsp;<b>Nombre de la Plaza</b></td>';
						echo '<td>&nbsp;<b>Requisitos</b>&nbsp;</td>';
						echo '<td>&nbsp;<b>Salario a Ofrecer: </b>&nbsp;</td>';
						echo '<td>&nbsp;<b>Borrar</b>&nbsp;</td>';
						echo '</tr>';
						while ($p=$paging-> fetchResultado())
						{
							$n=$p['id_empleo'];
							$req = $p['requisitos_empleo'];
							echo '<tr>';
								echo '<td>'.$p['nomb_empleo']. '</td>';
								echo '<td>'.$p['requisitos_empleo']. '</td>';
								echo '<td>'.$p['salario']. '</td>';
								echo "<td><a href='borrar.php?id=$n'> Borrar </a></td>";
							echo '</tr>';
			
							
						}
						echo '</table>';
						echo '<br>';
						echo 'Páginas '.$paging->fetchNavegacion();
	  ?>
	  </p>
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