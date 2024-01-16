<?php
session_start();

$userID = $_SESSION["PatriotID"];
$newPatriotName = $_POST["newPatriotName"];
$newPatriotEmail = $_POST["newPatriotEmail"];
$newPatriotPhoneNo = $_POST["newPatriotPhoneNo"];
$newPatriotAddress = $_POST["newPatriotAddress"];
$patriotNewPassword = $_POST["patriotNewPassword"];

if(isset($_POST["newPatriotName"]))
{
    if($_POST["newPatriot"]!= $_SESSION["patriotName"])
    {
    if(preg_match("/^[a-zA-Z-' ]*$/",$_POST["newUserName"]))
    {

        $conn = mysqli_connect( 'localhost' , 'root', '', 'vaalhands');
        $sql = "UPDATE patriot_data set patriotName ='$newPatriotName'  WHERE patriotID='$patriotID';";
        $result = mysqli_query($conn, $sql);
        if($result)
        {
            header("refresh:0 ; url=http://localhost/VAALHANDS/patriot/patriotHome.php");
        }
    }else
    {
        echo "Please ensure Patriot name contains only letters and spaces";
        header("refresh:2 ; url=http://localhost/VAALHANDS/patriot/updatePatriotInfo.php");
    }
    }
}

if(isset($_POST["newPatriotAddress"]))
{
    if($_POST["newPatriotAddress"]!= $_SESSION["patriotAddress"])
    {
        $conn = mysqli_connect( 'localhost' , 'root', '', 'vaalhands');
        $sql = "UPDATE patriot_data set patriotAddress ='$newPatriotAddress' WHERE patriotID='$patriotID' ";
        $result = mysqli_query($conn, $sql);
        if($result)
        {
            header("refresh:0 ; url=http://localhost/VAALHANDS/patriot/patriotHome.php");
        }
    }
}

if(isset($_POST["newPatriotEmail"]))
{
if($_POST["newPatriotEmail"]!=$_SESSION["patriotEmail"])
{
 if(filter_var($_POST["newPatriotEmail"], FILTER_VALIDATE_EMAIL))
 {
    $conn = mysqli_connect( 'localhost' , 'root', '', 'vaalhands');
    $sql = "UPDATE patriot_data set patriotEmail ='$newPatriotEmail'  WHERE patriotID='$patriotID' ";
    $result = mysqli_query($conn, $sql);

    if($result)
    {
     echo "Rerouting";
     header ("refresh:2 ;url= http://localhost/VAALHANDS/signout.php");
    }
 }   
 else
 {
    echo "please retype that so called EMail address";
}
}
}
if(isset($_POST["newPatriotPhoneNo"]))
{
if($_POST["newPatriotPhoneNo"]!= $_SESSION["PatriotPhoneNo"])
{
    $conn = mysqli_connect( 'localhost' , 'root', '', 'vaalhands');
    $sql = "UPDATE patriot_data set patriotPhoneNo ='$newPatriotPhoneNo'  WHERE patriotID='$patriotID' ";
    $result = mysqli_query($conn, $sql);
    if($_POST["newPatriotPhoneNo"]!=$_SESSION["patriotPhoneNo"])
{
    if($result)
    {
        echo "Rerouting";
        header ("refresh:2 ;url= http://localhost/VAALHANDS/signout.php");
    }
}
}
}

if(isset($_POST["patriotNewPassword"]) && $_POST["patriotNewPassword"]!="")
{
    if($_POST["patriotOldPassword"] == $_SESSION["patriotPassword"])
    { 
      if($_POST["patriotNewPassword"] =="")
      {
        if($_POST["patriotNewPassword"] == $_POST["confirmPatriotNewPassword"] )
        {
          $conn = mysqli_connect( 'localhost' , 'root', '', 'vaalhands');
          $sql = "UPDATE patriot_data set patriotPassword ='$patriotNewPassword'  WHERE patriotID='$patriotID' ";
          $result = mysqli_query($conn, $sql);  
          if($result)
       {
         echo "Rerouting" ; header("refresh:2 ; url= http://localhost/VAALHANDS/signout.php");
       }
      }
       
    } else {echo "Make Sure Both Passwords are same ! "; header("refresh:2 ; url=http://localhost/VAALHANDS/patriot/updatePatriotInfo.php");}
}  else {echo "Old Password Is not Correct! "; header("refresh:2 ; url= http://localhost/VAALHANDS/patriot/updatePatriotInfo.php");}

} 

if(isset($_POST["deleteAccount"]))
{
    session_start();
    $patriotPasswordForDeletion = $_POST["patriotPasswordForDeletion"];
    $patriotID = $_SESSION["patriotID"];
if($_POST["patriotPasswordForDeletion"] == $_SESSION["patriotPassword"])
{
    $conn = mysqli_connect( 'localhost' , 'root', '', 'vaalhands');
    $sql = "DELETE from patriot_data WHERE patriotID='$patriotID' and patriotPassword='$patriotPasswordForDeletion' ";
    $result = mysqli_query($conn, $sql);
    if($result)
    {
        echo "Rerouting";
        header("refresh:2 ; url= http://localhost/VAALHANDS/signout.php");
    }
}
else
{
    echo "Rerouting";
    header ("efresh:2 ; url= http://localhost/VAALHANDS/patriot/updatePatriotInfo.php");
}
}
?>