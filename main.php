<?php session_start();
include_once("conne.php");



if(isset($_SESSION["origine"]) && isset($_SESSION["destination"]))
{


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
                        
						<li style="float:left;padding-right:21px;margin-right:20px;background:url(../images/line_top.gif) right 0 no-repeat;padding-top:2px;padding-bottom:3px"><a href="index.php" title="Home"><img src="images/img1.gif" alt=""></a></li>
                        
						<li style="float:left;padding-right:21px;margin-right:20px;background:url(../images/line_top.gif) right 0 no-repeat;padding-top:2px;padding-bottom:3px;padding-right:0;margin:0;background:none"><a href="enquries.php" title="Contact us"><img src="images/img2.gif" alt=""></a></li>
                        
  					
						</ul>
						</nav>
    		</div>
<body>
<h1 class="header-w3ls">TRAVELLER DETAILS</h1>
                          
<div class="content-w3ls">
      
	<div class="form-w3ls">
	
 <form action="wmain.php" method="post">
    
         


<p style="color:#000000">Please ensure that the details filled below are of the travelling passengers only.
Fields marked * are mandatory.</p>

<p style="color:#000000">Please note that the Advance Passenger Information Passport Details must be provided before commencement of travel. </p>

<p style="color:#000000"> Please note that the name and title of all the passengers for whom this booking is being made should match the identification shown at the time of check-in. Kindly provide all contact numbers (including your mobile number) as this will help us contact you in case of any changes in flight timing. </p>

<p style="color:#000000">In case of International travel, the name should be entered exactly as it appears on the passport to avoid inconvenience or delay at the airport and avoid denied boarding.</p>
     
        
    <div class="content-wthree1">
				<div class="grid-agileits1">
                
			<div class="form-control"> 
		   <label class="header">Type: </label>
          <select name="type">
		  <option value="mr">mr</option>
		  <option value="mrs">mrs</option>
		  </select>
			</div>
                      
           <div class="form-control"> 
			<label class="header">Name: </label>
			<input type="text" id="name" name="name" placeholder="Name" title="Please enter your Full Name" required="">
			</div>
          
          <div class="form-control"> 
	<label class="header" style="margin-top:1px;">Date: </label>
   <input type="date"  name="bdate" style="  border: none;color: #fff; text-align: justify; outline: none; letter-spacing: 1px;  font-size: 15px;  font-weight: normal;  background-color: rgba(0, 0, 0, 0.38);height: 40px; padding: 0 15px; width: 92.2%;
	    margin-bottom: 16px;">
         </input>  </div>
          
       <div class="form-control"> 
			<label class="header">Phone: </label>
			<input type="text" id="name" name="num" placeholder="Phone" title="Please enter your Phone No" required="">
			</div>
          
      	<div class="form-control">	
			<label class="header">Email: </label>
			<input type="email" id="email" name="email" placeholder="Mail@example.com" title="Please enter a Valid Email Address" required="">
			</div>
       
        
     <input type="hidden" name="passanger" value="<?php echo  $_SESSION["passanger"]; ?>">
 		 <input type="hidden" name="net" value="<?php echo  $_SESSION["net"]; ?>">
   			<input type="hidden" name="tax" value="<?php echo  $_SESSION["tax"]; ?>">
   				<input type="hidden" name="total" value="<?php echo  $_SESSION["total"]; ?>">
            		
 
  
    <input type="hidden" name="origine" value="<?php echo  $_SESSION["origine"]; ?>">
      <input type="hidden" name="destination" value="<?php echo  $_SESSION["destination"]; ?>">
        <input type="hidden" name="flightno" value="<?php echo  $_SESSION["flightno"]; ?>">
          <input type="hidden" name="fdate" value="<?php echo  $_SESSION["fdate"]; ?>">
            <input type="hidden" name="departure" value="<?php echo  $_SESSION["departure"]; ?>">
              <input type="hidden" name="arrival" value="<?php echo  $_SESSION["arrival"]; ?>">
  				<input type="hidden" name="economy" value="<?php echo  $_SESSION["economy"]; ?>">
    		 		
     
     
        <div class="wthreesubmitaits">
		   <input type="submit" name="submit" value="NEXT">
			</div>
    
        
        
    
      </form>
					</div>
					</div>
	</div>
	
</div>



</body>
</html>


<?php
}
else
{
	
	header("Location:invalid.php");
}
?>