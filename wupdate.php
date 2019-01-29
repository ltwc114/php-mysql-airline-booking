<?php session_start();
include_once("conne.php");
$id=$_POST["id"];
  $from=$_POST["from"];
  $to=$_POST["to"];
  $flight_number=$_POST["flight_number"];
   $date=$_POST["date"];
  $departure=$_POST["departure"];
  $arrival=$_POST["arrival"];
  
  $ecprice=$_POST["ecprice"];
   $exprice=$_POST["exprice"];
    $fprice=$_POST["fprice"];
	 $tax=$_POST["tax"];
	  $ori_lat=$_POST["ori_lat"];
	   $ori_long=$_POST["ori_long"];
	   $dest_lat=$_POST["dest_lat"];
	   $dest_long=$_POST["dest_long"];
 
  $query=
  "update flight set  
  from_flight=:from,to_flight=:to,flight_number=:flight_number,date=:date,departure=:departure,arrival=:arrival,
  ecprice=:ecprice,exprice=:exprice,fprice=:fprice,tax=:tax,
  ori_lat=:ori_lat,ori_long=:ori_long,dest_lat=:dest_lat,dest_long=:dest_long where id=:id";
  $stmt=$con->prepare($query);
  $stmt->bindParam(":id",$id);
  $stmt->bindParam(":from",$from);
  $stmt->bindParam(":to",$to);
  $stmt->bindParam(":flight_number",$flight_number);
    $stmt->bindParam(":date",$date);
  $stmt->bindParam(":departure",$departure);
  $stmt->bindParam(":arrival",$arrival);
  
    $stmt->bindParam(":ecprice",$ecprice);
	  $stmt->bindParam(":exprice",$exprice);
	    $stmt->bindParam(":fprice",$fprice);
		  $stmt->bindParam(":tax",$tax);
		    $stmt->bindParam(":ori_lat",$ori_lat);
			$stmt->bindParam(":ori_long",$ori_long);
			$stmt->bindParam(":dest_lat",$dest_lat);
			$stmt->bindParam(":dest_long",$dest_long);

  if($stmt->execute())
  {
  $_SESSION["updatefli"]="update successfull";
  header("location: flight.php");
  }
  else
  {
  $_SESSION["updatefli"]="Unable To update";
  header("Location: flight.php");
  }
  ?>
