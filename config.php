<?php
include 'function.php';
	$x= $_POST['sem_detail'];
	$y= $_POST['dept_detail'];	
	$sql="INSERT INTO `temp`(`sem`, `dept`) VALUES ('$x','$y')";
	$retval=mysqli_query($conn,$sql);
	if(!$retval)
	{
		die('could not enter the data');
	}
	header("Location:mod2.php");
?>