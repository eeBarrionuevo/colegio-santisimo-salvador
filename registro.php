<?php
$nombre = $_POST['Nombre'];
$correo = $_POST['Correo'];
$telefono = $_POST['Telefono'];
$asunto = $_POST['Asunto'];
$mensaje = $_POST['Mensaje'];
$fecha = date('d/m/Y', time());

$con = mysqli_connect("localhost","tu_usuario_de_basededatos_de_localhost",
" tu_contraseña_de_basededatos_de_localhost","tu_basededatos_de_localhost");

$header = 'From: ' . $correo . " \r\n";
$header .= "X-Mailer: PHP/" . phpversion() . " \r\n";
$header .= "Mime-Version: 1.0 \r\n";
$header .= "Content-Type: text/plain";

$message = "Este mensaje fue enviado por: " . $nombre . " \r\n";
$message .= "Su e-mail es: " . $correo . " \r\n";
$message .= "Teléfono de contacto: " . $telefono . " \r\n";
$message .= "Mensaje: " . $_POST['message'] . " \r\n";
$message .= "Enviado el: " . date('d/m/Y', time());

$para = 'roviedo@santisimosalvador.edu.pe';
$asunto = 'Mensaje de... (Escribe como quieres que se vea el remitente de tu correo)';

mail($para, $asunto, utf8_decode($message), $header);
?>