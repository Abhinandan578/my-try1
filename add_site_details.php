<?php
session_start();
include 'config.php';
include("web_encryption.php");
include("encryption.php");
//$user=$_SESSION["Username"];


//$user=$_SESSION['Username'];
$user='piyush2897';
$url=$_POST["url"];
$userid=$_POST["siteuser"];
$userpass=$_POST["sitepass"];
	$query1="SELECT Password FROM User_Details WHERE Username='$user'";
	$res1=mysqli_query($db, $query1);
	$row=mysqli_fetch_assoc($res1);
	$key=mc_decrypt($row["Password"],ENCRYPTION_KEY);
	$key=strToHex($key);
	$password=generate_secret_key1($key);
	$pass=length_check32($password);
	$site_password=mc_encrypt($userpass,$pass);
	$site_pass_decrypted=mc_decrypt($site_password,$pass);



$sql="INSERT INTO web_accounts(Username,URL,Site_Username,Site_Password) VALUES ('$user','$url','$userid','$site_password')";
$result=$db->query($sql);
//echo $userid;
if($result)
{
	echo "query success";
}
	
?>