document.getElementById("userID").addEventListener("keyup", function()
{
if (document.getElementById("userID").value == "")
{
document.getElementById("errorUserID").innerHTML = "Please state the users ID";
}
else if ( /^[0-9]{1,4}$/.test(document.getElementById("userID").value) == false
)
{
document.getElementById("errorUserID").innerHTML = "make sure you are entering the correct ID";
}
else{
    document.getElementById("errorUserID").innerHTML = "";
}
}
);