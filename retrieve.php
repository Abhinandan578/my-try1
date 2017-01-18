<?php
session_start();
include 'config.php';
echo "<html>";
echo "<body>";
$url=$_POST["select_site"];
echo "<table><form action='change.php' method='POST'><tr><td>URL :</td>";
echo "<td><input type='text' id='3' name='3' value='$url' placeholder='YOU CANNOT CHANGE WEBSITE'S NAME'></td></tr>";
$sql="SELECT * FROM detail WHERE url='$url'";
$result=$conn->query($sql);
$row=$result->fetch_assoc();
if($row["username"]!="")
{	
	echo "<tr><td>Username:</td>";

	$userid=$row["username"];
}
else if($row["email"]!="")
{
	echo "<tr><td>Email:</td>";
	$userid=$row["email"];
}
else
{
	echo "<tr><td>Phone No:</td>";
	$userid=$row["phone"];
}
$u=$_SESSION["Username"];
$sql1="SELECT * FROM web_accounts where Username='$u'";
$result1=$conn->query($sql1);
$row1=$result1->fetch_assoc();
$username=$row1["Site_Username"];
$sitepassword=$row1["Site_Password"];
$variable = <<<XYZ
<html>
<body>
<td>
<input type='text' id='1' name="1" value='$username'></td></tr>
<tr><td>Password:</td>
<td><input type='text' id='2'  name="2" value='$sitepassword'></td></tr>
<tr><td></td><td>
<input type='submit' id='submit_btn' value="SUBMIT"></td>
</tr></table>
</form>
</body>
</html>
XYZ;
echo $variable;
?>
