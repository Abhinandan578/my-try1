<?php
<<<<<<< HEAD
session_start();
=======
// session_start();
>>>>>>> 3f2bc179fa748918c4e83fca192bc615c2c8c146
$error="";
include("config.php");
include("encryption.php");
function redirect($url,$permanent=false)
{
	if($permanent){
		header('HTTP/1.1 301 Moved Permanently');
	}
	header('Location: '.$url);
	exit();
}
$uname=$password="";
if($_SERVER["REQUEST_METHOD"]=="POST")
{
	
	if(isset($_POST["login"]))
	{
		$uname=mysqli_real_escape_string($db,$_POST["uname"]);
		$_SESSION["Username"]=$uname;
		$password=mysqli_real_escape_string($db,$_POST["password"]);
		

		$query="SELECT Password FROM User_Details WHERE Username='".$uname."'";
		$res=mysqli_query($db,$query);
		$cnt=mysqli_num_rows($res);
		if($cnt>0)
		{
			$row=mysqli_fetch_array($res,MYSQLI_ASSOC);
			$test=$row["Password"];
			// echo $test."<br>";
			$passcrypt=mc_decrypt($row["Password"],ENCRYPTION_KEY);
			// echo "Decrypted:" . mc_decrypt($test, ENCRYPTION_KEY)."<br>";
			if($passcrypt==$password)
			{
				include("otp.php");
<<<<<<< HEAD
				// include ("otpsend.php");
				// echo "Pass Match";
=======
				include ("otpsend.php");
				echo "Pass Match";
>>>>>>> 3f2bc179fa748918c4e83fca192bc615c2c8c146
				// echo "<script type= text/javascript>
				// 		{
				// 			Window.location= 'otp_confirm.php';
				// 		}";
				redirect('otp_confirm.php');
<<<<<<< HEAD
				
=======
>>>>>>> 3f2bc179fa748918c4e83fca192bc615c2c8c146
			}
			else
			{
				echo "Incorrect Password"."<br>";
			}
		}
		else
		{
			echo "Unidentified Username";
		}		
	}

}
<<<<<<< HEAD
?>
=======
?>
>>>>>>> 3f2bc179fa748918c4e83fca192bc615c2c8c146
