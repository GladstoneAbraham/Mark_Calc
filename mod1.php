<?php include 'function.php';
	$x = $_POST['sem_detail'];
	$y = $_POST['dept_detail'];	
	$z = $_POST['Name'];
	$_SESSION['name'] = $z;
	$_SESSION['semnum'] = $x;
$_SESSION['dept'] = $y;
?>
<!DOCTYPE html>
<html lang="en">
<head>
 <head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>CGPA CALCULATOR</title>

    <!-- Bootstrap Core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>

    <!-- Plugin CSS -->
    <link href="vendor/magnific-popup/magnific-popup.css" rel="stylesheet">

    <!-- Theme CSS -->
    <link href="css/creative.min.css" rel="stylesheet">

    <!-- Theme CSS -->
	<style>
  #option{
	  padding-left:400px;
	 
  }
  .jumbotron {
background: #358CCE;
color: #FFF;
border-radius: 0px;
}
.jumbotron-sm { padding-top: 24px;
padding-bottom: 24px; }
.jumbotron small {
color: #FFF;
}
.h1 small {
font-size: 24px;
}

  </style>
	
</head>
<body id="page-top">
<section>
<form class="form-horizontal" action='mod2.php' method="post">
<div id="option">
    <div id="legend">
      <legend class="">Enter the Grades</legend>
    </div>
	<!-- Username -->
	  <?php $i=0;$j=0;$e=0;
	  
	    $sql = "SELECT * FROM `calculate` where `semno` <= $x and `deptname` = '$y'";
		$res = mysqli_query($conn,$sql);
		while($rest = mysqli_fetch_array($res))
		{
			$a[$i++] = $rest['subcode'];
			$b[$j++] = $rest['subname'];
		}
		for($i=0;$i<$j;$i++,$e++)
		{?>
			<label class="control-label"><?php echo $a[$i];?></label>
			<label class="control-label"><?php echo $b[$i];?></label>
<div id="label">
			<select name="<?php echo "sub"."$e";?>">
			<option value="<?php
			$sql1 = "SELECT * FROM `calculate` where `subcode` = '$a[$i]'";
		$res1 = mysqli_query($conn,$sql1);
		while($rest1 = mysqli_fetch_array($res1)){ 
		$c = $rest1['credits'];}
		$d = ($c*10);
		echo "$d";
			?>">S</option>
			<option value="<?php  			
		$sql2 = "SELECT * FROM `calculate` where `subcode` = '$a[$i]'";
		$res2 = mysqli_query($conn,$sql2);
		while($rest2 = mysqli_fetch_array($res2)){ 
		$c = $rest2['credits'];}
		$d = ($c*9);
		echo "$d";
			?>" >A</option>
			<option value="<?php  			
		$sql3 = "SELECT * FROM `calculate` where `subcode` = '$a[$i]'";
		$res3 = mysqli_query($conn,$sql3);
		while($rest3 = mysqli_fetch_array($res3)){ 
		$c = $rest3['credits'];}
		$d = ($c*8);
		echo "$d";
			?>" >B</option>
			<option value="<?php  			
		$sql4 = "SELECT * FROM `calculate` where `subcode` = '$a[$i]'";
		$res4 = mysqli_query($conn,$sql4);
		while($rest4 = mysqli_fetch_array($res4)){ 
		$c = $rest4['credits'];}
		$d = ($c*7);
		echo "$d";
			?>" >C</option>
			<option value="<?php  			
		$sql5 = "SELECT * FROM `calculate` where `subcode` = '$a[$i]'";
		$res5 = mysqli_query($conn,$sql5);
		while($rest5 = mysqli_fetch_array($res5)){ 
		$c = $rest5['credits'];}
		$d = ($c*6);
		echo "$d";
			?>" >D</option>
			<option value="<?php  			
		$sql6 = "SELECT * FROM `calculate` where `subcode` = '$a[$i]'";
		$res6 = mysqli_query($conn,$sql6);
		while($rest6 = mysqli_fetch_array($res6)){ 
		$c = $rest6['credits'];}
		$d = ($c*5);
		echo "$d";
			?>" >E</option>
			<option value="0" >U</option>
		</select></div>
		<br/>
		<?php }?>

		<input type="submit" name="submit" class="btn btn-primary btn-xl" value="Submit">		
		</div>
</form>
</section>
<!-- jQuery -->
    <script src="vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
    <script src="vendor/scrollreveal/scrollreveal.min.js"></script>
    <script src="vendor/magnific-popup/jquery.magnific-popup.min.js"></script>

    <!-- Theme JavaScript -->
    <script src="js/creative.min.js"></script>
</body>
</html>