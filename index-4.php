<?php session_start();
include_once("conne.php");
?>
<!doctype html>
<html lang="en">
<head>
<title>Booking</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Classy Job Application Form Widget Responsive, Login form web template,Flat Pricing tables,Flat Drop downs  Sign up Web Templates, Flat Web Templates, Login signup Responsive web template, Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- font files -->
<link href='//fonts.googleapis.com/css?family=Lato:400,100,100italic,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
<!-- /font files -->
<!-- css files -->
<link href="css/newform1.css" rel='stylesheet' type='text/css' media="all" />
<link rel="stylesheet" href="css/newform2.css">





<!-- /css files -->
<script type="text/javascript" src="js/newformjquery.js"></script>

</head>
<div class="right"  style="float:right">
  <nav>
	<ul style="font-size:10px; float:right;padding:25px 25px 0 0;  text-align:center; " >
         <li style="float:left;padding-right:21px;margin-right:20px;background:url(../images/line_top.gif) right 0 no-repeat;padding-top:2px;padding-bottom:3px;padding-right:0;margin:0;background:none"><a href="index.php" title="Home"><img src="images/img1.gif" alt=""></a>
         </li>
  </nav>
</div>
<body>


<h1 class="header-w3ls">Admin Login</h1>
<div class="content-w3ls">
  <div class="form-w3ls">
	
    <form method="post" action="wlogin.php">
    			  <?php if(isset($_SESSION["invalid"]))
					{ 
				  ?>
    		<font style="margin-left:200px;" color="#FFFFFF">
    
	 				<?php 	
					echo $_SESSION["invalid"];
					}
					unset($_SESSION["invalid"])
    				?> 
             </font>
    
    
			  <?php if(isset($_SESSION["logout"]))
					{ 
					?>
    		<font style="margin-left:200px;" color="#FFFFFF">
    
	 				<?php
					 echo $_SESSION["logout"];
					}
					unset($_SESSION["logout"])
    				?>
            </font>
            
            
            
            
          <?php if(isset($_SESSION["wrongpass"]))
					{ 
					?>
    		<font style="margin-left:200px;" color="#FFFFFF">
    
	 				<?php
					 echo $_SESSION["wrongpass"];
					}
					unset($_SESSION["wrongpass"])
    				?>
            </font>
			
 <div class="form-control"> 
	<label class="header">Username: </label>
	  <input type="text" id="name" name="username"  title="Please enter your Full Name" required="">
 </div>
		
<div class="form-control">	
	<label class="header">Password: </label>
		<input type="password" id="email" name="pass"  title="Please enter a Valid Password" required="">
</div>
            
 <div class="wthreesubmitaits">
		 <input type="submit" name="submit" value="GO">
</div>
   	</form>
</div>
</div>
</div>
</div>
</body>
</html>
