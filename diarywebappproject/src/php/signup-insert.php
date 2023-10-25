
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
        $Username = $_POST ["input-username"];
        $Email = $_POST ["input-email"];
        $Password = $_POST ["input-password"];


    $sql = "INSERT INTO user (Username, Email, Password) 
    VALUES ('$Username','$Email', '$Password')";

    

    if ($conn->query($sql) === TRUE) {
        echo '<script>
                setTimeout(function() {
                    // alert("Submitted Successfully!");
                    window.location.href = "../pages/login.php"; // Redirect to allentry.php
                }, 1000);
            </script>';

    } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
    
    }

    
    $conn->close();
    
    
?>
