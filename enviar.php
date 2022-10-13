<?php
$destino = "joelarancibia5@gmai.com"
$nombre = $_POST[*Nombre*];
$correo = $_POST[*correo*];
$telefono = $_POST[*telefono*];
$razon = $_POST[*razon*];
$mensaje = $_POST[*mensaje*];
$contenido = "nombre: " . $nombre . "\nCorreo: " . $correo . "\nTelefono: " . $telefono . "\nmensaje: " . $mensaje;
mail($destino, $razon, $contenido);


?>