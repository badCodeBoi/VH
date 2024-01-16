<?php
if (session_status() >=0)
{
session_start();
if(isset($_SESSION["phoneOrEmail"]))
{
    header("refresh:1 ; url = http://localhost/VAALHANDS/patriot/workerHome.php");
}
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
     <title>Sign Up</title>
     <link rel="stylesheet" href="http://localhost/VAALHANDS/CSS/patriotSignUp.css">
</head>
<body>
<div id="box">
<h1>VAALHANDS Registration</h1>
<h3>
<form action="http://localhost/VAALHANDS/registrationProcess.php" method="post">
    <br>
        Full Name : <input type = "text" name="workerName" id="name" >
        <p id="errorName"></p>
        <br><br>
        Address :  <input type = "text" name="workerAddress" ><br><br>
        Gender :  Male<input type = "radio" name="workerGender" value="Male" > 
        Female<input type = "radio" name="workerGender" value="Female" ><br><br><br><br>
        Phone no : <input type = "text" name="workerPhoneNo" id="phoneNo">
        <p id="errorPhoneNo"></p>
        <br><br>
        Email :  <input type ="text" name="workerEmail" id="email">
        <p id="errorEmail"></p>
<br><br>
<h5>
<fieldset>
<legend>Password Rules</legend>
            <li>Password Must me atleast 8 Characters Long</li>
            <li>Password Must Have a Digit from 0-9</li>
            <li>Password Must Have both smaller and upper case letters</li>
            <li>Password Must Contain a special Character</li>
</fieldset>
</h5>
Password : <input type = "password" name="workerPassword" id="password">
<p id="errorpassword"></p>
<br><br>
Confirm Password : <input type = "password" name="confirmWorkerPassword" >
<br><br>
Please Choose a Type :    
<select name="workerType">
<option value="" selected></option>  
<option value="Electrician">Electrician</option>
<option value="Plumber">Plumber</option>
<option value="Painter">Painter</option>
<option value="Carpenting">Carpenting</option>
<option value="Advanced Cleaning">Advanced Cleaning</option>
<option value="Gardening">Gardening</option>
<option value="Tree-falling">Tree-falling</option>
<option value="Plumbing Work">Plumbing Work</option>
<option value="Home work contracts">Home work contracts</option>
</select>
<br><br>
<input  type = "submit" name="workerSubmit" value="Submit Info" >
</form>
</h3>
<br><br><br><br>
<h3><a href="http://localhost/VAALHANDS/main.php">Home</a></h3>
<script src="http://localhost/VAALHANDS/JS/registrationValidate.js"></script>
</div>
</body>
<footer>
<p>&copy; copyright 2024 B.W.Taunyane. All rights reserved.</p>
</footer>
</html>