<?php session_start(); 
if (isset($_SESSION["usertype"]) && $_SESSION["usertype"]=="admin")
{
include_once("conne.php");
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>flight</title>
	<!-- BOOTSTRAP STYLES-->
    <link href="css/bootstrap.css" rel="stylesheet" />
     <!-- FONTAWESOME STYLES-->
  
        <!-- CUSTOM STYLES-->
    <link href="css/custom.css" rel="stylesheet" />
     <!-- GOOGLE FONTS-->
	
</head>
<body>
  </div>

        <nav class="navbar navbar-default navbar-cls-top " role="navigation" >
        
           
  <div style="color: white; padding: 5px 50px 50px 50px; float: right; font-size: 16px;">
  
   <a href="wlogout.php" class="btn btn-danger square-btn-adjust" style="margin-top:12px; border-radius:10px;">Logout</a> 
   </div>
       
   <h3 ><a href="home.php"> Home -</a>  <a href="flight.php" style="color:#FFFFFF"> Flights </a> </h3> 
        </nav>           
    
           <!-- /. NAV TOP  -->
             
        <!-- /. NAV SIDE  -->
        
            <div id="page-inner" >
                <div class="row" >
                    <div class="col-md-12" >
                      
          <form action="add_flight.php">
          <input type="submit" value="add flight" style="background:url(images/button2_bg.gif) top repeat-x;font-size:16px;color:#fff;line-height:30px;text-decoration:none;text-transform:uppercase;font-weight:400;padding:0 20px;margin-left:660px;border-radius:3px;-moz-border-radius:3px;-webkit-border-radius:10px;behavior:url(js/PIE.htc);position:relative;"> </form>
                    </div>
                </div>
     <?php if(isset($_SESSION["addfli"]))
	{
	?>
    <h3>
     <?php echo $_SESSION["addfli"];?>
     
     </h2>
    <?php
	
	}unset($_SESSION["addfli"])
    ?>
    
      
        <?php if(isset($_SESSION["updatefli"]))
	{
	?>
    <h3>
     <?php echo $_SESSION["updatefli"];?>
     
     </h2>
    <?php
	
	}unset($_SESSION["updatefli"])
    ?>  
    
      <?php if(isset($_SESSION["deletefli"]))
	{
	?>
    <h3>
     <?php echo $_SESSION["deletefli"];?>
     
     </h2>
    <?php
	
	}unset($_SESSION["deletefli"])
    ?> 
             
                   <table border="1" cellpadding="20px"  height="100px"; style="margin-top:20px;">
                 
<tr bgcolor="#666666" ;  height="50px" style="color:#FFFFFF;text-align:center">

<td > Sr no </td>
<td > ORIGINE</td>
<td >DESTINATION</td>
<td>Flight number</td>
<td style="width:100px;">DATE</td>
<td >DEPARTURE</td>
<td style="width:68px;">arrival</td>

<td style="width:70px;">economy</td>
<td style="width:70px;">executive</td>
<td  style="width:60px;">first</td>
<td style="width:60px;">tax</td>
<td style="width:65px;">ori_lat</td>
<td style="width:70px;">ori_long</td>
<td style="width:65px;">dest_lat</td>
<td style="width:70px;">dest_long</td>
</tr>


<?php
$query="select * from flight";
$stmt=$con->prepare($query);
$stmt->execute();
$i=1;
while($row=$stmt->fetch(PDO::FETCH_ASSOC))
{
?>
	<tr style="background-color:#CCCCCC ; text-align:center ;height:30px;">
    <td><?php echo $i++; ?></td>
    <td><?php echo $row["from_flight"];?></td>	
    <td><?php echo $row["to_flight"];?></td>
    <td><?php echo $row["flight_number"];?></td>
    <td><?php echo $row["date"];?></td>
    <td><?php echo $row["departure"];?></td>
    <td><?php echo $row["arrival"];?></td>
    <td><?php echo $row["ecprice"];?></td>
    <td><?php echo $row["exprice"];?></td>
    <td><?php echo $row["fprice"];?></td>
    <td><?php echo $row["tax"];?></td>
    <td><?php echo $row["ori_lat"];?></td>
    <td><?php echo $row["ori_long"];?></td>
    <td><?php echo $row["dest_lat"];?></td>
    <td><?php echo $row["dest_long"];?></td>
  
     <td style=" width:90px;background-color:#666666"><a href="update.php?id=<?php echo $row["id"]?>" style="   text-decoration:none;  color:#ffffff;">Update</a></td>
    
    <td bgcolor="#666666" style="background-color:#666666;width:90px; "> <a href="delete.php?id=<?php echo $row["id"]?>>" style=" color:#ffffff;text-decoration:none;" onClick="return submit()">Delete</td></tr></a>
<?php
} 
?> 
</table>
</br>
 
    </div>
             <!-- /. PAGE INNER  -->
            </div>
         <!-- /. PAGE WRAPPER  -->
        </div>
     <!-- /. WRAPPER  -->
    <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
    <script src="assets/js/jquery-1.10.2.js"></script>
      <!-- BOOTSTRAP SCRIPTS -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="assets/js/jquery.metisMenu.js"></script>
      <!-- CUSTOM SCRIPTS -->
    <script src="assets/js/custom.js"></script>
    
   
</body>
</html>
<?php
}
else
{
 $_SESSION["invalid"]="Invalide Access";
    header("Location:index-4.php");
 }
 ?>