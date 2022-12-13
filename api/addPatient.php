<?php

    include 'connection.php';

    // Check the connection
    if (!$connection) die("Connection failed: " . mysqli_connect_error());

    $sql = "INSERT INTO tbl_patients (pt_name, pt_gender, pt_dob, pt_mobile, pt_temp, pt_diagnosis, pt_encounter, pt_vaccine, pt_nationality, pt_data_creation, pt_data_update)" . 
            "VALUES ('". $_POST['pt_name'] ."', " .
                    "'". $_POST['pt_gender'] ."', " .
                    "'". $_POST['pt_dob'] ."', " .
                    "'". $_POST['pt_mobile'] ."', " .
                    "'". $_POST['pt_temp'] ."', " .
                    "'". $_POST['pt_diagnosis'] ."', " .
                    "'". $_POST['pt_encounter'] ."', " .
                    "'". $_POST['pt_vaccine'] ."', " .
                    "'". $_POST['pt_nationality'] ."', " .
                    "'". $_POST['pt_data_creation'] ."', " .
                    "'". $_POST['pt_data_update'] ."')";
    
    mysqli_query($connection, $sql);
    
    echo mysqli_insert_id($connection);

    mysqli_close($connection);
    
?>