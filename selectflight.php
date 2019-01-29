	<?php session_start();
	include_once("conne.php");
	if(isset($_POST["from_flight"]) && isset($_POST["to_flight"])  && isset($_POST["economy"]) && isset($_POST["passanger"]))
	{
		$from_flight=$_POST["from_flight"];
		$to_flight=$_POST["to_flight"];
	
		$economy=$_POST["economy"];
		$passanger=$_POST["passanger"];
		
	
	
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
				<div class="pad_1" style="padding: 17px 58px 66px 52px; height: 339px; " >
					<h2>Your Flight Planner</h2>
					
					<form id="form_1" action="<?php $_SERVER['PHP_SELF'] ?>" method="post" >
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
	
	
	
	
	
		
	
	
	
	<?php
	$query="select * from flight where from_flight=:from_flight and to_flight=:to_flight ";
	$stmt=$con->prepare($query);
	$stmt->bindParam(":from_flight",$from_flight);
	$stmt->bindParam(":to_flight",$to_flight);
	
	
	$stmt->execute();	
	$i=1;
	if($stmt->rowCount()>0)
	{
		?>
		  <table border="1"   cellspacing="0" cellpadding="0"   bgcolor="#000000" style="position:absolute;width:900px;margin-left:350px;margin-top:35px;"  >
					 
	<tr   style="color:#FFFFFF;background-color:#333333; height:30px;text-align:center;height:40px;" > 
	<td > Sr no </td>
	<td > ORIGINE</td>
	<td >DESTINATION</td>
	<td>Flight number</td>
	<td >DATE</td>
	<td >DEPARTURE</td>
	<td >arrival</td>
	<td >price</td>
	
	
	</tr>
	<?php
		while($row=$stmt->fetch(PDO::FETCH_ASSOC))
		{
		?>
	
				<tr	 style="height:30px;background-color:#CCCCCC ; text-align:center">
		   <td style="width:100px;"><?php echo $i++; ?></td>
			
			<td><?php $_SESSION["origine"]= $row["from_flight"];
					  echo $_SESSION["origine"]?></td>
					  
			  <td><?php $_SESSION["destination"]= $row["to_flight"];
					  echo $_SESSION["destination"]?></td>
						
			 <td><?php $_SESSION["flightno"]= $row["flight_number"];
					  echo $_SESSION["flightno"]?></td>
						
			  <td><?php $_SESSION["fdate"]= $row["date"];
					  echo $_SESSION["fdate"]?></td>
			
				   <td><?php $_SESSION["departure"]= $row["departure"];
					  echo $_SESSION["departure"]?></td>
						
		 
				   <td><?php $_SESSION["arrival"]= $row["arrival"];
					  echo $_SESSION["arrival"]?></td>
						
		  
		 <td>
		 
		 <?php
		switch($passanger)
	
			{
				case "1":
				
				switch($economy)
				{
			   case "economy":
			   $e= $row["ecprice"];
			   echo $e;
				break;
				
				 case "execute":
			   $e= $row["exprice"];
				echo $e;
				break;
				
				 case "first":
			   $e=$row["fprice"];
				echo $e;
				break;
				 default:
					echo "ss";
				}
				
				break;
				
			  
					case "2":
				switch($economy)
				{
			   case "economy":
			   $e= 2*$row["ecprice"];
				echo $e;
				break;
				
				 case "execute":
			   $e= 2*$row["ecprice"];
				echo $e;
				break;
				
				 case "first":
			   $e= 2*$row["fprice"];
				echo $e;
				break;
				 default:
					echo "ss";
				}
				
				break;
				
				
				case "3":
				switch($economy)
				{
			   case "economy":
			   $e= 3*$row["ecprice"];
				echo $e;
				break;
				
				 case "execute":
			   $e= 3*$row["exprice"];
				echo $e;
				break;
				
				 case "first":
			   $e= 3*$row["fprice"];
				echo $e;
				break;
				}
				break;
				 default:
					echo "ss";
		   }         	
		
		?>
		</td>
		<td>
	   
       <?php
	  $_SESSION["safe"]="shubham";
	  ?>
		
		<form action="userflight.php">
	<input type="hidden" name="id" value="<?php echo  $row["id"]; ?>">
	<input type="hidden" name="from_flight" value="<?php echo  $from_flight; ?>">
	  <input type="hidden" name="to_flight" value="<?php echo  $to_flight; ?>">
	  <input type="hidden" name="passanger" value="<?php echo  $passanger; ?>">
	  <input type="hidden" name="economy" value="<?php echo  $economy; ?>">
        <input type="hidden" name="safe" value="<?php echo  $_SESSION["safe"] ?>">
	  
	  <input type="submit" value="BOOK"  style="width:80px;background-color:#CCCCCC ; font-family:'Britannic Bold'">
		
		</form>
		</td>
			</tr>
        	   
            
	<div style="width: 100%;height:250px;position:absolute;min-width: 1000px;background: #404040 url(images/footer-bg.gif) left top repeat-x;
		margin-top:650px; border:dotted #00CC00">
	
	<?php include("footer.php"); ?>
    
	<?php	
		}
	   
	}
	
	else
	{
	?>
	</table>
    <div style="height:100px; width:900px;margin-left:350px;margin-top:60px;">
	<font style="width:500px; font-size:24px ; font-weight:bold" face="Courier New, Courier, monospace" >Sorry, no availability of flights or seats are found for the routes / dates you have selected.. Please search for an alternate date or route</h2>
	</div>
	
	
	
	<?php }
			
	}	
	else
	{
		
		header("Location:invalid.php");
	}
	?>
	
