<!DOCTYPE HTML5>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Give me the calling URL</title>
</head>
<body>
<<<<<<< HEAD
<!-- <h1>Here's the calling URL</h1> -->
=======
<h1>Here's the calling URL</h1>
>>>>>>> 3f2bc179fa748918c4e83fca192bc615c2c8c146
<?php
include("config.php");
	$query="INSERT INTO URL_Details (URL) VALUES ('".$_POST['url']."')";
	$res=mysqli_query($db,$query);
	if($res)
	{
<<<<<<< HEAD
		// echo "Query Succesful";
		$_SESSION["URL"]=$_POST['url'];
	}
	else
	{
		// echo mysqli_error($db);
=======
		echo "Query Succesful";
	}
	else
	{
		echo mysqli_error($db);
>>>>>>> 3f2bc179fa748918c4e83fca192bc615c2c8c146
	}
	mysqli_close($db);
?>
</body>
</html>