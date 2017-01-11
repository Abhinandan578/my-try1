<?php
$query="SELECT OTP FROM OTP_Details WHERE Username='".$_SESSION['Username']."'";
		$res=mysqli_query($db, $query);
		$row=mysqli_fetch_assoc($res);
		$otp=$row["OTP"];

		$query1="SELECT Phone_No FROM User_Details WHERE Username='".$_SESSION['Username']."'";
		$res1=mysqli_query($db, $query1);
		$row1=mysqli_fetch_assoc($res1);
		$Phone_No=$row1["Phone_No"];
 $account_sid = 'AC9bd7bb940e244119f9207358564dc1fd';
    $auth_token = '1be4ae20f1dc7c0ebac9c0211e15358d';
    $client = new Services_Twilio($account_sid, $auth_token);

    $client->account->messages->create(
        array(
            'To' => '$Phone_No',
            'From' => '7206305374',
            'Body' => 'Your OTP for login to SecureIt.com is " '.$otp.'"',
        )
    );

?>