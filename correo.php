<?php

$destino= "barajad89@gmail.com";

$nombre= $_POST["nombre"];

$email= $_POST["email"];

$telefono= $_POST["telefono"];

$comentarios= $_POST["comantarios"];

$correo= "Nombre: " . $nombre . "\n\nE-Mail: " . $email . "\n\nTelefono: " . $telefono . "\n\nMensaje: " . $comentarios;



mail($destino, "La Bolsita Pagina Web", $correo);
header("Location:correo.html");

?>