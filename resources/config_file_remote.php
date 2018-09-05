<?php

// iPage host details
$host="itsarumorcom.ipagemysql.com"; // Host name
$DB_user="yoyuu_pactiv"; // Mysql username
$DB_password="95UXOvIvnYd5"; // Mysql password
$DB_name="jaguar"; // Database name

// Connect
try {
    $DB_connection = new PDO('mysql:host='.$host.';dbname='.$DB_name.';charset=utf8', $DB_user, $DB_password);
	$DB_connection->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
	$DB_connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    print "ERROR: " . $e->getMessage() . "<br/>";
    die();
}

?>
