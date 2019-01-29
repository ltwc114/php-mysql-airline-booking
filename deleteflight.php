<?php session_start();

include_once("conne.php");
$id=$_GET["id"];



$query="delete from customer where id=:id";
$stmt=$con->prepare($query);
$stmt->bindparam(":id",$id);
if($stmt->execute())	
{   
 		$_SESSION["id"]=$id;
		$_SESSION["deletefli"]="Flight cancelled Successfully";
		header("Location:wcancel.php");
	}
	else
	{
		$_SESSION["deletefli"]="Unable to procees your request,Please try again later";
		header("Location:wcancel.php");
	}

?>