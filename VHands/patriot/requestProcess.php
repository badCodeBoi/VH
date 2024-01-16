<?php
session_start();
$patriotID = $_SESSION["patriotID"];

if(isset($_POST["postRequest"]))
{
if(isset($_POST["problemDescription"]))
{
    if(isset($_POST["problemType"]))
    {
        $requestedBy = $_SESSION["patriotName"];
        $problemDescription = $_POST["problemDescription"];
        $problemType = $_POST["problemType"];
        $postDate = $_POST["postDate"];
        $postTime = $_POST["postTime"];
        
        $conn = mysqli_connect( 'localhost' , 'root', '', 'vaalhands');
      $sql = "INSERT INTO request_data (patriotID, requestedBy, problemDescription, problemType, postDate,postTime) VALUES ('$userID','$requestedBy','$problemDescription'
      ,'$problemType','$postDate','$postTime')";
       $result = mysqli_query($conn, $sql);
        if($result)
        {
            $sql2 = "SELECT * FROM request_data Where patriotID ='$patriotID' and postTime = '$postTime'";
            $query_run = mysqli_query($conn,$sql2);
            $rows = mysqli_fetch_array($query_run);
            $requestID = $rows["requestID"];
            $tableName = "Temp_Bids_".$requestID;
             $sql3 = "CREATE TABLE $tableName (requestID varchar(30) NOT NULL, bidAmount varchar(10) NOT NULL , workerID varchar(5) NOT NULL , additionalMessage text NOT NULL)";
             $result2 = mysqli_query($conn, $sql3);
            if($result2)
            {
echo "Your Problem Has Been Posted";
header("refresh:5 ; url=patriotHome.php");
            }
            else {
echo "Error trying to get willing workers for post";
header("refresh:5 ; url=pariotHome.php");
            }
        }
            else {
                echo "error posting post";
                header("refresh:1 ; url=makeAPost.php");
            }
    }
else {
    echo "Stating the Problem type is mandatory"; 
    header("refresh:5 ; url=makeAPost.php");
}  
}
else {
    echo "All problems should be accompanied by a description";
    header("refresh:1 ; url=MakeAPost.php");
}
}
?>