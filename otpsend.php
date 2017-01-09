<?php
$query="SELECT OTP FROM OTP_Details WHERE Username='".$_SESSION['Username']."'";
		$res=mysqli_query($db, $query);
		$row=mysqli_fetch_assoc($res);
		$otp=$row["OTP"];

		$query1="SELECT Phone_No FROM User_Details WHERE Username='".$_SESSION['Username']."'";
		$res1=mysqli_query($db, $query1);
		$row1=mysqli_fetch_assoc($res1);
		$Phone_No=$row1["Phone_No"];
$post_data = array(
    // 'From' doesn't matter; For transactional, this will be replaced with your SenderId;
    // For promotional, this will be ignored by the SMS gateway
    'From'   => '8607451509',
    'To'    => $Phone_No,
    'Body'  => 'Your OTP for login to SecureIt.com is " '.$otp.'"',
);
 
$exotel_sid = "secureit"; // Your Exotel SID
$exotel_token = "b40d460970c052ffe9c06f428b6c969ba8a91c4a"; // Your exotel token
 
$url = "https://".$exotel_sid.":".$exotel_token."@twilix.exotel.in/v1/Accounts/".$exotel_sid."/Sms/send";
 
$ch = curl_init();
curl_setopt($ch, CURLOPT_VERBOSE, 1);
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_FAILONERROR, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($post_data));

	$http_result = curl_exec($ch);
	$error = curl_error($ch);
	$http_code = curl_getinfo($ch ,CURLINFO_HTTP_CODE); 
	curl_close($ch);
	// print "Response = ".print_r($http_result);
?>