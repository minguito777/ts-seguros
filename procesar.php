<!-- <?php
// Definir variables para enviar correo electrónico
// $destinatario = "mingomorelli67@gmail.com";
// $remitente = $_POST['correo'];
// $asunto = "Nuevo mensaje del formulario de contacto";
// $mensaje = "Nombre: " . $_POST['nombre'] . "\r\nCorreo electrónico: " . $_POST['correo'] . "\r\nMensaje: " . $_POST['mensaje'];


// ini_set("SMTP", "smtp.gmail.com");
// ini_set("smtp_port", "587");
// // Enviar correo electrónico
// if (mail($destinatario, $asunto, $mensaje, "From: $remitente")) {
//     echo "Correo electrónico enviado correctamente";
// } else {
//     echo "Error al enviar correo electrónico";
// }
// ?> -->
<!-- <?php


        // $to = "destinatario@example.com";
        // $subject = "Correo de prueba";
        // $message = "Este es un correo de prueba enviado desde PHP";
        // $headers = "From: remitente@example.com";

        // mail($to, $subject, $message, $headers);
        ?> -->



<?php
$to = "mingomorelli67@gmail.com";
$subject = $_POST['correo'];
$message = $_POST['mensaje'];
$headers = $_POST['nombre'];

$smtp_server = "smtp.gmail.com";
$smtp_port = 587;

// Conectar al servidor SMTP
$smtp_conn = fsockopen($smtp_server, $smtp_port, $errno, $errstr, 30);

if (!$smtp_conn) {
  echo "Error al conectar con el servidor SMTP: " . $errstr;
  exit;
}

// Esperar la respuesta del servidor SMTP
$smtp_response = fgets($smtp_conn, 512);

// Enviar el comando EHLO para iniciar la comunicación
fputs($smtp_conn, "EHLO example.com\r\n");
$smtp_response = fgets($smtp_conn, 512);

// Enviar el comando STARTTLS para iniciar la conexión segura
fputs($smtp_conn, "STARTTLS\r\n");
$smtp_response = fgets($smtp_conn, 512);

// Iniciar la conexión segura utilizando STARTTLS
stream_socket_enable_crypto($smtp_conn, true, STREAM_CRYPTO_METHOD_TLS_CLIENT);

// Enviar el correo electrónico
if (mail($to, $subject, $message, $headers)) {
  echo "Correo electrónico enviado correctamente";
} else {
  echo "Error al enviar correo electrónico";
}

// Cerrar la conexión SMTP
fputs($smtp_conn, "QUIT\r\n");
fclose($smtp_conn);
?>