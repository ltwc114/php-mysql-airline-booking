<?php session_start();
include_once("connection.php");
if(isset($_POST["origin"]) && isset($_POST["destination"]))
{
	$origin=$_POST["origin"];
	$destination=$_POST["destination"];
}
else
{
	$origin="";
	$destination="";
	$_SESSION["MSGF"]="Flight Not Selected";
}
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
<title> AirLine</title>
<meta charset="utf-8">
<link rel="stylesheet" href="css/reset.css" type="text/css" media="all">
<link rel="stylesheet" href="css/layout.css" type="text/css" media="all">
<link rel="stylesheet" href="css/style.css" type="text/css" media="all">
<script type="text/javascript" src="js/jquery-1.4.2.js" ></script>
<script type="text/javascript" src="js/cufon-yui.js"></script>
<script type="text/javascript" src="js/cufon-replace.js"></script> 
<script type="text/javascript" src="js/Myriad_Pro_italic_600.font.js"></script>
<script type="text/javascript" src="js/Myriad_Pro_italic_400.font.js"></script>
<script type="text/javascript" src="js/Myriad_Pro_400.font.js"></script>
<!--[if lt IE 9]>
	<script type="text/javascript" src="http://info.template-help.com/files/ie6_warning/ie6_script_other.js"></script>
	<script type="text/javascript" src="js/html5.js"></script>
<![endif]-->
</head>
<body id="page1">
<div class="body1">
	<div class="main">
<!-- header -->
		<header>
			<div class="wrapper">
				<h1>
					<a href="index.php" id="logo" style="margin-left:20px" ></a><span id="slogan">International Travel</span> 
                    
				</h1>
				<div class="right">
					<nav>
						<ul id="top_nav">
							<li><a href="index.php"><img src="images/img1.gif" title="Home" alt=""></a></li>
							<li><a href="index-4.php"><img src="images/img2.gif" title="Login" alt=""></a></li>
							<li class="bg_none"><a href="Enquiries.php"><img src="images/img3.gif" title="Enquiries" alt=""></a></li>
						</ul>
					</nav>
					<nav>
						<ul id="menu">
							<li><a href="index.php">Home</a></li>
							<li><a href="index-1.php">Manage Your Trip</a></li>
							<li><a href="index-2.php">Special Offers</a></li>
							<li><a href="index-3.php">Flying Returns</a></li>
                            <li><a href="index-5.php">Travel Information</a></li>
                            <li><a href="Enquiries.php">Enquiries</a></li>
							<li><a href="index-4.php">Login</a></li>
						</ul>
					</nav>
				</div>
			</div>
		</header>
	</div>
</div>
   	  <div data-u="navigator" class="jssorb05" style="bottom:16px;right:16px;" data-autocenter="1">
            <!-- bullet navigator item prototype -->
       </div>
        <!-- Arrow Navigator -->
         <span data-u="arrowleft" class="jssora22l" style="top:0px;left:8px;width:40px;height:58px;" data-autocenter="2"></span>
        <span data-u="arrowright" class="jssora22r" style="top:0px;right:8px;width:40px;height:58px;" data-autocenter="2"></span>
    </div>
</div>
<!-- / header -->
<div class="main">
<!-- content -->

	<section id="content">
		<article class="col1">
			<div class="pad_1">
				<?php include_once("side_menu.php");?>
				</div>
		</article>
       
		<article class="col3">
        <div style="position:absolute">
        <a href="index.php"> Home</a> › <a href="index-1.php"> Manage Your Trip </a> › Domestic Fares and Penalties:
        </div>
        
        <div style="width:600px; position:absolute; margin-top:30px">
        <div style="border-bottom:groove; width:250px; height:250px; position:absolute">
			<a href="pdf/DomesticFare.pdf" style="text-decoration:none"><img src="pdf/pdf.png"></a>
            </div>
            
            <div style="border-bottom:groove; width:250px; height:250px; margin-left:300px">
            <a href="pdf/Penalties.pdf" style="text-decoration:none"><img src="pdf/pdf.png"></a>
		</div>
        <div style="position:absolute; width:250px; height:50px; text-align:center">
        <a href="pdf/DomesticFare.pdf" font style="color:#FF0000;text-decoration:none; font-size:24px">Domestic Fares.</a>
        </div>
        <div style="width:250px; height:50px; margin-left:300px; text-align:center">
        <a href="pdf/Penalties.pdf"font style="color:#FF0000;text-decoration:none; font-size:24px">Domestic Penalties.</a>
        </div>
        </div>
        <div style="border:groove; width:255px; height:297px;float:right">
            <img src="images/7_1_mang-trip-top-nav-adv-bnr.jpg">
            </div>
        </article>
	</section>
<!-- / content -->
</div>
<div class="body2">
	<div class="main">
    
<!-- footer -->
		<footer>
			<a href="index.php" target="_blank">Website template</a> designed by Siddhesh Undale.<br>
			<a href="index.php" target="_blank">3D Models</a> provided by Shubham Shinde.
		</footer>
<!-- / footer -->
	</div>
</div>
<script type="text/javascript"> Cufon.now(); </script>
</body>
</html>