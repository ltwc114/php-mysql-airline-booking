<?php session_start();
include_once("conne.php");
?>
<!doctype html>
<html lang="en">
<head>
<title>search fights</title>
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
<div class="wthreesubmitaits" style="margin-right:20px;">
				<a href="index-1.php">	<input type="submit" name="submit" value="back"></a>
				</div>
</head>
<body>
<h1 class="header-w3ls">Search Flights</h1>
<div class="content-w3ls">
	<div class="form-w3ls">
	<form action="worigine.php" method="post">
				<div class="content-wthree1">
				<div class="grid-agileits1">
					<div class="form-control"> 
						<label class="header">Leaving From: <span>*</span></label>
						   <select name="from_flight" style="width:540px;">
                         	<option value="none" selected="" disabled="">Select flight</option>
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
