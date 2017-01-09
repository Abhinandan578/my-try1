<?php
	include("config.php");
	include("encryption.php");
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
			    }

			}

		}
	}
?>