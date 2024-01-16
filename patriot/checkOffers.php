<!DOCTYPE html>
<html lang="en">
<head>
   <title>OFFERS</title>
<link rel="stylesheet" href="http://localhost/VAALHANDS/CSS/patriotHome.css">
</head>
<body>
    
<div id="box">
<h1>check Offers</h1>
<br><br>
<div id="center">
<a href="http://localhost/VAALHANDS/patriot/patriotHome.php" >&nbsp&nbsp&nbsp&nbspHome</a>
  <a href="http://localhost/VAALHANDS/patriot/updatePatriotInfo.php">&nbsp&nbsp&nbsp&nbspUpdate Information</a>
  <a href="http://localhost/VAALHANDS/patriot/makeAPost.php" >&nbsp&nbsp&nbsp&nbspMake a Post</a>
  <a href="http://localhost/VAALHANDS/patriot/managePosts.php" >&nbsp&nbsp&nbsp&nbspManage Posts</a>
  <a href="http://localhost/VAALHANDS/patriot/checkOffers.php" >&nbsp&nbsp&nbsp&nbspSee Offers</a>
</div>
<div id="margin">
    <?php
    echo "<br>";
    session_start();
    $patriotID = $_SESSION["patriotID"];
    $conn = mysqli_connect('localhost', 'root', '', 'vaalhands');
    $sql = "SELECT * FROM request_data where patriotID = '$patriotID' and pickedUpBy=''";
    $query_run = mysqli_query($conn,$sql);

    while ($row = mysqli_fetch_array($query_run))
    {
        $tableName = "Temp_Bids_".$row["requestID"];
        $requestID = $row["requestID"];
        echo "OFFERS FOR REQ ID :". $requestID."<br><br>";
        $sql1 = "SELECT * FROM $tableName ORDER BY bidAmount ASC";
        $query_run1 = mysqli_query($conn,$sql1);
    
        while($row1 = mysqli_fetch_array($query_run1))
        {   
            $_SESSION["workerID"]= $row1["workerID"];
            $id =  $_SESSION["workerID"];
            echo "BID AMOUNT : ". $row1["bidAmount"]." Worker ID : [". $row1["workerID"]."] -- Message : ". $row1["additionalMessage"]."<br>"; 
            echo "<a href='http://localhost/VAALHANDS/worker/workerProfile.php?id=$id'> Check Profile </a>";
            echo "<br>";
        }    
        echo "<br>";
    }
   ?>
   
   <div id="magin">
    <form action="http://localhost/VAALHANDS/patriot/offerProcess.php" method="post">
        <br><br>
        Enter Request ID :
        <input type="text" name="requestID" id="requestID">
        <p id="errorRequetID"></p>
        Enter Worker ID :
        <input type="text" name="workerID" id="workerID">
        <p id="errorWorkerID"></p>
        <input type="submit" name="giveJob" value="Give the Job">
</form>
</div> 

<div class="footer"> copyright 2024 B.W.Taunyane. All rights reserved.
</div>
<script src="http://localhost/VAALHANDS/JS/patriotFeatureValidation.js"></script>
</div>
</body>
</html>