<?php
// if(isset($_POST['url']))
{
	include("config.php");
	$query="INSERT INTO URL_Details (URL) VALUES ('fb.com')";
	$res=mysqli_query($db,$query);
	if($res)
	{
		echo "Query Succesful";
	}
	else
	{
		echo mysqli_error($db);
	}
	mysqli_close($db);

}
?>