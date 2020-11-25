<?php
	$srvr = 'LOCALHOST';
	$uName = 'root';
	$pass = '';
	$database = 'furniture';


	$p = new PDO('mysql:dbname=' . $database . ';host=' . $srvr, $uName, $pass, [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);
?>