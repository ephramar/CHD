<?php

    include 'connection.php';

    // Check the connection
    if (!$connection) die("Connection failed: " . mysqli_connect_error());
    
    $sql = "UPDATE tbl_patients SET " . 
            "pt_name = '". $_POST['patientName'] ."', " .
            "pt_gender = '". $_POST['patientGender'] ."', " .
            "pt_dob = '". $_POST['patientBirthday'] ."', " .
            "pt_mobile = '". $_POST['patientMobile'] ."', " .
            "pt_temp = '". $_POST['patientTemp'] ."', " .
            "pt_diagnosis = '". $_POST['patientDiagnosis'] ."' " .
            "pt_encounter = '". $_POST['patientEncounter'] ."' " .
            "pt_vaccine = '". $_POST['patientVaccine'] ."' " .
            "pt_nationality = '". $_POST['patientNationality'] ."' " .


            "WHERE id = ". $_POST['patientID'];

    if (mysqli_query($connection, $sql)) {
        $success = true;
    } else {
        $success = false;
    };

    echo $success;     

    mysqli_close($connection);
    
?>