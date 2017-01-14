<?php
session_start();
include_once("config.php");
function redirect($url,$permanent=false)
{
	if($permanent){
		header('HTTP/1.1 301 Moved Permanently');
	}
	header('Location: '.$url);
	exit();
}
if($_SERVER["REQUEST_METHOD"]=="POST")
{
	if(isset($_POST["Confirm"]))
	{
		$Iotp=$_POST["otp"];
		$query="SELECT OTP FROM OTP_Details WHERE Username='".$_SESSION['Username']."'";
		$res=mysqli_query($db, $query);
		$row=mysqli_fetch_assoc($res);
		$Aotp=$row["OTP"];
		if($Iotp==$Aotp)
		{
			redirect('popup.html');
		}
		else
		{
			echo "Incorrect OTP";
		}
	}
}
?>