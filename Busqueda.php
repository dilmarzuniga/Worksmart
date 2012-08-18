
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
    	<div class="logo"><a href="Index.php"><img src="images/logo1.png" alt="" width="350" height="114" vspace="27" border="0" title="" /></a></div>   
        <div id="menu"> 
		    <ul>                                                                       
            <li ><a href="Index.php">Inicio</a></li> 
            <li><a href="Registrarse.php">R&eacute;gistrate</a></li> 
            <li class="selected"><a href="Empresas.php">Empresas</a></li> 
            <li><a href="Contactanos.php">Cont&aacute;ctanos</a></li> 
            <li><a href="Acerca de.php">Acerca de </a></li> 
           </ul> 
      </div> 
      
    	 
    <!--miren si se le quiere dar tamaño al fondo negro quitar los parrafos--> 
    	
</div> <!--End of header-->

    
    <div class="main_content">
	
    	<div align=center>
		<p>
		<h1>Bienvenido Usuario</h1>
		<br>
			En Enterprise Solutions&#174; queremos brindarle a tu empresa la oportunidad de seleccionar a tu personal de una manera personalizada y moderna.<br>
		Perm&iacute;tenos ser el medio para encontrar a tus trabajad, cont&aacute;ctanos y descubre la factibilidad de nuestros servicios.
		</p>
		
            	<SCRIPT type="text/javascript" src="./Easy Slider jQuery Plugin Demo_files/jquery.js"></SCRIPT>
	<SCRIPT type="text/javascript" src="./Easy Slider jQuery Plugin Demo_files/easySlider1.7.js"></SCRIPT>
	<SCRIPT type="text/javascript">
