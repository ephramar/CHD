<?php

    include 'connection.php';

    // Check the connection
    if (!$connection) die("Connection failed: " . mysqli_connect_error());

    $sql = "DELETE FROM tbl_patients WHERE pt_id = " . $_POST['pt_id'];

    if (mysqli_query($connection, $sql)) {
        $success = true;
    } else {
        $success = false;
    };

    echo $success;     

    mysqli_close($connection);

?>