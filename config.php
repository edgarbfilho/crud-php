<?php
$dsn = "mysql:dbname=controleusuarios;host=localhost";
$dbuser = "root";
$dbpass = "123";

try {
		$pdo = new PDO($dsn, $dbuser, $dbpass);    
	}	catch (PDOException $e) {
    	echo "Falhou a conexão: " . $e->getMessage();
	}
?>