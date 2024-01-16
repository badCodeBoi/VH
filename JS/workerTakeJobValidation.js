document.getElementById("requestID").addEventListener("keyup", function()
{if (document.getElementById("requestID").value == ""){
document.getElementById("errorRequestID").innerHTML = 
"Please indicate a ID";
}
else if ( 
/^[^[0-9]{1,4}}$/.test(document.getElementById("requestID").value) == false)
{document.getElementById("errorRequestID").innerHTML = 
"Please ensure your iD is your actual ID not your girlfriends numbers";
}
else{
    document.getElementById("errorRequestID").innerHTML = "";
}
}
);

document.getElementById("offeredPrice").addEventListener("keyup", function(){
if(document.getElementById("offeredPrice").value == "")
{document.getElementById("errorOfferedPrice").innerHTML =
"Please place a offer";
}
else if (/^[0-9]{1,5}$/.test(document.getElementById("offeredPrice").value) == false )
{
document.getElementById("errorOfferedPrice").innerHTML = 
"that cant be a price";
}
else
{
document.getElementById("errorOfferedPrice").innerHTML =
"";
}
});