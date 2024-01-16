<?php
session_start();
if(isset($_POST["requestID"]))
{
if (isset($_POST["workerID"]))
{
$reqID = $_POST["requestID"];
$workerID = $POST["workerID"];
$conn = mysqli_connect('localhost', 'root', '' , 'vaalhands');
$sql = "SELECT * FROM request_data where requestID = '$reqID' and pickedUpBy=''";  
$query_run = mysqli_query( $conn,$sql);
$row = mysqli_fetch_array($query_run);

if($row != null)
{
    $reqID = $_POST["requestID"];
    $workerID = $_POST["workerID"];
    $conn = mysqli_connect('localhost' , 'root' , '' , 'vaalhands');
    $sql = "SELECT * from workerdata where workerID='$workerID'";
    $result = mysqli_query($conn, $sql);
    $count = mysqli_num_rows($result);
    if($count !=0)
    {
    $conn = mysqli_connect('localhost' , 'root', '', 'vaalhands');
    $sql = "UPDATE request_data set pickedUpBy = '$workerID' where requestID = '$reqID'";
    $result = mysqli_query($conn ,$sql);
    if($result )
    {
    $conn = mysqli_connect('localhost', 'root', '', 'vaalhands');
    $tableName = "Temp_Bids_".$reqID;
    $sql = "DROP Table $tableName";
    $result = mysqli_query($conn, $sql);
        if($result)
        {
        echo "Job Taken";
        header ("refresh:2 ; url=http://localhost/VAALHANDS/patriot/patriotHome.php");
    }
    }
}
else {echo "Theres no such worker in the Vaal"; header("refresh:2 ; url=http://localhost/VAALHANDS/patriot/checkOffers.php");}
}
else {echo "Taken or it doesnt exist in our systems"; header("refresh:2 ; url=http://localhost/VAALHANDS/patriot/checkOffers.php");}
}
else {echo "Please fill in a worker ID to proceed"; header("refresh:2 ; url=http://localhost/VAALHANDS/patriot/checkOffers.php");}
}
else {echo "Please give a Requesting identifier"; header ("refresh:2 ; url=http://localhost/VAALHANDS/patriot/checkOffers.php");
}
?>