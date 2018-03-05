<?php include 'function.php';
if($_POST['submit']){
	$x = $_POST['name'];
	$y = $_POST['subject'];
	$z = $_POST['email'];
	$w = $_POST['message'];
	
	$sql="Insert into contact (name,subject,email,message) values ('$x','$y','$z','$w')";
	$retval=mysqli_query($conn,$sql);
	if(!$retval)
	{
		die('could not enter the data'.mysqli_error());
	}
	header("Location:index.php");
}
?>