document.getElementById("name").addEventListener('keyup', function() 
{
    if (document.getElementById("name").value == "") {
        document.getElementById("errorName").innerHTML =
        "Please fill out your Name";

    } else if (/^[\sa-zA-Z]+$/.test(document.getElementById("name").value) == false) {
        document.getElementById("errorName").innerHTML = 
        "Inavalid First Name";
    } else {
        document.getElementById("errorName").innerHTML = "";
    }
});
document.getElementById("phoneNo").addEventListener('keyup', function() 
{
    if (document.getElementById("phoneNo").value == "") {
        document.getElementById("errorPhoneNo").innerHTML = "Please fill out your phone numbers";

    } else if (/^(\+27|0)[1-9][0-9]{8}$/.test(document.getElementById("phoneNo").value) == false) {
        document.getElementById("errorPhoneNo").innerHTML = "theres no Phone Number like that";
    } else {
        document.getElementById("errorPhoneNo").innerHTML = "";
    }
});
document.getElementById("email").addEventListener('keyup', function() 
{

    if (document.getElementById("email").value == "") {
        document.getElementById("errorEmail").innerHTML = "Please fill out Email Address";
    } else if (/^([a-z0-9+-]+)(.[a-z0-9+-]+)*@([a-z0-9-]+.)+[a-z]{2,6}$/.test(document.getElementById("email").value) == false) {
        document.getElementById("errorEmail").innerHTML = "Invalid Email Address format";
    } else {
        document.getElementById("errorEmail").innerHTML = "";
    }
}
);
document.getElementById("password").addEventListener("keyup", function() {
    if (document.getElementById("password").value == "") {
        document.getElementById("errorpassword").innerHTML =
            "Please fill out Password";
    } else if (
        /^(?!.*\s)(?=.*[A-Z])(?=.*[a-z])(?=.*[0-9])(?=.*[!@#$%^&*().]).{8,}$/.test(document.getElementById("password").value) == false
    ) {
        document.getElementById("errorpassword").innerHTML =
            "Inavalid Password Format";
    } else {
        document.getElementById("errorpassword").innerHTML = "";
    }
});