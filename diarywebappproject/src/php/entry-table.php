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
    $sql = "CREATE TABLE diary_entry (
    entryID INT PRIMARY KEY AUTO_INCREMENT,
    title VARCHAR(100) NOT NULL,
    category VARCHAR (20) NOT NULL,
    entry_date VARCHAR(50) NOT NULL,
    entry_content LONGTEXT NOT NULL,
    text_color VARCHAR(20) NOT NULL,
    bg_color VARCHAR(20) NOT NULL
    )";

    if ($conn->query($sql) === TRUE) {
        echo "Table diary_entry created successfully";
    } else {
        echo "Error creating table: " . $conn->error;
    }

    $conn->close();
?>
