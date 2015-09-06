<?php
	define('DB_HOST', getenv('OPENSHIFT_MYSQL_DB_HOST'));
        define('DB_USER',getenv('OPENSHIFT_MYSQL_DB_USERNAME'));
        define('DB_PASS',getenv('OPENSHIFT_MYSQL_DB_PASSWORD'));
        define('DB_BASE','results');
        define('DB_PORT',getenv('OPENSHIFT_MYSQL_DB_PORT'));
	echo "Included";
	function newPDO(){
		$dsn = 'mysql:dbname='.DB_BASE.';host='.DB_HOST.';port='.DB_PORT;
		$dbh = new PDO($dsn, DB_USER, DB_PASS);
		$dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	    	echo "new PDO()";
		return $dbh;
	}

	try {
		$conn =  newPDO();
		echo "Connected to DB!";
		$stmt = $conn->prepare("SELECT * FROM cgpa_cet)");
	        $stmt->excute();
	        echo "Excecuted";
	        while($row = $stmt->fetch()) {
	                print_r($row);

	}
	catch(PDOException $e) {
		echo $e->getMessage();
	}
?>
