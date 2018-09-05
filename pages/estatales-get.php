<?php

session_start();
error_reporting(E_ALL);
ini_set('display_errors', '1');
require_once("../resources/config_file.php");

if ( isset($_SESSION['usuarioene']) && isset($_SESSION['nivelene']) ) {

    // Search in database

    // To protect MySQL injection, create parametrized query
    // $datosEstatales = $DB_connection -> prepare('SET SQL_BIG_SELECTS=1');
    // $datosEstatales -> execute();
    $datosEstatales = $DB_connection -> prepare('SELECT * FROM `estatales` WHERE corto=:estado');

    // Execute query
    $datosEstatales -> execute(
        array( 'estado' =>  $_POST['estado'] )
    );

    // Unpack query content
    $data = $datosEstatales -> fetchAll();
    $data[0]['poblacion'] = number_format($data[0]['poblacion']);
    $data[0]['es_pob'] = number_format($data[0]['es_pob']);
    $data[0]['es_prof'] = number_format($data[0]['es_prof']);
    $data[0]['es_esc'] = number_format($data[0]['es_esc']);
    $data[0]['ems_pob'] = number_format($data[0]['ems_pob']);
    $data[0]['ems_prof'] = number_format($data[0]['ems_prof']);
    $data[0]['ems_esc'] = number_format($data[0]['ems_esc']);

    //build the JSON array for return
    $json = array(
            $data
        );
    echo json_encode($json);

} else {
    header("location: login.html");
}

?>
