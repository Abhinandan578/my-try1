<?php
	include("config.php");
	include("encryption.php");
<<<<<<< HEAD
	function redirect($url,$permanent=false)
{
	if($permanent){
		header('HTTP/1.1 301 Moved Permanently');
	}
	header('Location: '.$url);
	exit();
}
=======
>>>>>>> 3f2bc179fa748918c4e83fca192bc615c2c8c146
	$fname= $lname= $phn_num= $uname= $password= $email= "";
	if($_SERVER["REQUEST_METHOD"]=="POST")
	{
		if(isset($_POST['register']))
		{
			$fname=$_POST["fname"];
			$lname=$_POST["lname"];
			$uname=$_POST["uname"];
			$email=$_POST["email"];
			$phn_num=$_POST["phn_num"];
			$password=mc_encrypt($_POST["password"],ENCRYPTION_KEY);

			if($uname != ""&&$fname != ""&& $lname != ""&& $phn_num != ""&& $email != ""&& $password != "")
			{
				
				$query="SELECT * FROM User_Details WHERE Username= '".$uname."'";
				
				$res=mysqli_query($db,$query);
				if(mysqli_num_rows($res))
			    {
			      echo "username taken!";
			    }
			    else
			    {
			    	$query1="INSERT INTO User_Details(First_Name, Last_Name, Username,Password,Email_Id,Phone_No) VALUES ('$fname','$lname','$uname','$password','$email','$phn_num')";
			    	$res1=mysqli_query($db,$query1); 
<<<<<<< HEAD
			    	if($res1)
			    	{
			    		echo "Query Successful";
			    		redirect('webaccount.php')

			    	}
			    	else
			    	{
			    		echo mysqli_error($db);

			    	}
=======
>>>>>>> 3f2bc179fa748918c4e83fca192bc615c2c8c146
			    }

			}

		}
	}
?>