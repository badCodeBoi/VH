<?php
if(isset($_POST["submit"]))
{
    if(isset($_POST["userCheck"]))
{
    if($_POST["userCheck"]== "Patriot")
{
$phoneOrEmail = $_POST["phoneOrEmail"];
$password = $_POST["password"];
$conn = mysqli_connect( 'localhost' , 'root', '', 'vaalhands');
$sql = "SELECT * FROM patriot_data WHERE (patriotEmail='$phoneOrEmail' or patriotPhoneNo='$phoneOrEmail') AND patriotPassword='$password'";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_array($result, MYSQLI_ASSOC);
$count = mysqli_num_rows($result);
if($row!=null)
{
$status = $row["patriotStatus"];
if($status== "banned")
{
$count = 0;
echo "did'nt we notify you that your banned, well heres the notification, go to tictok";
header("refresh:4 ; url=http://localhost/VAALHANDS/main.php");
}
if ($status== "Warned" && $count == 1)
{
session_start();
$_SESSION["Message"] = "Please have more Buntu as you continue to navigate the platform furthur or you will be banned";
$_SESSION["phoneOrEmail"]=$phoneOrEmail;
echo "Logged in successfully";
header("refresh:2 ;  url=http://localhost/VAALHANDS/patriot/patriotHome.php");
exit();
}

if($status == "Valid" && $count == 1)
{
session_start();
$_SESSION["Message"] = "";
$_SESSION["phoneOrEmail"]=$phoneOrEmail;
echo "Login successful";
header("refresh:2 ;  url=http://localhost/VAALHANDS/patriot/patriotHome.php");
exit();
}
}
else
{
    echo "Login unsuccessful";
    header("refresh:1 ; url=http://localhost/VAALHANDS/main.php");
}
}
if($_POST["userCheck"] == "Worker")
{
$phoneOrEmail = $_POST["phoneOrEmail"];
$password = $_POST['password'];

$conn = mysqli_connect('localhost' ,'root','','vaalhands');
$sql = "SELECT * FROM workerdata WHERE (workerEmail='$phoneOrEmail' or workerPhoneNo='$phoneOrEmail') AND workerPassword='$password' ";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_array($result, MYSQLI_ASSOC);
$count = mysqli_num_rows($result);
if($row!=null)
{
$status = $row["workerStatus"];

if($status== "banned")
{
$count=0;
echo "did'nt we notify you that your banned, well heres the notification, go to tictok";
header("refresh:4 ; url=http://localhost/VAALHANDS/main.php");
}
if ($status== "Warned" && $count==1)
{
session_start();
$_SESSION["Message"] = "Please have more Buntu as you continue to navigate the platform furthur or you will be banned";
$_SESSION["phoneOrEmail"]=$phoneOrEmail;
echo "Logged in successfully";
header("refresh:2 ;  url=http://localhost/VAALHANDS/worker/workerHome.php");
exit();
}

if($status== "Valid" && $count==1)
{
session_start();
$_SESSION["Message"] = "";
$_SESSION["phoneOrEmail"]=$phoneOrEmail;
echo "Login successful";
header("refresh:2 ; url=http://localhost/VAALHANDS/worker/workerHome.php");
exit();
}
}
else
{
    echo "Login unsuccessful";
    header("refresh:1 ; url=http://localhost/VAALHANDS/main.php");
}
}

if(isset($_POST["submit"]))
{
if($_POST["userCheck"] == "Admin")
{
if($_POST["phoneOrEmail"] == "admin@admin.com" && $_POST["password"] == "1234abcd!@#")
echo "Login successful";
header("refresh:2 ; url=http://localhost/VAALHANDS/admin/adminHome.php");
}
else
{
echo "Login failed";
header ("refresh:1 ; url=http://localhost/VAALHANDS/main.php");
}
}
    }
    else{echo "Must choose a role!"; 
        header("refresh:1 ; url= http://localhost/VAALHANDS/main.php");}
    }
?>