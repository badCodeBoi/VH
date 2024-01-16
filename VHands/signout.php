<?php
if(session_status()>=0)
{session_start();
session_unset();
if(session_destroy())
{
echo "Bye now, hope to see you again soon";
}
else {
    echo "OMG COULDN't sign out";}
}
header("refresh:1 ; url=http://localhost/VAALHANDS/main.php");
?>
<body style="margin: 80px; background-image: url('16.jpeg')">
