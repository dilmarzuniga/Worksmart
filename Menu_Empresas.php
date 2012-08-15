<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1252" />
<title>WORK SMART</title>
<link rel="stylesheet" type="text/css" href="style.css" />
<!--[if IE 6]>
	<script type="text/javascript" src="unitpngfix.js"></script>
<![endif]--> 
</head>
<body class="details">
<div class="wrap">
	<div class="header">
    	<div class="logo"><a href="Index.php"><img src="images/logo1.png" alt="" width="293" height="113" vspace="27" border="0" title="" /></a></div>
        
        <div id="menu">
            <ul>                                                                       
            <li><a href="Index.php">Inicio</a></li>
            <li><a href="Registrarse.php">Registrate</a></li>
            <li><a href="Empresas.php">Empresas</a></li>
            <li><a href="Contactanos.php">Cont&aacute;ctanos</a></li>
            <li><a href="Contactanos.php">Acerca de</a></li>
            <li></li>
            </ul>
        </div>
           
    </div> <!--End of header-->

    
    <div class="main_content">
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
	        <a href="login.php?accion=close">Cerrar Sesion</a>
	  <script type="text/javascript" src="stmenu.js"></script>
		<script type='text/javascript' src='menu_empresas.js'></script> 
	</div> 
    		<!--End of left_content-->
            
	  <div class="tipsizquierdo">
    		  <h1 class="centro_empresas">BIENVENIDO AL MENU DE EMPRESAS </h1>
    		  	<p align="center">  	<center>
    		  	  <img src="images/logo_empresa.png" alt="logo_empresa" width="312" height="183" align="middle" class="centro" />
    		  	</center></p>
   		  	  <h3 class="orange">&iquest;Eres un nuevo usuario... ?    		  	</h3>
    		  	<p>Este portal esta dedicado para todas las empresas con el fin de brindarles un menu, en el cual estas puedan efectuar diversas actividades como ingresar nuevas plazas (para los posibles usuarios que apliquen...) , modificar plazas existentes, asi como tambien visualizar todas las plazas ingresadas.
  	    <p>Toda esta informacion sera presentada para todas las empresas, teniendo en cuenta que se tendra la facilidad de ver todos los curriculum de los posibles empledos. 
    		  	<p><center><img src="images/interview.jpg" alt="imagen..." width="205" height="132" border="5" align="middle" class="centro" /></center>
  		  	  
    		  	<h3 class="orange">Objetivos</h3>
    		  <br />
	    <div>
				<div class="tipsE">
					<p class="texto_tips"> - Proporcionar a las empresas un menu a traves del cual se realizen actidades como, agregar plazas de trabajos, modificarlas, visualizar las plazas existentes etc.</p>
					<p class="texto_tips">- Facilitar a las empresas la forma en que estan bla bla... </p>
				</div>
	    </div>
      </div>
    		<!--End of right_content-->          
            
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
                    <li><a href="Registrarse.php">Registrate</a></li>
                    <li><a href="empresa.html">Ingresa tu empresa </a></li>
                    <li><a href="#">Buscar trabajo </a></li>
                    <li><a href="curri_pas1.php">Sube tu curriculum </a></li>
                    <li><a href="Tips2.php">Trucos y consejos </a></li>
                    <li><a href="Contactanos.php">Contact&aacute;ctanos</a></li>
                    </ul>
                </div> 
      </div> <!--End of footer_tab3-->      
        
        
        
             
        
    <div class="clear"></div>
	</div> <!--End of footer_content-->
</div>
<!--End of footer-->
</body>
</html>