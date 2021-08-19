<?php
$Con = mysqli_connect("localhost", "root", "", "samadhichidrenhome");

session_start();

if(isset($_POST['submit'])){

$uname = mysqli_real_escape_string($Con,$_POST['username']);
$pass = mysqli_real_escape_string($Con,$_POST['pw']);

$get_admin = "select * from login where username='$uname' AND password='$pass'";
$run_admin = mysqli_query($Con,$get_admin);
$count = mysqli_num_rows($run_admin);

if($count==1){
$_SESSION['username']=$uname;
echo "<script>alert('You are Logged in into system ')</script>";
echo "<script>window.open('overview.php?overview','_self')</script>";
}
else {
echo "<script>alert('Username or Password is Wrong')</script>";
echo "<script>window.open('login.php?overview','_self')</script>";
}
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Login</title>
<link rel="stylesheet" href="css/bootstrap.css">
</head>
<body>



<div class="wrapper">
<h1>Sign in</h1>


<form method="POST" action="#">
<div class="form_input">
<input type="text" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter username" name="username">
</div>

<div class="form_input">
<input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="pw">
</div>

<!-- MISSING CODE HERE -->
<!--<form action="code.php" method="POST"> -->
<div>
<button class="btn btn-info" name="submit" type="submit" style="width: 20%">Log in</button>
<!--</form> -->
</div>
</form>

</div>

<style>

</body>
</html>