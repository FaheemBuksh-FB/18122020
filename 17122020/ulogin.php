<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<meta name="Description" content="Enter your description here"/>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.0-alpha2/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.0/css/all.min.css">
<link rel="stylesheet" href="assets/css/style.css">
<title>Title</title>
</head>
<body>
<form class="form-inline" method="POST" action="ulogin.php">
    <label for="">Email</label>
    <input type="email" class="form-control" name="email">
    <label for="">Password</label>
    <input type="password" class="form-control" name="pass">
    <input type="submit" class="btn btn-primary mt-3" value="Submit" name="submit">
</form>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.1/umd/popper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.0-alpha2/js/bootstrap.min.js"></script>
</body>
</html>
<?php
include('connection.php');
if(isset($_POST['submit'])){
$email = $_POST['email'];
$pass =$_POST['pass'];
if(empty($email)|| empty($pass)){
echo "<h1>please fill all fields</h1>";
}
else{
   $result = mysqli_query($con,"SELECT * FROM `registration` WHERE email = '$email' and password='$pass'");
   if(mysqli_num_rows($result)){
       echo "<h1>Login Successfully</h1>";
       header('location:index.php');
   }
   else{
    echo "<h1>Invalid email and Password</h1>";
   }
}
}
?>
