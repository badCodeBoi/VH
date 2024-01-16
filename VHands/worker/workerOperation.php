<?php
session_start();

if (isset($_POST["postReview"]))
{
if($_POST["comment"])
{
if(isset($_POST["rating"]))
{
    date_default_timezone_set('Africa/Johhanesburg'); 
    $comment = $_POST["comment"];
    $rating = $_POST["rating"];
    $patriotID = $_SESSION["patriotID"];
    $commentDate = date('d/m/y');
    $commentTime = date('h:i:s');
    $workerID = $_SESSION["workerID"];

    $conn = mysqli_connect('localhost' , 'root', '', 'vaalhands');
    $sql = "INSERT INTO comments (workerID, userID, comment, rating, commentDate, commentTime) VALUES ('$workerID','$userID','$comment','$rating','$commentDate','$commentTime')";

if(mysqli_query($conn, $sql))
{
echo "Review confirmed";
header("refresh:2 ; url=http://localhost/VAALHANDS/patriot/patriotHome.php");
}
}
else {
    echo "Please rate first";
    header("refresh:2 ; url=http://localhost/VAALHANDS/patriot/patriotHome.php");
}
}
else{
echo "Post a comment";
header("refresh:2 ; url=http://localhost/VAALHANDS/worker/workerProfile.php");
}
}
?>