$(document).ready(function(){	
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
	
<LINK href="./Easy Slider jQuery Plugin Demo_files/screen.css" rel="stylesheet" type="text/css" media="screen">
<p>	<p>
	<DIV id="container">

	<DIV id="content">

		<DIV id="slider2" style="width: 696px; height: 241px; overflow-x: hidden; overflow-y: hidden; ">
			<UL style="width: 3480px; "></A>
			
            <form name="busqueda" method="post" action="busqueda.php">
			<table height="280" class="busqueda">
              <tr><td height="112" colspan="4" class="celda_busqueda"><h2> Selecciona tu búsqueda: </h2></td></tr>
			  <tr><td class="celda_busqueda"><label> Por categoría: </label></td>
		  		<td class="celda_busqueda">
				<select name="combo_categoria"> 
                          <option value="cualquiera">Cualquiera
                          <option value="Administraci&oacute;n Oficinas" >Administración/Oficina
						  <option value="arte Diseño" >Arte/Diseño/Medios
						  <option value="informatica" >Informática/Telecom.
						  <option value="call Center" > Recepción/call center
						  <option value="Contabilidad" >Economía/Contabilidad
						  <option value="Turismo" >Hostelería/Turismo
  						  <option value="servicio al cliente" > Servicio al cliente/meseros/bar tender
						  <option value="ventas" >Ventas
						  <option value="medicina" >Medicina/Salud
						  <option value="otros" >Otros
 
                  </select>
				</td> 
					<td class="celda_busqueda"><label> Por tipo: </label></td>
					<td class="celda_busqueda">
						<select name="combo_tipo">
							<option value="Medio Tiempo">Medio Tiempo </option>
							<option value="Tiempo Completo">Tiempo completo </option>
							<option value="Temporal">Temporal </option>
							<option value="Desde casa">Desde casa </option>
						</select>
					</td>
			  </tr>
				<tr>
						<td class="celda_busqueda"><label> Por departamento: </label></td>
						<td class="celda_busqueda">
						<select name="combo_depto">
							 <option value="cualquiera">Cualquiera
							 <option value="Ahuachapan" >Ahuachapán
							 <option value="Caba&ntilde;as"  >Cabañas
                             <option value="chalatenango" >Chalatenango
                             <option value="cuscatl&aacute;n" >Cuscatlán
                             <option value="libertad" >La Libertad
                             <option value="La Paz" >La Paz
                             <option value="La Union" >La Unión
                             <option value="Moraz&aacute;n" >Morazán
   						     <option value="San miguel" >San Miguel
							 <option value="San Salvador" >San Salvador
							 <option value="San vicente" >San Vicente
							 <option value="Santa Ana" >Santa Ana
							 <option value="Sonsonate" >Sonsonate
  							 <option value="Usulut&aacute;n" >Usulután
						</select>
						</td>
				</tr>
				<tr>
					<td class="celda_busqueda"><label> Búsqueda personalizada </label>					</td>
					<td width="200"><p><img src="images/icono_lupa1.png" width="21" height="19" />
					  <input type="text" name="txtbusqueda" />
					</td>
				<td heigth="300" colspan="4" align="center"><input type="image" src="images/buscar.gif" value="buscar" /> </td>
				</tr>
</table>
</form>
		
 <!--- <SCRIPT type="text/javascript" src="./Easy Slider jQuery Plugin Demo_files/blogsponsor.js"></SCRIPT> -->
  
</div>
    <!--cuenta-->
<div class="left_content"><?php 
				  
						session_start();
						
						require_once 'PHPPaging.lib.php';
						include_once 'admin/conexion.php';
						/*mysql_connect ('localhost','root','') or die (msg_errores('CS'));
       					 // Seleccionar base de datos
        				mysql_select_db ('empleos') or die (msg_errores('SBD'));
						*/
						
						$paging= new PHPPaging;
						
						$paging-> verPost(true);
						
						
						$txtbusqueda= $_REQUEST['txtbusqueda'];
						//$nombre_plaza=$_REQUEST['nombre_plaza'];
						$combo_tipo=$_REQUEST['combo_tipo'];
						$combo_depto=$_REQUEST['combo_depto'];
						$combo_categoria=$_REQUEST['combo_categoria'];
						/*$criterio = "where categoria like '%" . $combo_categoria . "%' and tipo_contrato like '%" . $combo_tipo . "%' and depto_plaza like '%" . $combo_depto . "%'";*/		
						if($combo_categoria=="cualquiera" and $combo_depto=="cualquiera")
						{
							$criterio="where tipo_contrato='".$_REQUEST['combo_tipo']."'";
						}
						
						else if($combo_depto=="cualquiera")
						{
							$criterio="where tipo_contrato='".$_REQUEST['combo_tipo']."' and Categoria='".$_REQUEST['combo_categoria']."'";
						}
						else if($combo_categoria=="cualquiera")
						{
							$criterio="where tipo_contrato='".$_REQUEST['combo_tipo']."' and depto_plaza='".$_REQUEST['combo_depto']."'" ;
						}
						else
						{
							$criterio = "where tipo_contrato='".$_REQUEST['combo_tipo']."' and depto_plaza='".$_REQUEST['combo_depto']."' and Categoria='".$_REQUEST['combo_categoria']."'";
						}
						
						if($txtbusqueda !='')
						{	
							$criterio.=" and (nomb_empleo like '%". $txtbusqueda . "%' or requisitos_empleo like '%".$txtbusqueda. "%' or Categoria like '%".$txtbusqueda. "%' or descripcion like '%" .$txtbusqueda."%' or tipo_contrato like '%".$txtbusqueda. "%' or depto_plaza like '%".$txtbusqueda. "%' or salario like '%".$txtbusqueda. "%')";
						} 
						
						$paging->mantenerVar('txtbusqueda', 'combo_tipo','combo_depto','combo_categoria');
						
						$paging->agregarConsulta("select * from plazas ". $criterio);
						
						$paging->ejecutar();
						
						while ($p=$paging-> fetchResultado())
						{
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
                <li><a href="Index.php">Inicio</a></li>
                <li><a href="forms.php">Inscr&iacute;bete</a></li>
                <li><a href="Contactanos.php">Ingresa tu empresa </a></li>
                <li><a href="#">Buscar trabajo </a></li>
                <li><a href="#">Sube tu curriculum </a></li>
                <li><a href="Tips.php">Trucos y consejos </a></li>
                <li><a href="Contactanos.php">Contact&aacute;ctanos</a></li>
              </ul>
            </div>
   	  </div>
    	<!--End of footer_tab3-->      
        
        
        
             
        
    <div class="clear"></div>
	</div> <!--End of footer_content-->
</div><!--End of footer-->

</body>
</html>