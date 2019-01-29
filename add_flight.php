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
                        
						<li style="float:left;padding-right:21px;margin-right:20px;background:url(../images/line_top.gif) right 0 no-repeat;padding-top:2px;padding-bottom:3px;padding-right:0;margin:0;background:none;height:50px;"><a href="flight.php" title="Home"><img src="images/img1.gif" alt=""></a></li>
                        
				
						</ul>
						</nav>
    		</div>
</head>
<body>

<h1 class="header-w3ls">ADD FLIGHT</h1>
<div class="content-w3ls">
	<div class="form-w3ls">
	 <form method="post" action="wadd_flight.php">
	  <div class="content-wthree1">
		<div class="grid-agileits1">
		   		<div class="form-control"> 
			 	 <label class="header">From: </label>
					<input type="text" id="name" name="from" placeholder="Origine"  required="">
				</div>
			
		   		<div class="form-control">	
				 <label class="header">Destination </label>
			 		<input type="text" id="name" name="to" placeholder="Destination"  required="">
		   		</div>
            
				<div class="form-control"> 
			 	 <label class="header">Flight number </label>
					<input type="text" id="name" name="flight_number" placeholder="Flight Number" required="">
				</div>
			
            
             	<div class="form-control"> 
			  	 <label class="header" >Date: </label>
   					<input type="date"  name="date" style="  border: none;color: #fff; text-align: justify; outline: none; letter-spacing: 1px;  font-size: 15px;  font-weight: normal;  background-color: rgba(0, 0, 0, 0.38);height: 40px; padding: 0 15px; width: 92.2%;
	    margin-bottom: 16px;">
         		</input> 
              </div>
                
        	 <div class="form-control"> 
				<label class="header">Departure </label>
				  <input type="text" id="name" name="departure" placeholder="Departure" required="">
			</div>
            
            <div class="form-control"> 
			 <label class="header">Arrival </label>
				<input type="text" id="name" name="arrival" placeholder="Arrival" required="">
			</div>
                 
            
             <div class="form-control"> 
			  <label class="header">economy:</label>
				<input type="text" id="name" name="ecprice" placeholder="ecprice" required="">
			</div>  
                 
               
             <div class="form-control"> 
			 <label class="header">executive: </label>
				<input type="text" id="name" name="exprice" placeholder="exprice" required="">
			 </div>  
                 
                 
             <div class="form-control"> 
			  <label class="header">first: </label>
				<input type="text" id="name" name="fprice" placeholder="fprice"required="">
			</div>  
                 
                 
             <div class="form-control"> 
			  <label class="header">tax: </label>
				<input type="text" id="name" name="tax" placeholder="tax" required="">
		     </div>  
                 
                 
             <div class="form-control"> 
			  <label class="header">origine lat: </label>
				<input type="text" id="name" name="ori_lat" placeholder="ori_lat" required="">
			</div>  
                 
                 
             <div class="form-control"> 
			  <label class="header">origine long: </label>
				<input type="text" id="name" name="ori_long" placeholder="ori_long" required="">
			</div>  
                 
                 
             <div class="form-control"> 
			  <label class="header">destination lat:</label>
				 <input type="text" id="name" name="dest_lat" placeholder="destination lat" required="">
			</div>  
                 
                
             <div class="form-control"> 
			  <label class="header">destination long: </label>
				<input type="text" id="name" name="dest_long" placeholder="destination long" required="">
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
