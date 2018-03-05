<?php include 'function.php';
if(isset($_POST['submit'])){
	$x = $_SESSION['semnum'];
	$y = $_SESSION['name'];
	$z = $_SESSION['dept'];
	$total=0;
	switch($x)
	{
		 case 1:$a[0] = $_POST['sub0'];
				$a[1] = $_POST['sub1'];
				$a[2] = $_POST['sub2'];
				$a[3] = $_POST['sub3'];
				$a[4] = $_POST['sub4'];
				$a[5] = $_POST['sub5'];
				$a[6] = $_POST['sub6'];
				$a[7] = $_POST['sub7'];
				$a[8] = $_POST['sub8'];
				for($i=0;$i<9;$i++)
				{
				$total += $a[$i];
				}
				$gpa = ($total/26);
				break;
		 case 2:$a[0] = $_POST['sub0'];
				$a[1] = $_POST['sub1'];
				$a[2] = $_POST['sub2'];
				$a[3] = $_POST['sub3'];
				$a[4] = $_POST['sub4'];
				$a[5] = $_POST['sub5'];
				$a[6] = $_POST['sub6'];
				$a[7] = $_POST['sub7'];
				$a[8] = $_POST['sub8'];
				$a[9] = $_POST['sub9'];
				$a[10] = $_POST['sub10'];
				$a[11] = $_POST['sub11'];
				$a[12] = $_POST['sub12'];
				$a[13] = $_POST['sub13'];
				$a[14] = $_POST['sub14'];
				$a[15] = $_POST['sub15'];
				$a[16] = $_POST['sub16'];
				$a[17] = $_POST['sub17'];
				for($i=0;$i<18;$i++)
				{
				$total += $a[$i];
				}
				$gpa = ($total/51);
				break;
		 case 3:$a[0] = $_POST['sub0'];
				$a[1] = $_POST['sub1'];
				$a[2] = $_POST['sub2'];
				$a[3] = $_POST['sub3'];
				$a[4] = $_POST['sub4'];
				$a[5] = $_POST['sub5'];
				$a[6] = $_POST['sub6'];
				$a[7] = $_POST['sub7'];
				$a[8] = $_POST['sub8'];
				$a[9] = $_POST['sub9'];
				$a[10] = $_POST['sub10'];
				$a[11] = $_POST['sub11'];
				$a[12] = $_POST['sub12'];
				$a[13] = $_POST['sub13'];
				$a[14] = $_POST['sub14'];
				$a[15] = $_POST['sub15'];
				$a[16] = $_POST['sub16'];
				$a[17] = $_POST['sub17'];
				$a[18] = $_POST['sub18'];
				$a[19] = $_POST['sub19'];
				$a[20] = $_POST['sub20'];
				$a[21] = $_POST['sub22'];
				$a[22] = $_POST['sub22'];
				$a[23] = $_POST['sub23'];
				$a[24] = $_POST['sub24'];
				$a[25] = $_POST['sub25'];
				$a[26] = $_POST['sub26'];
				for($i=0;$i<27;$i++)
				{
				$total += $a[$i];
				}
				$gpa = ($total/76);
				break;
		case 4: $a[0] = $_POST['sub0'];
				$a[1] = $_POST['sub1'];
				$a[2] = $_POST['sub2'];
				$a[3] = $_POST['sub3'];
				$a[4] = $_POST['sub4'];
				$a[5] = $_POST['sub5'];
				$a[6] = $_POST['sub6'];
				$a[7] = $_POST['sub7'];
				$a[8] = $_POST['sub8'];
				$a[9] = $_POST['sub9'];
				$a[10] = $_POST['sub10'];
				$a[11] = $_POST['sub11'];
				$a[12] = $_POST['sub12'];
				$a[13] = $_POST['sub13'];
				$a[14] = $_POST['sub14'];
				$a[15] = $_POST['sub15'];
				$a[16] = $_POST['sub16'];
				$a[17] = $_POST['sub17'];
				$a[18] = $_POST['sub18'];
				$a[19] = $_POST['sub19'];
				$a[20] = $_POST['sub20'];
				$a[21] = $_POST['sub21'];
				$a[22] = $_POST['sub22'];
				$a[23] = $_POST['sub23'];
				$a[24] = $_POST['sub24'];
				$a[25] = $_POST['sub25'];
				$a[26] = $_POST['sub26'];
				$a[27] = $_POST['sub27'];
				$a[28] = $_POST['sub28'];
				$a[29] = $_POST['sub29'];
				$a[30] = $_POST['sub30'];
				$a[31] = $_POST['sub31'];
				$a[32] = $_POST['sub32'];
				$a[33] = $_POST['sub33'];
				$a[34] = $_POST['sub34'];
				for($i=0;$i<35;$i++)
				{
				$total += $a[$i];
				}
				$gpa = ($total/98);
				break;
		 case 5:$a[0] = $_POST['sub0'];
				$a[1] = $_POST['sub1'];
				$a[2] = $_POST['sub2'];
				$a[3] = $_POST['sub3'];
				$a[4] = $_POST['sub4'];
				$a[5] = $_POST['sub5'];
				$a[6] = $_POST['sub6'];
				$a[7] = $_POST['sub7'];
				$a[8] = $_POST['sub8'];
				$a[9] = $_POST['sub9'];
				$a[10] = $_POST['sub10'];
				$a[11] = $_POST['sub11'];
				$a[12] = $_POST['sub12'];
				$a[13] = $_POST['sub13'];
				$a[14] = $_POST['sub14'];
				$a[15] = $_POST['sub15'];
				$a[16] = $_POST['sub16'];
				$a[17] = $_POST['sub17'];
				$a[18] = $_POST['sub18'];
				$a[19] = $_POST['sub19'];
				$a[20] = $_POST['sub20'];
				$a[21] = $_POST['sub21'];
				$a[22] = $_POST['sub22'];
				$a[23] = $_POST['sub23'];
				$a[24] = $_POST['sub24'];
				$a[25] = $_POST['sub25'];
				$a[26] = $_POST['sub26'];
				$a[27] = $_POST['sub27'];
				$a[28] = $_POST['sub28'];
				$a[29] = $_POST['sub29'];
				$a[30] = $_POST['sub30'];
				$a[31] = $_POST['sub31'];
				$a[32] = $_POST['sub32'];
				$a[33] = $_POST['sub33'];
				$a[34] = $_POST['sub34'];
				$a[35] = $_POST['sub35'];
				$a[36] = $_POST['sub36'];
				$a[37] = $_POST['sub37'];
				$a[38] = $_POST['sub38'];
				$a[39] = $_POST['sub39'];
				$a[40] = $_POST['sub40'];
				$a[41] = $_POST['sub41'];
				$a[42] = $_POST['sub42'];
				$a[43] = $_POST['sub43'];
				for($i=0;$i<44;$i++)
				{
				$total += $a[$i];
				}
				$gpa = ($total/124);
				break;
		 case 6:$a[0] = $_POST['sub0'];
				$a[1] = $_POST['sub1'];
				$a[2] = $_POST['sub2'];
				$a[3] = $_POST['sub3'];
				$a[4] = $_POST['sub4'];
				$a[5] = $_POST['sub5'];
				$a[6] = $_POST['sub6'];
				$a[7] = $_POST['sub7'];
				$a[8] = $_POST['sub8'];
				$a[9] = $_POST['sub9'];
				$a[10] = $_POST['sub10'];
				$a[11] = $_POST['sub11'];
				$a[12] = $_POST['sub12'];
				$a[13] = $_POST['sub13'];
				$a[14] = $_POST['sub14'];
				$a[15] = $_POST['sub15'];
				$a[16] = $_POST['sub16'];
				$a[17] = $_POST['sub17'];
				$a[18] = $_POST['sub18'];
				$a[19] = $_POST['sub19'];
				$a[20] = $_POST['sub20'];
				$a[21] = $_POST['sub21'];
				$a[22] = $_POST['sub22'];
				$a[23] = $_POST['sub23'];
				$a[24] = $_POST['sub24'];
				$a[25] = $_POST['sub25'];
				$a[26] = $_POST['sub26'];
				$a[27] = $_POST['sub27'];
				$a[28] = $_POST['sub28'];
				$a[29] = $_POST['sub29'];
				$a[30] = $_POST['sub30'];
				$a[31] = $_POST['sub31'];
				$a[32] = $_POST['sub32'];
				$a[33] = $_POST['sub33'];
				$a[34] = $_POST['sub34'];
				$a[35] = $_POST['sub35'];
				$a[36] = $_POST['sub36'];
				$a[37] = $_POST['sub37'];
				$a[38] = $_POST['sub38'];
				$a[39] = $_POST['sub39'];
				$a[40] = $_POST['sub40'];
				$a[41] = $_POST['sub41'];
				$a[42] = $_POST['sub42'];
				$a[43] = $_POST['sub43'];
		        $a[44] = $_POST['sub44'];
				$a[45] = $_POST['sub45'];
				$a[46] = $_POST['sub46'];
				$a[47] = $_POST['sub47'];
				$a[48] = $_POST['sub48'];
				$a[49] = $_POST['sub49'];
				$a[50] = $_POST['sub50'];
				$a[51] = $_POST['sub51'];
				$a[52] = $_POST['sub52'];
				for($i=0;$i<53;$i++)
				{
				$total += $a[$i];
				}
				$gpa = ($total/148);
				break;
		 case 7:$a[0] = $_POST['sub0'];
				$a[1] = $_POST['sub1'];
				$a[2] = $_POST['sub2'];
				$a[3] = $_POST['sub3'];
				$a[4] = $_POST['sub4'];
				$a[5] = $_POST['sub5'];
				$a[6] = $_POST['sub6'];
				$a[7] = $_POST['sub7'];
				$a[8] = $_POST['sub8'];
				$a[9] = $_POST['sub9'];
				$a[10] = $_POST['sub10'];
				$a[11] = $_POST['sub11'];
				$a[12] = $_POST['sub12'];
				$a[13] = $_POST['sub13'];
				$a[14] = $_POST['sub14'];
				$a[15] = $_POST['sub15'];
				$a[16] = $_POST['sub16'];
				$a[17] = $_POST['sub17'];
				$a[18] = $_POST['sub18'];
				$a[19] = $_POST['sub19'];
				$a[20] = $_POST['sub20'];
				$a[21] = $_POST['sub21'];
				$a[22] = $_POST['sub22'];
				$a[23] = $_POST['sub23'];
				$a[24] = $_POST['sub24'];
				$a[25] = $_POST['sub25'];
				$a[26] = $_POST['sub26'];
				$a[27] = $_POST['sub27'];
				$a[28] = $_POST['sub28'];
				$a[29] = $_POST['sub29'];
				$a[30] = $_POST['sub30'];
				$a[31] = $_POST['sub31'];
				$a[32] = $_POST['sub32'];
				$a[33] = $_POST['sub33'];
				$a[34] = $_POST['sub34'];
				$a[35] = $_POST['sub35'];
				$a[36] = $_POST['sub36'];
				$a[37] = $_POST['sub37'];
				$a[38] = $_POST['sub38'];
				$a[39] = $_POST['sub39'];
				$a[40] = $_POST['sub40'];
				$a[41] = $_POST['sub41'];
				$a[42] = $_POST['sub42'];
				$a[43] = $_POST['sub43'];
		        $a[44] = $_POST['sub44'];
				$a[45] = $_POST['sub45'];
				$a[46] = $_POST['sub46'];
				$a[47] = $_POST['sub47'];
				$a[48] = $_POST['sub48'];
				$a[49] = $_POST['sub49'];
				$a[50] = $_POST['sub50'];
				$a[51] = $_POST['sub51'];
				$a[52] = $_POST['sub52'];
		        $a[53] = $_POST['sub53'];
		        $a[54] = $_POST['sub54'];
				$a[55] = $_POST['sub55'];
				$a[56] = $_POST['sub56'];
				$a[57] = $_POST['sub57'];
				$a[58] = $_POST['sub58'];
				$a[59] = $_POST['sub59'];
				$a[60] = $_POST['sub60'];
				for($i=0;$i<61;$i++)
				{
				$total += $a[$i];
				}
				$gpa = ($total/169);
				break;
		 case 8:$a[0] = $_POST['sub0'];
				$a[1] = $_POST['sub1'];
				$a[2] = $_POST['sub2'];
				$a[3] = $_POST['sub3'];
				$a[4] = $_POST['sub4'];
				$a[5] = $_POST['sub5'];
				$a[6] = $_POST['sub6'];
				$a[7] = $_POST['sub7'];
				$a[8] = $_POST['sub8'];
				$a[9] = $_POST['sub9'];
				$a[10] = $_POST['sub10'];
				$a[11] = $_POST['sub11'];
				$a[12] = $_POST['sub12'];
				$a[13] = $_POST['sub13'];
				$a[14] = $_POST['sub14'];
				$a[15] = $_POST['sub15'];
				$a[16] = $_POST['sub16'];
				$a[17] = $_POST['sub17'];
				$a[18] = $_POST['sub18'];
				$a[19] = $_POST['sub19'];
				$a[20] = $_POST['sub20'];
				$a[21] = $_POST['sub21'];
				$a[22] = $_POST['sub22'];
				$a[23] = $_POST['sub23'];
				$a[24] = $_POST['sub24'];
				$a[25] = $_POST['sub25'];
				$a[26] = $_POST['sub26'];
				$a[27] = $_POST['sub27'];
				$a[28] = $_POST['sub28'];
				$a[29] = $_POST['sub29'];
				$a[30] = $_POST['sub30'];
				$a[31] = $_POST['sub31'];
				$a[32] = $_POST['sub32'];
				$a[33] = $_POST['sub33'];
				$a[34] = $_POST['sub34'];
				$a[35] = $_POST['sub35'];
				$a[36] = $_POST['sub36'];
				$a[37] = $_POST['sub37'];
				$a[38] = $_POST['sub38'];
				$a[39] = $_POST['sub39'];
				$a[40] = $_POST['sub40'];
				$a[41] = $_POST['sub41'];
				$a[42] = $_POST['sub42'];
				$a[43] = $_POST['sub43'];
		        $a[44] = $_POST['sub44'];
				$a[45] = $_POST['sub45'];
				$a[46] = $_POST['sub46'];
				$a[47] = $_POST['sub47'];
				$a[48] = $_POST['sub48'];
				$a[49] = $_POST['sub49'];
				$a[50] = $_POST['sub50'];
				$a[51] = $_POST['sub51'];
				$a[52] = $_POST['sub52'];
		        $a[53] = $_POST['sub53'];
		        $a[54] = $_POST['sub54'];
				$a[55] = $_POST['sub55'];
				$a[56] = $_POST['sub56'];
				$a[57] = $_POST['sub57'];
				$a[58] = $_POST['sub58'];
				$a[59] = $_POST['sub59'];
				$a[60] = $_POST['sub60'];
				$a[61] = $_POST['sub61'];
				$a[62] = $_POST['sub62'];
				$a[63] = $_POST['sub63'];
		        $a[64] = $_POST['sub64'];
				$a[65] = $_POST['sub65'];
				for($i=0;$i<66;$i++)
				{
				$total += $a[$i];
				}
				$gpa = ($total/187);
				break;				
	}
	$sql = "INSERT INTO `user_details`(`Name`, `semno`, `deptname`, `gpa`) VALUES ('$y', $x, '$z', $gpa)";
	$res = mysqli_query($conn,$sql);
	}?>
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
                <h1 id="homeHeading">Welcome <?php echo "$y";?></h1>
                <hr>
                <p>Cumulative Grade Point Average = <?php echo "$gpa"; ?><br/>
					Your Total Grade points = <?php echo "$total";?></p>
            </div>
        </div>
    </header>
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