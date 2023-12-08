<?php
session_start();
include '../connection.php';

// Retrieve user input from login form
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // SQL query to retrieve user credentials from the database
    $sql = "SELECT * FROM users WHERE username='$username'";
    $result = $con->query($sql);

    if ($result->num_rows > 0) {
        // User found, compare passwords
        $row = $result->fetch_assoc();
        $storedPassword = $row['password'];

        if ($password == $storedPassword) {
            // User is authenticated, store username in a session variable
            $_SESSION['username'] = $username;

            // Redirect to another page after displaying the message
            // echo '<script type="text/javascript">
            //         setTimeout(function(){
            //             alert(">Login successful!</p> Welcome, ' . $_SESSION['username'] . '");
            //             window.location.href = "./dash.php";
            //         }, 30); // 3000 milliseconds (3 seconds)
            //       </script>';
            header("refresh:2;url=./dash.php"); // Redirect after 3 seconds
            echo "<p style='color:green;text-align:center;'>Login successful! Welcome, </p> " . $_SESSION['username'] . ". You will be redirected to the dashboard shortly.";
        } else {
            // Invalid password, show an error message
            header("refresh:1;url=./login.php"); 
            echo "<p style='color:green;text-align:center;'>invalid username or password, </p> ";

         
        }
    } else {
        // User not found, show an error message
        header("refresh:2;url=./login.php"); 
        echo "<p style='color:green;text-align:center;'>invalid username or password, </p> ";
    }
}
   


$con->close();
?>

