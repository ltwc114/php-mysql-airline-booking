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
    <title>Free Bootstrap Admin Template : Binary Admin</title>
    
	<!-- BOOTSTRAP STYLES-->
    <link href="css/bootstrap.css" rel="stylesheet" />
     <!-- FONTAWESOME STYLES-->
    <link href="css/font-awesome.css" rel="stylesheet" />
        <!-- CUSTOM STYLES-->
    <link href="css/custom.css" rel="stylesheet" />
     <!-- GOOGLE FONTS-->
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
</head>
<body>
    <div id="wrapper">
        <nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                
            </div>
  <div style="color: white;
padding: 15px 50px 5px 50px;
float: right;
font-size: 16px;"> <a href="wlogout.php" class="btn btn-danger square-btn-adjust" style="border-radius:10px; margin-bottom:8px;">Logout</a> </div>
        </nav>   
           <!-- /. NAV TOP  -->
                <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
				<li class="text-center">
                    <img src="images/find_user.png" class="user-image img-responsive"/>
					</li>
				
					
                    <li>
                        <a  href="home.php"  style="text-align:center"></i> Home</a>
                    </li>
                      <li>
                        <a   href="flight.php"  style="text-align:center">Flight Shedules</a>
                    </li>
                    
                    <li  >
                        <a class="active-menu" href="enqurie.php" style="text-align:center">Enquries</a>
                    </li>				
					
                </ul>
               
            </div>
            
        </nav>  
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                     <h2>Welcome <?php echo $_SESSION["username"]?> </h2> 
                        <h5></h5>
                       
                    </div>
                </div>
                 <!-- /. ROW  -->
                 <hr />
                <?php if(isset($_SESSION["MSG"]))
	{ ?>
    <font style="font-family:Verdana, Arial, Helvetica, sans-serif; font-size:24px;margin-left:50px;"><br>

    
	 <?php 	echo $_SESSION["MSG"];
	
	}
unset($_SESSION["MSG"])
    ?> </font><br>
<br>

                
                   <table border="1">
                 
<tr bgcolor="#666666" ; height="50px" style="color:#FFFFFF" align="center">

<td style="width:80px;"> Sr no </td>
<td style="width:180px;"> NAME</td>
<td style="width:120px;">CONTACT</td>
<td style="width:190px;">EMAIL</td>
<td style="te width:180px;">ENQURIES</td>
</tr>

 <?php
$query="select * from enqurie";
$stmt=$con->prepare($query);
$stmt->execute();
$i=1;
while($row=$stmt->fetch(PDO::FETCH_ASSOC))
{
?>
    <tr style="background-color:#CCCCCC ; text-align:center; height:40px;  ">
    <td><?php echo $i++; ?></td>
    <td><?php echo $row["name"];?></td>
    <td><?php echo $row["contact"];?></td>
    <td><?php echo $row["email"];?></td>
    <td style="text-align:center ; word-wrap:break-word; width:300px;"><?php echo $row["enqurie"];?></td>
    
  <td bgcolor="#666666" style=" width:90px; height:30px;background-color:#666666 "><a href="deleteenq.php?id=<?php echo $row["id"]?>" style=" color:#ffffff;text-decoration:none;">Delete</a></td></tr>

 <?php } ?>     
 
</table>
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