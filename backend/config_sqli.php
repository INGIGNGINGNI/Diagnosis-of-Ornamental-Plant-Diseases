<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "pds_db";
    // Create connection
    $conn = mysqli_connect($servername, $username, $password, $dbname);
    // Check connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
    
    mysqli_query($conn, "SET NAMES UTF8");
?>