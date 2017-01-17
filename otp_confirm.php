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
<<<<<<< HEAD
echo "</form>";

?>
=======
echo $_SESSION["OTP"];
?>
>>>>>>> 3f2bc179fa748918c4e83fca192bc615c2c8c146
