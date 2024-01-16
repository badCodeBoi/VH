<!DOCTYPE html>
<html lang="en">
<head>
    <title>Manage My Post</title>
    <link rel="stylesheet" href="http://localhost/VAALHANDS/CSS/patriotHome.css">
</head>
<body>
 <div id="box">
    <h1>Manage Posts</h1>
    <br><br>
    
<div id="center">
<a href="http://localhost/VAALHANDS/patriot/patriotHome.php" >&nbsp&nbsp&nbsp&nbspHome</a>
        <a href="http://localhost/VAALHANDS/patriot/updatePatriotInfo.php">&nbsp&nbsp&nbsp&nbspUpdate  yourInformation</a>
        <a href="http://localhost/VAALHANDS/patriot/makeAPost.php" >&nbsp&nbsp&nbsp&nbspMake a Post</a>
        <a href="http://localhost/VAALHANDS/patriot/managePosts.php" >&nbsp&nbsp&nbsp&nbspManage your Posts</a>
        <a href="http://localhost/VAALHANDS/patriot/checkOffers.php" >&nbsp&nbsp&nbsp&nbspSee current Offers</a>
</div>      
<br><br>
<?php
echo "<form action= 'http://localhost/VAALHANDS/patriot/managePosts.php' methods='post'>";
session_start();
$patriotID = $_SESSION["patriotID"];
$conn = mysqli_connect('localhost' , 'root', '', 'vaalhands');
$sql1 =  "SELECT * FROM request_data WHERE patriotID = '$patriotID'";
$query_run = mysqli_query($conn, $sql1);
echo "Please choose your request ID : ";
echo" <select name='requestID'> ";
echo "<option value='' selected></option> ";
while ($row = mysqli_fetch_array($query_run))
{
$_SESSION["reqID"] = $row["requestID"];
$reqID = $row["requestID"];
echo "<option value=".$reqID.">".$reqID."</option>  ";
}
echo "</option> </select>";
echo "<input type='submit' name='Load' value='Load'>";
echo "</form>";


echo "form action= 'http://localhost/VAALHANDS/patriot/managePostProcess.php' method='post' >";
if(isset($_POST["load"]))
{
    if($_POST["requestID"]!="")
    {
      $reqID =  $_POST["requestID"] ;
      $sql2 = "SELECT * FROM request_data Where requestID ='$reqID' ";
      $query_run = mysqli_query($conn,$sql2);
      $row2 = mysqli_fetch_array($query_run);
      if($row2!=null)
      {   
          $_SESSION["workerID"] = $row2["pickedUpBy"];
          $id = $_SESSION["workerID"] ;
          $pickedUpBy = $row2["pickedUpBy"];
          $problemCompleted = $row2["problemCompleted"];
          $problemDescription = $row2["problemDescription"];
          $problemType = $row2["problemType"];
          echo "<h3>Problem Description : </h3>"; 
          echo "<textarea name='problemDescription'  rows='20' cols='150'>".$problemDescription. "</textarea>";
          echo "<br>";
          echo "<br>";

          echo" Problem Type :";  

          echo" <select name='problemType'> ";
          echo "<option value=".$problemType." selected>".$problemType."</option> ";
          echo "<option value=Electricity>Electricity</option> ";
          echo "<option value=Carpenting>Carpenting</option> ";
          echo "<option value=Installation>Installation</option> ";
          echo "<option value=Cleaning>Cleaning</option> ";
          echo "<option value=Painting>Painting</option> ";
          echo "<option value=Roofwork>Roofwork</option>";
          echo "<option value=Gardening>Gardening</option>";
          echo "<option value=Tree-falling>Tree-falling</option>";
          echo "<option value=Plumbing Work>Plumbing Work</option>";
          echo "<option value=Home work contracts>Home work contracts</option>";
          echo "</select>";
          echo "<br><br>"; 
          echo "Problem Completed : ".$problemCompleted." % <br><br>";
          echo "Problem Picked Up By : ID [".$pickedUpBy."] <br><br>";

          date_default_timezone_set('Africa/Cape Town');
          echo "Today's Date : <input type = 'text' name='postDate'  value=".date('d/m/y')." readonly><br><br>";   
          echo "Current Time : <input type = 'text' name='postTime'  value=".date('h:i:s')." readonly><br><br>";
          echo "VISIT a VAAL Workers PROFILE --- <a href='http://localhost/VAALHANDS/worker/workerProfile.php?id=$id'> Check Profile </a>";

          echo "<br><br>";   
          echo "<input type='submit' name='updatePost' value='Update' enabled >"; 
          echo "<br><br>"; 
          echo "<input type='submit' name='deletePost' value='DELETE POST' enabled>"; 
          
      }
    }
    else {echo "Post Not in VAALHANDS YET" ;}
}
?>
</form>
</div>
</body>
</html>