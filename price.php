<?php session_start();
include_once("conne.php");
if(isset($_SESSION["origine"]) && isset($_SESSION["destination"]))
{


?>

<!DOCTYPE html>
<html lang="en">
<head>
<title>Offers</title>
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
</div>


<div style="border:ridge ; height:1000px;width:800px;margin-left:100px;margin-top:100px; background-color:#EBEBEB">

	<h3 style="font-size: 18px; font-size: 2em;font-weight: bold; color:#333333; margin-left:20px;margin-top:30px">Booking details</h3>
	






<div style="height:100px; width:650px; margin-left:20px;margin-top:40px;">
<table border="1" cellspacing="0.1" style="width:650px;">
<tr>
<td colspan="2" style="height:30px;background-color:#333333 ; color:#FFFFFF; text-align:center;width:50px;" >travellers</td>
</tr>

<tr>
<td class="trtable">passanger</td>
<td class="trtable2"> <?php if(isset($_SESSION["name"]))
	{
 echo $_SESSION["name"];}?></td>
</tr>

<tr >
<td class="trtable">DOB</td>
<td class="trtable2"><?php if(isset($_SESSION["bdate"]))
	{
 echo $_SESSION["bdate"];}?></td>
</tr>


</table>


</div>


<br>
<br>
<br>


<div style="height:100px; width:650px; margin-left:20px;margin-top:0px;">
     <table border="1"   cellspacing="0" cellpadding="0"   bgcolor="#000000" style="position:absolute"  >
     
 <tr   style="color:#FFFFFF ; background-color: #333333; text-align:center" height="30px; "><td colspan="7">FLIGHT</td></tr>   
              
<tr   style="color:#FFFFFF ; background-color: #666666; text-align:center" height="40px;"> 

<td style="width:120px"> ORIGINE</td>
<td style="width:120px">DESTINATION</td>
<td style="width:100px">Flight number</td>
<td style="width:100px">DATE</td>
<td style="width:100px">DEPARTURE</td>
<td style="width:100px">arrival</td>
<td style="width:100px">class</td>

</tr>

			<tr	 style="height:30px;background-color:#CCCCCC ; text-align:center">	

<td> <?php  if(isset($_SESSION["origine"]))
	{
 echo $_SESSION["origine"];}?></td>
 
 <td> <?php  if(isset($_SESSION["destination"]))
	{
 echo $_SESSION["destination"];}?></td>
 
 <td> <?php  if(isset($_SESSION["flightno"]))
	{
 echo $_SESSION["flightno"];}?></td>
 
 <td> <?php  if(isset($_SESSION["fdate"]))
	{
 echo $_SESSION["fdate"];}?></td>
 
 <td> <?php  if(isset($_SESSION["departure"]))
	{
 echo $_SESSION["departure"];}?></td>
 
 <td> <?php  if(isset($_SESSION["arrival"]))
	{
 echo $_SESSION["arrival"];}?></td>
  <td> <?php  if(isset($_SESSION["economy"]))
	{
 echo $_SESSION["economy"];}?></td>
 </tr>

</table>
</div>



<div style="height:100px; width:650px; margin-left:20px;margin-top:40px;">
<table border="1" cellspacing="0.1" style="width:650px;">
<tr>
<td class="trtable" style="background-color:#333333" colspan="2">Air fare cost</td>

</tr>
<tr>
<td class="trtable">traveller</td>
<td class="trtable2"><?php echo $_SESSION["passanger"]; ?></td>
</tr>
<tr>
<td class="trtable">Net</td>
<td class="trtable2"><?php echo  $_SESSION["net"]; ?></td>
</tr>
<tr>
<td class="trtable">Tax</td>
<td class="trtable2"><?php echo  $_SESSION["tax"]; ?></td>
<tr>
<td class="trtable" style="background-color:#333333 ;">Total</td>
<td class="trtable" style="background-color:#333333 ;"><?php echo $_SESSION["total"]; ?></td>
</tr>


</table>
</div>
<br />
<br />
<br />

<form action="bookmail.php">

	<input type="hidden" name="name" value="<?php echo $_SESSION["name"]; ?>">
      <input type="hidden" name="bdate" value="<?php echo $_SESSION["bdate"]; ?>">
      	<input type="hidden" name="email" value="<?php echo $_SESSION["email"]; ?>">
     
 
 
 
     <input type="hidden" name="p" value="<?php echo $_SESSION["passanger"]; ?>">
      <input type="hidden" name="n" value="<?php echo $_SESSION["net"]; ?>">
       <input type="hidden" name="t" value="<?php echo   $_SESSION["tax"]; ?>">
        <input type="hidden" name="to" value="<?php echo $_SESSION["total"]; ?>">
				
 <input type="hidden" name="origine" value="<?php echo $_SESSION["origine"]; ?>">
 <input type="hidden" name="destination" value="<?php echo $_SESSION["destination"]; ?>">
 <input type="hidden" name="flightno" value="<?php echo $_SESSION["flightno"]; ?>">
 <input type="hidden" name="fdate" value="<?php echo $_SESSION["fdate"]; ?>">
 <input type="hidden" name="departure" value="<?php echo $_SESSION["departure"]; ?>">
 <input type="hidden" name="arrival" value="<?php echo $_SESSION["arrival"]; ?>">
 <input type="hidden" name="economy" value="<?php echo $_SESSION["economy"]; ?>">
 
<br>
<br>

<font color="#0099FF"   style="font-family:Geneva, Arial, Helvetica, sans-serif; font-size:20px ;margin-top:30px;">Change and Cancel Policy</font><br><br>



It is necessary for you to scroll and view the change and cancel policy in the box below completely before you proceed to click on the Book tab.


<textarea style="width:700px;height:200px;margin-left:20px;margin-top:20px;">16.Penalties-changes/cancel
  Changes/cancellations
    Before Departure
      Per Coupon Charge Inr 2500 For Cancel/reissue/
        Revalidation.
         Note -
          Text Below Not Validated For Autopricing.
          Permitted Till 1 Hr Before Scheduled Departure Of
          The Flight Against A Change Fee Of Inr 2500 Per
          Coupon Or Basic Fare Which Ever Is Lower.
          --------------------------------------------------
          The Change/reissue Charge Is Non - Refundable
          --------------------------------------------------
          No Re-validation Or Cancellation Fee Would Be
          Applicable On Infant Tickets.
          --------------------------------------------------
          In Case Of Change To Higher Rbd For Travel On The
          Same Day/same Flight/re-issuance Fee Will Not Be A
          Pplicable.Only Difference In Total Fare Is To Be
          Collected.
          --------------------------------------------------
          Cancellation Fee Of Partly Used Ticket
          Deduct Oneway Fare And Levies For The Travelled
          Sector Plus Cancellation Fee
          --------------------------------------------------
    Changes/cancellations Permitted For No-show.
         Note -
          Text Below Not Validated For Autopricing.
          Changes / Cancellation Fee If Cancelled
          Less Than One Hour Before Departure - 100 Percent
          Of Basic Fare Will Be Forfeited.
          --------------------------------------------------
          The Change/reissue Charge Is Non - Refundable
          --------------------------------------------------
          Above Charges Are Inclusive Of Service Tax.
          --------------------------------------------------
          Air India No-show Waiver At Airport - For Rbds -
          H/k/q/v/w/g/l/u/t/s/e In Case The Passenger Has
          Reported At The Airport After Closure Of Counter
          But Before Departure Of Flight Would Be Permitted
          To Roll Over On No-show At A Charge Of Inr 3000.
          --------------------------------------------------
          This Will Be Authorised At The Airport At The
          Time Of Flight Only And Cannot Be Levied/ Waived
          At Cbo.
          --------------------------------------------------
          The Waiver Of No-show In Such Cases To Be
          Authorised By The Duty Manager.
          --------------------------------------------------
          Further Fare Difference If Any As Per The Rbd/
          Fare Basis Available/ Applicable On The Next
          Available Flight Will Have To Be Charged From The
          Passenger In Addition To The No-show Penalty.</textarea>
          
          
          <div style="  height:50px;width:200px;margin-left:550px;margin-top:30px;"
</div>
<input type="submit" class="button2" value="BOOK NOW" /></div>
</form>

</div>

 
 
 
<div style="width: 100%;height:250px;position:absolute;min-width: 1000px;background: #404040 url(images/footer-bg.gif) left top repeat-x;
    margin-top:50px;">


<?php include("footer.php"); ?>


<script type="text/javascript"> Cufon.now(); </script>
</body>
</html>
 
<?php
}
else
{
	
	header("Location:invalid.php");
}
?>