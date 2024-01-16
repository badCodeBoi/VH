<?php
if(isset($_POST["workerUpdate"]))
{
session_start();
$workerID = $_SESSION["workerID"];
    $newWorkerName = $_POST["newWorkerName"];
    $newWorkerEmail = $_POST["newWorkerEmail"];
    $newWorkerPhoneNo = $_POST["newWorkerPhoneNo"];
    $newWorkerAddress = $_POST["newWorkerAddress"];
    $workerNewPassword = $_POST["workerNewPassword"];
    $workerNewType= $_POST["workerNewType"];

if(isset($_POST["newWorkerName"]))
{
if($_SESSION["workerName"]!=$_POST["newWorkerName"])
{
$conn = mysqli_connect('localhost', 'root', '', 'vaalhands');
$sql = "UPDATE workerdata set workerName = '$newWorkerName' where workerID='$workerID';";
$result = mysqli_query($conn, $sql);
if($result)
{
    header("refresh:0 ; url=http://localhost/VAALHANDS/worker/workerHome.php ");
}
}
}
if(isset($_POST["newWorkerAddress"]))
{
    if($_SESSION["workerAddress"]!=$_POST["newWorkerAddress"])
{
    $conn = mysqli_connect('localhost', 'root', '', 'vaalhands');
    $sql = "UPDATE workerdata set workerAddress = '$newWorkerAddress' WHERE workerID='$workerID'";
    $result = mysqli_query($conn,$sql);

    if($result)
    {
        header("refresh:0 ; url=http://localhost/VAALHANDS/worker/workerHome.php");

    }
}
}
if(isset($_POST["newWorkerEmail"]))
    {  
       
        $conn = mysqli_connect( 'localhost' , 'root', '', 'vaalhands');
        $sql = "UPDATE workerdata set workerEmail ='$newWorkerEmail'  WHERE workerID='$workerID' ";
        $result = mysqli_query($conn, $sql);

           if($result)
           {
            echo "Rerouting you to signout page" ; 
            header("refresh:2 ; url=http://localhost/VAALHANDS/signout.php");
           }       
    }

    if(isset($_POST["newWorkerPhoneNo"]))
    {
      if($_SESSION["workerPhoneNo"]!=$_POST["newWorkerPhoneNo"])
      {
        $conn = mysqli_connect( 'localhost' , 'root', '', 'vaalhands');
        $sql = "UPDATE workerdata set workerPhoneNo ='$newWorkerPhoneNo' WHERE workerID='$workerID' ";
        $result = mysqli_query($conn, $sql);
        if($_POST["newWorkerPhoneNo"]!=$_SESSION["workerPhoneNo"])
        {   
        if($result)
           {
             echo "Redirecting" ; header("refresh:2 ; url= http://localhost/VAALHANDS/signout.php");
           }
        }
      }     
    }

    if(isset($_POST["workerNewType"]))
    {
      if($_SESSION["workerType"]!=$_POST["workerNewType"])
      {
        $conn = mysqli_connect( 'localhost' , 'root', '', 'vaalhands');
        $sql = "UPDATE workerdata set workerType ='$workerNewType'  WHERE workerID='$workerID' ";
        $result = mysqli_query($conn, $sql); 
        if($result)
           {
             echo "Redirecting" ; header("refresh:0 ; url= http://localhost/VAALHANDS/worker/workerHome.php");
           }
      }    
    }


    if(isset($_POST["workerNewPassword"])!="" && $_POST["workerOldPassword"]!="")
    { 
        if($_POST["workerOldPassword"] == $_SESSION["workerPassword"])
        { 
            if($_POST["workerNewPassword"] == $_POST["confirmWorkerNewPassword"] )
            {
        $conn = mysqli_connect( 'localhost' , 'root', '', 'vaalhands');
        $sql = "UPDATE workerdata set workerPassword ='$workerNewPassword'  WHERE workerID='$workerID' ";
        $result = mysqli_query($conn, $sql);  
        if($result)
           {
             echo "Redirecting" ; header("refresh:2 ; url= http://localhost/VAALHANDS/signout.php");
           }
        } else {echo "Both Passwords need to be the same"; header("refresh:2 ; url = http://localhost/VAALHANDS/worker/updateWorkerInfo.php");}
    }  else {echo "Old Password Is not accurate! "; header("refresh:2 ; url= http://localhost/VAALHANDS/worker/updateWorkerInfo.php");}
    
    }
}
if(isset($_POST["deleteAccount"]))
{  
    session_start();
    $userPasswordForDeletion = $_POST["workerPasswordForDeletion"];
    $userID = $_SESSION["workerID"];
    if($_POST["workerPasswordForDeletion"] == $_SESSION["workerPassword"])
    {
        $conn = mysqli_connect( 'localhost' , 'root', '', 'vaalhands');
        $sql = "DELETE from workerdata WHERE workerID='$userID' and workerPassword='$userPasswordForDeletion' ";
        $result = mysqli_query($conn, $sql);  
        if($result)
           {
             echo "Rerouting to signout page" ; header("refresh:2 ; url=  http://localhost/VAALHANDS/signout.php");
           }
    }
         else {echo "Make Sure Both Passwords are same ! "; header("refresh:2 ; url=http://localhost/VAALHANDS/worker/updateWorkerInfo.php");}
}
?>