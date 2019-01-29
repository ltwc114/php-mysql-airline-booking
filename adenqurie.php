<?php session_start(); 
if (isset($_SESSION["usertype"]) && $_SESSION["usertype"]=="admin")
{
include_once("conne.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>
<body> 


<div style="min-height:1000px; background-color:#CCCCCC ">

   <div style="height:85px; background-image:url(images/24fb9f4c86fe18447ecd27752703f2fb.jpg)">
   	<div style="color:#FFFFFF; height:700px; width:280px; position:absolute; background-image:url(images/24fb9f4c86fe18447ecd27752703f2fb.jpg)">
   
   		<div style="border:ridge; background-color:#CCCCCC; margin-left:60px; position:absolute; height:200px; width:150px;  border-radius:10px">
     		<a href="index.php"> <img src="images/final-2.png" /></a>
     			<div style=" color:#FFFFFF; text-shadow:#000000 1px 1px 1px ; font-size:24px;font-style:oblique; text-align:center">
     			  <h4> International Airline </h4>
   				</div>
   		</div>
 	
    <div style="background-color:#FF0000; position:absolute;border-radius:10px;width:90px; height:20px; text-align:center; padding:10px; margin-left:1170px; margin-top:25px">
   		<a href="index-4.php" style="color:#FFFFFF;">Logout</a>
    </div>
        <a href="Adhome.php">
     
    <div style="border-bottom:ridge; border-bottom-color:#CCCCCC; width:100%; height:70px; margin-top:210px">
      <h3 style="position:absolute; color:#FFFFFF; font-family:'Courier New', Courier, monospace; font-size:24px; margin-left:65px; text-shadow:#000000 1px 1px 1px">Admin Home</h3>
     </div></a>
         
    <a href="home.php">
     <div style="background-color:#FF0000; border-bottom:ridge; color:#FFFFFF; border-bottom-color:#CCCCCC; width:100%; height:70px;">
         <h3 style="position:absolute; font-family:'Courier New', Courier, monospace; font-size:24px; margin-left:25px; text-shadow:#000000 1px 1px 1px">Flight Schedules</h3>
     </div></a>
     
    <a href="adenqurie.php">
      <div style="border-bottom:ridge; border-bottom-color:#CCCCCC; width:100%; height:70px;">
         <h3 style="position:absolute; font-family:'Courier New', Courier, monospace; font-size:24px; margin-left:75px; text-shadow:#000000 1px 1px 1px">Enquiries</h3>
         </div>
     </a>
 </div>
 </div>
         
  <div style="border:dotted; height:700px; width:1000px; margin-left:300px; margin-top:20px; background-color:#FFFFFF">
     <div style="border:dotted; height:100px">
       <h1 style="font-size:36px; position:absolute; color:#FF0000; font-family:'Courier New', Courier, monospace; margin-left:20px"> Flight Schedules        </h1>
           <div style="height:30px;margin-top:60px; margin-left:60px">
               Welcome <?php echo  $_SESSION["username"]; ?>  Love to see you back.
           </div>
       </div>
       
         <?php if(isset($_SESSION["MSG"]))
			{
		 ?>
    	    <font color="#FF0000"><?php echo $_SESSION["MSG"];?></font>
    	<?php
			unset($_SESSION["MSG"]);
			}
    	?>
    
<table style="background-color:#FFFFFF"; width="800px"; height="200px;" bgcolor="#FF99CC">
	
    <tr bgcolor="#FF9900" style="color:#000000" height="40px">
		<td style="width:50px;"> Sr no </td>
		<td style="width:120px;"> NAME</td>
		<td style="width:120px">CONTACT</td>
		<td style="width:120px">EMAIL</td>
		<td style="width:120px">ENQURIES</td>
	</tr>

         
   <?php
	$query="select * from enqurie";
	$stmt=$con->prepare($query);
	$stmt->execute();
	$i=1;
	while($row=$stmt->fetch(PDO::FETCH_ASSOC))
		{
	?>
			<tr style="background-color:#FFFFCC ">
            	<td><?php echo $i++; ?></td>
            	<td><?php echo $row["name"];?></td>
            	<td><?php echo $row["contact"];?></td>
            	<td><?php echo $row["email"];?></td>
            	<td><?php echo $row["enqurie"];?></td>
            </tr>
 	<?php 
		} 
	?>     
</table>
      
  </div>
 <br/><br/><br/>
</div>
</body>
</html>
<?php
}
else
{
 $_SESSION["MSG"]="Invalide Access";
 header("Location: index-4.php");
 }
 ?>