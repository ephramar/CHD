<?php

	include 'connection.php';

	if (!$connection) {
		die('Connection failed: ' . mysqli_connect_error());
	}

	$query = "SELECT * FROM tbl_patients ORDER BY pt_data_creation DESC";

	if (isset($_GET['keyword'])) {
		$query = "SELECT * FROM tbl_patients WHERE tbl_patients LIKE '". $_GET['keyword'] ."%'";
	}

	$result = mysqli_query($connection, $query);

	$patients = array();

	while ($row = mysqli_fetch_assoc(($result)) {
		$patients[] = $row;
	}

	header('Content-type: application/json');
	echo json_encode($patients);

	mysqli_close($connection);

?>