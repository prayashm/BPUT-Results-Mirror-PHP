<?php
try {

	require_once 'db-conf';
	$conn = newPDO();
	$stmt = $conn->prepare("SELECT * FROM cgpa_cet");
	$stmt->excute();

} catch(PDOException $e) {
	echo 'ERROR: '.$e->getMessage();
}
?>
