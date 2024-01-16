<?php
$session_start();
if(isset($_POST["updatePost"]))
{
$reqID = $_SESSION['reqID'];
if(isset($_POST["problemDescription"]))
{
    $newProblemDescription = $_POST["problemDescription"];
    $newPostDate = $_POST["postDate"];
    $newPostTime= $_POST["postTime"];
    $conn = mysqli_connect( 'localhost' , 'root', '', 'vaalhands');
        $sql = "UPDATE request_data set problemDescription ='$newProblemDescription' , postDate ='$newPostDate',postTime ='$newPostTime' WHERE requestID='$reqID';";
        $result = mysqli_query($conn, $sql);
    if($result)
    {
header("refresh:1 ; url=http://localhost/VAALHANDS/patriot/patriotHome.php");
    }
    else
    {
        echo "Couldnt post the problem description";
        header("refresh: 1 ; url=http://localhost/VAALHANDS/patriot/managePosts.php");
    }    
}
if(isset($_POST["problemType"]))
{
    $reqID = $_SESSION["reqID"];
    $newProblemType = $_POST["problemType"];
    $newPostDate = $_POST["postDate"];
    $newPostTime= $_POST["postTime"];

    $conn = mysqli_connect( 'localhost' , 'root', '', 'vaalhands');
    $sql = "UPDATE request_data set problemType ='$newProblemType', postDate ='$newPostDate',postTime ='$newPostTime'  WHERE requestID='$reqID';";
    $result = mysqli_query($conn, $sql);
    if($result)
    {
        header ("refresh:1 ; url=http://localhost/VAALHANDS/patriot/patriotHome.php");
    }
    else {echo "Problem type was not post due to some fault"; header("refresh: 1 ; url=http://localhost/VAALHANDS/patriot/managePosts.php");}
}
}


if(isset($_POST["deletePost"]))
{
    $reqID = $_SESSION["reqID"];
    $conn = mysqli_connect( 'localhost' , 'root', '', 'vaalhands');
    $sql = "SELECT * from request_data WHERE requestID='$reqID' ";
    $query_run = mysqli_query($conn,$sql);
    $row = mysqli_fetch_array($query_run);
    if($row["pickedUpBy"] =="")
    {
        $conn = mysqli_connect( 'localhost' , 'root', '', 'vaalhands');
        $sql = "DELETE from request_data WHERE requestID='$reqID' and pickedUpBy='' ";
        $result = mysqli_query($conn, $sql);
        if($result)
        {
            $conn = mysqli_connect( 'localhost' , 'root', '', 'vaalhands');   
            $tableName = "Temp_Bids_".$reqID;   
            $sql = "DROP table $tableName";
            $result = mysqli_query($conn, $sql);
            if($result)
            {
            echo "Post has been Removed/Popped";
            header ("refresh:2 ; url=http://localhost/VAALHANDS/patriot/patriotHome.php");
            }
        }
    }
    else {echo "Post couldn't Pop"; header ("refresh:2 ; url=http://localhost/VAALHANDS/patriot/patriotPosts.php");}
}
?>