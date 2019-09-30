<?php
session_start();
include('dbcon.php');
if($_SESSION['user_id'] == true)
{

}
else
{
  header('location:index.php');
}
echo $user_id=$_SESSION['user_id'];
echo $user_id;

//echo $user_id=$_GET['user_id'];
if (isset($user_id)) 
{
  //echo $user_id;
  $query="SELECT * FROM user_table where user_id=$user_id";
  $q=mysqli_query($con,$query) or die("can not fetch the data".mysqli_error($con));
  $data=mysqli_fetch_assoc($q);
  /*$fname=$data['fname'];
  $lname=$data['lname'];
  $email=$data['email'];
  $mob=$data['mob'];
  //echo $fname;
  $query1="INSERT INTO registration(user_id,fname,lname,email,mob) values('$user_id','$fname','$lname','$email','$mob')";
  $q1=mysqli_query($con,$query1);
  $data1=mysqli_fetch_assoc($q1);*/
}
?>
<?php
include('dbcon.php');
if(isset($_POST['submit']))
{
  echo $user_id."<br>";
	echo $fname = $_POST['fname']."<br>";
	echo $lname = $_POST['lname']."<br>";
	echo $email = $_POST['email']."<br>";
	echo $mob = $_POST['mob']."<br>";
	echo $dob = $_POST['dob']."<br>";
	echo $sex = $_POST['sex']."<br>";
	echo $category = $_POST['category']."<br>";
	echo $father = $_POST['father']."<br>";
	echo $mother = $_POST['mother']."<br>";
	echo $contactno = $_POST['contactno']."<br>";
	echo $address = $_POST['address']."<br>";
	echo $city = $_POST['city']."<br>";
	echo $state = $_POST['state']."<br>";
	echo $citizenship = $_POST['citizenship']."<br>";
	echo $tenth = $_POST['tenth']."<br>";
	echo $twelth = $_POST['twelth']."<br>";

  $filename = $_FILES['img'] ['name'];
  $tempname = $_FILES['img'] ['tmp_name'];
  $img = "upload/" .$filename;
  echo $img;
print_r($_FILES['img']);
move_uploaded_file($tempname, $img);
echo "<img src='$img' height='100' width='100'/> ";


	$q1 = "INSERT INTO registration(user_id,fname,lname,email,mob,dob,sex,category,father,mother,contactno,address,city,state,citizenship,tenth,twelth,img) VALUES('$user_id','$fname','$lname','$email','$mob','$dob','$sex','$category','$father','$mother','$contactno','$address','$city','$state','$citizenship','$tenth','$twelth','$img')";
	$query = mysqli_query($con,$q1);
	header('location: display.php');
}

  
?>
<!DOCTYPE html>
<html>
<head>
	<title>Registration form</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
  <br>
  <br>
<div class="container border-secondary border" style="padding: 30px; border-radius: 10px">
  <div class="text-right">
    <a href="logout.php">Log out</a>
  </div>
	<form enctype="multipart/form-data" method="POST">
		    <div class="form-group">
          <label>First Name:</label>
          <input type="text" class="form-control" value="<?php echo $data['fname']?>" name="fname">
        </div>
        <div class="form-group">
          <label>Last Name:</label>
          <input type="text" class="form-control" value="<?php echo $data['lname']?>" name="lname">
        </div>
        <div class="form-group">
          <label>Email Address:</label>
          <input type="text" class="form-control" value="<?php echo $data['email']?>" name="email">
        </div>
        <div class="form-group">
          <label>Mobile Number</label>
          <input type="text" class="form-control" value="<?php echo $data['mob']?>" name="mob">
        </div>
        <div class="form-group">
          <label>D.O.B.</label>
          <input type="text" class="form-control" value="DOB" name="dob">
        </div>
        <div class="form-group">
          <label>Sex</label>
          <input type="text" class="form-control" value="F/M" name="sex">
        </div>
        <div class="form-group">
          <label>Category</label>
          <input type="text" class="form-control" value="Category" name="category">
        </div>
       <div class="form-group">
       	<label>Father's Name</label>
       	<input type="text" class="form-control" value="Father's name" name="father">
       </div>
       <div class="form-group">
       	<label>Mother's Name</label>
       	<input type="text" class="form-control" value="Mother's name" name="mother">
       </div>
       <div class="form-group">
       	<label>Contact No.(Parents)</label>
       	<input type="text" class="form-control" value="Contact No" name="contactno">
       </div>
       <div class="form-group">
       	<label>Address</label>
       	<input type="text" class="form-control" value="Address" name="address">
       </div>
       <div class="form-group">
       	<label>City</label>
       	<input type="text" class="form-control" value="City" name="city">
       </div>
       <div class="form-group">
       	<label>State</label>
       	<input type="text" class="form-control" value="State" name="state">
       </div>
       <div class="form-group">
       	<label>Citizenship</label>
       	<input type="text" class="form-control" value="Citizenship" name="citizenship">
       </div>
       <div class="form-group">
       	<label>10th Percentage</label>
       	<input type="text" class="form-control" value="10th Percentage" name="tenth">
       </div>
       <div class="form-group">
       	<label>12th Percentage</label>
       	<input type="text" class="form-control" value="12th Percentage" name="twelth">
       </div>
       <div class="form-group">
       	<label>Image</label>
       	<input type="file" class="form-control" value="Choose file" name="img" style="padding: 5px;">
       </div>
       <input type="submit" name="submit" class="btn btn-info" value="submit">
	</form>
	
</div>
</body>
</html>