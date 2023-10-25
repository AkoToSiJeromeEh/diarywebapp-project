<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "twoheartsmemoir";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // sql to create table
    $sql = "CREATE TABLE user (
    UserID INT PRIMARY KEY AUTO_INCREMENT,
    Username VARCHAR(100) NOT NULL,
    Email VARCHAR (20) NOT NULL,
    Password VARCHAR(50) NOT NULL
    )";

    if ($conn->query($sql) === TRUE) {
        echo "Table diary_entry created successfully";
    } else {
        echo "Error creating table: " . $conn->error;
    }

    $conn->close();
?>
