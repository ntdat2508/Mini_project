<?php
    $conn = new mysqli("localhost", "root", "ntDat123@");

    //Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    echo "Connected successfully";
?>