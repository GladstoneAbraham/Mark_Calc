<?php include 'function.php';
?>
<!DOCTYPE html>
<html lang="en">

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
	
	<style>
  #option{
	  padding-left:400px;
	  padding-right:400px;
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


    <header>
        <div class="header-content">
            <div class="header-content-inner">
                <h1 id="homeHeading">CGPA CALCULATOR</h1>
                <hr>
                <p>Find Your Results Accurately..!!</p>
                <a href="#about" class="btn btn-primary btn-xl page-scroll">Calculate Now</a>
            </div>
        </div>
    </header>
	<section class="bg-success" id="about">
<form action="mod1.php" class="form-horizontal" method="post">
<div id="option">
<div id="legend">
     <legend class="">CGPA CALCULATOR</legend>
    </div>
	Name:<input type="text" name="Name" class="form-control"><br/>
Semester:<select name="sem_detail" class="form-control">
<?php   $sql = "SELECT * FROM `sem_detail` ";
		$res = mysqli_query($conn,$sql);
		while($rest = mysqli_fetch_array($res)){ ?>
<option value="<?php echo $rest['semno'];?>"><?php echo $rest['semno'];?></option>
		<?php } ?></select>
</div><div id="option">
Department:<select name="dept_detail" class="form-control">
<?php   $sql1 = "SELECT * FROM `dept_detail` where `Deptname` = 'Information Technology' ";
		$res1 = mysqli_query($conn,$sql1);
		while($rest1 = mysqli_fetch_array($res1)){ ?>
<option value="<?php echo $rest1['Deptname'];?>"><?php echo $rest1['Deptname'];?></option>
		<?php }?></select>
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
