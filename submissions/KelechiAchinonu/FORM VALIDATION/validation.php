<?php
$message = '';
if (isset($_POST['submit'])) {
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$email = $_POST['email'];
$password = $_POST['password'];
$confirm = $_POST['confirm'];
$phone = $_POST['phone'];
$gender = $_POST['gender'];
$country = $_POST['country'];
if (empty($firstname) || empty($lastname) || empty($email) || empty($password) || empty($confirm)  || empty($phone) ||  empty($gender) || empty($country)) {
$message = 'All fields are required, Kindly fill all fields!';
}
}
?>



<!DOCTYPE html>
<html>
  <head> 
  	<title> My SignUp Form </title>
  </head>
  <body style="background-color: pink; font-size:25px">
  	<form method="POST" action="">
  		<fieldset>
  			<legend> SIGNUP FORM </legend>
  		<label for="firstname"> Firstname: </label>
  		<input type="text" name="firstname" id="firstname" placeholder="John" />

  		<br />
  		<label for="lastname"> Lastname: </label>
  		<input type="lastname" name="lastname" id="lastname" />

  		<br />
  		<label for="email"> Email Address: </label>
  		<input type="email" name="email" id="email"/>

  		<br />
  		<label for="password"> Password: </label>
  		<input type="password" name="password" id="password"/>

      <br />
      <label for="password"> Confirm Password: </label>
      <input type="password" name="password" id="password"/>

  		<br />
      <br />
      <label for="phonenumber"> Phone Number: </label>
      <input type="number" name="phone" id="phone" placeholder="070********" />
        	<br/>

        Gender:
        <br/>
        <input type="radio" name="gender" id="male" value="male"/>
        <label for="male"> Male </label>
        <br />
        <input type="radio" name="gender" id="female" value="female"/>
        <label for="female"> Female </label>
        <br/>

        <label for="country">Country: </label>
        <br/>
        <select name="country" id="country">
        	<option value="nigeria" selected="nigeria"> Nigeria </option>
        	<option value="kenya"> Kenya </option>
        	<option value="ghana"> Ghana </option>
        	<option value="southafrica"> South Africa </option>
        	<option value="cameroon"> Cameroon </option>
        </select>
        <br/>

  		<input type="submit" name="submit" value="Submit"/>
  		<button type="reset" name="reset" value="reset"> Reset </button>
        </fieldset>




















     </form>
  </body>




</html>