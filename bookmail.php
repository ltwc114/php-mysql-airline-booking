<?php session_start();
require_once('PHPMailer/PHPMailerAutoload.php');
include_once("conne.php");
if(isset($_POST["name"]) && isset($_POST["bdate"]) && isset($_POST["email"]))
{
	$name=$_POST["name"];
	$bdate=$_POST["bdate"];
	$email=$_POST['email'];
	
	$p=$_POST["p"];
	$n=$_POST["n"];
	$t=$_POST["t"];
	$to=$_POST["to"];
	
	$origine=$_POST["origine"];
	$destination=$_POST["destination"];
	$flightno=$_POST["flightno"];
	$fdate=$_POST["fdate"];
	$departure=$_POST["departure"];
	$arrival=$_POST["arrival"];
	$economy=$_POST["economy"];
	
}
else
{
	$name="";
	$bdate="";
	$p="";
	$n="";
	$t="";
	$to="";
	$_SESSION["MSGF"]="m";
}
//echo $from_flight;
//echo $to_flight;
$mail = new PHPMailer;
$mail->isSMTP();

	

	
	
	$completmessage="<table cellspacing='0' cellpadding='0'></center><table border='1' width='100%' >
					
					<tr width:120px>
					<td colspan=2 > travellers </td>
					</tr>
					<tr>
					
					<td> passanger</td>
					<td>".$_SESSION["name"]."</td>
					</tr>
					
					<tr>
					<td> DOB</td>
					<td>".$_SESSION["bdate"]."</td>
					
					</tr>
					
					 
					</table>	
					
					<br />








<table cellspacing='0' cellpadding='0'></center><table border='1' width='70%' >
				<tr><td colspan=7>FLIGHT</td></tr> 	
					<tr width:120px>
				   <td> ORIGINE</td>
					<td> DESTINATION</td>
					<td> Flight number</td>
					<td> DATE</td>
					<td> DEPARTURE</td>
					<td> ARRIVAL</td>
					<td> class</td>
					</tr>					 
				
				
	<tr>
	<td>".$_SESSION["origine"]."</td>
	<td>".$_SESSION["destination"]."</td>
	<td>".$_SESSION["flightno"]."</td>
	<td>".$_SESSION["fdate"]."</td>
	<td>".$_SESSION["departure"]."</td>
	<td>".$_SESSION["arrival"]."</td>
	<td>".$_SESSION["economy"]."</td>
	</tr>
	</table>;				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				<br />
				
				<table cellspacing='0' cellpadding='0'></center><table border='1' width='100%' >
					<td colspan=4>Air fare cost</td></tr>
				<tr width:120px>
			    <td> TRAVELLER </td>
				<td> NET </td>
				<td> TAX </td>
				<td> TOTAL </td>
				
				</tr>
				
				<tr>
					<td>".$_SESSION["passanger"]."</td>
					<td>".$_SESSION["net"]."</td>
					<td>".$_SESSION["tax"]."</td>
					<td>".$_SESSION["total"]."</td>
				</tr>
					
					 
					</table>
					
					http://localhost/airlines/price.php";	
				
				 
				
				
			

				
				
				
					 
	
//Enable SMTP debugging
// 0 = off (for production use)
// 1 = client messages
// 2 = client and server messages

$mail->Host = 'smtp.gmail.com';
$mail->Port = '465';
$mail->SMTPSecure = 'ssl';
$mail->SMTPAuth = true;

$mail->isHTML();

$mail->Username = "shubhamshindekop@gmail.com";
$mail->Password = 'shubham@0077';
$mail->SetFrom('shubhamshindekop@gmail.com', "shubhamshindekop@gmail.com");
$mail->Subject = 'flight Information';
$mail->Body    = $completmessage;
$mail->addAddress($_SESSION["email"],$_SESSION["email"] );


/*if (isset($_FILES['attachament']) &&
    $_FILES['attachament']['error'] == UPLOAD_ERR_OK) {
    $mail->AddAttachment($_FILES['attachament']['tmp_name'],
                         $_FILES['attachament']['name']);
}*/

//send the message, check for errors
if (!$mail->send()) {

   $_SESSION['mail']="Unable To Send Mail....!  Please Try Again";
   header('Location: fail.php');
} 
else {

   $_SESSION['mail']="Thank You For Mail, will get back to you soon";
    header('Location:success.php');
 //  header('Location: contact.php');
}
?>	