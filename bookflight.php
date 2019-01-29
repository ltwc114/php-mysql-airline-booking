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
	<div class="right"  style="float:right">
			  <nav>
						<ul style="font-size:10px; float:right;padding:25px 25px 0 0;  text-align:center; " >
                        
						<li style="float:left;padding-right:21px;margin-right:20px;background:url(../images/line_top.gif) right 0 no-repeat;padding-top:2px;padding-bottom:3px;padding-right:0;margin:0;background:none;height:50px;"><a href="index.php" title="Home"><img src="images/img1.gif" alt=""></a></li>
                        
				
						</ul>
						</nav>
    		</div>
</head>
<body>
<h1 class="header-w3ls">BOOK FLIGHT</h1>
<div class="content-w3ls">
	<div class="form-w3ls">
	<form action="userflight.php" method="post">
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
		
        	
        
        <div class="form-control"> 
						<label class="header">Going to: <span>*</span></label>
        <select name="to_flight" style="width:540px;">
                          <option value="none" selected="" disabled="">Select flight</option>
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
                   
     <div class="form-control"> 
	<label class="header" style="margin-top:22px;">Date: <span>*</span></label>
   <input type="date"  name="date" style="  border: none;color: #fff; text-align: justify; outline: none; letter-spacing: 1px;  font-size: 15px;  font-weight: normal;  background-color: rgba(0, 0, 0, 0.38);height: 40px; padding: 0 15px; width: 92.2%;
	    margin-bottom: 16px;">
         </input>  </div>
        
				
				<div class="form-control">
				<div class="main-row">
						<label class="header">class <span>*</span></label>
							<select name="economy">
								<option value="none" selected="" disabled="">Select class</option>
                                    
                                     <option value="economy" >economy</option>
                     <option value="execute">execute</option>
                     <option value="first">first</option>
							</select>
							<i></i>
						
					</div>
					</div>
					<div class="form-control">
				<div class="main-row">
						<label class="header">Passanger <span>*</span></label>
							<select name="passanger">
								<option value="none" selected="" disabled="">Passanger</option>
								
<option value="1">1</option>
<option value="2">2</option>
<option value="3">3</option>
<option value="4">4</option>
							</select>
							<i></i>
						
					</div>
					</div>
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
