<?php session_start();
include_once("conne.php");

if(isset($_POST["email"]) && isset($_POST["num"]) )
{
	$email=$_POST["email"];
		$num=$_POST["num"];
	
	}

	
?>



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
  
   <a href="cancel.php" class="btn btn-danger square-btn-adjust" style="margin-top:12px; border-radius:10px;">Back</a> 
   </div>
   <?php if(isset($_SESSION["deletefli"]))
	{ ?>
    <h2 style="margin-left:50px; color:#FFFFFF">
    
	 	<?php echo $_SESSION["deletefli"]; ?> </h1> <?php
  
	}
	unset($_SESSION["deletefli"])
    ?>
        </nav> 
    

       <table border="1"   cellspacing="0" cellpadding="0"   bgcolor="#000000" style="position:absolute; width:1200px; margin-left:100px;margin-top:80px;"  >
                 



<?php
$query="select * from customer where email=:email and num=:num ";
$stmt=$con->prepare($query);
$stmt->bindParam(":email",$email);
$stmt->bindParam(":num",$num);


$stmt->execute();	
$i=1;
if($stmt->rowCount()>0)
{ ?>
<tr   style="color:#FFFFFF;background-color:#333333; height:60px;text-align:center;" > 
<td> Sr no </td>
<td > ORIGINE</td>
<td >DESTINATION</td>
<td>Flight number</td>
<td >DATE</td>
<td >DEPARTURE</td>
<td >arrival</td>
<td  >class</td>
<td >price</td>

</tr> <?php
	while($row=$stmt->fetch(PDO::FETCH_ASSOC))
	{
	?>
			<tr	 style="height:50px;background-color:#CCCCCC ; text-align:center">
        <td><?php echo $i++; ?></td>
        <td><?php echo $row["origine"];?></td>
        <td><?php echo $row["destination"];?></td>
        <td><?php echo $row["flightno"];?></td>
        <td><?php echo $row["fdate"];?></td>
        <td><?php echo $row["departure"];?></td>
        <td ><?php echo $row["arrival"];?></td>
        <td ><?php echo $row["class"];?></td>
        <td ><?php echo $row["price"];?></td>
     
      <td style="background-color:#333333;width:150px;"> <a href="deleteflight.php?id=<?php echo $row["id"]?>>" style=" color:#FFFFFF;text-decoration:none;">
      Cancel Flight</td></tr></a>
<?php
	}
}
?>