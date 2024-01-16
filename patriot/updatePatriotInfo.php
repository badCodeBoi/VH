<!DOCTYPE html>
<html lang="en">
<head>
    <title>Update Patriot Infomation</title>
    <link rel="stylesheet" href="http://localhost/VAALHANDS/CSS/patriotHome.css">
</head>
<body>
<div id="box">
    <h1>Update Infomation</h1>
    <br><br>
    
    <div id="center">
    <a href="http://localhost/VAALHANDS/patriot/patriotHome.php" >&nbsp&nbsp&nbsp&nbspHome</a>
  <a href="http://localhost/VAALHANDS/patriot/updatepatriotInfo.php">&nbsp&nbsp&nbsp&nbspUpdate your Information</a>
  <a href="http://localhost/VAALHANDS/patriot/makeAPost.php" >&nbsp&nbsp&nbsp&nbspMake a Post</a>
  <a href="http://localhost/VAALHANDS/patriot/managePosts.php" >&nbsp&nbsp&nbsp&nbspManage Posts</a>
  <a href="http://localhost/VAALHANDS/patriot/checkOffers.php" >&nbsp&nbsp&nbsp&nbspSee current Offers</a>
    </div>
<?php
session_start();
?>
<br><br>

<form action="updatePatriotInfoProcess.php" method = "post">
    <br>
    <h3>
    Full Name : <input type = "text" name="newPatriotName" value="<?php echo $_SESSION["patriotName"] ?>" id="name">
    <p id="errorName"></p>
    <br><br> 
    Address : <input type = "text" name="newPatriotAddress" value="<?php echo $_SESSION["patriotAddress"] ?>"><br><br>
    
    Phone no :  <input type = "text" name="newPatriotPhoneNo" value="<?php echo $_SESSION["patriotPhoneNo"] ?>" id="phoneNo">
    <p id="errorPhoneNo"></p>
    <br><br> 

    Email :  <input type = "text" name="newPatriotEmail"  value="<?php echo $_SESSION["patriotEmail"] ?>" id="email">
    <p id="errorEmail"></p>
    <br><br> 
   
    Old Password :  <input type = "password" name=patriotOldPassword > 
    
    <br><br> 

    New Password :  <input type = "password" name=patriotNewPassword id="password">
    <p id="errorpassword"></p>
    <br><br> 

    Confirm New Password :  <input type = "password" name=confirmPatriotNewPassword > <br><br>
    
   <input type="submit" name="patriotUpdate" value="UPDATE INFO">

   <br> <br> <br> 

   <h2>
Delete Account <br>
Type Password : <input type="password" name="patriotPasswordForDeletion">
<input type="submit" name="deleteAccount" value="DELETE ACCOUNT" id="deleteButton">
<br>
<br>    
    </h3>
</h2>
</form>
</div>
<script src="http://localhost/VAALHANDS/JS/registrationValidate.js"></script> 
</body>
<footer>
            <p>&copy; copyright 2024 B.W.Taunyane. All rights reserved.</p>
        </footer>
</html>