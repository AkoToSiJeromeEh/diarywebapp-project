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
    
    $ID = $_GET['id'];
    $sql = "DELETE FROM diary_entry WHERE diaryID = '$ID'";

    if ($conn -> query($sql) === TRUE){
        header("Location:../pages/allentry.php");
        
    }else{
        echo "Error deleting record : " . $conn->error;
    }
?>