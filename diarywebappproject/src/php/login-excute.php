<?php
session_start();
require('db.php');

$errorMessage = '';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $Username = mysqli_real_escape_string($createConnection, $_POST["Username"]);
    $Password = mysqli_real_escape_string($createConnection, $_POST["Password"]);

    
    $stmt = mysqli_prepare($createConnection, "SELECT * FROM user WHERE Username = ? AND Password = ?");
    mysqli_stmt_bind_param($stmt, "ss",$Username, $Password);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);

    if (mysqli_num_rows($result) == 1) {
        $rowData = mysqli_fetch_assoc($result);
        $_SESSION['loggedin'] = true;
        $_SESSION['Username'] = $rowData['Username'];
        $_SESSION['UserID'] = $rowData['UserID'];
        include('../custom/loading.php');
        echo '<script>
                setTimeout(() =>{
                  window.location.href="../pages/home.php"
                }, 5000);
             </script>';
        exit();
    } else {
        $errorMessage = 'Incorrect Username or Password';
        header('Location: ../pages/login.php?error='.$errorMessage);
    }
}

mysqli_close($createConnection);
?>


