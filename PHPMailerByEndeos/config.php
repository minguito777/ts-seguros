<?php

/*
*
* Endeos, Working for You
* blog.endeos.com
*
*/

require_once('./PHPMailerByEndeos/PHPMailerAutoload.php');


$mail = new PHPMailer;

//$mail->SMTPDebug    = 3;

$mail->IsSMTP();
$mail->Host = 'smtp.gmail.com';   /*Servidor SMTP*/																		
$mail->SMTPSecure = 'ssl';   /*Protocolo SSL o TLS*/
$mail->Port = 587;   /*Puerto de conexión al servidor SMTP*/
$mail->SMTPAuth = true;   /*Para habilitar o deshabilitar la autenticación*/
$mail->Username = 'mingomorelli67@gmail.com';   /*Usuario, normalmente el correo electrónico*/
$mail->Password = 'Reddeadredemption2';   /*Tu contraseña*/
$mail->From = 'mingomorelli67@gmail.com';   /*Correo electrónico que estamos autenticando*/
$mail->FromName = 'TS seguros';   /*Puedes poner tu nombre, el de tu empresa, nombre de tu web, etc.*/
$mail->CharSet = 'UTF-8';   /*Codificación del mensaje*/

?>