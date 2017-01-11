<?php
session_start();
echo "Various Username Details";
echo "<html>";
echo "<body>";echo "<html>";

echo "<form action=account_db.php method='POST'>";
echo "<table><tr>";
echo "<td>URL</td>";
echo "<td>Username</td>";
echo "<td>Password</td></tr>";
echo "<tr><td><input type='text' name='url'></td>";
echo "<td><input type='text' name='username'></td>";
echo "<td><input type='password' name='password'></td></tr>";
echo "<tr><td colspan='3' style='align:center'><input type='submit' value='Click here to Confirm and Save'></td></tr>";/*reconfirm of pass left*/
?>