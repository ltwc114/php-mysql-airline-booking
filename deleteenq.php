<?php session_start();
if (isset($_SESSION["usertype"]) && $_SESSION["usertype"]=="admin")
{
include_once("conne.php");
$id=$_GET["id"];
$query="delete from enqurie where id=:id";
$stmt=$con->prepare($query);
$stmt->bindparam(":id",$id);
if($stmt->execute())	
{
		$_SESSION["MSG"]=" Enqurie deleted Successfully";
		header("Location:enqurie.php");
	}
	else
	{
		$_SESSION["MSG"]="Unable to delete,Please try again later";
		header("Location:enqurie.php");
	}
}
else
{
 $_SESSION["MSG"]="Invalide Access";
header("location :login.php");
}
?>