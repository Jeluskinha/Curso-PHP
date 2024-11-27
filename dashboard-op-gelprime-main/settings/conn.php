<?php

header('Content-Type: text/html; charset=Latin1_General_CI_AS');

try {
	$dsn = "odbc:Driver={ODBC Driver 17 for SQL Server};Server=192.168.12.6;Database=SATKGELPRIME";
	$username = 'user_app_relatorios';
	$password = '@lg0r1tm0@';

	$pdo = new PDO($dsn, $username, $password);
	$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	// $pdo->setAttribute(PDO::SQLSRV_ATTR_ENCODING, PDO::SQLSRV_ENCODING_UTF8);
} catch (Exception $e) {
	echo $e;
	die();
}
