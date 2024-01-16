<!DOCTYPE html>
<html lang="en">
<head>
    <title>Comments</title>
    <link rel="stylesheet" href="http://localhost/VAALHANDS/CSS/worker.css">
</head>
<body>
<div id="box">
    <h1>COMMENTS</h1> <br> <br>
    <div class="flexcentre">
    <a href="http://localhost/VAALHANDS/worker/workerHome.php" >&nbsp&nbsp&nbsp&nbspHome</a>
    <a href="http://localhost/VAALHANDS/worker/updateWorkerInfo.php">&nbsp&nbsp&nbsp&nbspUpdate Information</a>
    <a href="http://localhost/VAALHANDS/worker/workerJob.php" >&nbsp&nbsp&nbsp&nbspTake a Job</a>
    <a href="http://localhost/VAALHANDS/worker/workerManageJobs.php" >&nbsp&nbsp&nbsp&nbspManage Jobs</a>
    <a href="http://localhost/VAALHANDS/worker/workerCheckComments.php" >&nbsp&nbsp&nbsp&nbspCheck Comments</a>
    </div>
    <br> <br>
    <fieldset id="card">
        <legend>
            Comments
        </legend>
    <?php
    session_start();
     if($_SESSION["workerID"]!="")
     {      
            $hmID = $_SESSION["workerID"];
            $conn = mysqli_connect( 'localhost' ,'root','','vaalhands');
            $query = "SELECT * FROM comments WHERE workerID='$workerID' ";
            $query_run = mysqli_query($conn,$query);
            while ($row = mysqli_fetch_array($query_run))
            {
               echo "<li> Comment : ".$row["comment"]." , From [".$row["patriotID"]."] , #Comment Time  ".$row["commentDate"]." , ".$row["commentTime"]."<br><br></li>";
            }
     }
    ?>
     </fieldset>
</div>
</body>
</html>