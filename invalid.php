<?php session_start();
include_once("conne.php");
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


<script language="javascript">
function txt_validate()
{
var email1=document.getElementById("email").value;
	if(email1=="" || email1==null)
	{
		alert("Please enter Email ID");
		return false;
	}
	
		return true;
}

</script>

</head>
<body id="page1">
<div class="body1">
	<div class="main">
<!-- header -->
		<header>
			<div class="wrapper">
				<h1>
                <a href="index.php"id="logo"><font style="margin-left:400px;  color:#FF2243; ; float:right; font-size:28px; margin-top:80px; font-weight:bolder; font-family:Verdana, Arial, Helvetica, sans-serif"> AIR INDIA </font></a>
                    
				</h1>
				<div class="right">
					<nav>
						<ul id="top_nav" >
						<li><a href="index.php" title="Home"><img src="images/img1.gif" alt=""></a></li>
							<li class="bg_none"><a href="enquries.php" title="Enquries"><img src="images/img2.gif" alt=""></a></li>

						</ul>
						</nav>
					<nav>
						<ul id="menu">
							<li id="menu_active"><a href="index.php">Home</a></li>
							<li><a href="index-1.php">Manage Your Trip</a></li>
							<li><a href="special_offers.php">Special Offers</a></li>
							<li><a href="flyingreturns.php">Flying Returns</a></li>
                            <li><a href="travel_information.php">Travel Information</a></li>
                            <li><a href="enquries.php">Enquries</a></li>
							<li><a href="index-4.php">Login</a></li>
						</ul>
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
<div class="main" >
<!-- content -->

	<section id="content">
		<article class="col1">
			<div class="pad_1"  >
				<h2>Your Flight Planner</h2>
                
		<form id="form_1" action="selectflight.php" method="post" >
						<div class="wrapper pad_bot1">
						<div class="wrapper"><br>
							Leaving From:
							<div class="bg">
							 <select name="from_flight" style="width:235px; height:30px;">
							   <option value="0">--------------Select Flight--------------</option>
							<?php
								$query="select DISTINCT from_flight from flight";
								$stmt=$con->prepare($query);
								$stmt->execute();
								while($row=$stmt->fetch(PDO::FETCH_ASSOC))
								{
								
							?>
							
									<option value="<?php echo $row["from_flight"]; ?>" ><?php echo $row["from_flight"]; ?></option>
							   <?php
								}
							?>
							</select>
							</div>
						</div>
								<div class="wrapper">
							Going To:
							<div class="bg"><select name="to_flight" style="width:235px; height:30px;">
							  <option value="0">--------------Select Flight--------------</option>
							<?php
								$query="select DISTINCT to_flight from flight";
								$stmt=$con->prepare($query);
								$stmt->execute();
								while($row=$stmt->fetch(PDO::FETCH_ASSOC))
								{
								
							?>
									<option value="<?php echo $row["to_flight"]; ?>"><?php echo $row["to_flight"]; ?></option>
							   <?php
								}
							?>
							</select>
							</div>
						</div>
						
						
					
						
						
						<div class="wrapper">
							Class
						<select name="economy" style="width:235px; height:30px;">
						 <option value="economy" >economy</option>
						 <option value="execute">execute</option>
						 <option value="first">first</option>
						 </select>
						</br>
						</br>
						</div>
						
						 <div class="wrapper">
							Passanger
						  <select name="passanger" style="width:235px; height:30px;">
	<option value="1">1</option>
	<option value="2">2</option>
	<option value="3">3</option>
	<option value="4">4</option></select>
	</div> 
						  <input type="submit" class="button2" value="GO">
						</div>
					</form>
					</div>
			</article>
            </section>
            </div>
	<article class="col3">
<h2 style="margin-left:700px; width:300px;font-size:44px; color:#FF0000">Invalid access<h2>
