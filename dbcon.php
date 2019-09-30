<?php
$con=mysqli_connect('localhost','root','','task1');
if($con)
{
	echo "Connected ";
}
else
{
	echo "Not connected";
}
?>