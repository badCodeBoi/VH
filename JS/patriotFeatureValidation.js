document.getElementById("requestID").addEventListener("keyup", function()
{
if (document.getElementById("requestID").value == "")
{
document.getElementById("errorRequestID").innerHTML = "Please state the users ID";
}
else if ( 
/^[0-9]{1,4}$/.test(document.getElementById("requestID").value) == false
)
{
document.getElementById("errorRequestID").innerHTML = "make sure you are entering the correct ID";
}
else{
    document.getElementById("errorRequestID").innerHTML = "";
}
}
);

document.getElementById("workerID").addEventListener("keyup", function()
{
if (document.getElementById("workerID").value == "")
{document.getElementById("errorWorkerID").innerHTML = 
"please give us the workers ID";
}
else if (/^[0-9]{1,4}$/.test(document.getElementById("workerID").value) == false)
{
document.getElementById("workerID").innerHTML =
"REtry entering that so called ID, LOL";
}
else{
document.getElementById(errorWorkerID).innerHTML = "";
}
});