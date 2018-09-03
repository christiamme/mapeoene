<?php

session_start();

// Para propósito de pruebas
$_SESSION['usuarioene'] = 'tester';
$_SESSION['nivelene'] = '1';

error_reporting(E_ALL);
ini_set('display_errors', '1');

// Send to home if session does not exist
if (!$_SESSION['usuarioene'] or !$_SESSION['nivelene']) {
    header("location:../login/login.php");
}

?>
