<!DOCTYPE HTML5>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Give me the calling URL</title>
</head>
<body>
<!-- <h1>Here's the calling URL</h1> -->
<?php
include("config.php");
	$query="INSERT INTO URL_Details (URL) VALUES ('".$_POST['url']."')";
	$res=mysqli_query($db,$query);
	if($res)
	{
		// echo "Query Succesful";
		$_SESSION["URL"]=$_POST['url'];
	}
	else
	{
		// echo mysqli_error($db);
	}
	mysqli_close($db);
?>
</body>
</html>