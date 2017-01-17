<?php
session_start();
include("config.php");
include("encryption.php");
include("web_encryption.php");
include("explode.php");
$_SESSION['URL']=get_url($_SESSION['URL']);
$query="SELECT Site_Username,Site_Password FROM web_accounts WHERE Username='".$_SESSION["Username"] ."' and URL='".$_SESSION['URL']."'";
$res=mysqli_query($db,$query);
$array=mysqli_fetch_row($res);

		$site_uname=$array[0];
		$query1="SELECT Password FROM User_Details WHERE Username='".$_SESSION['Username']."'";
		$res1=mysqli_query($db, $query1);
		$row=mysqli_fetch_assoc($res1);
		$key=mc_decrypt($row["Password"],ENCRYPTION_KEY);
		$key=strToHex($key);
		$password=generate_secret_key1($key);
		$pass=length_check32($password);
		$site_password=$array[1];
		$array[1]=mc_decrypt($site_password,$pass);
		header('Content-Type: application/json');
		echo json_encode($array);
		
?>