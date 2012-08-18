
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
      <SCRIPT type="text/javascript" src="Easy Slider jQuery Plugin Demo_files/jquery.js"></SCRIPT>
	            <SCRIPT type="text/javascript" src="Easy Slider jQuery Plugin Demo_files/easySlider1.7.js"></SCRIPT>
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
						
						$criterio = "";
						
						//$tipo = $_GET['Tipo'];
						$nombre = $_GET['id_empleo'];
	
								//echo "<h1><p>".$nombre."</p></h1>";
								$criterio = "where id_empleo = '".$_GET['id_empleo']."'";
								$id_empleo=$_GET['id_empleo'];
								
						
						$consulta="select * from plazas ".$criterio;
						$paging= new PHPPaging;
						
						$paging-> verPost(true);
						
						$paging->agregarConsulta($consulta);
						
						
						$paging->ejecutar();
						
						while ($p =$paging -> fetchResultado())
						{
							//$n = $p['nomb_empleo'];
							$req = $p['requisitos_empleo'];
							//echo "<h2><a href='Busqueda_personalizada_resultado.php?nomb_empleo=$n'>".$p['nomb_empleo']."</a><br></h2>";
							echo '<hr>';
							echo '<table>';
								echo '<tr>';
									echo '<td colspan="2" align="center"><h1>'.$p['nomb_empleo'].'</h1></td>';
									$id_plaza=$p['id_empleo'];
								echo '</tr>';
								echo '<tr>';
									echo '<td>Requisitos: </td>';
									echo '<td><label class="buscar">'.$req.'</label></td>';
								echo '</tr>';
								echo '<tr>';
									echo '<td>Salario: </td>';
									echo '<td><label class="buscar">'.$p['salario'].'</label></td>';
								echo '</tr>';
								echo '<tr>';
									echo '<td>Departamento: </td>';
									echo '<td><label class="buscar">'.$p['depto_plaza'].'</label></td>';
								echo '</tr>';
								echo '<tr>';
									echo '<td>Tipo de contrato: </td>';
									echo '<td><label class="buscar">'.$p['tipo_contrato'].'</label></td>';
								echo '</tr>';
								echo '<tr>';
									echo '<td>G&eacute;nero: </td>';
									echo '<td><label class="buscar">'.$p['genero'].'</label></td>';
								echo '</tr>';
								echo '<tr>';
									echo '<td>Rango de edad: </td>';
									echo '<td><label class="buscar">'.$p['Edad_rango'].'</label></td>';
								echo '</tr>';
								echo '<tr>';
									echo '<td>Categor&iacute;a: </td>';
									echo '<td><label class="buscar">'.$p['Categoria'].'</label></td>';
								echo '</tr>';
								echo '</table>';
							echo '<hr>';
							//echo '<form action="aplicar_plaza.php?id=hola">';
							//echo '<input type="submit" value="Aplicar a esta plaza"></input><br><br>';
							//echo '</form>';
							/*echo '<a name="fb_share" type="button_count"></a><script src="http://static.ak.fbcdn.net/connect.php/js/FB.Share" type="text/javascript"></script>';*/
							echo '<label class="buscar">Deseas compartir con un amigo este resultado: </label> <br>';
							echo '<table border="0.5">';
							echo '<tr><td>';
							echo '<a name="fb_share" type="box_count"></a><script src="http://static.ak.fbcdn.net/connect.php/js/FB.Share" type="text/javascript"></script>';
							echo '</td></tr></table>';
						}
						echo '<br>';
						//echo 'Páginas '.$paging->fetchNavegacion(); 
						
					
?>
<label>
</label>
<!--<input type="submit" name="Submit" value="Enviar" /><input name="" type="button" onClick="sss" />-->
<a href="aplicar_plaza.php?id=<?php echo $id_plaza?>">Aplicar a Esta Plaza</a>

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
                <li><a href="Buscar_Trabajos.php">Buscar trabajo </a></li>
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