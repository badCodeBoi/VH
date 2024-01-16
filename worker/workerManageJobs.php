<!DOCTYPE html>
<html lang="en">
<head>
    <title>Manage Jobs</title>
    <link rel="stylesheet" href="http://localhost/VAALHANDS/CSS/worker.css">
</head>
<body>
  <div id="box">
    <h1>MANAGE JOBS</h1>
    <br> <br>
    <div class="flexcentre">
    <a href="http://localhost/VAALHANDS/worker/workerHome.php" >&nbsp&nbsp&nbsp&nbspHome</a>
    <a href="http://localhost/VAALHANDS/worker/updateWorkerInfo.php">&nbsp&nbsp&nbsp&nbspUpdate Information</a>
    <a href="http://localhost/VAALHANDS/worker/workerJob.php" >&nbsp&nbsp&nbsp&nbspTake a Job</a>
    <a href="http://localhost/VAALHANDS/worker/workerManageJobs.php" >&nbsp&nbsp&nbsp&nbspManage Jobs</a>
    <a href="http://localhost/VAALHANDS/worker/workerCheckComments.php" >&nbsp&nbsp&nbsp&nbspCheck Comments</a>
    </div>
<br> <br> <br>
<h2 class="input_h2">
<?php
session_start();
$hmID = $_SESSION["workerID"];
$conn = mysqli_connect( 'localhost' ,'root','','vaalhands');
$query = "SELECT * FROM request_data WHERE  pickedUpBy='$workerID' and problemCompleted!='DONE' ";
$query_run = mysqli_query($conn,$query);
while ($row = mysqli_fetch_array($query_run))
    {
      echo "REQUEST ID : ".$row["requestID"]."<br>";
      echo "Problem Description : ".$row["problemDescription"]."<br>";
      echo "Problem Type : ".$row["problemType"]."<br>";
      echo "Problem Completed : ";
      echo "<input type='text' name=problemCompleted' value= ".$row["problemCompleted"]." readonly>";
      echo "<br><br>";
    }    
  ?>
</h2>
<br><br>
<h2 class="input_h2">
<form action="http://localhost/VAALHANDS/worker/workerJobProcess.php" method="post">
  Request ID : <input type="text" name="requestID" placeholder="Req ID" id="requestID">
  <p id="errorRequestID"></p>
  Problem Completed : <input type="text" name="problemCompleted" placeholder="%" id="problemCompleted">
  <p id="errorProblemCompleted"></p>
<input type="submit" name="updateJobInfo" value="Update">
<br> <br> <br>
FINISH PROBLEM  <input type="submit" name="finishJob" value="Finish">
</form>
</h2>

</div>
<script src="http://localhost/VAALHANDS/JS/workerManageJobs.js"></script>
</body>
</html>