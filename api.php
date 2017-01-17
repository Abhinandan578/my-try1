<?php
session_start();
include("config.php");
include("encryption.php");
include("web_encryption.php");
include("explode.php");
// $_SESSION["Username"]='padam';
// $b=get_url("https://www.facebook.com/");
$b=get_url($_SESSION['URL']);
// $b='abcd.com';
$query="SELECT Site_Username,Site_Password FROM web_accounts WHERE Username='".$_SESSION["Username"] ."' and URL='".$b."'";
// $query="SELECT * FROM OTP_Details";
$res=mysqli_query($db,$query);
$array=mysqli_fetch_row($res);

		// $_SESSION["Username"]='padam';
		$site_uname=$array[0];
		// $site_password=$_POST["password"];
		// $URL=$_POST['url'];
		
		$query1="SELECT Password FROM User_Details WHERE Username='".$_SESSION['Username']."'";
		$res1=mysqli_query($db, $query1);
		$row=mysqli_fetch_assoc($res1);
		$key=mc_decrypt($row["Password"],ENCRYPTION_KEY);
		$key=strToHex($key);
		$password=generate_secret_key1($key);
		// echo $key;
		// $password=hexToStr($password);
		// echo $password;
		$pass=length_check32($password);
		// echo strlen($pass);
		// $pass=strToHex($pass);
		// echo ($pass);
		// $site_password=mc_encrypt('password',$pass);
		$site_password=$array[1];
		$array[1]=mc_decrypt($site_password,$pass);
		// echo $array[1]."<br> Length:".strlen($array[1]);

		// $site_password=mc_decrypt(trim($array[1]),$pass);
		// echo $pass;
		// echo $key;
		// echo $pass."<br>";
		// echo $site_password."<br>";
		// echo $site_pass;

header('Content-Type: application/json');
echo json_encode($array);
		// echo $site_password."<br>";
		// echo $site_pass;
	
?>