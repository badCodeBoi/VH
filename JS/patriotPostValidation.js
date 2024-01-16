document.getElementById("patriotPost").addEventListener("keyup", function()
{
if (document.getElementById("patriotPost").value == "")
{
document.getElementById("errorPatriotPost").innerHTML = 
"Please enter atleast one statement to post";
}
else if ( 
/^[\sa-zA-Z]{20,}$/.test(document.getElementById("patriotPost").value) == false)
{document.getElementById("errorRequestID").innerHTML = 
"Please ensure your Post is atleast 20 characters long and dont try to injectS*L in my stuff";
}
else{
    document.getElementById("errorPatriotPost").innerHTML = "";
}
}
);