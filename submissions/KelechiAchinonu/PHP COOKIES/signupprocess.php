<?php
session_start();

$serverName = "localhost";
$database = "registration";
$username = "root";
$password = "";
//Open database connection
$conn = mysqli_connect($serverName, $username, $password, $database);
// Check that connection exists
if (!$conn) {
die("Connection failed: " . mysqli_connect_error());
}
       if(isset($_POST['email_address'])) {
       $email_address = $_POST['{email_address}'];
       $password = $_POST['{password}'];
       

       $query = "SELECT * FROM people WHERE email_address = '$email_address' AND password = '$password'" or die(mysqli_error());
       $result = mysqli_query($query); 
       $rows = mysqli_num_rows($result); 
    
       }
        if (mysqli_num_rows($result) >= 0) {
            echo "Welcome to the page";
            header("Location: welcome.html");
        } else {
            $message = "No";
            echo "Invalid details. Please try again";
    
        }





?>