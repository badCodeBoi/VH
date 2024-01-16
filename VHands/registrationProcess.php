<?php
if(isset($_POST["submit"]))
{
    if (isset($_POST["patriotEmail"])) 
    {
    $phoneOrEmail = $_POST["patriotEmail"];
    }
    else {
        $phoneOrEmail = "";
    }

if( isset( $_POST["patriotName"]) && isset($_POST["patriotAddress"]) && isset($_POST["patriotGender"]) && isset( $_POST["patriotPhoneNo"])
    && isset( $_POST["patriotPassword"]) && isset( $_POST["confirmPatriotPassword"]) && isset( $_POST["patriotEmail"]))
{if( $_POST["patriotName"]!="" &&  $_POST["patriotAddress"]!="" && $_POST["patriotGender"]!="" && 
     $_POST["patriotPassword"]!="" && $_POST["confirmPatriotPassword"]!="")
    {
    if($_POST["patriotEmail"] !="" ||  $_POST["patriotPhoneNo"] !="")
{
{
if($_POST["patriotPassword"] == $_POST["confirmPatriotPassword"])
{
$conn = mysqli_connect( 'localhost' , 'root' , '', 'vaalhands');
$sql = "SELECT * FROM patriot_data WHERE patriotEmail='$phoneOrEmail'";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_array($result, MYSQLI_ASSOC);
$count = mysqli_num_rows($result);
if ($count==0)
{
$patriotName = $_POST["PatriotName"];
$patriotAddress = $_POST["PatriotAddress"];
$patriotGender = $_POST["patriotGender"];
$patriotPhoneNo = $_POST["patriotPhoneNo"];
$patriotPassword = $_POST["patriotPassword"];
$patriotEmail = $_POST["patriotEmail"];
$patriotStatus ="Valid";
$conn = mysqli_connect('localhost' ,'root' ,'' , 'vaalhands');
$sql = "INSERT INTO patriot_data (patriotName, patriotPassword, patriotGender, patriotPhoneNo, patriotEmail, patriotStatus) VALUES ('$patriotName','$patriotPassword','$patriotAddress','$patriotGender','$patriotPhoneNo','$patriotEmail','$patriotStatus')";
if(mysqli_query($conn , $sql))
{
session_start();
$_SESSION["phoneOrEmail"] = $_POST["patriotEmail"];
$_SESSION["Message"] = "";

echo "Thanks for Registering with VaalHands";
header("refresh:2; url= http://localhost/VAALHANDS/patriot/patriotHome.php");
}
else {echo "Registration Error"; 
    header("refresh:2; url= http://localhost/VAALHANDS/patriot/patriotSignup.php");}
}
else {echo "This mail address is already in use"; 
    header("refresh:2; url= http://localhost/VAALHANDS/patriot/patriotSignup.php");}
}
else {echo "Make sure of your password"; 
    header("refresh:2; url= http://localhost/VAALHANDS/patriot/patriotSignup.php");}
}
}
}
else {echo "You didnt provide a E-Mail or Phone No"; 
    header("refresh:3; url=http://localhost/VAALHANDS/patriot/patriotSignup.php");}
}
else {
echo "Please enter all the required infomation";
header ("refresh:2; url=http://localhost/VAALHANDS/patriot/patriotSignup.php");
}
}
if(isset($_POST["workerSubmit"]))
{
if (isset($_POST["workerEmail"])) 
{
$phoneOrEmail = $_POST["workerEmail"];
}
else {
    $phoneOrEmail = "";
}
if( isset( $_POST["workerName"]) && isset($_POST["workerAddress"]) && isset($_POST["workerGender"]) && isset( $_POST["workerPhoneNo"])
    && isset( $_POST["workerPassword"]) && isset( $_POST["confirmWorkerPassword"]) && isset( $_POST["workerEmail"]) && isset($_POST["workerType"]))
    {
    if( $_POST["workerName"]!="" &&  $_POST["workerAddress"]!="" && $_POST["workerGender"]!="" && 
     $_POST["workerPassword"]!="" && $_POST["confirmWorkerPassword"]!="" && $_POST["workerType"]!="")
    {
    if($_POST["workerEmail"] !="" ||  $_POST["workerPhoneNo"]!="")
{
{
{
if($_POST["workerPassword"] == $_POST["confirmWorkerPassword"])
{
$conn = mysqli_connect( 'localhost' , 'root' , '', 'vaalhands');
$sql = "SELECT * FROM workerdata WHERE workerEmail='$phoneOrEmail'";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_array($result, MYSQLI_ASSOC);
$count = mysqli_num_rows($result);

if ($count==0)
{
$workerName = $_POST["workerName"];
$workerAddress = $_POST["workerAddress"];
$workerGender = $_POST["workerGender"];
$workerPhoneNo = $_POST["workerPhoneNo"];
$workerPassword = $_POST["workerPassword"];
$workerEmail = $_POST["workerEmail"]; 
$workerType = $_POST["workerType"];
$workerStatus = "Valid";
$conn = mysqli_connect('localhost', 'root', '', 'vaalhands');
$sql = "INSERT INTO workerdata (workerName, workerAddress, workerGender, workerPhoneNo, workerEmail, workerPassword, workerType, workerStatus ) VALUES ('$workerName','$workerAddress','$workerGender','$workerPhoneNo','$workerEmail','$workerPassword','$workerType','$workerStatus')";

if(mysqli_query($conn , $sql))
{
session_start();
$_SESSION["phoneOrEmail"] = $_POST["workerEmail"];
$_SESSION["Message"] = "";

echo "Thanks for Registering with VaalHands";
header("refresh:2; url= http://localhost/VAALHANDS/worker/workerHome.php");
}
else {echo "Registration Error"; 
    header("refresh:2; url= http://localhost/VAALHANDS/worker/workerHome.php");}
}
else {echo "This mail address is already in use"; 
    header("refresh:2; url= http://localhost/VAALHANDS/worker/workerHome.php");}
}
else {echo "Make sure of your password"; 
    header("refresh:2; url= http://localhost/VAALHANDS/worker/workerHome.php");}
}
}
}
}
else {echo "You didnt provide a E-Mail or Phone No";
header("refresh:3 ; url=http://localhost/VAALHANDS/worker/workerHome.php");}
}
else {
echo "Please enter all the required infomation";
header ("refresh:2 ; url=http://localhost/VAALHANDS/patriot/patriotSignup.php");
}
}
?>