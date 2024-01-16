<!DOCTYPE html>
<html lang="en">
<head>
<title>VAAL HANDS .INC</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body style="margin: 80px; background-image: url('home.jpeg')">
<div style="text-align: center;">
<h1 >VAAL HANDS </h1> <br> <br>
<h4 >One Hand For The Other</h4>
<form action="http://localhost/VAALHANDS/loginProcess.php" method = "POST">

<div class="form-group" >
    <label for="Choose Type">Choose your role in the Vaal:</label><br>
    Patriot <input type="radio" name="userCheck" value="Patriot" aria-describedby="emailHelp">
    Worker  <input type="radio" name="userCheck" value="Worker" aria-describedby="emailHelp">
    Admin   <input type="radio" name="userCheck" value="Admin" aria-describedby="emailHelp">
</div>

<div class="form-group">
    <label>E-Mail address:</label>
    <input type="email" class="form-control" name="phoneOrEmail" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" style="text-align:center;">
    <small id="emailHelp" class="form-text text-muted">Please Provde E-Mail or Phone No</small>
</div>

<div class="form-group">
<label for="exampleInputPassword1">Password</label>
<input type="password" class="form-control" name="password" id="exampleInputPassword1" placeholder="Password" style="text-align: center;">
</div>
<button type="submit" name="submit" class="btn btn-primary">LOGIN</button>
<br> <br> <br> <br>
<div class="form-group">
</form>
New to the Vaal Network, cool find a hand here  <a href="http://localhost/VAALHANDS/patriot/patriotSignup.php">SIGN UP</a>
Or you want a opportunity to lend a hand  <a href="http://localhost/VAALHANDS/worker/workerSignup.php">REGISTER</a>
<footer>
            <p>&copy; copyright 2024 B.W.Taunyane. All rights reserved.</p>
        </footer>
</div>
</div>