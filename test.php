<?php
try {

	require_once 'db-conf';
	$conn = newPDO();
	$stmt = $conn->prepare("INSERT INTO cgpa_cet VALUES(null, 1301106071, 'Prayash M', 'Information Tech', 8.3)");
	$stmt->excute();

	 while($row = $stmt->fetch()) {
                        print_r($row);
} catch(PDOException $e) {
	echo 'ERROR: '.$e->getMessage();
}
?>
