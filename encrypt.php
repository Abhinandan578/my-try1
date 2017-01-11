<?php
/*
 * PHP mcrypt - Basic encryption and decryption of a string
 */
$string = "Some text to be encrypted";
$secret_key = "This is my secret key...";

// Create the initialization vector for added security.
$iv = mcrypt_create_iv(mcrypt_get_iv_size(MCRYPT_RIJNDAEL_256, MCRYPT_MODE_CBC), MCRYPT_RAND);

// Encrypt $string
$encrypted_string = mcrypt_encrypt(MCRYPT_RIJNDAEL_256, $secret_key, $string, MCRYPT_MODE_CBC, $iv);

// Decrypt $string
$decrypted_string = mcrypt_decrypt(MCRYPT_RIJNDAEL_256, $secret_key, $encrypted_string, MCRYPT_MODE_CBC, $iv);

echo "Original string : " . $string . "<br />\n";
echo "Encrypted string : " . $encrypted_string . "<br />\n";
echo "Decrypted string : " . $decrypted_string . "<br />\n";
?>
/*
$sha1_first_value = sha1("secret", FALSE);

    $sha1_second_value = hash("sha1", "secret", FALSE);
    Both the SHA1 and MD5 alternate functions have the parameter of "TRUE/FALSE" at the end to indicate whether the result is given in binary (raw data) or not.  Unfortunately, this often turns out to be data that doesn't print very well.  It is recommended to be printed with the statement of printf("%u\n", $crc_32_value);.  However, that often doesn't produce any usable results, either.  The only method I have discovered is the "bin2hex" function, like so :
<?php

    $md5_value = hash("md5", "secret", FALSE);
    $md5_value_in_hex = bin2hex($md5_value);

?>
However, bin2hex returns a hexadecimal representation, whereas you probably wanted a string of binary 1's and 0's.  You can use the base_convert function, such as base_convert($md5_value_in_hex, 16, 2);.  However, base_convert doesn't work on large numbers, so you have to write your own function for converting Hex to Binary.

One other thing that will probably catch your attention is that half of the listed algorithms have similar names, but are represented with different numbers.  That means that the algorithm takes parameters itself, such as number of bits for the resultant hash value and number of rounds to do in producing the hashed result.  The first number in the title of the Hash Function usually indicates the size of the hash result, such as 128 bit for "haval128,3" and 160 bit for "tiger160,4".  The second number, however, indicates the number of rounds, such as 5 rounds for "haval224,5". */