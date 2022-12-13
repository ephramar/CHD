<?php

function getPatientEncounter() {
    include 'connection.php';

    if (!$connection) die("Connection failed: " . mysqli_connect_error());

    $sql = "SELECT COUNT(*) AS total FROM tbl_patients WHERE pt_encounter = 'Yes'";

    $result = mysqli_query($connection, $sql);

    $row = mysqli_fetch_assoc($result);

    $sum = $row['total'];

    echo $sum;

    mysqli_close($connection);
}

function getPatientVaccinated() {
    include 'connection.php';

    if (!$connection) die("Connection failed: " . mysqli_connect_error());

    $sql = "SELECT COUNT(*) AS total FROM tbl_patients WHERE pt_vaccine = 'Yes'";

    $result = mysqli_query($connection, $sql);

    $row = mysqli_fetch_assoc($result);

    $sum = $row['total'];

    echo $sum;

    mysqli_close($connection);
}

function getPatientFever() {
    include 'connection.php';

    if (!$connection) die("Connection failed: " . mysqli_connect_error());

    $sql = "SELECT COUNT(*) AS total FROM tbl_patients WHERE pt_diagnosis > '35.5'";

    $result = mysqli_query($connection, $sql);

    $row = mysqli_fetch_assoc($result);

    $sum = $row['total'];

    echo $sum;

    mysqli_close($connection);
}

function getPatientFever() {
    include 'connection.php';

    if (!$connection) die("Connection failed: " . mysqli_connect_error());

    $sql = "SELECT COUNT(*) AS total FROM tbl_patients WHERE pt_diagnosis > '35.5'";

    $result = mysqli_query($connection, $sql);

    $row = mysqli_fetch_assoc($result);

    $sum = $row['total'];

    echo $sum;

    mysqli_close($connection);
}

?>

