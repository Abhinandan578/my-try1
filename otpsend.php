

<?php
$query="SELECT OTP FROM OTP_Details WHERE Username='".$_SESSION['Username']."'";
        $res=mysqli_query($db, $query);
        $row=mysqli_fetch_assoc($res);
        $otp=$row["OTP"];

        $query1="SELECT Phone_No FROM User_Details WHERE Username='".$_SESSION['Username']."'";
        $res1=mysqli_query($db, $query1);
        $row1=mysqli_fetch_assoc($res1);
        $Phone_No=$row1["Phone_No"];
require __DIR__ .'/vendor/autoload.php';
// Use the RESTClient to make requests to the Twilio REST API
use Twilio\Rest\Client;

// Your Account SID and Auth Token from twilio.com/console
$sid = 'AC9bd7bb940e244119f9207358564dc1fd';
$token = '1be4ae20f1dc7c0ebac9c0211e15358d';
$client = new Client($sid, $token);

// Use the client to do fun stuff like send text messages!
$client->account->messages->create(
    // the number you'd like to send the message to
    '+917206305374',
    array(
        // A Twilio phone number you purchased at twilio.com/console
        'from' => '+17864468614 ',
        // the body of the text message you'd like to send
        'body' => "OTP:".$otp."for the phone number".$Phone_No.""
    )
);

?>  
