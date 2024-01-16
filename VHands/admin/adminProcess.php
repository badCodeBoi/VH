<?php
if(isset($_POST["changeStatus"]))
{
       if($_POST["userType"]=="Patriot")
       {
        $patriotStatus = $_POST["statuss"];  
        $patriotID= $_POST["userIDtoDelete"];
        $conn = mysqli_connect( 'localhost' , 'root', '', 'vaalhands');
        $sql = "UPDATE patriot_data set statuss ='$patriotStatus' WHERE userIDtoDelete='$patriotID'";
        $result = mysqli_query($conn, $sql);
                if($result)
           {
             echo "Redirecting" ; 
             header("refresh:0 ; url= adminViewAccounts.php");
           }
        }
        if($_POST["userType"]=="Worker")
       {
        $workerStatus = $_POST["statuss"];  
        $workerID= $_POST["userIDtoDelete"];
        $conn = mysqli_connect( 'localhost' , 'root', '', 'vaalhands');
        $sql = "UPDATE workerdata set statuss ='$workerStatus' WHERE userIDtoDelete='$workerID'";
        $result = mysqli_query($conn, $sql);     
        if($result)
           {
             echo "Redirecting" ;
              header("refresh:0 ; url= adminViewAccounts.php");
           }
        }      
}
?>