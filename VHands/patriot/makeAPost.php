<!DOCTYPE html>
<html lang="en">
<head>
    <title>Post</title>
    <link rel="stylesheet" href="http://localhost/VAALHANDS/CSS/patriotHome.css">
</head>
<body>
<div id="box">
    <h1 >Make A post</h1>
    <br><br>
    <div id="center">
    <a href="http://localhost/VAALHANDS/patriot/patriotHome.php" >&nbsp&nbsp&nbsp&nbspHome</a>
    <a href="http://localhost/VAALHANDS/patriot/updatePatriotInfo.php">&nbsp&nbsp&nbsp&nbspUpdate Information</a>
    <a href="http://localhost/VAALHANDS/patriot/makeAPost.php" >&nbsp&nbsp&nbsp&nbspPost A Span</a>
    <a href="http://localhost/VAALHANDS/patriot/managePosts.php" >&nbsp&nbsp&nbsp&nbspManage Posts</a>
    <a href="http://localhost/VAALHANDS/patriot/checkOffers.php" >&nbsp&nbsp&nbsp&nbspSee Offers</a>

    </div>
<?php
session_start();
$patriotID =$_SESSION["patriotID"];
?>
<br><br>
<form action="http://localhost/VAALHANDS/patriot/requestProcess.php" method = "post"> <br>
<h3>
Patriot ID : <input type = "text" name="patriotID" value="<?php echo $_SESSION["patriotID"] ?>" readonly><br><br>
Post By : <input type = "text" name="requestedBy" value="<?php echo $_SESSION["patriotName"] ?>" readonly><br><br> 
Address : <input type = "text" value="<?php echo $_SESSION["patriotAddress"] ?>" readonly><br><br>
Phone no :  <input type = "text" name="newPatriotPhoneNo" value="<?php echo $_SESSION["patriotPhoneNo"] ?>"readonly><br><br>
Email :  <input type = "text" name="newPatriotEmail"  value="<?php echo $_SESSION["patriotEmail"] ?>"readonly><br><br>
<br>
<aside>
    <textarea name="problem description" row="15" cols="100" id="patriotPost" placeholder="ENTER POST TEXT HERE..." ></textarea>
<p id="errorPatriotPost"></p>
</aside>
<aside > problem type:
    <select name="problemType">
        <option value="" selected></option>
        <option value="Electric">Electric</option>
        <option value="Roofwork">Roofwork</option>
        <option value="Painting">Painting</option>
        <option value="Carpenting">Carpenting</option>
        <option value="Advanced Cleaning">Advanced Cleaning</option>
        <option value="Gardening">Gardening</option>
        <option value="Tree-falling">Tree-falling</option>
        <option value="Plumbing Work">Plumbing Work</option>
        <option value="Home work contracts">Home work contracts</option>
    </select>
</aside>
<br><br>
<?php date_default_timezone_set('Africa/Johannesburg');
?>
Date : <input type = "text" name="postDate"  value="<?php echo date('d/m/y') ?>"readonly><br><br>
Time : <input type = "text" name="postTime"  value="<?php echo date('h:i:s') ?>"readonly><br><br>
   
<input type="submit" name="postRequest" value="POST PROBLEM">

</h3>
</form>
<footer>
            <p>&copy; copyright 2024 B.W.Taunyane. All rights reserved.</p>
        </footer>
<script src="http://localhost/VAALHANDS/JS/patriotPostValidation.js"></script>
</div>
</body>
</html>