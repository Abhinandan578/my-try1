<?php
session_start();
include("web_encryption.php");
include("encryption.php");
include("config.php");

if($_SERVER["REQUEST_METHOD"]=="POST")
{
	if(isset($_POST["confirm"]))
	{
		$uname=$_SESSION['Username'];
		// $_SESSION["Username"]='padam';
		$site_uname=$_POST['username'];
		// $site_password=$_POST['password'];
		$URL=$_POST['url'];
		// $URL='abc.com';
		
		$query1="SELECT Password FROM User_Details WHERE Username='".$_SESSION['Username']."'";
		$res1=mysqli_query($db, $query1);
		$row=mysqli_fetch_assoc($res1);
		$key=mc_decrypt($row["Password"],ENCRYPTION_KEY);
		$key=strToHex($key);
		$password=generate_secret_key1($key);
		$pass=length_check32($password);
		$site_password=mc_encrypt($_POST['password'],$pass);
		// // $site_password=mc_encrypt('abhi578',$pass);
		// $site_pass=mc_decrypt($site_password,$pass);

		$query="INSERT INTO web_accounts(Username,Site_Username,Site_Password,URL) VALUES ('".$uname."','".$site_uname."','".$site_password."','".$URL."')";
		$res=mysqli_query($db,$query);
		if($res)
		{
			echo "Query Successful";
		}
		else
		{
			echo "Query Unsuccesful";
			echo mysqli_error($db);
		}
		// echo $pass."<br>";
		echo $site_password."<br>";
		// echo $site_pass;
	}
}