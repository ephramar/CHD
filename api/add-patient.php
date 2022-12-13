<?php

    include 'connection.php';

    // Check the connection
    if (!$connection) die("Connection failed: " . mysqli_connect_error());

    $sql = "INSERT INTO tbl_patients (pt_name, pt_gender, pt_dob, pt_mobile, pt_temp, pt_diagnosis, pt_encounter, pt_vaccine, pt_nationality)" . 
            "VALUES ('". $_POST['patientName'] ."', " .
                    "'". $_POST['patientGender'] ."', " .
                    "'". $_POST['patientBirthday'] ."', " .
                    "'". $_POST['patientMobile'] ."', " .
                    "'". $_POST['patientTemp'] ."', " .
                    "'". $_POST['patientDiagnosis'] ."', " .
                    "'". $_POST['patientEncounter'] ."', " .
                    "'". $_POST['patientVaccine'] ."', " .
                    "'". $_POST['patientNationality'] ."')";
    
    mysqli_query($connection, $sql);
    
    echo mysqli_insert_id($connection);

    mysqli_close($connection);
    
?>