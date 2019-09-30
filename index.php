<?php
//session_start();
include('dbcon.php');
?>



<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body  >
<center>
<div class="container">
  <div class="row h-25">
    
  </div>
  <a href="index.php" style="text-decoration: none; color: black;"> 
    <button class=" btn btn-info " style="width: 22%">Log in</button>
  </a> 
  <a href="signup.php" style="text-decoration: none; color: black;"> 
    <button class=" btn btn-info" style="width: 22%">Sign up</button>
  </a>  

  <br><br>
  <div class="col-md-6">
      <form method="POST">
        <div class="container-fluid">
        <div class="form-group text-left">
          <label>Email address</label>
          <input type="email" class="form-control" placeholder="Email" name="email">
        </div>
        <div class="form-group text-left">
          <label>Password</label>
          <input type="password" class="form-control" placeholder="Password" name="password">
        </div>
        <div class="text-left">
            <input type="checkbox"> Remember Me 
            <a href="#" style="text-decoration: none;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Forgotten Password?</a>
        </div>
        <!-- <div class=" text-right">
            
        </div> -->
        <br>
        <input type="submit" class="btn btn-success btn-flat " value="Sign in" name="submit">
        <br><br>
        <p>Don't have account ? <a href="signup.php"> Sign Up Here</a></p>
      </form>
    </div>
  </div>
</center>
</body>
</html>

<!--<?php
/*if (isset($_POST['submit'])) 
{
  $email= $_POST['email'];
  $password=$_POST['password'];
  $query = "SELECT * from user_table where email='$email'and password='$password'";
  $data=mysqli_query($con,$query);
  $total=mysqli_num_rows($data);
  //echo $total;
  if($total==1)
  {
    //echo"success";
    //$_SESSION['user_id']=$user_id;
    //echo $fname;
    $result = mysqli_fetch_assoc($data);
    //$user_id=$result['user_id'];
    echo $result['user_id'];
    //echo "$user_id";
    header('location:registration.php?user_id=<?php echo $result["user_id"];?>');
    //http_redirect("registration.php?user_id=$user_id");
  }
  else
  {
    //echo"login failed";
    header('location:error.php');
  }
}
*/
?>-->
<?php
if(isset($_POST['submit']))
{
  $email = $_POST['email'];
  $password = $_POST['password'];
  $query = "SELECT * FROM user_table WHERE email='$email' and password='$password'";
  $data = mysqli_query($con,$query);
  $result=mysqli_fetch_array($data);
  $total = mysqli_num_rows($data);
  echo $total;
  
  if($total==1)
  {
    
    session_start(); 
    $_SESSION['user_id']= $result['user_id'];
    
    header('location:registration.php');
    }
  else
  {
    header('location:error.php');
  }
}
?>
