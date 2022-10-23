<?php
$nombre = $_POST['Nombres'];
$correo = $_POST['Correo'];
$telefono = $_POST['Telefono'];
$asunto = $_POST['Asunto'];
$mensaje = $_POST['Mensaje'];


/*$con = mysqli_connect("localhost","tu_usuario_de_basededatos_de_localhost",
" tu_contraseña_de_basededatos_de_localhost","tu_basededatos_de_localhost");*/


   
	$mensaje = "Nombre: ".$nombre."<br> Email: $correo<br> Mensaje:".$_POST['Mensaje'];


	if(mail('roviedo@santisimosalvador.edu.pe', $asunto, $mensaje)){
		echo "Correo enviado";
	}

?>