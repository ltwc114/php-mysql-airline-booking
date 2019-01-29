<?php session_start();
include_once("conne.php");
if(isset($_POST["type"]) && isset($_POST["name"]) && isset($_POST["num"])  && isset($_POST["email"]))
{
		$type=$_POST["type"];
			$name=$_POST["name"];
				$bdate=$_POST["bdate"];
					$num=$_POST["num"];
						$email=$_POST["email"];
	
		$origine=$_POST["origine"];
			$destination=$_POST["destination"];
				$flightno=$_POST["flightno"];
					$fdate=$_POST["fdate"];
						$departure=$_POST["departure"];	
							$arrival=$_POST["arrival"];
								$economy=$_POST["economy"];
									$total=$_POST["total"];
	
}		
else
{
	$type="";
	$name="";
	
	
}

 $query="insert into customer (type,name,bdate,num,email,origine,destination,flightno,fdate,departure,arrival,class,price)values(:type,:name,:bdate,:num,:email,:origine,:destination,:flightno,:fdate,:departure,:arrival,:class,:price)";

  	$stmt=$con->prepare($query);
	
  		$stmt->bindParam(":type",$type);
  			$stmt->bindParam(":name",$name);
   				$stmt->bindParam(":bdate",$bdate);
					$stmt->bindParam(":num",$num);
						$stmt->bindParam(":email",$email);
							$stmt->bindParam(":price",$total);	

	
	 $stmt->bindParam(":origine",$origine);
  		$stmt->bindParam(":destination",$destination);
  			$stmt->bindParam(":flightno",$flightno);
   				$stmt->bindParam(":fdate",$fdate);
   					 $stmt->bindParam(":departure",$departure);
						$stmt->bindParam(":arrival",$arrival);
							$stmt->bindParam(":class",$economy);
								
  if($stmt->execute())
  {	
  		$_SESSION["MSG"]="Insert successfull";
   	 		$_SESSION["name"]=$name;
   				$_SESSION["bdate"]=$bdate;
	  				$_SESSION["email"]=$email;
	    				$_SESSION["num"]=$num;
		
		
	$_SESSION["origine"]=$origine;
	$_SESSION["destination"]=$destination;
	$_SESSION["flightno"]=$flightno;
	$_SESSION["fdate"]=$fdate;
	$_SESSION["departure"]=$departure;
	$_SESSION["arrival"]=$arrival;
	$_SESSION["economy"]=$economy;
	$_SESSION["total"]=$total;
	
	
   header("location: price.php");
  }
  else
  {
  $_SESSION["MSG"]="Unable To Insert";
  header("Location: main.php");
  }
  
  ?>
