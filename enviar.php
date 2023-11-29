<?php

$enviarPara = "jimena.merchan@davinci.edu.ar";
$asunto = "Carta natal";
$aDonde = "enviado.html";
$nombre = $_POST['nombre'];
$nacimiento = $_POST['nacimiento'];
$hora = $_POST['hora'];
$localidad = $_POST['localidad'];

mail($enviarPara, $asunto);
header('Location: ', $aDonde);
?>