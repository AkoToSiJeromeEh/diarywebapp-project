
<?php
session_start(); 
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
        $title = $_POST ["title-input"];	
        $category = $_POST ["category-input"];
        $date = $_POST ["date-input"];
        $content = $_POST ["textarea-input"];
        $textcolor = $_POST ["textcolor-input"];
        $bgcolor = $_POST ["bgcolor-input"];

        $content = $conn->real_escape_string($content);

    if(isset($_SESSION['UserID'])){
         $UserID= $_SESSION['UserID'];

        $sql = "INSERT INTO diary_entry (EntryID, title, category, entry_date, entry_content, text_color, bg_color) 
        VALUES ('$UserID','$title','$category', '$date', '$content', '$textcolor', '$bgcolor')";

        if ($conn->query($sql) === TRUE) {
            echo '<script>
                    setTimeout(function() {
                        // alert("Submitted Successfully!");
                        window.location.href = "../pages/allentry.php"; // Redirect to allentry.php
                    }, 1000);
                </script>';

        } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
        
        }

        
        $conn->close();

    } else {
        echo "Error";
        header("Location: ../pages/login.php");
    }

    
    
?>
