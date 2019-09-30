<?php
include('dbcon.php');
session_start();
if($_SESSION['user_id'] == true)
{

}
else
{
  header('location:index.php');
}
echo $_SESSION['user_id'];
echo $user_id=$_SESSION['user_id'];
echo $user_id;

if (isset($user_id)) 
{
	$query="SELECT * FROM registration where user_id=$user_id";
  	$q=mysqli_query($con,$query) or die("can not fetch the data".mysqli_error($con));
  	$data=mysqli_fetch_assoc($q);
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Preview</title>
	
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="apple-touch-icon" href="apple-icon.png">
    <link rel="shortcut icon" href="favicon.ico">


    <link rel="stylesheet" href="vendors/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="vendors/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="vendors/themify-icons/css/themify-icons.css">
    <link rel="stylesheet" href="vendors/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="vendors/selectFX/css/cs-skin-elastic.css">

    <link rel="stylesheet" href="assets/css/style.css">

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>
</head>
<body >

	<div class= "container bg-inverse">
		<div class="text-right">
			<a href="logout.php">Log out</a>
		</div>
		<div>
			<img src="<?php echo $data['img']?>" width="100" height="100" style ="border-radius: 81px;">
		</div>
		
		<div class="col-md-1">

		</div>
		<div class="col-md-12">
			<div class="row">
					<h3 class=" card-title d-inlined-inline" style="font-family: Sentinel SSm A, Sentinel SSm B, Helvetica Neue, Helvetica, Arial, sans-serif;font-style: italic;">Welcome <?php echo $data['fname'];?> !</h3>
			</div>
			<br>
			<div class="row" style="background-color: #b8d2d6; padding: 8px">
				<div class="col-md-2">
					Registration No.: 
				</div>
				<div class="col-md-10">
					0<?php echo $data['reg_id'];?>IT
				</div>
			</div>
			<br>
			<div class="row" style="background-color: #b8d2d6; padding: 8px">
				<div class="col-md-2">
					First Name: 
				</div>
				<div class="col-md-10">
					<?php echo $data['fname'];?>
				</div>
			</div>
			<br>
			<div class="row" style="background-color: #b8d2d6; padding: 8px">
				<div class="col-md-2">
					Last Name: 
				</div>
				<div class="col-md-10">
					<?php echo $data['lname'];?>
				</div>
			</div>
			<br>
			<div class="row" style="background-color: #b8d2d6; padding: 8px">
				<div class="col-md-2">
					Email Address: 
				</div>
				<div class="col-md-10">
					<?php echo $data['email'];?>
				</div>
			</div>
			<br>
			<div class="row" style="background-color: #b8d2d6; padding: 8px">
				<div class="col-md-2">
					Mobile Number:  
				</div>
				<div class="col-md-10">
					<?php echo $data['mob'];?>
				</div>
			</div>
			<br>
			<div class="row" style="background-color: #b8d2d6; padding: 8px">
				<div class="col-md-2">
					D.O.B.: 
				</div>
				<div class="col-md-10">
					<?php echo $data['dob'];?>
				</div>
			</div>
			<br>
			<div class="row" style="background-color: #b8d2d6; padding: 8px">
				<div class="col-md-2">
					Sex:  
				</div>
				<div class="col-md-10">
					<?php echo $data['sex'];?>
				</div>
			</div>
			<br>
			<div class="row" style="background-color: #b8d2d6; padding: 8px">
				<div class="col-md-2">
					Category  
				</div>
				<div class="col-md-10">
					<?php echo $data['category'];?>
				</div>
			</div>
			<br>
			<div class="row" style="background-color: #b8d2d6; padding: 8px">
				<div class="col-md-2">
					Father Name:  
				</div>
				<div class="col-md-10">
					<?php echo $data['father'];?>
				</div>
			</div>
			<br>
			<div class="row" style="background-color: #b8d2d6; padding: 8px">
				<div class="col-md-2">
					Mother Name  
				</div>
				<div class="col-md-10">
					<?php echo $data['mother'];?>
				</div>
			</div>
			<br>
			<div class="row" style="background-color: #b8d2d6; padding: 8px">
				<div class="col-md-2">
					Contact No.  
				</div>
				<div class="col-md-10">
					<?php echo $data['contactno'];?>
				</div>
			</div>
			<br>
			<div class="row" style="background-color: #b8d2d6; padding: 8px">
				<div class="col-md-2">
					Address: 
				</div>
				<div class="col-md-10">
					<?php echo $data['address'];?>
				</div>
			</div>
			<br>
			<div class="row" style="background-color: #b8d2d6; padding: 8px">
				<div class="col-md-2">
					City  
				</div>
				<div class="col-md-10">
					<?php echo $data['city'];?>
				</div>
			</div>
			<br>
			<div class="row" style="background-color: #b8d2d6; padding: 8px">
				<div class="col-md-2">
					State 
				</div>
				<div class="col-md-10">
					<?php echo $data['state'];?>
				</div>
			</div>
			<br>
			<div class="row" style="background-color: #b8d2d6; padding: 8px">
				<div class="col-md-2">
					Citizenship  
				</div>
				<div class="col-md-10">
					<?php echo $data['citizenship'];?>
				</div>
			</div>
			<br>
			<div class="row" style="background-color: #b8d2d6; padding: 8px">
				<div class="col-md-2">
					12th Percentage
				</div>
				<div class="col-md-10">
					<?php echo $data['twelth'];?>
				</div>
			</div>
			<br>
			<div class="row" style="background-color: #b8d2d6; padding: 8px">
				<div class="col-md-2">
					10th Percentage
				</div>
				<div class="col-md-10">
					<?php echo $data['tenth'];?>
				</div>
			</div>
			<br>

			<!-- <div class="card">
				<div class="card-body">
				<div class="row">
					<h3 class=" card-title d-inlined-inline" style="font-family: Sentinel SSm A, Sentinel SSm B, Helvetica Neue, Helvetica, Arial, sans-serif;font-style: italic;">Welcome <?php echo $data['fname'];?> !</h3>
				</div>
				<br>
				<div class="row">
					<div class="col-md-3">
			
						<div class="row w-100">
							<h4> First Name : </h4>
							<br>
						</div>
						<div class="row w-100">
							<h4> Last Name: </h4><br>
						</div>
						<div class="row w-100">
							<h4> Email Address: </h4><br>
						</div>
						<div class="row w-100">
							<h4> Mobile Number: </h4><br>
						</div>
						<div class="row w-100">
							<h4> D.O.B: </h4><br>
						</div>
						<div class="row w-100">
							<h4> Sex: </h4><br>
						</div>
						<div class="row w-100">
							<h4> Category: </h4><br>
						</div>
						<div class="row w-100">
							<h4> Father Name: </h4><br>
						</div>
						<div class="row w-100">
							<h4> Mother Name: </h4><br>
						</div>
						<div class="row w-100">
							<h4> Contact No.: </h4><br>
						</div>
						<div class="row w-100">
							<h4> Address: </h4><br>
						</div>
						<div class="row w-100">
							<h4> City: </h4><br>
						</div>
						<div class="row w-100">
							<h4> State: </h4><br>
						</div>
						<div class="row w-100">
							<h4> Citizenship: </h4><br>
						</div>
						<div class="row w-100">
							<h4> 12th Percentage: </h4><br>
						</div>
						<div class="row w-100">
							<h4> 10th Percentage: </h4><br>
						</div>
					</div>END OF COL-MD-3-->
					<!-- <div class="col-md-9">
						<div class="row w-100">
							<h4><span class="text-secondary border-top-0 border-bottom-0 border-info w-100" style=" border-radius: 10px; padding:10px"><?php echo $data['fname'];?></span></h4><br>
						</div>
						<div class="row w-100">
							<h4><span class="text-secondary border-top-0 border-bottom-0 border-info w-100" style=" border-radius: 10px; padding:10px"><?php echo $data['lname'];?></span></h4><br>
						</div>
						<div class="row w-100">
							<h4><span class="text-secondary border-top-0 border-bottom-0 border-info w-100" style=" border-radius: 10px; padding:10px"><?php echo $data['email'];?></span></h4><br>
						</div>
						<div class="row w-100">
							<h4><span class="text-secondary border-top-0 border-bottom-0 border-info w-100" style=" border-radius: 10px; padding:10px"><?php echo $data['mob'];?></span></h4><br>
						</div>
						<div class="row w-100">
							<h4><span class="text-secondary border-top-0 border-bottom-0 border-info w-100" style=" border-radius: 10px; padding:10px"><?php echo $data['dob'];?>			</span></h4><br>
						</div>
						<div class="row w-100">
							<h4><span class="text-secondary border-top-0 border-bottom-0 border-info w-100" style=" border-radius: 10px; padding:10px"><?php echo $data['sex'];?>			</span></h4><br>
						</div>
						<div class="row w-100">
							<h4><span class="text-secondary border-top-0 border-bottom-0 border-info w-100" style=" border-radius: 10px; padding:10px"><?php echo $data['category'];?></span></h4><br>
						</div>
						<div class="row w-100">
							<h4><span class="text-secondary border-top-0 border-bottom-0 border-info w-100" style=" border-radius: 10px; padding:10px"><?php echo $data['father'];?></span></h4><br>
						</div>
						<div class="row w-100">
							<h4><span class="text-secondary border-top-0 border-bottom-0 border-info w-100" style=" border-radius: 10px; padding:10px"><?php echo $data['mother'];?></span></h4><br>
						</div>
						<div class="row w-100">
							<h4><span class="text-secondary border-top-0 border-bottom-0 border-info w-100" style=" border-radius: 10px; padding:10px"><?php echo $data['contactno'];?></span></h4><br>
						</div>
						<div class="row w-100">
							<h4><span class="text-secondary border-top-0 border-bottom-0 border-info w-100" style=" border-radius: 10px; padding:10px"><?php echo $data['address'];?></span></h4><br>
						</div>
						<div class="row w-100">
							<h4><span class="text-secondary border-top-0 border-bottom-0 border-info w-100" style=" border-radius: 10px; padding:10px"><?php echo $data['city'];?></span></h4><br>
						</div>
						<div class="row w-100">
							<h4><span class="text-secondary border-top-0 border-bottom-0 border-info w-100" style=" border-radius: 10px; padding:10px"><?php echo $data['state'];?></span></h4><br>
						</div>
						<div class="row w-100">
							<h4><span class="text-secondary border-top-0 border-bottom-0 border-info w-100" style=" border-radius: 10px; padding:10px"><?php echo $data['citizenship'];?></span></h4><br>
						</div>
						<div class="row w-100">
							<h4><span class="text-secondary border-top-0 border-bottom-0 border-info w-100" style=" border-radius: 10px; padding:10px"><?php echo $data['twelth'];?></span></h4><br>
						</div>
						<div class="row w-100">
							<h4><span class="text-secondary border-top-0 border-bottom-0 border-info w-100" style=" border-radius: 10px; padding:10px"><?php echo $data['tenth'];?></span></h4><br>
						</div> -->
					</div><!--END OF COL-MD-9-->
				</div><!--end of row-->
				</div><!--end of card-body-->
			</div><!--end of card-->
		</div><!--end of col-md-12-->
		<div class="col-md-1">

		</div
	</div><!--end of container-->
	<!-- <table>
		<thead>
			<tr><?php echo "welcome".$data['fname'];?></tr>
		</thead>
		<tbody>
			<tr>
				<td>First Name: <?php echo $data['fname'];?></td>
			</tr>
			<tr>
				<td>Last Name: <?php echo $data['lname'];?></td>
			</tr>
			<tr>
				<td>Email Address: <?php echo $data['email'];?></td>
			</tr>
			<tr>
				<td>Mobile Number: <?php echo $data['mob'];?></td>
			</tr> 
			<tr>
				<td>D.O.B: <?php echo $data['dob'];?></td>
			</tr>
			<tr>
				<td>Sex: <?php echo $data['sex'];?></td>
			</tr>
			<tr>
				<td>Category: <?php echo $data['category'];?></td>
			</tr>
			<tr>
				<td>Father Name: <?php echo $data['father'];?></td>
			</tr>
			<tr>
				<td>Mother Name: <?php echo $data['mother'];?></td>
			</tr>
			<tr>
				<td>Parent's Contact No.: <?php echo $data['contactno'];?></td>
			</tr>
			<tr>
				<td>Address: <?php echo $data['address'];?></td>
			</tr>
			<tr>
				<td>City: <?php echo $data['city'];?></td>
			</tr>
			<tr>
				<td>State: <?php echo $data['state'];?></td>
			</tr>
			<tr>
				<td>Citizenship: <?php echo $data['citizenship'];?></td>
			</tr>
			<tr>
				<td>12th Percentage: <?php echo $data['twelth'];?></td>
			</tr>
			<tr>
				<td>10th Percentage: <?php echo $data['tenth'];?></td>
			</tr>

		</tbody>
	</table> -->
</body>
</html>