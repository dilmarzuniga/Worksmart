<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1252" />
<title>Business Company</title>
<link rel="stylesheet" type="text/css" href="style.css" />
<!--[if IE 6]>
	<script type="text/javascript" src="unitpngfix.js"></script>
<![endif]-->
<style type="text/css">
<!--
.Estilo1 {color: #000000}
.Estilo3 {color: #000000; font-weight: bold; }
-->
</style>

<script LANGUAGE="JavaScript"> 
 
 
function Cont()
 
{
 
var aux=0;
 
var o = new Array();
var may = new Array();
 
for (var x=0;x<=21;x++) o[x]=0;
// for (var s=0;s<=21;s++) may[s]=0;
 
 
var t = new Array();
var l = new Array();
 
t[0]=null;
t[1]= "Ingenier&iacute;a Civil ";
t[2]= "Ingenier&iacute;a Industrial ";
t[3]= "Ingenier&iacute;a de Sistemas ";
t[4]= "Ingenier&iacute;a Electr&oacute;nica ";
t[5]= "Ingenier&iacute;a Electromec&aacute;nica ";
t[6]= "Ingenier&iacute;a Mec&aacute;nica ";
t[7]= "Administraci&oacute;n de Empresas ";
t[8]= "Ingenier&iacute;a Comercial ";
t[9]= "Ingenier&iacute;a Financiera ";
t[10]= "Ingenier&iacute;a Econ&oacute;mica ";
t[11]= "Auditor&iacute;a ";
t[12]= "Ingenier&iacute;a de Medio Ambiente ";
t[13]= "Ingenier&iacute;a Agron&oacute;mica ";
t[14]= "Medicina Veterinaria ";
t[15]= "Ingenier&iacute;a de Alimentos ";
t[16]= "Derecho ";
t[17]= "Comunicaci&oacute;n Social ";
t[18]= "Licenciatura en M&uacute;sica ";
t[19]= "Medicina ";
t[20]= "Odontolog&iacute;a ";
t[21]= "Enfermer&iacute;a ";
 
l[0]= null;
l[1]= "Ingciv";
l[2]= "Ingcom";
l[3]= "Ingsis";
l[4]= "Ingelec";
l[5]= "Ingeleme";
l[6]= "Ingmec";
l[7]= "Admi";
l[8]= "Ingcom";
l[9]= "Ingfin";
l[10]= "Ingeco";
l[11]= "Audit";
l[12]= "Ingmedio";
l[13]= "Ingagro";
l[14]= "Medvet";
l[15]= "Ingali";
l[16]= "Derecho";
l[17]= "Comunica";
l[18]= "Musica";
l[19]= "Medicina";
l[20]= "Odonto";
l[21]= "Enfermeria";
 
for(var preguntas=0;preguntas<40;preguntas++)   
 
	{
 
	for(var casilla=0;casilla<4;casilla++)
 
		{
 
		if(document.forms[preguntas].elements[casilla].checked)
 
			{
 
			var a=document.forms[preguntas].elements[casilla].name;
 
			switch(a){
 
					  				 case "c1" : o[1]=o[1]+casilla;
 
                                            break;
 
                                case "c2" : o[2]=o[2]+casilla;
 
                                            break;
 
                                case "c3" : o[3]=o[3]+casilla;
 
                                            break;
 
                                case "c4" : o[4]=o[4]+casilla;
 
                                            break;
 
                                case "c5" : o[5]=o[5]+casilla;
 
                                            break;
 
                                case "c6" : o[6]=o[6]+casilla;
 
                                            break;
 
                                case "c7" : o[7]=o[7]+casilla;
 
                                            break;
 
                                case "c8" : o[8]=o[8]+casilla;
 
                                            break;
 
                                case "c9" : o[9]=o[9]+casilla;
 
                                            break;
 
                                case "c10" : o[10]=o[10]+casilla;
 
                                            break;
 
                                case "c11" : o[11]=o[11]+casilla;
 
                                            break;
 
                                case "c12" : o[12]=o[12]+casilla;
 
                                            break;
 
                                case "c13" : o[13]=o[13]+casilla;
 
                                            break;
											
                                case "c14" : o[14]=o[14]+casilla;
 
                                            break;
											
                                case "c15" : o[15]=o[15]+casilla;
 
                                            break;
 
                                case "c16" : o[16]=o[16]+casilla;
 
                                            break;
 
                                case "c17" : o[17]=o[17]+casilla;
 
                                            break;
 
                                case "c18" : o[18]=o[18]+casilla;
 
                                            break;
                                            
                                case "c19" : o[19]=o[19]+casilla;
 
                                            break;
                                            
                                case "c20" : o[20]=o[20]+casilla;
 
                                            break;
                                            
                                case "c21" : o[21]=o[21]+casilla;
 
                                            break;                                                                                                                                   
 
                                
                   }
 
			}
 
		}
 
	}
 
for (var z=0;z<=21;z++) may[z]=o[z];
 
for (var i=1;i<=20;i++)
{
	for (var j=i+1;j<=21;j++)
	{
		if (may[i]<may[j])
		{
			aux=may[i];
			may[i]=may[j];
			may[j]=aux;
		}
	}
}

document.write("<body background='images/bg2.jpg'>");
document.write("<h1><center><font color='#00A3CA'>Resultados Obtenidos en nuestra Prueba</font></h1></center>");
document.writeln("<p align=justify><font size=2 face=Arial color=#003366><i><b>Estas son lres carreras que mas ");
document.writeln("se adecuan a tu perfil personal.<br><br></b></i></font>");
 
 
document.writeln("<table border=0>");
 
 
var sw=0;
// var pri=0;
// var sec=0;
 
for (var c1=1;c1<=21;c1++)
{
	if (o[c1]==may[1] && sw==0)
	{
	document.writeln("<tr><td><ul><li><strong><font size=2 face=Arial color=#3399FF><i>"+t[c1]+"</i></font></strong></li></ul></td></tr>");
	sw=1;
	var pri=c1;
	}
}
 
sw=0;
 
for (var c2=1;c2<=21;c2++)
{
	if (o[c2]==may[2] && sw==0 && c2!=pri)
	{
	document.writeln("<tr><td><ul><li><strong><font size=2 face=Arial color=#3399FF><i>"+t[c2]+"</i></font></strong></li></ul></td></tr>");
	sw=1;
	var sec=c2;
	}
}
 
sw=0;
 
for (var c3=1;c3<=21;c3++)
{
	if (o[c3]==may[3] && sw==0 && c3!=pri && c3!=sec)
	{
	document.writeln("<tr><td><ul><li><strong><font size=2 face=Arial color=#3399FF><i>"+t[c3]+"</i></font></strong></li></ul></td></tr>");
	sw=1;
	}
}
document.writeln("</table>");
 
document.writeln("<p align=justify><font size=2 face=Arial color=#003366><i><b>A continuaci&oacute;n tienes el cuadro con el resultado ");
document.writeln("de tu afinidad con las carreras mas comunes.<br><br></b></i></font>");
 
document.writeln("<CENTER><TABLE>");
// document.writeln("<p>&nbsp;</p>");
 
 
 
for (var c=1;c<=21;c++)
 
	{
 
	document.write("<TR><TD bgcolor=#3399FF ><font color=#FFFFFF>");
 
	document.write("<strong>"+t[c]+"</strong>");
 
	document.write("</font></TD><TD BGCOLOR=#FFFFFF>");
 
	for (var x=1;x<=o[c];x++)
 
		{
  
		}
		if (o[c]!=0) 
		{
			if (c==pri) document.write("<table width="+10*o[c]+" border=0 bgcolor=#003366><tr><td width=5></td></tr></table>");
 
			else document.write("<table width="+10*o[c]+" border=0 bgcolor=#FF0000><tr><td width=5></td></tr></table>");
		}
	document.write(" </TD></TR>");
 
	}
 
 
document.write("</TABLE></CENTER>");
 
document.writeln("<p align=justify>&nbsp;</td></tr></table></div>");
 
 
document.writeln("</td>");
document.writeln("<td width=\"13\" valign=\"top\"><!--DWLayoutEmptyCell-->&nbsp;</td>");
document.writeln("<td>&nbsp;</td>");
document.writeln("</tr>");
document.writeln("<tr>");
document.writeln("<td height=\"0\"></td>");
document.writeln("<td width=\"22\"></td>");
document.writeln("<td></td>");
document.writeln("<td width=\"101\"></td>");
document.writeln("<td></td>");
document.writeln("<td width=\"183\"></td>");
document.writeln("<td></td>");
document.writeln("<td></td>");
document.writeln("</tr>");
document.writeln("</table>");
document.writeln("</body>");
 
 
}
         </script> 
 


</head>
<body class="details">
<div class="wrap">
	<div class="header">
    	<div class="logo"><a href="Index.php"><img src="images/logo1.png" alt="" width="350" height="114" vspace="27" border="0" title="" /></a></div>   
        <div id="menu">
            <ul>                                                                       
            <li><a href="Index.php">Inicio</a></li>
            <li><a href="Registrarse.php">Registrate</a></li>
            <li><a href="Empresas.php">Empresas</a></li>
            <li><a href="Contactanos.php">Cont&aacute;ctanos</a></li>
            <li><a href="Contactanos.php">Acerca de</a></li>
            <li class="selected"></li>
            <li></li>
            </ul>
        </div>
           
    </div> <!--End of header-->

    
    <div class="main_content">
	  <div class="left_content">
            	<h1 align="center">Te invitamos a que descubras tu profesi&oacute;n. </h1>
            	<h1>Test Vocacional de Profesiones. </h1>
            	<table cellspacing="0" cellpadding="0">
            	  <tr>
            	    <td width="14"></td>
            	    <td colspan="3" valign="top"><div align="justify">
                        <p>Esta prueba tiene por            objeto darte una orientaci&oacute;n sobre la Carrera que mas se adecua a tus            intereses. El cuestionario contiene una lista de actitudes que se realizan            en las diferentes profesiones. Debes indicar cuanto te interesa cada actitud.<br />
                            <br />
                          En la parte superior del test esta indicado la valoraci&oacute;n de cada actitud,  presta atenci&oacute;n a lo que equivale cada una de ellas para responder a cada una de las preguntas. </p>
          	      </div></td>
          	    </tr>
          	  </table>
            	<p>&nbsp;</p>
                <div align="center"><img src="images/test-vocacional.jpg" border="2" alt="" width="257" height="320" class="big_pic" title="" />      </div>
	  </div> 
	  <!--End of left_content-->
            
    		<div class="right_content">

                <h1>Iniciando Test... </h1>
              <div class="services_list">
                  <ul>
                    <li>
                      <div align="center"><strong>Literales: Nada,  Poco, Mucho, Bastante</strong></div>
                    </li>
                  </ul>
         

               <table border="1" cellspacing="0" bordercolor="#666666" width="381"> 
            <tr BGCOLOR="#CC0000"> 
              <td width="282" height="16" ALIGN=LEFT nowrap bordercolor="#3399FF" bgcolor="#3399FF"><p align="left" class="style14"><font color="#FFFFFF">1.-
                De tener una responsabilidad en el colegio, preferir&iacute;a:</font></p></td> 
              <td width="21" height="16" ALIGN=CENTER bordercolor="#3399FF" bgcolor="#3399FF"><p align="center" class="style16"><font color="#FFFFCC" face="Arial, Helvetica, sans-serif" size="1">Nada</font></p></td> 
              <td width="21" height="16" ALIGN=CENTER bordercolor="#3399FF" bgcolor="#3399FF"><p align="center" class="style16"><font color="#FFFFCC" face="Arial, Helvetica, sans-serif" size="1">Poco</font></p></td> 
              <td width="21" height="16" ALIGN=CENTER bordercolor="#3399FF" bgcolor="#3399FF"><p align="center" class="style16"><font color="#FFFFCC" face="Arial, Helvetica, sans-serif" size="1">Bastante</font></p></td> 
              <td width="21" height="16" ALIGN=CENTER bordercolor="#3399FF" bgcolor="#3399FF"><p align="center" class="style16"><font color="#FFFFCC" face="Arial, Helvetica, sans-serif" size="1">Mucho</font></p></td> 
            </tr> 
            <tr> 
              <form> 
                <td height="16"  NOWRAP bordercolor="#3399FF" BGCOLOR="#FFFF99" ALIGN="left" width="282"><span class="style14">Encargado de recoger el dinero y controlar los gastos de un viaje de fin de
                  curso</span></td> 
                <td width="21" height="16" ALIGN=CENTER bordercolor="#3399FF" bgcolor="#FFFF99" ><p align="center"> 
                  <input NAME="c9" TYPE="radio" CHECKED> 
                </p></td> 
                <td width="21" height="16" ALIGN=CENTER bordercolor="#3399FF" bgcolor="#FFFF99" ><p> 
                  <input TYPE="radio" NAME="c9" > 
                  </p></td> 
                <td width="21" height="16" bordercolor="#3399FF" bgcolor="#FFFF99" ><p align="center"> 
                  <input TYPE="radio" NAME="c9" > 
                  </p></td> 
                <td width="21" height="16" ALIGN=CENTER bordercolor="#3399FF" bgcolor="#FFFF99" ><p> 
                  <input TYPE="radio" NAME="c9" > 
                  </p></td> 
              </form> 
            </tr> 
            <tr> 
              <form> 
                <td height="16"  NOWRAP bordercolor="#3399FF" BGCOLOR="#FFFFCC" ALIGN="left" width="282"><p align="left" class="style14">Encargado de llevar un
                  botiqu&iacute;n y ser responsable de primeros auxilios</p></td> 
                <td width="21" height="16" ALIGN=CENTER bordercolor="#3399FF" bgcolor="#FFFFCC" ><p> 
                  <input TYPE="radio" NAME="c21" CHECKED> 
                  </p></td> 
                <td width="21" height="16" ALIGN=CENTER bordercolor="#3399FF" bgcolor="#FFFFCC" ><p> 
                  <input TYPE="radio" NAME="c21" > 
                  </p></td> 
                <td width="21" height="16" ALIGN=CENTER bordercolor="#3399FF" bgcolor="#FFFFCC" ><p> 
                  <input TYPE="radio" NAME="c21" > 
                  </p></td> 
                <td width="21" height="16" ALIGN=CENTER bordercolor="#3399FF" bgcolor="#FFFFCC" ><p> 
                  <input TYPE="radio" NAME="c21" > 
                  </p></td> 
              </form> 
            </tr> 
            <tr> 
              <form> 
                <td height="16"  NOWRAP bordercolor="#3399FF" BGCOLOR="#FFFF99" ALIGN="left" width="282"><p align="left" class="style14">Encargado de realizar un
                  peri&oacute;dico o revista informativa sobre las actividades del colegio</p></td> 
                <td width="21" height="16" ALIGN=CENTER bordercolor="#3399FF" bgcolor="#FFFF99" ><p> 
                  <input TYPE="radio" NAME="c17" CHECKED> 
                  </p></td> 
                <td width="21" height="16" ALIGN=CENTER bordercolor="#3399FF" bgcolor="#FFFF99" ><p> 
                  <input TYPE="radio" NAME="c17" > 
                  </p></td> 
                <td width="21" height="16" ALIGN=CENTER bordercolor="#3399FF" bgcolor="#FFFF99" ><p> 
                  <input TYPE="radio" NAME="c17" > 
                  </p></td> 
                <td width="21" height="16" ALIGN=CENTER bordercolor="#3399FF" bgcolor="#FFFF99" ><p> 
                  <input TYPE="radio" NAME="c17" > 
                  </p></td> 
              </form> 
            </tr> 
            <tr> 
              <form> 
                <td height="16"  NOWRAP bordercolor="#3399FF" BGCOLOR="#FFFFCC" ALIGN="left" width="282"><p align="left" class="style14">Encargado de formar una brigada de protecci&oacute;n de las
                  &aacute;reas verdes y el medio ambiente</p></td> 
                <td width="21" height="16" ALIGN=CENTER bordercolor="#3399FF" bgcolor="#FFFFCC" ><p> 
                  <input TYPE="radio" NAME="c12" CHECKED> 
                  </p></td> 
                <td width="21" height="16" ALIGN=CENTER bordercolor="#3399FF" bgcolor="#FFFFCC" ><p> 
                  <input TYPE="radio" NAME="c12" > 
                  </p></td> 
                <td width="21" height="16" ALIGN=CENTER bordercolor="#3399FF" bgcolor="#FFFFCC" ><p> 
                  <input TYPE="radio" NAME="c12" > 
                  </p></td> 
                <td width="21" height="16" ALIGN=CENTER bordercolor="#3399FF" bgcolor="#FFFFCC" ><p> 
                  <input TYPE="radio" NAME="c12" > 
                  </p></td> 
              </form> 
            </tr> 
            <tr BGCOLOR="#3399FF"> 
              <td width="282" height="16" ALIGN=LEFT nowrap bordercolor="#3399FF" bgcolor="#3399FF"><p align="left" class="style14"><font color="#FFFFFF">2.-
                De hacer un viaje de estudio o trabajo, preferir&iacute;a:</font></p></td> 
              <td width="21" height="16" ALIGN=CENTER bordercolor="#3399FF" bgcolor="#3399FF"><p><strong><font color="#FFFFCC" face="Arial, Helvetica, sans-serif" size="1">Nada</font></strong></p></td> 
              <td width="21" height="16" ALIGN=CENTER bordercolor="#3399FF" bgcolor="#3399FF"><p><strong><font color="#FFFFCC" face="Arial, Helvetica, sans-serif" size="1">Poco</font></strong></p></td> 
              <td width="21" height="16" ALIGN=CENTER bordercolor="#3399FF" bgcolor="#3399FF"><p><strong><font color="#FFFFCC" face="Arial, Helvetica, sans-serif" size="1">Bastante</font></strong></p></td> 
              <td width="21" height="16" ALIGN=CENTER bordercolor="#3399FF" bgcolor="#3399FF"><p><strong><font color="#FFFFCC" face="Arial, Helvetica, sans-serif" size="1">Mucho</font></strong></p></td> 
            </tr> 
            <tr bordercolor="#CC0000" bgcolor="#FFFF00"> 
              <form> 
                <td width="282" height="16" ALIGN="left"  NOWRAP bordercolor="#3399FF" bgcolor="#FFFF99"><p align="left" class="style14">Visitar una fabrica automatizada para producir textiles</p></td> 
                <td width="21" height="16" ALIGN=CENTER bordercolor="#3399FF" bgcolor="#FFFF99" ><p> 
                    <input TYPE="radio" NAME="c2" CHECKED> 
                </p></td> 
                <td width="21" height="16" ALIGN=CENTER bordercolor="#3399FF" bgcolor="#FFFF99" ><p> 
                    <input TYPE="radio" NAME="c2" > 
                </p></td> 
                <td width="21" height="16" ALIGN=CENTER bordercolor="#3399FF" bgcolor="#FFFF99" ><p> 
                    <input TYPE="radio" NAME="c2" > 
                </p></td> 
                <td width="21" height="16" ALIGN=CENTER bordercolor="#3399FF" bgcolor="#FFFF99" ><p> 
                    <input TYPE="radio" NAME="c2" > 
                </p></td> 
              </form> 
            </tr> 
            <tr bordercolor="#CC0000" bgcolor="#FFFF00"> 
              <form> 
                <td width="282" height="16" ALIGN="left"  NOWRAP bordercolor="#3399FF" BGCOLOR="#FFFFCC"><p align="left" class="style14">Visitar un hospital y participar de voluntario</p></td> 
                <td width="21" height="16" ALIGN=CENTER bordercolor="#3399FF" bgcolor="#FFFFCC" ><p> 
                    <input TYPE="radio" NAME="c19" CHECKED> 
                </p></td> 
                <td width="21" height="16" ALIGN=CENTER bordercolor="#3399FF" bgcolor="#FFFFCC" ><p> 
                    <input TYPE="radio" NAME="c19" > 
                </p></td> 
                <td width="21" height="16" ALIGN=CENTER bordercolor="#3399FF" bgcolor="#FFFFCC" ><p> 
                    <input TYPE="radio" NAME="c19" > 
                </p></td> 
                <td width="21" height="16" ALIGN=CENTER bordercolor="#3399FF" bgcolor="#FFFFCC" ><p> 
                    <input TYPE="radio" NAME="c19" > 
                </p></td> 
              </form> 
            </tr> 
            <tr bordercolor="#CC0000" bgcolor="#FFFF00"> 
              <form> 
                <td width="282" height="16" ALIGN="left"  NOWRAP bordercolor="#3399FF" bgcolor="#FFFF99"><p align="left" class="style14">Visitar los campos de cultivo de una gran explotaci&oacute;n de vi&ntilde;edos</p></td> 
                <td width="21" height="16" ALIGN=CENTER bordercolor="#3399FF" bgcolor="#FFFF99" ><p> 
                    <input TYPE="radio" NAME="c13" CHECKED> 
                </p></td> 
                <td width="21" height="16" ALIGN=CENTER bordercolor="#3399FF" bgcolor="#FFFF99" ><p> 
                    <input TYPE="radio" NAME="c13" > 
                </p></td> 
                <td width="21" height="16" ALIGN=CENTER bordercolor="#3399FF" bgcolor="#FFFF99" ><p> 
                    <input TYPE="radio" NAME="c13" > 
                </p></td> 
                <td width="21" height="16" ALIGN=CENTER bordercolor="#3399FF" bgcolor="#FFFF99" ><p> 
                    <input TYPE="radio" NAME="c13" > 
                </p></td> 
              </form> 
            </tr> 
            <tr bordercolor="#CC0000" bgcolor="#FFFF00"> 
              <form> 
                <td width="282" height="16" ALIGN="left"  NOWRAP bordercolor="#3399FF" BGCOLOR="#FFFFCC"><p align="left" class="style14">Conocer la actividad
                  econ&oacute;mica, negocios de un pa&iacute;s</p></td> 
                <td width="21" height="16" ALIGN=CENTER bordercolor="#3399FF" bgcolor="#FFFFCC" ><p> 
                    <input TYPE="radio" NAME="c10" CHECKED> 
                </p></td> 
                <td width="21" height="16" ALIGN=CENTER bordercolor="#3399FF" bgcolor="#FFFFCC" ><p> 
                    <input TYPE="radio" NAME="c10" > 
                </p></td> 
                <td width="21" height="16" ALIGN=CENTER bordercolor="#3399FF" bgcolor="#FFFFCC" ><p> 
                    <input TYPE="radio" NAME="c10" > 
                </p></td> 
                <td width="21" height="16" ALIGN=CENTER bordercolor="#3399FF" bgcolor="#FFFFCC" ><p> 
                    <input TYPE="radio" NAME="c10" > 
                </p></td> 
              </form> 
            </tr> 
            <tr BGCOLOR="#CC0000"> 
              <td width="282" height="16" ALIGN=LEFT nowrap bordercolor="#3399FF" bgcolor="#3399FF"><p align="left" class="style14"><font color="#FFFFFF">3.-
                Prefiero entre las siguientes actividades:</font></p></td> 
              <td width="21" height="16" ALIGN=CENTER bordercolor="#3399FF" bgcolor="#3399FF"><p><strong><font color="#FFFFCC" face="Arial, Helvetica, sans-serif" size="1">Nada</font></strong></p></td> 
              <td width="21" height="16" ALIGN=CENTER bordercolor="#3399FF" bgcolor="#3399FF"><p><strong><font color="#FFFFCC" face="Arial, Helvetica, sans-serif" size="1">Poco</font></strong></p></td> 

              <td width="21" height="16" ALIGN=CENTER bordercolor="#3399FF" bgcolor="#3399FF"><p><strong><font color="#FFFFCC" face="Arial, Helvetica, sans-serif" size="1">Bastante</font></strong></p></td> 
              <td width="21" height="16" ALIGN=CENTER bordercolor="#3399FF" bgcolor="#3399FF"><p><strong><font color="#FFFFCC" face="Arial, Helvetica, sans-serif" size="1">Mucho</font></strong></p></td> 
            </tr> 
            <tr> 
              <form> 
                <td height="16"  NOWRAP bordercolor="#3399FF" BGCOLOR="#FFFF99" ALIGN="left" width="282"><p align="left" class="style14">Tener una conversaci&oacute;n con un gerente exitoso</p></td> 
                <td width="21" height="16" ALIGN=CENTER bordercolor="#3399FF" bgcolor="#FFFF99" ><p> 
                  <input TYPE="radio" NAME="c7" CHECKED> 
                  </p></td> 
                <td width="21" height="16" ALIGN=CENTER bordercolor="#3399FF" bgcolor="#FFFF99" ><p> 
                  <input TYPE="radio" NAME="c7" > 
                  </p></td> 
                <td width="21" height="16" ALIGN=CENTER bordercolor="#3399FF" bgcolor="#FFFF99" ><p> 
                  <input TYPE="radio" NAME="c7" > 
                  </p></td> 
                <td width="21" height="16" ALIGN=CENTER bordercolor="#3399FF" bgcolor="#FFFF99" ><p> 
                  <input TYPE="radio" NAME="c7" > 
                  </p></td> 
              </form> 
            </tr> 
            <tr> 
              <form> 
                <td height="16"  NOWRAP bordercolor="#3399FF" BGCOLOR="#FFFFCC" ALIGN="left" width="282"><p align="left" class="style14">Conocer el proceso de fabricaci&oacute;n de los vinos y singanis</p></td> 
                <td width="21" height="16" ALIGN=CENTER bordercolor="#3399FF" bgcolor="#FFFFCC" ><p> 
                  <input TYPE="radio" NAME="c2" CHECKED> 
                  </p></td> 
                <td width="21" height="16" ALIGN=CENTER bordercolor="#3399FF" bgcolor="#FFFFCC" ><p> 
                  <input TYPE="radio" NAME="c2" > 
                  </p></td> 
                <td width="21" height="16" ALIGN=CENTER bordercolor="#3399FF" bgcolor="#FFFFCC" ><p> 
                  <input TYPE="radio" NAME="c2" > 
                  </p></td> 
                <td width="21" height="16" ALIGN=CENTER bordercolor="#3399FF" bgcolor="#FFFFCC" ><p> 
                  <input TYPE="radio" NAME="c2" > 
                  </p></td> 
              </form> 
            </tr> 
            <tr> 
              <form> 
                <td height="16"  NOWRAP bordercolor="#3399FF" BGCOLOR="#FFFF99" ALIGN="left" width="282"><p align="left" class="style14">Participar de una feria de alimentos caseros elaborados por la peque&ntilde;a industria</p></td> 
                <td width="21" height="16" ALIGN=CENTER bordercolor="#3399FF" bgcolor="#FFFF99" ><p> 
                  <input TYPE="radio" NAME="c15" CHECKED> 
                  </p></td> 
                <td width="21" height="16" ALIGN=CENTER bordercolor="#3399FF" bgcolor="#FFFF99" ><p> 
                  <input TYPE="radio" NAME="c15" > 
                  </p></td> 
                <td width="21" height="16" ALIGN=CENTER bordercolor="#3399FF" bgcolor="#FFFF99" ><p> 
                  <input TYPE="radio" NAME="c15" > 
                  </p></td> 
                <td width="21" height="16" ALIGN=CENTER bordercolor="#3399FF" bgcolor="#FFFF99" ><p> 
                  <input TYPE="radio" NAME="c15" > 
                  </p></td> 
              </form> 
            </tr> 
            <tr> 
              <form> 
                <td height="16"  NOWRAP bordercolor="#3399FF" BGCOLOR="#FFFFCC" ALIGN="left" width="282"><p align="left" class="style14">Colaborar con un cirujano dentista preparando su material        quir&uacute;rgico</p></td> 
                <td width="21" height="16" ALIGN=CENTER bordercolor="#3399FF" bgcolor="#FFFFCC" ><p> 
                  <input TYPE="radio" NAME="c20" CHECKED> 
                  </p></td> 
                <td width="21" height="16" ALIGN=CENTER bordercolor="#3399FF" bgcolor="#FFFFCC" ><p> 
                  <input TYPE="radio" NAME="c20" > 
                  </p></td> 
                <td width="21" height="16" ALIGN=CENTER bordercolor="#3399FF" bgcolor="#FFFFCC" ><p> 
                  <input TYPE="radio" NAME="c20" > 
                  </p></td> 
                <td width="21" height="16" ALIGN=CENTER bordercolor="#3399FF" bgcolor="#FFFFCC" ><p> 
                  <input TYPE="radio" NAME="c20" > 
                  </p></td> 
              </form> 
            </tr> 
            <tr BGCOLOR="#CC0000"> 
              <td width="282" height="16" ALIGN=LEFT nowrap bordercolor="#3399FF" bgcolor="#3399FF"><p align="left" class="style14"><font color="#FFFFFF">4.-
                Preferir&iacute;a:</font></p></td> 
              <td width="21" height="16" ALIGN=CENTER bordercolor="#3399FF" bgcolor="#3399FF"><p><strong><font color="#FFFFCC" face="Arial, Helvetica, sans-serif" size="1">Nada</font></strong></p></td> 
              <td width="21" height="16" ALIGN=CENTER bordercolor="#3399FF" bgcolor="#3399FF"><p><strong><font color="#FFFFCC" face="Arial, Helvetica, sans-serif" size="1">Poco</font></strong></p></td> 
              <td width="21" height="16" ALIGN=CENTER bordercolor="#3399FF" bgcolor="#3399FF"><p><strong><font color="#FFFFCC" face="Arial, Helvetica, sans-serif" size="1">Bastante</font></strong></p></td> 
              <td width="21" height="16" ALIGN=CENTER bordercolor="#3399FF" bgcolor="#3399FF"><p><strong><font color="#FFFFCC" face="Arial, Helvetica, sans-serif" size="1">Mucho</font></strong></p></td> 
            </tr> 
            <tr> 
              <form> 
                <td height="16"  NOWRAP bordercolor="#3399FF" BGCOLOR="#FFFF99" ALIGN="left" width="282"><p align="left" class="style14">Organizar una feria de productores artesanos</p></td> 
                <td width="21" height="16" ALIGN=CENTER bordercolor="#3399FF" bgcolor="#FFFF99" ><p> 
                  <input TYPE="radio" NAME="c8" CHECKED> 
                  </p></td> 
                <td width="21" height="16" ALIGN=CENTER bordercolor="#3399FF" bgcolor="#FFFF99" ><p> 
                  <input TYPE="radio" NAME="c8" > 
                  </p></td> 
                <td width="21" height="16" ALIGN=CENTER bordercolor="#3399FF" bgcolor="#FFFF99" ><p> 
                  <input TYPE="radio" NAME="c8" > 
                  </p></td> 
                <td width="21" height="16" ALIGN=CENTER bordercolor="#3399FF" bgcolor="#FFFF99" ><p> 
                  <input TYPE="radio" NAME="c8" > 
                  </p></td> 
              </form> 
            </tr> 
            <tr> 
              <form> 
                <td height="16"  NOWRAP bordercolor="#3399FF" BGCOLOR="#FFFFCC" ALIGN="left" width="282"><p align="left" class="style14">Encargarme de peque&ntilde;as reparaciones mec&aacute;nicas</p></td> 
                <td width="21" height="16" ALIGN=CENTER bordercolor="#3399FF" bgcolor="#FFFFCC" ><p> 
                  <input TYPE="radio" NAME="c6" CHECKED> 
                  </p></td> 
                <td width="21" height="16" ALIGN=CENTER bordercolor="#3399FF" bgcolor="#FFFFCC" ><p> 
                  <input TYPE="radio" NAME="c6" > 
                  </p></td> 
                <td width="21" height="16" ALIGN=CENTER bordercolor="#3399FF" bgcolor="#FFFFCC" ><p> 
                  <input TYPE="radio" NAME="c6" > 
                  </p></td> 
                <td width="21" height="16" ALIGN=CENTER bordercolor="#3399FF" bgcolor="#FFFFCC" ><p> 
                  <input TYPE="radio" NAME="c6" > 
                  </p></td> 
              </form> 
            </tr> 
            <tr> 
              <form> 
                <td height="16"  NOWRAP bordercolor="#3399FF" BGCOLOR="#FFFF99" ALIGN="left" width="282"><p align="left" class="style14">Atender Discapacitados</p></td> 
                <td width="21" height="16" ALIGN=CENTER bordercolor="#3399FF" bgcolor="#FFFF99" ><p> 
                  <input TYPE="radio" NAME="c21" CHECKED> 
                  </p></td> 
                <td width="21" height="16" ALIGN=CENTER bordercolor="#3399FF" bgcolor="#FFFF99" ><p> 
                  <input TYPE="radio" NAME="c21" > 
                  </p></td> 
                <td width="21" height="16" ALIGN=CENTER bordercolor="#3399FF" bgcolor="#FFFF99" ><p> 
                  <input TYPE="radio" NAME="c21" > 
                  </p></td> 
                <td width="21" height="16" ALIGN=CENTER bordercolor="#3399FF" bgcolor="#FFFF99" ><p> 
                  <input TYPE="radio" NAME="c21" > 
                  </p></td> 
              </form> 
            </tr> 
            <tr> 
              <form> 
                <td height="16"  NOWRAP bordercolor="#3399FF" BGCOLOR="#FFFFCC" ALIGN="left" width="282"><p align="left" class="style14">Aconsejar a las personas sobre como proteger su dentadura</p></td> 
                <td width="21" height="16" ALIGN=CENTER bordercolor="#3399FF" bgcolor="#FFFFCC" ><p> 
                  <input TYPE="radio" NAME="c20" CHECKED> 
                  </p></td> 
                <td width="21" height="16" ALIGN=CENTER bordercolor="#3399FF" bgcolor="#FFFFCC" ><p> 
                  <input TYPE="radio" NAME="c20" > 
                  </p></td> 
                <td width="21" height="16" ALIGN=CENTER bordercolor="#3399FF" bgcolor="#FFFFCC" ><p> 
                  <input TYPE="radio" NAME="c20" > 
                  </p></td> 
                <td width="21" height="16" ALIGN=CENTER bordercolor="#3399FF" bgcolor="#FFFFCC" ><p> 
                  <input TYPE="radio" NAME="c20" > 
                  </p></td> 
              </form> 
            </tr> 
            <tr BGCOLOR="#CC0000"> 
              <td width="282" height="16" ALIGN=LEFT nowrap bordercolor="#3399FF" bgcolor="#3399FF"><p align="left" class="style14"><font color="#FFFFFF">5.-
                De leer una biograf&iacute;a, preferir&iacute;a:</font></p></td> 
              <td width="21" height="16" ALIGN=CENTER bordercolor="#3399FF" bgcolor="#3399FF"><p><strong><font color="#FFFFCC" face="Arial, Helvetica, sans-serif" size="1">Nada</font></strong></p></td> 
              <td width="21" height="16" ALIGN=CENTER bordercolor="#3399FF" bgcolor="#3399FF"><p><strong><font color="#FFFFCC" face="Arial, Helvetica, sans-serif" size="1">Poco</font></strong></p></td> 
              <td width="21" height="16" ALIGN=CENTER bordercolor="#3399FF" bgcolor="#3399FF"><p><strong><font color="#FFFFCC" face="Arial, Helvetica, sans-serif" size="1">Bastante</font></strong></p></td> 
              <td width="21" height="16" ALIGN=CENTER bordercolor="#3399FF" bgcolor="#3399FF"><p><strong><font color="#FFFFCC" face="Arial, Helvetica, sans-serif" size="1">Mucho</font></strong></p></td> 
            </tr> 
            <tr> 
              <form> 
                <td height="16"  NOWRAP bordercolor="#3399FF" BGCOLOR="#FFFF99" ALIGN="left" width="282"><p align="left" class="style14">La de un empresario exitoso</p></td> 
                <td width="21" height="16" ALIGN=CENTER bordercolor="#3399FF" bgcolor="#FFFF99" ><p> 
                  <input TYPE="radio" NAME="c7" CHECKED> 
                  </p></td> 
                <td width="21" height="16" ALIGN=CENTER bordercolor="#3399FF" bgcolor="#FFFF99" ><p> 
                  <input TYPE="radio" NAME="c7" > 
                  </p></td> 
                <td width="21" height="16" ALIGN=CENTER bordercolor="#3399FF" bgcolor="#FFFF99" ><p> 
                  <input TYPE="radio" NAME="c7" > 
                  </p></td> 
                <td width="21" height="16" ALIGN=CENTER bordercolor="#3399FF" bgcolor="#FFFF99" ><p> 
                  <input TYPE="radio" NAME="c7" > 
                  </p></td> 
              </form> 
            </tr> 
            <tr> 
              <form> 
                <td height="16"  NOWRAP bordercolor="#3399FF" BGCOLOR="#FFFFCC" ALIGN="left" width="282"><p align="left" class="style14">La de un medico famoso</p></td> 
                <td width="21" height="16" ALIGN=CENTER bordercolor="#3399FF" bgcolor="#FFFFCC" ><p> 
                  <input TYPE="radio" NAME="c19" CHECKED> 
                  </p></td> 
                <td width="21" height="16" ALIGN=CENTER bordercolor="#3399FF" bgcolor="#FFFFCC" ><p> 
                  <input TYPE="radio" NAME="c19" > 
                  </p></td> 
                <td width="21" height="16" ALIGN=CENTER bordercolor="#3399FF" bgcolor="#FFFFCC" ><p> 
                  <input TYPE="radio" NAME="c19" > 
                  </p></td> 
                <td width="21" height="16" ALIGN=CENTER bordercolor="#3399FF" bgcolor="#FFFFCC" ><p> 
                  <input TYPE="radio" NAME="c19" > 
                  </p></td> 
              </form> 
            </tr> 
            <tr> 
              <form> 
                <td height="16"  NOWRAP bordercolor="#3399FF" BGCOLOR="#FFFF99" ALIGN="left" width="282"><p align="left" class="style14">La de un defensor de la naturaleza</p></td> 
                <td width="21" height="16" ALIGN=CENTER bordercolor="#3399FF" bgcolor="#FFFF99" ><p> 
                  <input TYPE="radio" NAME="c12" CHECKED> 
                  </p></td> 
                <td width="21" height="16" ALIGN=CENTER bordercolor="#3399FF" bgcolor="#FFFF99" ><p> 
                  <input TYPE="radio" NAME="c12" > 
                  </p></td> 
                <td width="21" height="16" ALIGN=CENTER bordercolor="#3399FF" bgcolor="#FFFF99" ><p> 
                  <input TYPE="radio" NAME="c12" > 
                  </p></td> 
                <td width="21" height="16" ALIGN=CENTER bordercolor="#3399FF" bgcolor="#FFFF99" ><p> 
                  <input TYPE="radio" NAME="c12" > 
                  </p></td> 
              </form> 
            </tr> 
            <tr> 
              <form> 
                <td height="16"  NOWRAP bordercolor="#3399FF" BGCOLOR="#FFFFCC" ALIGN="left" width="282"><p align="left" class="style14">La de un ingeniero o arquitecto famoso</p></td> 
                <td width="21" height="16" ALIGN=CENTER bordercolor="#3399FF" bgcolor="#FFFFCC" ><p> 
                  <input TYPE="radio" NAME="c1" CHECKED> 
                  </p></td> 
                <td width="21" height="16" ALIGN=CENTER bordercolor="#3399FF" bgcolor="#FFFFCC" ><p> 
                  <input TYPE="radio" NAME="c1" > 
                  </p></td> 
                <td width="21" height="16" ALIGN=CENTER bordercolor="#3399FF" bgcolor="#FFFFCC" ><p> 
                  <input TYPE="radio" NAME="c1" > 
                  </p></td> 
                <td width="21" height="16" ALIGN=CENTER bordercolor="#3399FF" bgcolor="#FFFFCC" ><p> 
                  <input TYPE="radio" NAME="c1" > 
                  </p></td> 
              </form> 
            </tr> 
            <tr BGCOLOR="#3399FF"> 
              <td width="282" height="16" ALIGN=LEFT nowrap bordercolor="#3399FF"><p align="left" class="style14"><font color="#FFFFFF">6.-
                Preferir&iacute;a:</font></p></td> 
              <td width="21" height="16" ALIGN=CENTER bordercolor="#3399FF"><p><strong><font color="#FFFFCC" face="Arial, Helvetica, sans-serif" size="1">Nada</font></strong></p></td> 
              <td width="21" height="16" ALIGN=CENTER bordercolor="#3399FF"><p><strong><font color="#FFFFCC" face="Arial, Helvetica, sans-serif" size="1">Poco</font></strong></p></td> 
              <td width="21" height="16" ALIGN=CENTER bordercolor="#3399FF"><p><strong><font color="#FFFFCC" face="Arial, Helvetica, sans-serif" size="1">Bastante</font></strong></p></td> 
              <td width="21" height="16" ALIGN=CENTER bordercolor="#3399FF"><p><strong><font color="#FFFFCC" face="Arial, Helvetica, sans-serif" size="1">Mucho</font></strong></p></td> 
            </tr> 
            <tr> 
              <form> 
                <td height="16"  NOWRAP bordercolor="#3399FF" BGCOLOR="#FFFF99" ALIGN="left" width="282"><p align="left" class="style14">Aprender a programar computadoras para llevar la contabilidad de una empresa.</p></td> 
                <td width="21" height="16" ALIGN=CENTER bordercolor="#3399FF" bgcolor="#FFFF99" ><p> 
                  <input TYPE="radio" NAME="c3" CHECKED> 
                  </p></td> 
                <td width="21" height="16" ALIGN=CENTER bordercolor="#3399FF" bgcolor="#FFFF99" ><p> 
                  <input TYPE="radio" NAME="c3" > 
                  </p></td> 
                <td width="21" height="16" ALIGN=CENTER bordercolor="#3399FF" bgcolor="#FFFF99" ><p> 
                  <input TYPE="radio" NAME="c3" > 
                  </p></td> 
                <td width="21" height="16" ALIGN=CENTER bordercolor="#3399FF" bgcolor="#FFFF99" ><p> 
                  <input TYPE="radio" NAME="c3" > 
                  </p></td> 
              </form> 
            </tr> 
            <tr> 
              <form> 
                <td height="16"  NOWRAP bordercolor="#3399FF" BGCOLOR="#FFFFCC" ALIGN="left" width="282"><p align="left" class="style14">Aprender a interpretar un instrumento musical</p></td> 
                <td width="21" height="16" ALIGN=CENTER bordercolor="#3399FF" bgcolor="#FFFFCC" ><p> 
                  <input TYPE="radio" NAME="c18" CHECKED> 
                  </p></td> 
                <td width="21" height="16" ALIGN=CENTER bordercolor="#3399FF" bgcolor="#FFFFCC" ><p> 
                  <input TYPE="radio" NAME="c18" > 
                  </p></td> 
                <td width="21" height="16" ALIGN=CENTER bordercolor="#3399FF" bgcolor="#FFFFCC" ><p> 
                  <input TYPE="radio" NAME="c18" > 
                  </p></td> 
                <td width="21" height="16" ALIGN=CENTER bordercolor="#3399FF" bgcolor="#FFFFCC" ><p> 
                  <input TYPE="radio" NAME="c18" > 
                  </p></td> 
              </form> 
            </tr> 
            <tr> 
              <form> 
                <td height="16"  NOWRAP bordercolor="#3399FF" BGCOLOR="#FFFF99" ALIGN="left" width="282"><p align="left" class="style14">Aprender a curar y atender animalitos enfermos.</p></td> 
                <td width="21" height="16" ALIGN=CENTER bordercolor="#3399FF" bgcolor="#FFFF99" ><p> 
                  <input TYPE="radio" NAME="c14" CHECKED> 
                  </p></td> 
                <td width="21" height="16" ALIGN=CENTER bordercolor="#3399FF" bgcolor="#FFFF99" ><p> 
                  <input TYPE="radio" NAME="c14" > 
                  </p></td> 
                <td width="21" height="16" ALIGN=CENTER bordercolor="#3399FF" bgcolor="#FFFF99" ><p> 
                  <input TYPE="radio" NAME="c14" > 
                  </p></td> 
                <td width="21" height="16" ALIGN=CENTER bordercolor="#3399FF" bgcolor="#FFFF99" ><p> 
                  <input TYPE="radio" NAME="c14" > 
                  </p></td> 
              </form> 
            </tr> 
            <tr> 
              <form> 
                <td height="16"  NOWRAP bordercolor="#3399FF" BGCOLOR="#FFFFCC" ALIGN="left" width="282"><p align="left" class="style14">Estudiar los estados financieros de una empresa y saber como se gasto el dinero.</p></td> 
                <td width="21" height="16" ALIGN=CENTER bordercolor="#3399FF" bgcolor="#FFFFCC" ><p> 
                  <input TYPE="radio" NAME="c11" CHECKED> 
                  </p></td> 
                <td width="21" height="16" ALIGN=CENTER bordercolor="#3399FF" bgcolor="#FFFFCC" ><p> 
                  <input TYPE="radio" NAME="c11" > 
                  </p></td> 
                <td width="21" height="16" ALIGN=CENTER bordercolor="#3399FF" bgcolor="#FFFFCC" ><p> 
                  <input TYPE="radio" NAME="c11" > 
                  </p></td> 
                <td width="21" height="16" ALIGN=CENTER bordercolor="#3399FF" bgcolor="#FFFFCC" ><p> 
                  <input TYPE="radio" NAME="c11" > 
                  </p></td> 
              </form> 
            </tr> 
            <tr BGCOLOR="#3399FF"> 
              <td width="282" height="16" ALIGN=LEFT nowrap bordercolor="#3399FF"><p align="left" class="style14"><font color="#FFFFFF">7.-
                En una Universidad yo preferir&iacute;a:</font></p></td> 
              <td width="21" height="16" ALIGN=CENTER bordercolor="#3399FF"><p><strong><font color="#FFFFCC" face="Arial, Helvetica, sans-serif" size="1">Nada</font></strong></p></td> 
              <td width="21" height="16" ALIGN=CENTER bordercolor="#3399FF"><p><strong><font color="#FFFFCC" face="Arial, Helvetica, sans-serif" size="1">Poco</font></strong></p></td> 
              <td width="21" height="16" ALIGN=CENTER bordercolor="#3399FF"><p><strong><font color="#FFFFCC" face="Arial, Helvetica, sans-serif" size="1">Bastante</font></strong></p></td> 
              <td width="21" height="16" ALIGN=CENTER bordercolor="#3399FF"><p><strong><font color="#FFFFCC" face="Arial, Helvetica, sans-serif" size="1">Mucho</font></strong></p></td> 
            </tr> 
            <tr> 
              <form> 
                <td height="16"  NOWRAP bordercolor="#3399FF" BGCOLOR="#FFFF99" ALIGN="left" width="282"><p align="left" class="style14">Investigar para descubrir porque falla un aparato electr&oacute;nico&nbsp;</p></td> 
                <td width="21" height="16" ALIGN=CENTER bordercolor="#3399FF" bgcolor="#FFFF99" ><p> 
                  <input TYPE="radio" NAME="c4" CHECKED> 
                  </p></td> 
                <td width="21" height="16" ALIGN=CENTER bordercolor="#3399FF" bgcolor="#FFFF99" ><p> 
                  <input TYPE="radio" NAME="c4" > 
                  </p></td> 
                <td width="21" height="16" ALIGN=CENTER bordercolor="#3399FF" bgcolor="#FFFF99" ><p> 
                  <input TYPE="radio" NAME="c4" > 
                  </p></td> 
                <td width="21" height="16" ALIGN=CENTER bordercolor="#3399FF" bgcolor="#FFFF99" ><p> 
                  <input TYPE="radio" NAME="c4" > 
                  </p></td> 
              </form> 
            </tr> 
            <tr> 
              <form> 
                <td height="16"  NOWRAP bordercolor="#3399FF" BGCOLOR="#FFFFCC" ALIGN="left" width="282"><p align="left" class="style14">Investigar en composici&oacute;n musical.</p></td> 
                <td width="21" height="16" ALIGN=CENTER bordercolor="#3399FF" bgcolor="#FFFFCC" ><p> 
                  <input TYPE="radio" NAME="c18" CHECKED> 
                  </p></td> 
                <td width="21" height="16" ALIGN=CENTER bordercolor="#3399FF" bgcolor="#FFFFCC" ><p> 
                  <input TYPE="radio" NAME="c18" > 
                  </p></td> 
                <td width="21" height="16" ALIGN=CENTER bordercolor="#3399FF" bgcolor="#FFFFCC" ><p> 
                  <input TYPE="radio" NAME="c18" > 
                  </p></td> 
                <td width="21" height="16" ALIGN=CENTER bordercolor="#3399FF" bgcolor="#FFFFCC" ><p> 
                  <input TYPE="radio" NAME="c18" > 
                  </p></td> 
              </form> 
            </tr> 
            <tr> 
              <form> 
                <td height="16"  NOWRAP bordercolor="#3399FF" BGCOLOR="#FFFF99" ALIGN="left" width="282"><p align="left" class="style14">Investigar en biolog&iacute;a o geolog&iacute;a.</p></td> 
                <td width="21" height="16" ALIGN=CENTER bordercolor="#3399FF" bgcolor="#FFFF99" ><p> 
                  <input TYPE="radio" NAME="c12" CHECKED> 
                  </p></td> 
                <td width="21" height="16" ALIGN=CENTER bordercolor="#3399FF" bgcolor="#FFFF99" ><p> 
                  <input TYPE="radio" NAME="c12" > 
                  </p></td> 
                <td width="21" height="16" ALIGN=CENTER bordercolor="#3399FF" bgcolor="#FFFF99" ><p> 
                  <input TYPE="radio" NAME="c12" > 
                  </p></td> 
                <td width="21" height="16" ALIGN=CENTER bordercolor="#3399FF" bgcolor="#FFFF99" ><p> 
                  <input TYPE="radio" NAME="c12" > 
                  </p></td> 
              </form> 
            </tr> 
            <tr> 
              <form> 
                <td height="16"  NOWRAP bordercolor="#3399FF" BGCOLOR="#FFFFCC" ALIGN="left" width="282"><p align="left" class="style14">Dedicarme a ense&ntilde;ar a los alumnos para que ellos aprendan a organizar su tiempo.</p></td> 
                <td width="21" height="16" ALIGN=CENTER bordercolor="#3399FF" bgcolor="#FFFFCC" ><p> 
                  <input TYPE="radio" NAME="c10" CHECKED> 
                  </p></td> 
                <td width="21" height="16" ALIGN=CENTER bordercolor="#3399FF" bgcolor="#FFFFCC" ><p> 
                  <input TYPE="radio" NAME="c10" > 
                  </p></td> 
                <td width="21" height="16" ALIGN=CENTER bordercolor="#3399FF" bgcolor="#FFFFCC" ><p> 
                  <input TYPE="radio" NAME="c10" > 
                  </p></td> 
                <td width="21" height="16" ALIGN=CENTER bordercolor="#3399FF" bgcolor="#FFFFCC" ><p> 
                  <input TYPE="radio" NAME="c10" > 
                  </p></td> 
              </form> 
            </tr> 
            <tr BGCOLOR="#3399FF"> 
              <td width="282" height="16" ALIGN=LEFT nowrap bordercolor="#3399FF"><p align="left" class="style14"><font color="#FFFFFF">8.-
                De comprarme una enciclopedia de
                consulta, elegir&iacute;a:</font></p></td> 
              <td width="21" height="16" ALIGN=CENTER bordercolor="#3399FF"><p><strong><font color="#FFFFCC" face="Arial, Helvetica, sans-serif" size="1">Nada</font></strong></p></td> 
              <td width="21" height="16" ALIGN=CENTER bordercolor="#3399FF"><p><strong><font color="#FFFFCC" face="Arial, Helvetica, sans-serif" size="1">Poco</font></strong></p></td> 
              <td width="21" height="16" ALIGN=CENTER bordercolor="#3399FF"><p><strong><font color="#FFFFCC" face="Arial, Helvetica, sans-serif" size="1">Bastante</font></strong></p></td> 
              <td width="21" height="16" ALIGN=CENTER bordercolor="#3399FF"><p><strong><font color="#FFFFCC" face="Arial, Helvetica, sans-serif" size="1">Mucho</font></strong></p></td> 
            </tr> 
            <tr> 
              <form> 
                <td height="16"  NOWRAP bordercolor="#3399FF" BGCOLOR="#FFFF99" ALIGN="left" width="282"><p align="left" class="style14">Sobre como administrar mejor el dinero</p></td> 
                <td width="21" height="16" ALIGN=CENTER bordercolor="#3399FF" bgcolor="#FFFF99" ><p> 
                  <input TYPE="radio" NAME="c9" CHECKED> 
                  </p></td> 
                <td width="21" height="16" ALIGN=CENTER bordercolor="#3399FF" bgcolor="#FFFF99" ><p> 
                  <input TYPE="radio" NAME="c9" > 
                  </p></td> 
                <td width="21" height="16" ALIGN=CENTER bordercolor="#3399FF" bgcolor="#FFFF99" ><p> 
                  <input TYPE="radio" NAME="c9" > 
                  </p></td> 
                <td width="21" height="16" ALIGN=CENTER bordercolor="#3399FF" bgcolor="#FFFF99" ><p> 
                  <input TYPE="radio" NAME="c9" > 
                  </p></td> 
              </form> 
            </tr> 
            <tr> 
              <form> 
                <td height="16"  NOWRAP bordercolor="#3399FF" BGCOLOR="#FFFFCC" ALIGN="left" width="282"><p align="left" class="style14">Un tratado de enfermer&iacute;a y primeros auxilios</p></td> 
                <td width="21" height="16" ALIGN=CENTER bordercolor="#3399FF" bgcolor="#FFFFCC" ><p> 
                  <input TYPE="radio" NAME="c21" CHECKED> 
                  </p></td> 
                <td width="21" height="16" ALIGN=CENTER bordercolor="#3399FF" bgcolor="#FFFFCC" ><p> 
                  <input TYPE="radio" NAME="c21" > 
                  </p></td> 
                <td width="21" height="16" ALIGN=CENTER bordercolor="#3399FF" bgcolor="#FFFFCC" ><p> 
                  <input TYPE="radio" NAME="c21" > 
                  </p></td> 
                <td width="21" height="16" ALIGN=CENTER bordercolor="#3399FF" bgcolor="#FFFFCC" ><p> 
                  <input TYPE="radio" NAME="c21" > 
                  </p></td> 
              </form> 
            </tr> 
            <tr> 
              <form> 
                <td height="16"  NOWRAP bordercolor="#3399FF" BGCOLOR="#FFFF99" ALIGN="left" width="282"><p align="left" class="style14">Sobre maquinaria para la industrializaci&oacute;n de alimentos</p></td> 
                <td width="21" height="16" ALIGN=CENTER bordercolor="#3399FF" bgcolor="#FFFF99" ><p> 
                  <input TYPE="radio" NAME="c15" CHECKED> 
                  </p></td> 
                <td width="21" height="16" ALIGN=CENTER bordercolor="#3399FF" bgcolor="#FFFF99" ><p> 
                  <input TYPE="radio" NAME="c15" > 
                  </p></td> 
                <td width="21" height="16" ALIGN=CENTER bordercolor="#3399FF" bgcolor="#FFFF99" ><p> 
                  <input TYPE="radio" NAME="c15" > 
                  </p></td> 
                <td width="21" height="16" ALIGN=CENTER bordercolor="#3399FF" bgcolor="#FFFF99" ><p> 
                  <input TYPE="radio" NAME="c15" > 
                  </p></td> 
              </form> 
            </tr> 
            <tr> 
              <form> 
                <td height="16"  NOWRAP bordercolor="#3399FF" BGCOLOR="#FFFFCC" ALIGN="left" width="282"><p align="left" class="style14">Sobre la situaci&oacute;n de la
                  econom&iacute;a mundial</p></td> 
                <td width="21" height="16" ALIGN=CENTER bordercolor="#3399FF" bgcolor="#FFFFCC" ><p> 
                  <input TYPE="radio" NAME="c10" CHECKED> 
                  </p></td> 
                <td width="21" height="16" ALIGN=CENTER bordercolor="#3399FF" bgcolor="#FFFFCC" ><p> 
                  <input TYPE="radio" NAME="c10" > 
                  </p></td> 
                <td width="21" height="16" ALIGN=CENTER bordercolor="#3399FF" bgcolor="#FFFFCC" ><p> 
                  <input TYPE="radio" NAME="c10" > 
                  </p></td> 
                <td width="21" height="16" ALIGN=CENTER bordercolor="#3399FF" bgcolor="#FFFFCC" ><p> 
                  <input TYPE="radio" NAME="c10" > 
                  </p></td> 
              </form> 
            </tr> 
            <tr BGCOLOR="#3399FF"> 
              <td width="282" height="16" ALIGN=LEFT nowrap bordercolor="#3399FF"><p align="left" class="style14"><font color="#FFFFFF">9.-
                De montar un negocio, pondr&iacute;a:</font></p></td> 
              <td width="21" height="16" ALIGN=CENTER bordercolor="#3399FF"><p><strong><font color="#FFFFCC" face="Arial, Helvetica, sans-serif" size="1">Nada</font></strong></p></td> 
              <td width="21" height="16" ALIGN=CENTER bordercolor="#3399FF"><p><strong><font color="#FFFFCC" face="Arial, Helvetica, sans-serif" size="1">Poco</font></strong></p></td> 
              <td width="21" height="16" ALIGN=CENTER bordercolor="#3399FF"><p><strong><font color="#FFFFCC" face="Arial, Helvetica, sans-serif" size="1">Bastante</font></strong></p></td> 
              <td width="21" height="16" ALIGN=CENTER bordercolor="#3399FF"><p><strong><font color="#FFFFCC" face="Arial, Helvetica, sans-serif" size="1">Mucho</font></strong></p></td> 
            </tr> 
            <tr> 
              <form> 
                <td height="16"  NOWRAP bordercolor="#3399FF" BGCOLOR="#FFFF99" ALIGN="left" width="282"><p align="left" class="style14">Una academia de
                  mec&aacute;nica automotriz</p></td> 
                <td width="21" height="16" ALIGN=CENTER bordercolor="#3399FF" bgcolor="#FFFF99" ><p> 
                  <input TYPE="radio" NAME="c6" CHECKED> 
                  </p></td> 
                <td width="21" height="16" ALIGN=CENTER bordercolor="#3399FF" bgcolor="#FFFF99" ><p> 
                  <input TYPE="radio" NAME="c6" > 
                  </p></td> 
                <td width="21" height="16" ALIGN=CENTER bordercolor="#3399FF" bgcolor="#FFFF99" ><p> 
                  <input TYPE="radio" NAME="c6" > 
                  </p></td> 
                <td width="21" height="16" ALIGN=CENTER bordercolor="#3399FF" bgcolor="#FFFF99" ><p> 
                  <input TYPE="radio" NAME="c6" > 
                  </p></td> 
              </form> 
            </tr> 
            <tr> 
              <form> 
                <td height="16"  NOWRAP bordercolor="#3399FF" BGCOLOR="#FFFFCC" ALIGN="left" width="282"><p align="left" class="style14">Una oficina para la realizaci&oacute;n de tramites legales</p></td> 
                <td width="21" height="16" ALIGN=CENTER bordercolor="#3399FF" bgcolor="#FFFFCC" ><p> 
                  <input TYPE="radio" NAME="c16" CHECKED> 
                  </p></td> 
                <td width="21" height="16" ALIGN=CENTER bordercolor="#3399FF" bgcolor="#FFFFCC" ><p> 
                  <input TYPE="radio" NAME="c16" > 
                  </p></td> 
                <td width="21" height="16" ALIGN=CENTER bordercolor="#3399FF" bgcolor="#FFFFCC" ><p> 
                  <input TYPE="radio" NAME="c16" > 
                  </p></td> 
                <td width="21" height="16" ALIGN=CENTER bordercolor="#3399FF" bgcolor="#FFFFCC" ><p> 
                  <input TYPE="radio" NAME="c16" > 
                  </p></td> 
              </form> 
            </tr> 
            <tr> 
              <form> 
                <td height="16"  NOWRAP bordercolor="#3399FF" BGCOLOR="#FFFF99" ALIGN="left" width="282"><p align="left" class="style14">Un consultorio para medir la presi&oacute;n arterial de las personas</p></td> 
                <td width="21" height="16" ALIGN=CENTER bordercolor="#3399FF" bgcolor="#FFFF99" ><p> 
                  <input TYPE="radio" NAME="c19" CHECKED> 
                  </p></td> 
                <td width="21" height="16" ALIGN=CENTER bordercolor="#3399FF" bgcolor="#FFFF99" ><p> 
                  <input TYPE="radio" NAME="c19" > 
                  </p></td> 
                <td width="21" height="16" ALIGN=CENTER bordercolor="#3399FF" bgcolor="#FFFF99" ><p> 
                  <input TYPE="radio" NAME="c19" > 
                  </p></td> 
                <td width="21" height="16" ALIGN=CENTER bordercolor="#3399FF" bgcolor="#FFFF99" ><p> 
                  <input TYPE="radio" NAME="c19" > 
                  </p></td> 
              </form> 
            </tr> 
            <tr> 
              <form> 
                <td height="16"  NOWRAP bordercolor="#3399FF" BGCOLOR="#FFFFCC" ALIGN="left" width="282"><p align="left" class="style14">Una academia de contabilidad.</p></td> 
                <td width="21" height="16" ALIGN=CENTER bordercolor="#3399FF" bgcolor="#FFFFCC" ><p> 
                  <input TYPE="radio" NAME="c11" CHECKED> 
                  </p></td> 
                <td width="21" height="16" ALIGN=CENTER bordercolor="#3399FF" bgcolor="#FFFFCC" ><p> 
                  <input TYPE="radio" NAME="c11" > 
                  </p></td> 
                <td width="21" height="16" ALIGN=CENTER bordercolor="#3399FF" bgcolor="#FFFFCC" ><p> 
                  <input TYPE="radio" NAME="c11" > 
                  </p></td> 
                <td width="21" height="16" ALIGN=CENTER bordercolor="#3399FF" bgcolor="#FFFFCC" ><p> 
                  <input TYPE="radio" NAME="c11" > 
                  </p></td> 
              </form> 
            </tr> 
            <tr BGCOLOR="#3399FF"> 
                  <tr BGCOLOR="#3399FF"> 
              <td width="282" height="16" ALIGN=LEFT nowrap bordercolor="#3399FF"><p align="left" class="style14"><font color="#FFFFFF">10.-
                De estas profesiones prefiero:</font></p></td> 
              <td width="21" height="16" ALIGN=CENTER bordercolor="#3399FF"><p><strong><font color="#FFFFCC" face="Arial, Helvetica, sans-serif" size="1">Nada</font></strong></p></td> 
              <td width="21" height="16" ALIGN=CENTER bordercolor="#3399FF"><p><strong><font color="#FFFFCC" face="Arial, Helvetica, sans-serif" size="1">Poco</font></strong></p></td> 
              <td width="21" height="16" ALIGN=CENTER bordercolor="#3399FF"><p><strong><font color="#FFFFCC" face="Arial, Helvetica, sans-serif" size="1">Bastante</font></strong></p></td> 
              <td width="21" height="16" ALIGN=CENTER bordercolor="#3399FF"><p><strong><font color="#FFFFCC" face="Arial, Helvetica, sans-serif" size="1">Mucho</font></strong></p></td> 
            </tr> 
            <tr> 
              <form> 
                <td height="16"  NOWRAP bordercolor="#3399FF" BGCOLOR="#FFFF99" ALIGN="left" width="282"><p align="left" class="style14">Odontologo</p></td> 
                <td width="21" height="16" ALIGN=CENTER bordercolor="#3399FF" bgcolor="#FFFF99" ><p align="center"> 
                  <input TYPE="radio" NAME="c20" CHECKED> 
                  </p></td> 
                <td width="21" height="16" ALIGN=CENTER bordercolor="#3399FF" bgcolor="#FFFF99" ><p align="center"> 
                  <input TYPE="radio" NAME="c20" > 
                  </p></td> 
                <td width="21" height="16" ALIGN=CENTER bordercolor="#3399FF" bgcolor="#FFFF99" ><p align="center"> 
                  <input TYPE="radio" NAME="c20" > 
                  </p></td> 
                <td width="21" height="16" ALIGN=CENTER bordercolor="#3399FF" bgcolor="#FFFF99" ><p align="center"> 
                  <input TYPE="radio" NAME="c20" > 
                  </p></td> 
              </form> 
            </tr> 
            <tr> 
              <form> 
                <td height="16"  NOWRAP bordercolor="#3399FF" BGCOLOR="#FFFFCC" ALIGN="left" width="282"><p align="left" class="style14">Ingeniero
                  electromec&aacute;nico</p></td> 
                <td width="21" height="16" ALIGN=CENTER bordercolor="#3399FF" bgcolor="#FFFFCC" ><p align="center"> 
                  <input TYPE="radio" NAME="c5" CHECKED> 
                  </p></td> 
                <td width="21" height="16" ALIGN=CENTER bordercolor="#3399FF" bgcolor="#FFFFCC" ><p align="center"> 
                  <input TYPE="radio" NAME="c5" > 
                  </p></td> 
                <td width="21" height="16" ALIGN=CENTER bordercolor="#3399FF" bgcolor="#FFFFCC" ><p align="center"> 
                  <input TYPE="radio" NAME="c5" > 
                  </p></td> 
                <td width="21" height="16" ALIGN=CENTER bordercolor="#3399FF" bgcolor="#FFFFCC" ><p align="center"> 
                  <input TYPE="radio" NAME="c5" > 
                  </p></td> 
              </form> 
            </tr> 
            <tr> 
              <form> 
                <td height="16"  NOWRAP bordercolor="#3399FF" BGCOLOR="#FFFF99" ALIGN="left" width="282"><p align="left" class="style14">Asesor legal</p></td> 
                <td width="21" height="16" ALIGN=CENTER bordercolor="#3399FF" bgcolor="#FFFF99" ><p align="center"> 
                  <input TYPE="radio" NAME="c16" CHECKED> 
                  </p></td> 
                <td width="21" height="16" ALIGN=CENTER bordercolor="#3399FF" bgcolor="#FFFF99" ><p align="center"> 
                  <input TYPE="radio" NAME="c16" > 
                  </p></td> 
                <td width="21" height="16" ALIGN=CENTER bordercolor="#3399FF" bgcolor="#FFFF99" ><p align="center"> 
                  <input TYPE="radio" NAME="c16" > 
                  </p></td> 
                <td width="21" height="16" ALIGN=CENTER bordercolor="#3399FF" bgcolor="#FFFF99" ><p align="center"> 
                  <input TYPE="radio" NAME="c16" > 
                  </p></td> 
              </form> 
            </tr> 
            <tr> 
              <form> 
                <td height="16"  NOWRAP bordercolor="#3399FF" BGCOLOR="#FFFFCC" ALIGN="left" width="282"><p align="left" class="style14">Agricultor</p></td> 
                <td width="21" height="16" ALIGN=CENTER bordercolor="#3399FF" bgcolor="#FFFFCC" ><p align="center"> 
                  <input TYPE="radio" NAME="c13" CHECKED> 
                  </p></td> 
                <td width="21" height="16" ALIGN=CENTER bordercolor="#3399FF" bgcolor="#FFFFCC" ><p align="center"> 
                  <input TYPE="radio" NAME="c13" > 
                  </p></td> 
                <td width="21" height="16" ALIGN=CENTER bordercolor="#3399FF" bgcolor="#FFFFCC" ><p align="center"> 
                  <input TYPE="radio" NAME="c13" > 
                  </p></td> 
                <td width="21" height="16" ALIGN=CENTER bordercolor="#3399FF" bgcolor="#FFFFCC" ><p align="center"> 
                  <input TYPE="radio" NAME="c13" > 
                  </p></td> 
              </form> 
            </tr> 
<tr><td colspan="5"><div align="center">
            <input TYPE="button" NAME=boton VALUE="Resultado del test" onClick="Cont()";></div></tr></td>
          </table>         
              </div> 
			  
                <h1>&nbsp;</h1>
      </div>
    		 
            
    	<div class="clear"></div>
    </div>   
    
</div>         
                
    <div class="clear"></div>
	</div>
</div>
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
                <p class="favorites">Forma correcta de crear tu curriculum Vitae, qu&eacute; hacer y qu&eacute; se debe evitar...<a href="Tips_CVredaccion.php"> ver m&aacute;s</a> </p>           
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
                    <li><a href="curri_pas1.html">Sube tu curriculum </a></li>
                    <li><a href="Tips2.php">Trucos y consejos </a></li>
                    <li><a href="Contactanos.php">Contact&aacute;ctanos</a></li>
                    </ul>
                </div> 
      </div> <!--End of footer_tab3-->      
        
        
        
             
        
    <div class="clear"></div>
	</div> <!--End of footer_content-->
</div>

</body>
</html>