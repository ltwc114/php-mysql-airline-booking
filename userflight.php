<?php session_start();
include_once("conne.php");


if(isset($_GET["id"]) && isset($_GET["economy"]) && isset($_GET["passanger"]) && isset($_GET["from_flight"]) &&
isset($_SESSION["safe"]) && $_SESSION["safe"]=="shubham")
{

	
	
$id=$_GET["id"];
$economy=$_GET["economy"];
$passanger=$_GET["passanger"];
$from_flight=$_GET["from_flight"];
$to_flight=$_GET["to_flight"];


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
<article class="col3">





    <div style=" width:800px; margin-left:0px;margin-top:80px;">
    

<?php



//echo $id;

$query="select * from flight where id=:id";
$stmt=$con->prepare($query);
$stmt->bindParam(":id",$id);
$stmt->execute();
$row=$stmt->fetch(PDO::FETCH_ASSOC);
$o_lat="";
		$o_long="";
		$d_lat="";
		$d_long="";
	$o_lat=$row["ori_lat"];
			$o_long=$row["ori_long"];
			$d_lat=$row["dest_lat"];
			$d_long=$row["dest_long"];

	?>
         <table border="1"   cellspacing="0" cellpadding="0"   bgcolor="#000000" style="position:absolute;width:900px;"  >
          <tr   style="color:#FFFFFF ; background-color: #333333; text-align:center" height="30px; "><td colspan="9">FLIGHT</td></tr>         
<tr  class="trtable"> 

<td > ORIGINE</td>
<td >DESTINATION</td>
<td>Flight number</td>
<td >DATE</td>
<td >DEPARTURE</td>
<td >arrival</td>
<td >class</td>
<td >price</td>

</tr>
				<tr	 style="height:30px;background-color:#CCCCCC ; text-align:center;width:100px;">	
        
        
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
                    
        <td><?php echo $economy ?></td>
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
  
	</tr>
	
    
</table></div>
    
</div>
            </div>
         
		</article>
	</section>
<!-- / content -->
</div>









<?php
$query="select * from flight where from_flight=:from_flight and to_flight=:to_flight ";
$stmt=$con->prepare($query);
$stmt->bindParam(":from_flight",$from_flight);
$stmt->bindParam(":to_flight",$to_flight);
$stmt->execute();	
$row=$stmt->fetch(PDO::FETCH_ASSOC)
	
	?>
			
     
<div style="height:300px; width:800px;margin-top:270px;margin-left:380px;">

 <table border="1"   cellspacing="0" cellpadding="0"   bgcolor="#000000" style="position:absolute" width="900px;" >
<td class="trtable" style="background-color:#333333" colspan="2">Air fare cost</td>
<tr> 
<td class="trtable" >base fare per traveller</td>

     <td  style="height:30px;background-color:#CCCCCC ; text-align:center; width:200px; color:#000000;" >  
     
     <?php
	switch($economy)

	    {
            
           case "economy":
		   $p= $row["ecprice"];
		   echo $p;
		    break;
			
			 case "execute":
		   $p= $row["exprice"];	
		   echo $p;
		    break;
			
			 case "first":
		   $p= $row["fprice"];
		   echo $p;
		    break;
			 default:
                echo "ss";
			}
			
	
	?>
    </td>
  
	</tr>
    <tr >
    
    <td class="trtable">Total taxes per traveller</td>
     <td  class="trtable2"> <?php $t=$row["tax"];
	echo $t;
	?>
    </tr>
    
       <tr >
    <td class="trtable"> Total per traveller</td>
	<td class="trtable2">
	<?php $per=$p+$t;
	echo $per;?>
    
    </td></tr>
    
    
    <tr >
    <td class="trtable"> Number of travellers</td>
	<td class="trtable2"><?php echo $passanger?></td></tr>
    
 
    
	
	<tr ><td class="trtable" style="background-color:#333333 ;">Total price including taxes</td>
	<td class="trtable" style="background-color:#333333 ;">
	
	<?php
	
	   
	switch($economy)

	    {
            
           case "economy":
		   $a= $p+$row["tax"];
		    $total= $a*$passanger;
			echo $total;
			
			break;
			
			
			 case "execute":
		    	$a= $p+$row["tax"];
		    $total= $a*$passanger;
			echo $total;
		    break;
			
			 case "first":
		   $a= $p+$row["tax"];
		    $total= $a*$passanger;
			echo $total;
		    break;
			 default:
                echo "ss";
			}
	
	?>
    </td></tr></table>
    
    
    </div>
 <style>
      #map {
        height: 400px;
		width:100%;
      }
      html, body {
        height: 100%;
        margin: 0;
        padding: 0;
      }
	  
    </style>

<div id="map" style="border:groove;height: 400px;
		width:1200px;margin-left:70px; position:absolute">
	
 <script>
      function initMap() {
        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 5,
          center: {lat: 20.5937, lng: 78.9629},
          mapTypeId: 'terrain'
        });

        var flightPlanCoordinates = [
          {lat: <?php echo $o_lat; ?>, lng: <?php echo $o_long; ?>},
		  {lat: <?php echo $d_lat; ?>, lng: <?php echo $d_long; ?>}
        ];
        var flightPath = new google.maps.Polyline({
          path: flightPlanCoordinates,
          geodesic: true,
          strokeColor: 'blue',
          strokeOpacity: 1.0,
          strokeWeight: 2
        });

        flightPath.setMap(map);
      }
    </script>
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCWYu427c48DgIqXMqRBnma7zTQ3kaQFm8&callback=initMap">
    </script>



</div>


    

<div style="height:50px; width:100px;margin-top:470px;margin-left:990px; position:absolute"> 
<a href="index.php" ><input type="submit" value="back" class="button2" \ /></a>
</div>

<a href="main.php">
<?php
$_SESSION["passanger"]=$passanger;
$_SESSION["net"]=$p;
$_SESSION["tax"]=$t;
$_SESSION["total"]=$total;
$_SESSION['economy']=$economy;

?>

<input type="hidden" name="origine" value="<?php echo  $_SESSION["origine"]; ?>">
<input type="hidden" name="destination" value="<?php echo  $_SESSION["destination"]; ?>">
<input type="hidden" name="flightno" value="<?php echo  $_SESSION["flightno"]; ?>">
<input type="hidden" name="fdate" value="<?php echo  $_SESSION["fdate"]; ?>">
<input type="hidden" name="departure" value="<?php echo  $_SESSION["departure"]; ?>">
<input type="hidden" name="arrival" value="<?php echo  $_SESSION["arrival"]; ?>">

<div style=" height:50px; width:100px;margin-top:470px;margin-left:1100px; position:absolute">
<input type="submit" value="next"  class="button2"/></a>
</form>

</div>	





</div>





<div style="width: 100%;height:250px;position:absolute;min-width: 1000px;background: #404040 url(images/footer-bg.gif) left top repeat-x;
    margin-top:600px;">

<?php include("footer.php"); ?>

<?php
}
else
{
	
	header("Location:invalid.php");
}
?>