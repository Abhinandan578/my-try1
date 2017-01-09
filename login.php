<?php
session_start();
$eeror="";
include("config.php");
include("encryption.php");
$uname=$password="";
if($_SERVER["REQUEST_METHOD"]=="POST")
{
	
	if(isset($_POST["login"]))
	{
		$uname=mysqli_real_escape_string($db,$_POST["uname"]);
		$password=mc_encrypt(mysqli_real_escape_string($db,$_POST["password"]),ENCRYPTION_KEY);
		echo $password;

		$query="SELECT S_No FROM User_Details WHERE Username='".$uname."'  and Password='".$password."'";
		$res=mysqli_query($db,$query);
		$row=mysqli_fetch_array($res,MYSQLI_ASSOC);
		$cnt=mysqli_num_rows($res);
		if($cnt==1)
		{
			$_SESSION["USERNAME"]=$uname;
			// header("Location: my_account.php");
		}
		else
		{
			$error = "Incorrect UserName or Password";
			if(isset($_POST["login"]))
			{
				echo $error;
			}
		}
		

	}

}
?>