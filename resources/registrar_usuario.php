<?php

$nom = $_POST['nombre'];
$ape = $_POST['apellido'];
$emp = $_POST['empresa'];
$tel = $_POST['telefono'];
$ema = strtolower(stripslashes($_POST['email']));
$psd = stripslashes($_POST['password']);

// Hash password with salt and user specific information
$salt1 = '6qxeIwkqznbnXoQlSDkE';
$salt2 = 'iyGL8k0R';
$password = md5( $salt1 . $psd . $ema . $salt2 );

// Armar correo a enviar
$to = "Christiam Mendoza <mail@christiam.me>";
$headers  = "From: Registro de Usuario <registration@ecosistemane.com>\n";
$headers .= "Cc: Christiam Mendoza < christiam@qodam.com >\n";
$headers .= "X-Sender: Registro de Usuario < registration@ecosistemane.com >\n";
$headers .= 'X-Mailer: PHP/' . phpversion() . "\n";
$headers .= "X-Priority: 1\n"; // Urgent message!
$headers .= "Return-Path: registration@ecosistemane.com\n"; // Return path for errors
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: text/html; charset=iso-8859-1\n";

$subject = "Registro de Nuevo Usuario";

$txt = "Un nuevo usuario se ha registrado en al Mapeo del Ecosistema Nacional Emprendedor. La información del usuario es la siguiente: \n";
$txt .= "   Nombre: ". $nom . " " . $ape . "\n";
$txt .= "   Empresa: ". $emp ."\n";
$txt .= "   Teléfono: ". $tel ."\n";
$txt .= "   Correo-e: ". $ema ."\n";
$txt .= "   Password string: ". $password ."\n";
$txt .= "Registra al usuario utilizando el siguiente código:\n";
$txt .= "INSERT INTO users (username, password, usertype, nombre, apellido, empresa, tel) VALUES (".$ema.", ".$password.", 3, ".$nom.", ".$ape.", ".$emp.", ".$tel.");" . "\n";
$txt .= "\nRegistra al usuario a la brevedad.\n";
$txt .= "\n¡Mucho éxito!\n- Mapeo del Ecosistema Nacional Emprendedor";

$txt = wordwrap($txt, 70);

mail($to,$subject,$txt,$headers);

header('location: http://www.ecosistemane.com/pages/confirmacion.html');
