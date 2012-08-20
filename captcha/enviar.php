<?php

session_start();

if($_POST["enviado"]==1){

        if($_POST["captcha"]==$_SESSION["captcha"])
		{ /* comparamos si el captcha  enviado por el usuario es igual al generado y almacenado en la sesión */
               echo "Eres un humano!";
        }
		else
		{

               echo "Eres un Bot!";
        }
}

?>