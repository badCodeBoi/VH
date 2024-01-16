<!DOCTYPE html>
<html lang="en">
<head>
   <title>View All VAALHANDS Accounts</title>
   <link rel="stylesheet" href="http://localhost/VAALHANDS/CSS/admin.css">
</head>
<body>
 <div id="box">
<h1 >View All Accounts</h1>
<div id="center">
  <a href="http://localhost/VAALHANDS/admin/adminHome.php" >&nbsp&nbsp&nbsp&nbspHome</a>
  <a href="http://localhost/VAALHANDS/admin/adminManageAccounts.php">&nbsp&nbsp&nbsp&nbspManage Accounts</a>
  <a href="http://localhost/VAALHANDS/admin/adminViewAccounts.php" >&nbsp&nbsp&nbsp&nbspView All Accounts</a>
  
</div>
<br> <br>
<p id="table">REGULAR VAAL PATRIOTS ACCOUNTS</p>

<table>
    <th>
    <tr>
    <th >ID</th>
    <th>Name</th>
    <th >Gender</th>
    <th> Address</th>
    <th >Phone No</th>
    <th >Email</th>
    <th >Status</th>
  </tr>
    </th>
<?php
$conn = mysqli_connect( 'localhost' ,'root','','vaalhands');
$sql = "SELECT * FROM patriot_data ";
$query_run = mysqli_query($conn,$sql);

while ($row = mysqli_fetch_array($query_run))
{    
    echo  "
    <td  >".$row["patriotID"]."</td>
      <td>".$row["patriotName"]."</td>
      <td >".$row["patriotGender"]."</td>
      <td >".$row["patriotAddress"]."</td>
      <td >".$row["patriotPhoneNo"]."</td>
      <td >".$row["patriotEmail"]."</td>
      <td >".$row["patriotStatus"]."</td>
    </tr>
  ";     
}
?>
</table>
<br> <br>
<p id="table">WORKERS of the VAAL ACCOUNTS</p>
<table>
    <th>
    <tr>
    <th  >ID</th>
    <th >Name</th>
    <th >Gender</th>
    <th> Address</th>
    <th >Phone No</th>
    <th >Email</th>
    <th>Type</th>
    <th >Status</th>
    <th >PROFILE LINK</th>
  </tr>
    </th>
<?php
session_start();
$conn = mysqli_connect( 'localhost' ,'root','','vaalhands');
$sql = "SELECT * FROM workerdata ";
$query_run = mysqli_query($conn,$sql);

while ($row = mysqli_fetch_array($query_run))
{    
  $_SESSION["workerID"] = $row["workerID"];
  $id = $_SESSION["workerID"];
    echo  "
      <td > ID ".$_SESSION["workerID"] ."</td> 
      <td >".$row["workerName"]."</td>
      <td >".$row["workerGender"]."</td>
      <td >".$row["workerAddress"]."</td>
      <td >".$row["workerPhoneNo"]."</td>
      <td >".$row["workerEmail"]."</td>
      <td >".$row["workerType"]."</td>
      <td >".$row["workerStatus"]."</td>
      <td> <a href='http://localhost/VAALHANDS/worker/workerProfile.php?id=$id'> Check Profile </a> </td>
    </tr>";     
}
?>
</table>
</div>
</body>
</html>