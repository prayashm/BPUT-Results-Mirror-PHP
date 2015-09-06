<?php
	$username = getenv('OPENSHIFT_MYSQL_DB_USERNAME');
	$password = getenv('OPENSHIFT_MYSQL_DB_PASSWORD');
	$host = getenv('OPENSHIFT_MYSQL_DB_HOST');
	$port = getenv('OPENSHIFT_MYSQL_DB_PORT');
	try {
		$conn = new PDO('mysql:host=$host:$port;dbname=results', $username, $password);
		echo "Connected to Database!";
	}
	catch(PDOException $e)	{
		echo 'ERROR: '.$e->getMessage();
	}
?>
