<!DOCTYPE html>
<html lang="en">
<head>
    <title>Sign Up</title>
    <link rel="stylesheet" href="http://localhost/VAALHANDS/CSS/patriotSignUp.css">
</head>
<body>
<div id="box">
    <h1>Patriot signUp</h1>
    <form action="http://localhost/VAALHANDS/registrationProcess.php" method="post">
<br>
<h3>
    Name : <input type = "text" name="patriotName" id="name">
    <p id="errorName"></p>
    <br><br>
    Address : <input type = "text" name="patriotAddress" ><br><br>
    Gender :  Male<input type = "radio" name="patriotGender" value="Male" >
    Female :  <input type = "radio" name="patriotGender" value="Female" ><br><br><br><br>
    Phone no : <input type = "text" name="patriotPhoneNo"  id="phoneNo">
    <br><br>
    <p id="errorPhoneNo"></p>
    Email :  <input type = "text" name="patriotEmail" id="email">
    <p id="errorEmail"></p>
    <br><br>
            <h4>
            <fieldset>
                <legend>Ensure your Password follows these guidelines</legend>
                <li>Password Must me atleast 8 Characters Long</li>
                <li>Password Must Have a Digit from 0-9</li>
                <li>Password Must Have both smaller and upper case letters</li>
                <li>Password Must Contain a special Character</li>
            </fieldset>
            </h4>
<h3>
Password : <input type="password" name="patriotPassword" id="password"><br>
<p id="errorpassword"></p>
<br><br>
Confirm : <input type="password" name="patriotPassword"> <br><br>
<input type="submit" name="submit" value="Register">
</h3>
</form>
<br><br><br><br>
<h3><a href="http://localhost/VAALHANDS/main.php">HOME</a></h3>
</div>
<script src="http://localhost/VAALHANDS/JS/registrationValidate.js"></script>
</body>
<footer>
            <p>&copy; copyright 2024 B.W.Taunyane. All rights reserved.</p>
        </footer>
</html>