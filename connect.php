<?php
	$username = getenv('OPENSHIFT_MYSQL_DB_USERNAME');
	$password = getenv('OPENSHIFT_MYSQL_DB_PASSWORD');
	$host = getenv('OPENSHIFT_MYSQL_DB_HOST');
	echo $username." | ".$password." | ".$host;
	$conn = new PDO('mysql:host=$host;dbname=results', $username, $password);
	if($conn) echo "Yup! Connected to DB!";
?>
