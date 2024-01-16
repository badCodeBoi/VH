<!DOCTYPE html>
<html lang="en">
<head>
    <title>Vaal workers Home</title>
    <link rel="stylesheet" href="http://localhost/VAALHANDS/CSS/worker.css">
</head>
<body >
<div id="box">
<h1 >Workers Home page</h1>
<?php
session_start();
if(isset($_SESSION["phoneOrEmail"]) )
{
    $phoneOrEmail = $_SESSION["phoneOrEmail"];
    $conn = mysqli_connect( 'localhost' ,'root','','vaalhands');
    $query = "SELECT * FROM workerdata WHERE workerEmail='$phoneOrEmail' or workerPhoneNo='$phoneOrEmail' ";
    $query_run = mysqli_query($conn,$query);
    while ($row = mysqli_fetch_array($query_run))
    {
        $_SESSION["workerName"]= $row["workerName"];
        $_SESSION["workerID"]= $row["workerID"];
        $_SESSION["workerEmail"]= $row["workerEmail"];
        $_SESSION["workerPhoneNo"]= $row["workerPhoneNo"];
        $_SESSION["workerAddress"]= $row["workerAddress"];
        $_SESSION["workerPassword"]= $row["workerPassword"];
        $_SESSION["workerType"]= $row["workerType"];
        $_SESSION["jobCompleted"]= $row["jobCompleted"];
        $_SESSION["workerRating"] = $row["workerRating"];
        $_SESSION["requestID"]="";
    }
    echo "<br> <br>";   
}
?>
    <div class="flexcentre">
    <a href="http://localhost/VAALHANDS/worker/workerHome.php" >&nbsp&nbsp&nbsp&nbspHome</a>
    <a href="http://localhost/VAALHANDS/worker/updateWorkerInfo.php">&nbsp&nbsp&nbsp&nbspUpdate Information</a>
    <a href="http://localhost/VAALHANDS/worker/workerJob.php" >&nbsp&nbsp&nbsp&nbspTake a Job</a>
    <a href="http://localhost/VAALHANDS/worker/workerManageJobs.php" >&nbsp&nbsp&nbsp&nbspManage Jobs</a>
    <a href="http://localhost/VAALHANDS/worker/workerCheckComments.php" >&nbsp&nbsp&nbsp&nbspCheck Comments</a>
    </div>
<?php echo "<h2 >".$_SESSION["Message"]."</h2> <br>";?>
<br>
<div id="card">
<fieldset >
<legend> Worker Info :</legend>
<menu>
    <h3 >
    <li>Name : <?php echo $_SESSION["workerName"] ; ?></li>
    <li>ID : <?php echo $_SESSION["workerID"] ; ?></li>
    <li>Email : <?php echo $_SESSION["workerEmail"] ; ?></li>
    <li>Phone No : <?php echo $_SESSION["workerPhoneNo"] ; ?></li>
    <li>Address : <?php echo $_SESSION["workerAddress"] ; ?></li>
    <li>Type : <?php echo $_SESSION["workerType"] ; ?></li> 
    <li>Job Completed : <?php echo $_SESSION["jobCompleted"] ; ?></li> 
    <li>Rating : <?php echo $_SESSION["workerRating"] ; ?></li> 
</h3>
</fieldset>
</div>
<br><br><br>
<fieldset id="card">
    <legend>Posted Problems </legend>
<section>
    <form action="http://localhost/VAALHANDS/worker/workerJobProcess.php">
<?php
$problemType = substr($_SESSION["workerType"],0,4);
$conn = mysqli_connect( 'localhost' ,'root','','vaalhands');
$sql = "SELECT * FROM request_data Where problemType like '$problemType%' and pickedUpBy='' ";
$query_run = mysqli_query($conn,$sql);
while ($row = mysqli_fetch_array($query_run))
{    
    echo  "<ul> <li > "."[REQUEST ID : ".$row["requestID"]."] - Problem Description  : ".$row["problemDescription"]."  #Posted On [".$row["postDate"]."- ".$row["postTime"]." ] 
    </li>  </ul>";
}
?>
</section>
</fieldset>
</form>
<br><br><br><br>
<h3><a href="http://localhost/VAALHANDS/signout.php">Sign Out</a></h3>
<div class="footer">
Copyright &badCodeBoi All Rights Reserved
</div>
</div>
</body>
</html>