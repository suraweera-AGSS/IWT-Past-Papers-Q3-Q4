<?php
    //import database configuration
    include 'config.php';

    //capture user inputs
    $name = $_POST["cusName"];
    $phone = $_POST["pNo"];
    $email = $_POST["email"];
    $address = $_POST["address"];
    $vehicleType = $_POST["vType"];
    $airCondition = $_POST["airCondition"];
    $startDate = $_POST["startDate"];
    $endDate = $_POST["endDate"];

    //insert data into the database
    $sql = "INSERT INTO vehicle_booking(Name, Phone, Email, address, vehicleType, airCondition, startDate, endDate)
            VALUES($name, $phone, $email, $address, $vehicleType, $airCondition, $startDate, $endDate)";

    //check if the data is inserted successfully
    if($con->quary($sql))
    {
        echo "Data Inserted Successfully";
    }
    else
    {
        echo "Error: .$con->error"
    }

    //close the connection
    $con->close();
?>