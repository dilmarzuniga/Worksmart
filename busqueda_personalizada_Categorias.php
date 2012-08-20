<?php 
				  
						session_start();
						require_once 'PHPPaging.lib.php';
						require_once 'admin/conexion.php';
						/*mysql_connect ('localhost','root','') or die (msg_errores('CS'));
       					 // Seleccionar base de datos
        				mysql_select_db ('empleos') or die (msg_errores('SBD'));
						*/
						$criterio = "";
						/*$combo_depto="";
						$combo_tipo="";
						$combo_categoria="";
						*/
       
						//$txt_criterio = $_GET["txt_busqueda"];
						/*$combo_depto = $_REQUEST["combo_depto"];
						$combo_categoria = $_REQUEST["combo_categoria"];
						$combo_tipo = $_REQUEST["combo_tipo"];
						*/
						
						$Categoria=$_GET['Categoria'];
						$paging= new PHPPaging;
						
						$paging-> verPost(true);
						
						
						
						echo "La categoria que entró es: ".$Categoria;
						echo "<br>";
							$criterio = "where Categoria like '%".$_GET['Categoria']."%'";
						echo "la consulta es: ".$criterio;
						
						
						$paging->mantenerVar('Categoria');
						
						$consulta="select * from plazas ".$criterio;
						
						echo "El resultado es: ".$consulta;
						
						$paging->agregarConsulta($consulta);
						
						
						$paging->ejecutar();
						
						while ($p=$paging-> fetchResultado())
						{
							echo '<h2>'.$p['nomb_empleo'].'<br>'.'</h2>';
							echo '<b>Requisitos: </b>'.$p['requisitos_empleo'].'<br>';
							echo '<b>Salario: </b>'.$p['salario'].'<br>';
							echo '<b>Departamento: </b>'.$p['depto_plaza'].'<br>';
							echo '<b> Tipo de contrato: </b>'.$p['tipo_contrato'].'<br>';
						}
						echo '<br>';
						echo 'Páginas '.$paging->fetchNavegacion();
						
						//header("Location: Busqueda_personalizada.php"); 
?>
