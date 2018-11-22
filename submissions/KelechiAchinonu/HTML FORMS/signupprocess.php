<?php
if(isset($_POST)) {
$first_name =  $_POST['{first_name}'];
$last_name =  $_POST['{last_name}'];
$email_address = $_POST['{email_address}'];
$password =  $_POST['{password}'];
$confirm_password =  $_POST['{confirm_password}'];
$phone_number =  $_POST['{phone_number}'];
$gender =  $_POST['{gender}'];
$country =  $_POST['{country}'];
}
saveToDatabase($first_name, $last_name,$email_address,$password,$confirm_password,$phone_number,$gender,$country);
header('Location:correct.html');




function saveToDatabase($first_name,$last_name,$email_address,$password,$confirm_password,$phone_number,$gender,$country) {
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
$sql = "INSERT INTO people (first_name,last_name,email_address,password,confirm_password,phone_number,gender,country)
               VALUES ('{$first_name}','{$last_name}','{$email_address}','{$password}','{$confirm_password}',         '{$phone_number}',      '{$gender}','{$country}')";
$result = mysqli_query($conn, $sql);
//Check for errors
if (!$result) {
die("Error: " . $sql . "<br>" . mysqli_error($conn));
}
//Close the connection
mysqli_close($conn);
}

?>