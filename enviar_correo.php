<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require './PHPMailer-master/src/Exception.php';
require './PHPMailer-master/src/PHPMailer.php';
require './PHPMailer-master/src/SMTP.php';


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

// Crea una instancia de PHPMailer
$mail = new PHPMailer(true);

try {
    // Configura el servidor SMTP
   
    $mail->isSMTP();
    $mail->Host = "smtp.gmail.com";
    $mail->SMTPAuth = true;
    $mail->Username = 'mingomorelli67@gmail.com';
    $mail->Password = 'Reddeadredemption2';
    $mail->SMTPSecure = 'tls';
    $mail->Port = 587;

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
    header('location: index.html');
    
} catch (Exception $e) {
    echo 'No se pudo enviar el mensaje. Error: ', $mail->ErrorInfo;
}

?>