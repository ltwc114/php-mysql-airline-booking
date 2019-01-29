<?php session_start();
include_once("conne.php");

$username=$_POST["username"];
$password=$_POST["pass"];
$status=0;


$query="select id,usertype,name from airline where username=:uname and password=:password and status=:status";
$stmt=$con->prepare($query);
$stmt->bindparam(":uname",$username);
$stmt->bindparam(":password",$password);
$stmt->bindparam(":status",$status);
$stmt->execute();
$row=$stmt->fetch(PDO::FETCH_ASSOC);

if($row['id']>0 && $row['usertype']=="admin")
{
$_SESSION["username"]=$row['name'];
$_SESSION["usertype"]=$row['usertype'];
header("location:home.php");
}
else
{
$_SESSION["wrongpass"]="Invalid username or password";
header("location:index-4.php");
}
?>