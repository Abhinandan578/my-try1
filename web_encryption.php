<?php
function generate_secret_key1($value) {
		$rep=$value;
		 while(strlen($value)<=32)
			{
				$value .=$rep;
				// echo $value."<br>";
			}
			
		return $value;
	}
	function strToHex($string){
    $hex='';
    for ($i=0; $i < strlen($string); $i++){
        $hex .= dechex(ord($string[$i]));
    }
    return $hex;
}

	function length_check32($value) {
		if(strlen($value)>32)
			{
				$len=strlen($value);
				for($i=0;$i<32;$i++)
				{
					$new_value=substr($value, 0,32);
				}
			}
		
		return $new_value;
	}

// $query1="SELECT Password FROM User_Details WHERE Username='".$_SESSION['Username']."'";
		// $query1="SELECT Password FROM User_Details WHERE Username='abhi578'";
		// $res1=mysqli_query($db, $query1);
		// $row=mysqli_fetch_assoc($res1);
		// $key=mc_decrypt($row["Password"],ENCRYPTION_KEY);
		// // $length=strlen($key);
		// // echo "length is".$length."<br>";
		// $key=strToHex($key);
		// $password=generate_secret_key1($key);
		// // echo "secret password ".$password."<br>".strlen($password)."<br>";
		// $pass=length_check32($password);
		// // echo "pass is ".$pass."<br>".strlen($pass);
		// // echo $length."<br>".$key[0];
		//  $passcrypt=mc_encrypt('abc',$pass);
		//  // echo $passcrypt."<br>";
		//  $passdecrypt=mc_decrypt($passcrypt,$pass);

?>