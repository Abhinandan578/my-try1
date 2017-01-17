<?php
// echo "Entered login_confirm";
session_start();
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
	
	// if(isset($_POST["login"]))
	{
		$uname=mysqli_real_escape_string($db,$_POST["username"]);
		$_SESSION["Username"]=$uname;
		$password=mysqli_real_escape_string($db,$_POST["password"]);
		

		$query="SELECT Password FROM User_Details WHERE Username='".$uname."'";
		$res=mysqli_query($db,$query);
		$cnt=mysqli_num_rows($res);
		if($cnt>0)
		{
			$row=mysqli_fetch_array($res,MYSQLI_ASSOC);
			$test=$row["Password"];
			$_SESSION["URL"]=$_POST['url'];
			// echo $test."<br>";
			$passcrypt=mc_decrypt($row["Password"],ENCRYPTION_KEY);
			// echo "Decrypted:" . mc_decrypt($test, ENCRYPTION_KEY)."<br>";
			if($passcrypt==$password)
			{
				include("otp.php");
				// include ("otpsend.php");
				include("cookie_gen.js");
				// chrome.cookies.set({
			 //    "name": $_SESSION["Username"],
			 //    "url": "http://localhost/php_extension_new/login_ext.html",
			 //    "value": $_SESSION["Username"]});
				
			// 	function (cookie) {
			//     console.log(JSON.stringify(cookie));
			//     console.log(chrome.extension.lastError);
			//     console.log(chrome.runtime.lastError);
			// });
				
				$query1="INSERT INTO URL_Details (URL) VALUES ('".$_POST['url']."')";
				$res1=mysqli_query($db,$query1);
				if($res1)
				{
					echo "url inserted";
				}
				else
				{
					echo mysqli_error($db);
				}

				redirect('otp_confirm.php');
		
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
?>
