<?php
session_start();

if(isset($_POST["loadInfo"]))
{
    $requestID = $_POST["requestID"];
    $conn = mysqli_connect( 'localhost' , 'root', '', 'vaalhands');
    $sql = "SELECT * from request_data where requestID = '$requestID'";
    $query_run = mysqli_query($conn,$sql);
    $row = mysqli_fetch_array($query_run);
    if($row != null)
    {
        $_SESSION["requestID"] = $row["requestID"];
        $_SESSION["problemDescription"] = $row["problemDescription"];
        $_SESSION["problemType"] = $row["problemType"];
          
                $userID = $row["patriotID"];
                $conn = mysqli_connect( 'localhost' , 'root', '', 'vaalhands');
                $sql = "SELECT * from patriot_data where patriotID = '$patriotID'";
                $query_run = mysqli_query($conn,$sql);
                $row2 = mysqli_fetch_array($query_run);
        if($row2 !=null)
        {
            $_SESSION["patriotName"] = $row2["patriotName"];
            $_SESSION["patriotAddress"] = $row2["patriotAddress"];
            $_SESSION["patriotEmail"] = $row2["patriotEmail"];
            $_SESSION["patriotPhoneNo"] = $row2["patriotPhoneNo"];
        }
        else{
            echo "Thres no such patriot in our systems";
        }
        echo "Job Found";
        header("refresh:1 ; url=http://localhost/VAALHANDS/worker/workerJob.php ");
    }
    else{
        echo "Job couldn't be Found. make sure the Request ID is accurate";
  header("refresh:2 ; url=http://localhost/VAALHANDS/worker/workerJob.php ");
    }
}
if(isset($_POST["offer"]) && $_SESSION["requestID"]!="")
{
    if($_POST["offeredPrice"]!="")
    {
        $requestID = $_SESSION["requestID"];   
        $offeredPrice = $_POST["bidAmount"];
        $workerID = $_SESSION["workerID"];
        $message = $_POST["additionalMessage"];
        $tableName = "temp_bids_1".$requestID;
        $conn = mysqli_connect( 'localhost' , 'root', '', 'vaalhands');
        $sql = "INSERT INTO $tableName (requestID, bidAmount, workerID, additionalMessage) VALUES ('$requestID' , '$offeredPrice' , '$workerID', '$message' );";
        if(mysqli_query($conn, $sql))
        {
        echo "Offer Placed. Stay Tuned For Updates";
        header("refresh:2 ; url=http://localhost/VAALHANDS/worker/workerHome.php");
        }
        else {
            echo "Error in Placing Offer";
            header("refresh:2 ; url=http://localhost/VAALHANDS/patriot/workerJob.php");
        }
    }
    else 
    {
        echo "Please offer a price for the job";
        header("refresh:2 ; url=http://localhost/VAALHANDS/patriot/workerJob.php");
    }
}
    else {
        header("refresh:1 ; url=http://localhost/VAALHANDS/patriot/workerJob.php");
    }
if(isset($_POST["updateJobInfo"]))
{
    if(isset($_POST["requestID"]))
    {
        if(isset($_POST["problemCompleted"]))
        {   
            $requestID = $_POST["requestID"];
            
            $conn = mysqli_connect( 'localhost' , 'root', '', 'vaalhands');
            $sql = "SELECT * from request_data where requestID = '$requestID'";
            $query_run = mysqli_query($conn,$sql);
            $row2 = mysqli_fetch_array($query_run);
            if($row2 !=null)
            {
                $problemCompleted = $_POST["problemCompleted"];
                $sql = "UPDATE request_data set problemCompleted ='$problemCompleted'  WHERE requestID='$requestID'";
                $result = mysqli_query($conn, $sql);
                   if($result)
                   {
                    echo "Updated" ; header("refresh:2 ;url= http://localhost/VAALHANDS/patriot/workerManageJobs.php");
                   } 
                    else {
                    echo "Could not Update";
                    header("refresh:2 ; url=http://localhost/VAALHANDS/patriot/workerManageJobs.php");
                     }                
            }
            else {
                echo "Request ID not Found";
                header("refresh:2 ; url=http://localhost/VAALHANDS/patriot/workerManageJobs.php");
                }
        }
        else {
            echo "Please Post Your Progression";
            header("refresh:2 ; url=http://localhost/VAALHANDS/worker/workerManageJobs.php");
             }
}
   else {
        echo "Please Provide Request ID";
        header("refresh:2 ; url=http://localhost/VAALHANDS/patriot/workerManageJobs.php");
         }
}


if(isset($_POST["finishJob"]))
{
    if(isset($_POST["requestID"]))
    {
        $requestID = $_POST["requestID"];
        $conn = mysqli_connect( 'localhost' , 'root', '', 'vaalhands');
        $sql = "SELECT * from request_data where requestID = '$requestID'";
        $query_run = mysqli_query($conn,$sql);
        $row2 = mysqli_fetch_array($query_run);
        if($row2 !=null)
        {  
            $conn = mysqli_connect( 'localhost' , 'root', '', 'vaalhands');
            $problemCompleted ='DONE';
            $sql = "UPDATE request_data set problemCompleted ='$problemCompleted' WHERE requestID='$requestID' ";
            $result = mysqli_query($conn, $sql);   
               if($result)
               {
                 $workerID = $_SESSION["workerID"]; 
                 $conn = mysqli_connect( 'localhost' , 'root', '', 'vaalhands');
                 $sql = "UPDATE workerdata set jobCompleted = jobCompleted +1  WHERE workerID='$workerID' ";
                 $result = mysqli_query($conn, $sql);

                 if($result)
                 {
                    echo "JOB FINISHED" ;
                    header("refresh:2 ;url= http://localhost/VAALHANDS/patriot/workerHome.php");
                 }
               }
        } else {
            echo "Request ID not Found";
            header("refresh:2 ; url=http://localhost/VAALHANDS/pariot/workerManageJobs.php");
             }
    }  
    else
    {
        echo "Please Provide Request ID";
        header("refresh:2 ; url=http://localhost/VAALHANDS/patriot/workerManageJobs.php");         
    }
}
?>