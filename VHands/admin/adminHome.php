<!DOCTYPE html>
<html lang="en">
<head>
    <title>ADMIN Home</title>
    <link rel="stylesheet" href="http://localhost/VAALHANDS/CSS/admin.css">
</head>
<body>
  <div id="box">
<h1 >ADMIN HOME PAGE</h1>
<div id="center" >
  <a href="http://localhost/VAALHANDS/admin/adminHome.php" >&nbsp&nbsp&nbsp&nbspHome</a>
  <a href="http://localhost/VAALHANDS/admin/adminManageAccounts.php">&nbsp&nbsp&nbsp&nbspManage Accounts</a>
  <a href="http://localhost/VAALHANDS/admin/adminViewAccounts.php" >&nbsp&nbsp&nbsp&nbspView All Accounts</a>
</div>
<br> <br>
<fieldset>
<legend>All Posts</legend>
<?php
session_start();
$conn = mysqli_connect( 'localhost' ,'root','','vaalhands');
$sql = "SELECT * FROM request_data  ";
$query_run = mysqli_query($conn,$sql);
while ($row = mysqli_fetch_array($query_run))
{    
    echo  "<ul> <li> "."[Req ID : ".$row["requestID"]."] - Problem Description  : ".$row["problemDescription"]."  #Posted On [".$row["postDate"]."- ".$row["postTime"].
    " ]<br> </li>  </ul>";     
}
?>
</fieldset>
<br><br><br><br>
<h3><a href="http://localhost/VAALHANDS/signout.php">Sign Out</a> </h3>
<div class="footer">
Copyright &badCodeBoi All Rights Reserved
</div>
</div>
</body>
</html>