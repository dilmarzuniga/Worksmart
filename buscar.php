 <?php 
				  
						session_start();
						
						require_once 'PHPPaging.lib.php';
						require_once 'admin/conexion.php';
						
						/*mysql_connect ('localhost','root','') or die (msg_errores('CS'));
       					 // Seleccionar base de datos
        				mysql_select_db ('empleos') or die (msg_errores('SBD'));
						*/
						
						$txtbusqueda= $_REQUEST['txtbusqueda'];
						//$nombre_plaza=$_REQUEST['nombre_plaza'];
						$combo_tipo=$_REQUEST['combo_tipo'];
						$combo_depto=$_REQUEST['combo_depto'];
						$combo_categoria=$_REQUEST['combo_categoria'];
						/*$criterio = "where categoria like '%" . $combo_categoria . "%' and tipo_contrato like '%" . $combo_tipo . "%' and depto_plaza like '%" . $combo_depto . "%'";*/
						$criterio = "where nomb_empleo='".$_REQUEST['txtbusqueda']."' or tipo_contrato='".$_REQUEST['combo_tipo']."' or depto_plaza='".$_REQUEST['combo_depto']."' or Categoria='".$_REQUEST['combo_categoria']."'";
						
						
						$paging= new PHPPaging;
						
						$paging->agregarConsulta("select * from plazas ". $criterio);
						
						$paging->ejecutar();
						
						while ($p=$paging-> fetchResultado())
						{
							echo $p['nomb_empleo'].'<br>';
							echo $p['requisitos_empleo'].'<br>';
							echo $p['Categoria'].'<br>';
						}
						
						echo 'Páginas '.$paging->fetchNavegacion();
?>
