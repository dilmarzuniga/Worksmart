<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1252" />
<title>Nuevo Usuario</title>
<link rel="stylesheet" type="text/css" href="../../../Users/Rodrigo/Desktop/PROYECTO PARTE ALE Y RODRIGO/style.css" />


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
    	<div class="logo"><a href="../../../Users/Rodrigo/Desktop/PROYECTO PARTE ALE Y RODRIGO/Index.php"><img src="../../../Users/Rodrigo/Desktop/PROYECTO PARTE ALE Y RODRIGO/images/logo1.png" alt="" width="350" height="114" vspace="27" border="0" title="" /></a></div>   
        <div id="menu">
            <ul>                                                                       
            <li><a href="../../../Users/Rodrigo/Desktop/PROYECTO PARTE ALE Y RODRIGO/Index.php">Inicio</a></li>
            
            <li class="selected"><a href="../../../Users/Rodrigo/Desktop/PROYECTO PARTE ALE Y RODRIGO/Registrarse.php">Registrate</a></li>
            
            <li><a href="../../../Users/Rodrigo/Desktop/PROYECTO PARTE ALE Y RODRIGO/Empresas.php">Empresas</a></li>
            <li><a href="../../../Users/Rodrigo/Desktop/PROYECTO PARTE ALE Y RODRIGO/Contactanos.php">Cont&aacute;ctanos</a><a href="../../../Users/Rodrigo/Desktop/PROYECTO PARTE ALE Y RODRIGO/Acerca de.php">Acerca de</a>
            <li></li>
            </ul>
        </div>
      
    	 
    <!--miren si se le quiere dar tamaño al fondo negro quitar los parrafos--> 
    	
    </div> <!--End of header-->

    
    <div class="main_content">

    	<div align=center>
            	<h1>Proceso de Registracion</h1>
		
				</div>
				
				
	<LINK rel="shortcut icon" href="http://static.flowplayer.org/tools/img/favicon.ico" type="image/png">
	<LINK rel="stylesheet" type="text/css" href="../../../Users/Rodrigo/Desktop/PROYECTO PARTE ALE Y RODRIGO/Using tooltips in form fields_files/global-0.52.css">	







	<!-- tooltip styling -->
	<LINK rel="stylesheet" type="text/css" href="../../../Users/Rodrigo/Desktop/PROYECTO PARTE ALE Y RODRIGO/Using tooltips in form fields_files/tooltip-generic.css"> 

	<STYLE>
	#myform {
		border:1px outset #ccc;
		background:#fff url(http://static.flowplayer.org/img/global/gradient/h600.png) repeat-x;
		padding:20px;
		margin:20px 0;
		width:350px;
		font-size:12px;
	
	}
	
	#myform h3 {
		text-align:center;
		margin:0 0 10px 0;
	}
	

	#inputs label, #inputs input, #inputs textarea, #inputs select {
		display: block;
		width: 150px;
		float: left;
		margin-bottom: 20px;
	}
	
	#inputs label {
		text-align: right;
		width: 75px;
		padding-right: 20px;
	}
	
	#inputs br {
		clear: left;
	}
	</STYLE>
  <div class="left_content">
  <!--<form id="form1" name="form1" method="post" action="inserts/i_user.php">  -->
<FORM id="myform" name="form1" method="post" action="../../../Users/Rodrigo/Desktop/PROYECTO PARTE ALE Y RODRIGO/inserts/i_user.php">

	<H3>Registro de Usuario WorkSmart Inc.</H3><br>

	<DIV id="inputs">
    
    <?php 
	
	@$e_name=$_GET['e_name'];
	?>
    
   	
		<!-- username -->
		<LABEL for="username">Nombre:</LABEL>
		 <input name="name" type="text" id="name" />
<?php 
 @$e_name=$_REQUEST['e_name'];
if ($e_name==1){
echo("<font color='red'>Nombre de Usuario Incorrecto</font>");
}

?><BR>
		 
		 <LABEL for="username">Usuario:</LABEL>
		  <input name="username" type="text" id="username" /><br>

		<!-- password -->
		<LABEL for="password">Contraseña:</LABEL>
		 <input name="pwd" type="password" id="pwd" /><BR>

		 
		 	<LABEL for="password">Repetir Contraseña:</LABEL>
		  <input name="pwd2" type="password" id="pwd2"  /><BR>
		<!-- email -->
		<LABEL for="email">Correo Electronico:</LABEL>
		<INPUT id="email"><BR>
		<label for="email">Ingrese los caracteres de la siguiente imagen: </label>
						
		<img src="imagen2.php" width="139" height="50" border="0" align="middle"  />
						<br><p><input type="text" name="captcha"></p><br> 


	</DIV>

	<!-- email -->
<hr>

	<P>

<input name="image" type="image" class="send" src="../../../Users/Rodrigo/Desktop/PROYECTO PARTE ALE Y RODRIGO/images/enviar.gif" align="center">
<p>
</p>

	</P>
</form>
</div>

<!-- javascript coding -->
		<div class="right_content">
			         	<h3>Es  facil, solo tienes que seguir los siguientes pasos y llenar el formulario que se presenta a continuacion. <br> <br> Recuerde que usted ha aceptado los terminos y condiciones anteriores le deseamos mucha suerte con el proceso, cuando haya terminado de ingresar sus datos reviselos detalladamente y guarde su contraseña en un lugar seguro.</h3>
						<hr>
					<h3><i>	Si posees alguna duda o consulta no olvides en escribirnos, o contactarte con nosotros estaremos con gusto ayudandote en lo que mas necesites.</h3></i>
					<center>
					<img src="../../../Users/Rodrigo/Desktop/PROYECTO PARTE ALE Y RODRIGO/images/contact.png" width="98 px" height="98 px"><br>
				<a href="Contactanos.php"><button><b>Contactanos</b></a> 
				</center>
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
                <p class="info">70088215</p>           
          </div> 
            <div class="footer_copyrights">
            <img src="../../../Users/Rodrigo/Desktop/PROYECTO PARTE ALE Y RODRIGO/images/logo_abajo.png" alt="" width="187" height="54" title="" /><br />
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
                <li><a href="../../../Users/Rodrigo/Desktop/PROYECTO PARTE ALE Y RODRIGO/Index.php">Inicio</a></li>
                <li><a href="../../../Users/Rodrigo/Desktop/PROYECTO PARTE ALE Y RODRIGO/Nuevo_Usuario.php">Inscr&iacute;bete</a></li>
                <li><a href="../../../Users/Rodrigo/Desktop/PROYECTO PARTE ALE Y RODRIGO/Contactanos.php">Ingresa tu empresa </a></li>
                <li><a href="#">Buscar trabajo </a></li>
                <li><a href="#">Sube tu curriculum </a></li>
                <li><a href="../../../Users/Rodrigo/Desktop/PROYECTO PARTE ALE Y RODRIGO/Tips.php">Trucos y consejos </a></li>
                <li><a href="../../../Users/Rodrigo/Desktop/PROYECTO PARTE ALE Y RODRIGO/Contactanos.php">Contact&aacute;ctanos</a></li>
              </ul>
            </div>
   	  </div>
    	<!--End of footer_tab3-->      
        
        
        
             
        
    <div class="clear"></div>
	</div> <!--End of footer_content-->
</div><!--End of footer-->

</body>
</html>