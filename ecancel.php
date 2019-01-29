<?php session_start();
include_once("conne.php");


	$email=$_POST["email"];
	$num=$_POST["num"];
	
	
?>



<!DOCTYPE html>
<html lang="en">
<head>
<title>cancel</title>
<meta charset="utf-8">
<link rel="stylesheet" href="css/reset.css" type="text/css" media="all">
<link rel="stylesheet" href="css/layout.css" type="text/css" media="all">
<link rel="stylesheet" href="css/style.css" type="text/css" media="all">
<link rel="stylesheet" href="css/form.css" type="text/css" media="all">

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
			<div class="wrapper" >
				<h1>
					 <a href="index.php"id="logo"><font style="margin-left:400px;  color:#FF2243; ; float:right; font-size:28px; margin-top:80px; font-weight:bolder; font-family:Verdana, Arial, Helvetica, sans-serif"> AIR INDIA </font></a>
                    
				</h1>
				<div class="right">
					<nav>
					<ul id="top_nav">
							<li><a href="index.php" title="Home"><img src="images/img1.gif" alt=""></a></li>
							<li ><a href="enquries.php" title="Enquries"><img src="images/img2.gif" alt=""></a></li>
                            <li class="bg_none"><a href="index-4.php"><img src="images/img3.gif" title="Admin Login" alt=""></a></li>
						</ul>
						</nav>
					<nav>
                   	<ul id="menu">
							<li><a href="index.php">Home</a></li>
							<li><a href="index-1.php">Manage Your Trip</a></li>
							<li  ><a href="special_offers.php">Special Offers</a></li>
							<li><a href="flyingreturns.php">Flying Returns</a></li>
                            <li id="menu_active"><a href="travel_information.php">Travel Information</a></li>
                            <li><a href="enquries.php">Enquries</a></li>
						
						</ul>
					</nav>
				</div>
			</div>
		</header>
	</div>
</div

></body>
<table border="1"   cellspacing="0" cellpadding="0"   bgcolor="#333333" style="position:absolute;width:900px;margin-left:250px;margin-top:100px;background-color:#333333">  
 <tr   style="color:#FFFFFF ; background-color: #333333; text-align:center" height="30px; "><td colspan="10">FLIGHT</td></tr> 
<tr  style="background-color:#666666 ;
	 color:#FFFFFF;
	 height:30px;
	 text-align:center;font-family:Geneva, Arial, Helvetica, sans-serif">
<td>sr no</td>
<td>origine</td>
<td>destination</td>
<td>flight no</td>
<td>date</td>
<td>departure</td>

<td>arrival</td>
<td>class</td>
<td>prise</td>


</tr>


<?php
$query="select * from customer where email=:email and num=:num ";
$stmt=$con->prepare($query);
$stmt->bindParam(":email",$email);
$stmt->bindParam(":num",$num);


$stmt->execute();	
$i=1;
if($stmt->rowCount()>0)
{
	while($row=$stmt->fetch(PDO::FETCH_ASSOC))
	{
	?>
			<tr	 style="height:30px;background-color:#CCCCCC ; text-align:center;width:100px;">
        <td><?php echo $i++; ?></td>
        <td><?php echo $row["origine"];?></td>
        <td><?php echo $row["destination"];?></td>
        <td><?php echo $row["flightno"];?></td>
        <td><?php echo $row["fdate"];?></td>
        <td><?php echo $row["departure"];?></td>
        <td ><?php echo $row["arrival"];?></td>
        <td ><?php echo $row["class"];?></td>
        <td ><?php echo $row["price"];?></td>
     
      <td style=" background-color:#333333 ;"> <a href="deleteflight.php?id=<?php echo $row["id"]?>>" style="color:#FFFFFF;height:30px;text-align:center;text-decoration:none">
      Delete</td></tr></a>
<?php
	}
}


  ?>
  
  <?php if(isset($_SESSION["MSG"]))
   {

    echo $_SESSION["MSG"]; 

     unset($_SESSION["MSG"]);
	}
	?>
  
<div style="width: 100%;height:250px;position:absolute;min-width: 1000px;background: #404040 url(images/footer-bg.gif) left top repeat-x;
    margin-top:1090px;">

<?php
include_once("footer.php"); ?>
</div>
<script type="text/javascript"> Cufon.now(); </script>
</body>
</html>	