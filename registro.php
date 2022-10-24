<?php

$conex = mysqli_connect("localhost","santisi1","S4lv4d0r_2022_WEB","santisi1_contactoBD"); 

if (isset($_POST['enviar'])) {
    if (strlen($_POST['Nombres']) >= 1 && 
        strlen($_POST['Correo']) >= 1 && 
        strlen($_POST['Telefono']) >= 1 && 
        strlen($_POST['Asunto']) >= 1) && 
        strlen($_POST['Mensaje']) >= 1 {

	    $nombre = trim($_POST['Nombres']);
	    $correo = trim($_POST['Correo']);
        $telefono = trim($_POST['Telefono']);
        $asunto = trim($_POST['Asunto']);
        $mensaje = trim($_POST['Mensaje']);
	    $fechareg = date("d/m/y");

	    $consulta = "INSERT INTO contacto(nombre, correo, telefono, asunto, mensaje, fecha) 
        VALUES ('$nombre','$correo','$telefono','$asunto','$mensaje',$fechareg)";
	    
        $resultado = mysqli_query($conex,$consulta);
	    
    }
}

header("Location:contacto.html");

?>