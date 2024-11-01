<?php
    //connection oject
    con mysqli("localhost","Admin23","con@34#!",vehicle_db);

    //check for errors
    if($con->connect_error){
        die("Connection failed: ".$con->connect_error);
    }
    else{
        echo "Connected Successfully";
    }
?>