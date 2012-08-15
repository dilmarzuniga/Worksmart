<?php



function TextoAleatorio($long) {

    $caracteres  ="1234567890abcdefghijklmnopqrstuvw";

    $caracteres .="xyzABCDEFGHIJKLMNOPQRSTUVWXYZ";

    $caracteres .="+*!@$#%&/()=?¿}][{";

    for($i=0;$i<$long;$i++) {

         $cars .= $caracteres{rand(0,strlen($caracteres))}; //

    }

    return $cars;
echo TextoAleatorio(6);
}

session_start(); //iniciamos sesiones

$_SESSION["captcha"] = TextoAleatorio(6); //guardamos en la sesion "captcha" la cadena

$captcha = imagecreatefrompng("ale.png");

$color = imagecolorallocate($captcha, 31, 118, 92);

imagestring($captcha, 5, 16, 7, $_SESSION["captcha"], $color);

header("Content-type: image/png");

imagepng($captcha); // genero la imagen gif con los caracteres



?>