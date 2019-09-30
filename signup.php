<?php
session_start();
include('dbcon.php');
if(isset($_POST['submit']))
{
  
  $fname=$_POST['fname'];
  $lname=$_POST['lname'];
  $email=$_POST['email'];
  $mob=$_POST['mob'];
  $password=$_POST['password'];
  $q="INSERT INTO user_table(fname,lname,mob,email,password) values('$fname','$lname','$mob','$email','$password')";
  $query=mysqli_query($con,$q);
  header('location:registration.php');
}

?>



<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
<div class="container">
  <h3>Sign up Form</h3>
  <div class="col-md-6">
      <form  method="POST">
        <div class="container">
        <div class="form-group">
          <label>First Name</label>
          <input type="text" class="form-control" placeholder="First Name" name="fname">
        </div>
        <div class="form-group">
          <label>Last Name</label>
          <input type="text" class="form-control" placeholder="Last Name" name="lname">
        </div>
        <div class="form-group">
          <label>Email address</label>
          <input type="text" class="form-control" placeholder="Email" name="email">
        </div>
        <div class="form-group">
          <label>Mobile</label>
          <input type="text" class="form-control" placeholder="Mobile" name="mob">
        </div>
        <div class="form-group">
          <label>Password</label>
          <input type="password" class="form-control" placeholder="Password" name="password">
        </div>
        <div class="row">
        <div class="col-md-6">
          <label>
            <input type="checkbox"> Remember Me
          </label>
        </div>
        <div class=" col-md-6 text-right">
          <label>
            <a href="#">Forgotten Password?</a>
          </label>
        </div>
        </div>
        <input type="submit" class="btn btn-success btn-flat " value="Sign in" name="submit">
        <br>
        <div class="register-link m-t-15">
          <p>Already have an account ? <a href="index.php"> log in Here</a></p>
        </div>
      </form>
  </div>
</div>
</body>
</html>
