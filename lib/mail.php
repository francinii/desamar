<?php
$valor = $_POST['formIndex'];
$destinatario = "servicioalcliente@desamarcr.com";
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
if ($valor == 1) {
	echo "<script>
                alert('Mensaje Enviado');
                window.location= 'http://desamarcr.com/#contactenos'
    </script>";
}
else{
echo "<script>
                alert('Mensaje Enviado');
                window.location= 'http://desamarcr.com/#contactenos'
    </script>";
}
?> 