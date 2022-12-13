<?php
session_start();
if(isset($_SESSION['uid'])) {
    header("location: dashboard.php");
    die();
}

include './api/connection.php';

if (!$connection) {
	die('Connection failed: ' . mysqli_connect_error());
}

if (isset($_POST['username']) && isset($_POST['password'])) {
	$query = "SELECT * FROM tbl_users WHERE uun = '".$_POST['username']."' AND upw = '".$_POST['password']."'";

    $result = mysqli_query($connection, $query);
    $data = mysqli_fetch_assoc($result);
    
    if($data) {
        $_SESSION['uid'] = $data['uid'];
        header("location: dashboard.php");

        die();
    }
}

header("location: index.php");
?>