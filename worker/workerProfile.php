<!DOCTYPE html>
<html lang="en">
<head>
   <title>Worker profiles</title>
   <link rel="stylesheet" href="http://localhost/VAALHANDS/CSS/workerProfile.css">
</head>
<body>
<h1 style="text-align: center;">PROFILE</h1>
<div id="basicInfo">
<div id="magin">
<?php
echo "<br>";
$GLOBALS["count"] = 1;
$GLOBALS["rating"] = 0;
if(session_status()>=0)
{
session_start();
}

function getRating($workerID)
{
    $conn = mysqli_connect( 'localhost' ,'root','','vaalhands');
    $sql = "SELECT * from comments where workerID = '$workerID'";
    $query_run = mysqli_query($conn,$sql);
while ($row = mysqli_fetch_array($query_run))
{
$GLOBALS["rating"]= ($row["rating"]+$GLOBALS["rating"]);
$GLOBALS["count"]++;
}
$rating =round($GLOBALS["rating"]/ $GLOBALS["count"] , 3);
$sql ="UPDATE workerdata set workerRating= '$rating' where workerID=$workerID";
$query_run = mysqli_query($conn, $sql);
return $rating;
}
$workerID = $_GET["id"];
$_SESSION["workerID"] = $workerID;
if($workerID != null)
{
    $conn = mysqli_connect( 'localhost' ,'root','','vaalhands');
    $sql = "SELECT * FROM workerdata Where workerID ='$workerID' ";
    $query_run = mysqli_query($conn,$sql);
    while ($row = mysqli_fetch_array($query_run))
    {    
        echo "ID : ".$row["workerID"]."<br>";
        echo "Name : ".$row["workerName"]."<br>";
        echo "Rating : ".getRating($row["workerID"])."<br>";
        echo "Phone No : ".$row["workerPhoneNo"]."<br>";
        echo "Email : ".$row["workerEmail"]."<br>";
        echo "Type : ".$row["workerType"]."<br>";
      //  echo "Job Completed : ".$row["jobCompleted"]."<br>";
        echo "Total Reviews : ".$GLOBALS["count"]."<br>";
    }}
?>
<br><br>
<form action="http://localhost/VAALHANDS/worker/workerOperation.php" method = "post">
<div id="comment">Comment here:<br><br>
<textarea name="comment" col="60" rows="10" id="commentBox" class="form-control"></textarea>
</div>
<br><br>
<div id="rating">
    <br>
    Rate : 
  1<input type="radio" name="rating" value ="1" id="radioButton" class="form-control">
  2<input type="radio" name="rating" value ="2" id="radioButton" class="form-control">
  3<input type="radio" name="rating" value ="3" id="radioButton" class="form-control">
  4<input type="radio" name="rating" value ="4" id="radioButton" class="form-control">
  5<input type="radio" name="rating" value ="5" id="radioButton" class="form-control">
  <br><br>
</div>
<br>
<input type="submit" name="postReview" value="POST" id="PostButton">
</form>
<br><br>
</div>
</div>
</body>
</html>