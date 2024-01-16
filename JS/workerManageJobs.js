document.getElementById("requestID").addEventListener("keyup", function()
{if (document.getElementById("requestID").value == ""){
document.getElementById("errorRequestID").innerHTML = 
"Please indicate a ID";
}
else if ( 
/^[^[0-9]{1,4}}$/.test(document.getElementById("requestID").value) == false)
{document.getElementById("errorRequestID").innerHTML = 
"Please ensure your Post is aactual ID not your girlfriends numbers";
}
else{
    document.getElementById("errorRequestID").innerHTML = "";
}
}
);

document.getElementById("problemCompleted").addEventListener("keyup", function()
{if (document.getElementById("problemCompleted").value == ""){
document.getElementById("errorProblemCompleted").innerHTML = 
"Please indicate if problem has been resolved/completed or not";
}
else if ( 
/^[0-9][0-9]$/.test(document.getElementById("problemCompleted").value) == false)
{document.getElementById("errorProblemCompleted").innerHTML = 
"Please indicate how far are we from completion using 10%-99%";
}
else{
    document.getElementById("errorProblemCompleted").innerHTML = "";
}
}
);