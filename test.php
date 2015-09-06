<?php
try {

	require_once 'db-conf';
	$conn = newPDO();
	$stmt = $conn->prepare("SELECT * FROM cgpa_cet)");
	$stmt->excute();

	 while($row = $stmt->fetch()) {
                        print_r($row);
} catch(PDOException $e) {
	echo 'ERROR: '.$e->getMessage();
}
?>
