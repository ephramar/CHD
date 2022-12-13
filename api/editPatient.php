<?php

    include 'connection.php';

    // Check the connection
    if (!$connection) die("Connection failed: " . mysqli_connect_error());
    
    $sql = "UPDATE tbl_patients SET " . 
            "pt_name = '". $_POST['patientName'] ."', " .
            "pt_gender = '". $_POST['PatientGender'] ."', " .
            "pt_dob = '". $_POST['PatientBirthday'] ."', " .
            "pt_mobile = '". $_POST['PatientMobile'] ."', " .
            "pt_temp = '". $_POST['PatientTemp'] ."', " .
            "pt_diagnosis = '". $_POST['PatientDiagnosis'] ."' " .
            "pt_encounter = '". $_POST['PatientEncounter'] ."' " .
            "pt_vaccine = '". $_POST['PatientVaccine'] ."' " .
            "pt_nationality = '". $_POST['PatientNationality'] ."' " .


            "WHERE id = ". $_POST['id'];

    if (mysqli_query($connection, $sql)) {
        $success = true;
    } else {
        $success = false;
    };

    echo $success;     

    mysqli_close($connection);
    
?>