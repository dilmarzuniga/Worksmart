
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1252" />
<title>Buscar Trabajos</title>
<link rel="stylesheet" type="text/css" href="style.css" />


<!--[if IE 6]>
	<script type="text/javascript" src="unitpngfix.js"></script>
<![endif]--> 
<style type="text/css">

<!--
.Estilo2 {color: #0000FF}
-->
</style>
</head>
<body class="details">
<div class="wrap">  
<div class="header"> 
    	<div class="logo"><a href="index.html"><img src="images/logo1.png" alt="" width="350" height="114" vspace="27" border="0" title="" /></a></div>   
        <div id="menu"> 
		    <ul>                                                                       
            <li ><a href="index.html">Inicio</a></li> 
            <li><a href="Registrarse.html">R&eacute;gistrate</a></li> 
            <li><a href="Empresas.html">Empresas</a></li> 
            <li><a href="Contactanos.html">Cont&aacute;ctanos</a></li> 
            <li><a href="Acerca de.html">Acerca de </a></li> 
           </ul> 
      </div> 
      
    	 
    <!--miren si se le quiere dar tamaño al fondo negro quitar los parrafos--> 
    	
</div> <!--End of header-->

    
    <div class="main_content">
      <SCRIPT type="text/javascript" src="./Easy Slider jQuery Plugin Demo_files/jquery.js"></SCRIPT>
	            <SCRIPT type="text/javascript" src="./Easy Slider jQuery Plugin Demo_files/easySlider1.7.js"></SCRIPT>
	            <SCRIPT type="text/javascript">$(document).ready(function(){	
	$("#slider").easySlider({
		auto: true,
		continuous: true,
		nextId: "slider1next",
		prevId: "slider1prev"
	});
	$("#slider2").easySlider({ 
		numeric: true
	});
});
	            </SCRIPT>
	</h1>
<div class="wide_content">
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
						
						
						//$tipo = $_GET['Tipo'];
						$depto = $_GET['depto'];
						$Categoria=$_GET['Categoria'];
						
						$paging= new PHPPaging;
						
						$paging-> verPost(true);
						
						if ($depto=="no")
						{
								echo "<h1><p> Trabajos encontrados en la categoria ".$Categoria."</p></h1>";
								$criterio = "where Categoria like '%".$_GET['Categoria']."%'";
								
						}	
						else if ($Categoria=="no")
						{
								echo "<h1><p> Trabajos encontrados en el departamento de ".$depto."</p></h1>";
								$criterio = "where depto_plaza like '%".$_GET['depto']."%'";
																						
						}
						
						$paging->mantenerVar('Categoria','depto');
						
						/*echo "La categoria que entró es: ".$
						Categoria;
						echo "<br>";
						*/
						
						//echo "la consulta es: ".$criterio;
						
						
						
						
						$consulta="select * from plazas ".$criterio;
						
						//echo "El resultado es: ".$consulta;
						
						$paging->agregarConsulta($consulta);
						
						
						$paging->ejecutar();
						
						//$nombre=$p['nomb_empleo'];
					
						while ($p =$paging -> fetchResultado())
						{
							/*$n = $p['id_empleo'];
							$req = $p['requisitos_empleo'];
							echo "<h2><a href='Busqueda_personalizada_resultado.php?id_empleo=$n'>".$p['nomb_empleo']."</a><br></h2>";
							echo '<b>Requisitos: </b>'.$req.'<br>';
							echo '<b>Salario: </b>'.$p['salario'].'<br>';
							echo '<b>Departamento: </b>'.$p['depto_plaza'].'<br>';
							echo '<b> Tipo de contrato: </b>'.$p['tipo_contrato'].'<br>';
							*/
							$n = $p['id_empleo'];
							$req = $p['requisitos_empleo'];
							echo "<h2><a href='Busqueda_personalizada_resultado.php?id_empleo=$n'>".$p['nomb_empleo']."</a><br></h2>";
							echo '<b>Departamento: </b>'.$p['depto_plaza'].'<br>';
							echo '<b> Descripci&oacute;n: </b>'.$p['descripcion'].'<br>';
						}
						echo '<br>';
						echo 'Páginas '.$paging->fetchNavegacion();  
?>
</div>
<!--End of left_content-->
				 
    		 <!--End of center_content-->
           
    	<div class="clear"></div>
		</div>
    </div><!--End of main_content-->
    
    
</div><!--End of wrap-->

<div class="footer">
	<div class="footer_content">
    	<div class="footer_tab1">
        	<h2>Cont&aacute;ctanos</h2>
        	<span class="email">Email:enterprise_solutionssv@gmail.com</span>
        	<div class="footer_info">
                <span class="orange">Tel&eacute;fono:</span>
                <p class="info">70088215</p>           
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
                <p class="favorites">Forma correcta de crear tu curriculum Vitae, qu&eacute; hacer y qu&eacute; se debe evitar....<a href="#"> ver m&aacute;s</a> .                </p>           
          </div> 
            
            <div class="favorites_box">
                <span class="fav_nr">2</span>
                <p class="favorites">Preparando tu entrevista de trabajo. Ac&aacute; de presentamos una gu&iacute;a completa desde qu&eacute; debes decir hasta... <a href="#">ver m&aacute;s </a></p>           
          </div>        
            
            <div class="favorites_box">
                <span class="fav_nr">3</span>
                <p class="favorites">Innovando de la mano de la tecnolog&iacute;a, VIDEOCURRICULUM en nuestro centro multimedia...<a href="#"> ver m&aacute;s </a></p>           
          </div>        
 
      </div> <!--End of footer_tab2--> 
        
        
        
   	  <div class="footer_tab3">
        	<h2>Enlaces</h2>
            <div class="footer_links">
              <ul>
                <li><a href="index.html">Inicio</a></li>
                <li><a href="forms.html">Inscr&iacute;bete</a></li>
                <li><a href="Contactanos.html">Ingresa tu empresa </a></li>
                <li><a href="#">Buscar trabajo </a></li>
                <li><a href="#">Sube tu curriculum </a></li>
                <li><a href="Tips.html">Trucos y consejos </a></li>
                <li><a href="Contactanos.html">Contact&aacute;ctanos</a></li>
              </ul>
            </div>
   	  </div>
    	<!--End of footer_tab3-->      
        
        
        
             
        
    <div class="clear"></div>
	</div> <!--End of footer_content-->
</div><!--End of footer-->

</body>
</html>