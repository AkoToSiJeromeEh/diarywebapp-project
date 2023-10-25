<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Records</title>
</head>
<body>
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

    $diaryID = $_GET['id'];
    $title = $_GET["title-input"];	
    $category = $_GET["category-input"];
    $date = $_GET["date-input"];
    $content = $_GET["textarea-input"];
    $textcolor = $_GET["textcolor-input"];
    $bgcolor = $_GET["bgcolor-input"];

    $content = $conn->real_escape_string($content);

    $edit = mysqli_query($conn, "UPDATE diary_entry SET  
        title ='$title', 
        category='$category',
        entry_date ='$date',
        entry_content='$content',
        text_color ='$textcolor',
        bg_color='$bgcolor'
        WHERE diaryID ='$diaryID'"
    );

    
    if ($edit) {
        // Redirect on successful update
        mysqli_close($conn);
        header("location:../pages/allentry.php");
        exit;
    } else {
        // Print error message for debugging
        echo "Error: " . mysqli_error($conn);
    }

?>
</body>
</html>