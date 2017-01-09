<?php
session_start();
echo "Enter Your Otp Here<br>";
echo "<form action='Welcome_check.php' method='POST'>";
echo "<table>";
echo "<tr>";
echo "<td><input type='password' name='otp'></td>";
echo "</tr>";
echo "<tr>";
echo "<td><input type='Submit' name='Confirm' Value='Confirm OTP'></td>";
echo "</tr>";
echo "</table>";
echo "</form>";
echo $_SESSION["OTP"];
?>