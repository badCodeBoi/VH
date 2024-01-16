<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>  
    <title>Take a Job</title>
    <link rel="stylesheet" href="http://localhost/VAALHANDS/CSS/worker.css">
</head>
<body >
  <div id="box">
<h1 >Take A Job</h1>
<br><br>
<div class="flexcentre">
    <a href="http://localhost/VAALHANDS/worker/workerHome.php" >&nbsp&nbsp&nbsp&nbspHome</a>
    <a href="http://localhost/VAALHANDS/worker/updateWorkerInfo.php">&nbsp&nbsp&nbsp&nbspUpdate Information</a>
    <a href="http://localhost/VAALHANDS/worker/workerJob.php" >&nbsp&nbsp&nbsp&nbspTake a Job</a>
    <a href="http://localhost/VAALHANDS/worker/workerManageJobs.php" >&nbsp&nbsp&nbsp&nbspManage Jobs</a>
    <a href="http://localhost/VAALHANDS/worker/workerCheckComments.php" >&nbsp&nbsp&nbsp&nbspCheck Comments</a>
    </div>
<br> <br><br> <br>
<h3 >
<form action="http://localhost/VAALHANDS/worker/workerJobProcess.php" method="post">
<h2 class="input_h2">ENTER REQUEST ID 
<input type="text" name="requestID" id="requestID" placeholder="Request ID">
<p id="errorRequestID" ></p>
<input type="submit" name="loadInfo" value="LOAD">
</form>
<br> <br> <br>
<?php  
if($_SESSION["requestID"]!="")
  {
    echo "Request ID : " .$_SESSION["requestID"]."<br>";
    echo "Problem Description : " .$_SESSION["problemDescription"]."<br>";
    echo "Problem Type : " .$_SESSION["problemType"]."<br>";
    echo "<br> <br>USER INFO : <br> <br> <br>";
    echo "Name : " .$_SESSION["patriotName"]."<br>";
    echo "Address : " .$_SESSION["patriotAddress"]."<br>";
    echo "Phone No : " .$_SESSION["patriotPhoneNo"]."<br>";
    echo "Email : " .$_SESSION["patriotEmail"]."<br>";
  }
  else {$_SESSION["requestID"] ="";
}
?>
<br>
<form action="http://localhost/VAALHANDS/worker/workerJobProcess.php" method="post">
  Tell the user something : <br> <br>
  <textarea name="additionalMessage"  rows="10" cols="100" placeholder="ENTER MESSAGE"></textarea> <br>
  Offer Your Price : <input type="text" name="offeredPrice"  placeholder="Offered Price" id="offeredPrice"> 
  <br>
  <p id="errorOfferedPrice" ></p>
  <br>
  <input type="submit" name="offer" value="Offer">
</form>
</h2>
<br> <br>
<h3 class="button"> <a  href="http://localhost/VAALHANDS/worker/workerHome.php" >GO HOME </a></h3>
</div>
<script src="http://localhost/VAALHANDS/JS/workerTakeJobValidation.js"></script>
</body>
</html>