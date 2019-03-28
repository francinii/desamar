<?php
$valor = $_POST['formIndex'];
$destinatario = "ajcg1995@hotmail.com";
$nombre = $_POST['nombre'];
$mensaje = $_POST['mensaje'];
$correo = $_POST['correo'];
$telefono  = $_POST['telefono'];
$contenidoformulario = "Detalle del Formulario:\n\n";
$contenidoformulario .= "Nombre: ". $nombre."\n";
$contenidoformulario .= "Telefono: ". $telefono."\n";
$contenidoformulario .= "Correo: ". $correo."\n";
$contenidoformulario .= "Mensaje: \n". $mensaje."\n";
mail($destinatario,$nombre,$contenidoformulario);
echo'<script type="text/javascript">alert("Mensaje Enviado") </script>';
if ($valor == 1) {
	header('Location: http://desamarcr.com/');
}
else{

	header('Location: http://desamarcr.com/');
}




?> 