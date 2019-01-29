<?php session_start();
if (isset($_SESSION["usertype"]) && $_SESSION["usertype"]=="admin")
{
include_once("conne.php");
$id=$_GET["id"];
$query="delete from flight where id=:id";
$stmt=$con->prepare($query);
$stmt->bindparam(":id",$id);
if($stmt->execute())	
{
		$_SESSION["deletefli"]="Deleted Successfull";
		header("Location:flight.php");
	}
	else
	{
		$_SESSION["deletefli"]="Delete UnSuccessfull";
		header("Location:flight.php");
	}
	}
else
{
 $_SESSION["MSG"]="Invalid Access";
header("location :login.php");
}
?>