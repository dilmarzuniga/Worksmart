<?php
	include_once("header.php");
?>

 <div class="menutips">
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
		<script type="text/javascript" src="stmenu.js"></script>
		<script type='text/javascript' src='menu_empresas.js'></script>
	</div>
    <div class="tipsizquierdo">
    		<div class="left_content">
            	<h1>Aplicantes	</h1>
                
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
    
<?php
	include_once("footer.php");
?>