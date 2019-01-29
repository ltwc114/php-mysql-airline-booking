<?php session_start();
include_once("conne.php");

if(isset($_POST["from_flight"])  )
{
	
	$from_flight=$_POST["from_flight"];
				


	
	
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
        
           
  <div style="color: white; padding: 5px 50px 50px 50px; float: right; font-size: 16px;">
  
   <a href="origine.php" class="button2" style="margin-top:12px; border-radius:10px;">Back</a> 
   </div>
   <?php if(isset($_SESSION["deletefli"]))
	{ ?>
    <h2 style="margin-left:50px; color:#FFFFFF">
    
	 	<?php echo $_SESSION["deletefli"]; ?> </h1> <?php
  
	}
	unset($_SESSION["deletefli"])
    ?>
        </nav> 
    

       <table border="1"   cellspacing="0" cellpadding="0"   bgcolor="#000000" style="position:absolute;width:1000px;margin-left:150px;margin-top:80px;"  >
                 
<tr   style="color:#FFFFFF;background-color:#333333; height:30px;text-align:center;height:40px;" > 
<td> Sr no </td>
<td > ORIGINE</td>
<td >DESTINATION</td>
<td>Flight number</td>
<td >DATE</td>
<td >DEPARTURE</td>
<td >arrival</td>


</tr>


<?php
$query="select * from flight where from_flight=:from_flight  ";
$stmt=$con->prepare($query);
$stmt->bindParam(":from_flight",$from_flight);



$stmt->execute();	
$i=1;
if($stmt->rowCount()>0)
{
	while($row=$stmt->fetch(PDO::FETCH_ASSOC))
	{
	?>
			<tr	 style="height:30px;background-color:#CCCCCC ; text-align:center">
        <td><?php echo $i++; ?></td>
        <td><?php echo $row["from_flight"];?></td>
        <td><?php echo $row["to_flight"];?></td>
        <td><?php echo $row["flight_number"];?></td>
        <td><?php echo $row["date"];?></td>
        <td><?php echo $row["departure"];?></td>
        <td ><?php echo $row["arrival"];?></td>
        </tr>
<?php
	}
}



else
{
?>
<h2>Sorry, no availability of flights or seats are found for the routes / dates you have selected.. Please search for an alternate date or route<h2>

<?php }
?>



<?php
}
else
{
	
	header("Location:invalid.php");
}
?>