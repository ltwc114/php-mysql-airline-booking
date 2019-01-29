
<?php session_start();
include_once("conne.php");
  $name=$_POST["name"];
    $email=$_POST["email"];
   $contact=$_POST["contact"];
   $enqurie=$_POST["enqurie"];
  

  $query="insert into enqurie (name,contact,email,enqurie)values(:name,:contact,:email,:enqurie)";

  $stmt=$con->prepare($query);
  $stmt->bindParam(":name",$name);
  $stmt->bindParam(":contact",$contact);
  $stmt->bindParam(":email",$email);
  $stmt->bindParam(":enqurie",$enqurie);
  if($stmt->execute())
  {
  $_SESSION["enqurie"]="Thank u,for contacting us";
   header("location: enquries.php");
   }
  else
  {
  $_SESSION["enqurie"]="Please try again later.";
  header("Location: enquries.php");
  }
  ?>
  
  