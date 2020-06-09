<?php
    $servername = "localhost";
    $username = "xstang";
    $password = "adamek5198";
    $dbname = "SKUSKA";

    $conn = new mysqli($servername, $username, $password, $dbname);
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    mysqli_set_charset($conn, "UTF8");
?>