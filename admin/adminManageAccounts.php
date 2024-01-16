<!DOCTYPE html>
<html lang="en">
<head>
  
    <title>Manage Accounts</title>
    <link rel="stylesheet" href="http://localhost/VAALHANDS/CSS/admin.css">
</head>
<body>
    <div id="box">
<h1>Manage Accounts</h1>
<style>
        a:link {
            text-decoration:dotted;
        }
        a:hover {
            color:red;
        }
    </style>
<div id="center">
  <a href="http://localhost/VAALHANDS/admin/adminHome.php" >&nbsp&nbsp&nbsp&nbspHome</a>
  <a href="http://localhost/VAALHANDS/admin/adminManageAccounts.php">&nbsp&nbsp&nbsp&nbspManage Accounts</a>
  <a href="http://localhost/VAALHANDS/admin/adminViewAccounts.php" >&nbsp&nbsp&nbsp&nbspView All Accounts</a>
</div>
<form action="http://localhost/VAALHANDS/admin/adminProcess.php"  method = "post">
<h3>
    User Type : <select name="userType" >
     <option value="" selected></option>  
     <option value="Patriot">Patriot</option>
     <option value="Worker">Handyman</option>
     </select>
     <br>
    User ID : <input type ="text" name="userIDtoDelete" placeholder="USER ID" id="userID">
    <p id="errorUserID"></p>
    <br><br>     
    <br>
    <p>
     STATUS
    </p>
    <select name="statuss" >
     <option value="" selected></option>  
     <option value="Banned" >Banned Until Further Notice</option>
     <option value="Warned" >Warning for unusual Activity</option>
     <option value="Valid">Unban</option> 
     </select>
    <br> <br>
   <br> <br> <br>
   <input type="submit" name="changeStatus" value="CHANGE STATUS" >
</h3>
</form>
<script src="http://localhost/VAALHANDS/JS/adminManageAccountValidation.js"></script>
</div>
</body>
</html>