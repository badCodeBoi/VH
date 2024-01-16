<!DOCTYPE html>
<html lang="en">
<head>
   <title>Patriots Home Page</title>
   <link rel="stylesheet" href="http://localhost/VAALHANDS/CSS/patriotHome.css">
</head>
<body>
<div id="box">
    <h1>Patriot Home page</h1>    
<?php
session_start();

if(isset($_SESSION["phoneOrEmail"]))
{
$phoneOrEmail = $_SESSION["phoneOrEmail"];

$conn = mysqli_connect('localhost' ,'root' ,'', 'vaalhands');
$query = "SELECT * FROM patriot_data WHERE patriotEmail='$phoneOrEmail' or patriotPhoneNo='$phoneOrEmail'";
$query_run = mysqli_query($conn,$query);

while ($row = mysqli_fetch_array($query_run))
{
$_SESSION["patriotName"]= $row["patriotName"];
$_SESSION["patriotID"]= $row["patriotID"];
$_SESSION["patriotEmail"]= $row["patriotEmail"];
$_SESSION["patriotPhoneNo"]= $row["patriotPhoneNo"];
$_SESSION["patriotAddress"]= $row["patriotAddress"];
$_SESSION["patriotPassword"]= $row["patriotPassword"];
$_SESSION["workerID"]= "";
}
echo "<br> <br>";
}
?>

<div id="center">
<a href="http://localhost/VAALHANDS/patriot/patriotHome.php" >&nbsp&nbsp&nbsp&nbspHome</a>
<a href="http://localhost/VAALHANDS/patriot/updatePatriotInfo.php" >&nbsp&nbsp&nbsp&nbspUpdate details</a>
<a href="http://localhost/VAALHANDS/patriot/makeAPost.php" >&nbsp&nbsp&nbsp&nbspPost</a>
<a href="http://localhost/VAALHANDS/patriot/managePosts.php" >&nbsp&nbsp&nbsp&nbspManagePosts</a>
<a href="http://localhost/VAALHANDS/patriot/checkOffers.php" >&nbsp&nbsp&nbsp&nbspSee Offers</a>
</div>
<?php
echo "<h2>".$_SESSION["Message"]."</h2><br>";
?>
<br>
<fieldset>
<legend>Patriot infomation</legend>
<menu>
    <h3>
        Name : <?php echo $_SESSION["patriotName"]."<br>" ; ?>
        ID : <?php echo $_SESSION["patriotID"]. "<br>" ; ?>
        Email : <?php echo $_SESSION["patriotEmail"]. "<br>" ?>
        Phone No : <?php echo $_SESSION["patriotPhoneNo"]. "<br>"?>
        Address : <?php echo $_SESSION["patriotAddress"]. "<br>"?>
    </h3>    
</fieldset>

<fieldset>
<legend>My Posts</legend>
<section>
<?php
$patriotID = $_SESSION["patriotID"];
$conn = mysqli_connect('localhost' ,'root','','vaalhands');
$sql = "SELECT * FROM request_data WHERE patriotID = '$patriotID'";
$query_run = mysqli_query($conn,$sql);

while ($row = mysqli_fetch_array($query_run))
{
$reqID = $row["requestID"];
$_SESSION["reqID"]=$reqID;

echo "<ul><li>"."[REQUEST ID : ".$row["requestID"]."] - Problem Description : ".$row["problemDescription"]." #Posted On [".$row["postDate"]."-".$row["postTime"]." ]<br></li></ul>";
}
?>
</section>
</fieldset>
<br><br><br><br><br><br><br><br><br><br><br><br>
<h3><a href="http://localhost/VAALHANDS/signout.php">Sign out</a></h3>
<div class="footer">
<footer>
            <p>&copy; copyright 2024 B.W.Taunyane. All rights reserved.</p>
        </footer>
</div>
</div>
</body>
</html>