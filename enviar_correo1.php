<?php
require_once('./PHPMailerByEndeos/config.php');




// Recibe los datos del formulario
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$email = $_POST['email'];
$telefono = $_POST['telefono'];
$mensaje = $_POST['mensaje'];

// Configura los parámetros del correo electrónico
$para = 'mingomorelli67@gmail.com';
$asunto = 'Nuevo mensaje de '.$nombre.' '.$apellido;
$contenido = 'Nombre: '.$nombre.'<br>Email: '.$email.'<br>Mensaje: '.$mensaje.'<br>telefono: '.$telefono;


 // Configura el correo electrónico
 $mail->setFrom('mingomorelli67@gmail.com', 'Mingo');
 $mail->addAddress($para);
 $mail->addReplyTo($email, $nombre);

 $mail->isHTML(true);
 $mail->Subject = $asunto;
 $mail->Body    = $contenido;

 // Envia el correo electrónico
 $mail->send();
 echo 'Mensaje enviado correctamente';
 header('location: cotizar.php');










?>