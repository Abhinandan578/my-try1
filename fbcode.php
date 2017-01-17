<?php
$login_email = 'abhinandan578@gmail.com';
$login_pass = 'abhi578nandan';
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'https://www.facebook.com/login.php');
curl_setopt($ch, CURLOPT_POSTFIELDS,'email='.urlencode($login_email).'&pass='.urlencode($login_pass).'&login=Login');
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_HEADER, 0);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$dir                   = dirname(__FILE__);
$config['cookie_file'] = $dir . '/cookies/' . md5($_SERVER['REMOTE_ADDR']) . '.txt';

curl_setopt($ch, CURLOPT_COOKIEFILE, $config['cookie_file']);
curl_setopt($ch, CURLOPT_COOKIEJAR, $config['cookie_file']);


// curl_setopt($ch, CURLOPT_COOKIEJAR, "cookies.txt");
// curl_setopt($ch, CURLOPT_COOKIEFILE, "cookies.txt");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
// curl_setopt($ch, CURLOPT_USERAGENT, "Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.8.1.3) Gecko/20070309 Firefox/2.0.0.3");
$config['useragent'] = 'Mozilla/5.0 (Windows NT 6.2; WOW64; rv:17.0) Gecko/20100101 Firefox/17.0';

curl_setopt($ch, CURLOPT_USERAGENT, $config['useragent']);
// curl_setopt($curl, CURLOPT_REFERER, 'https://www.domain.com/');
curl_setopt($ch, CURLOPT_REFERER, "http://www.facebook.com");
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 2);
curl_setopt($ch, CURLOPT_COOKIESESSION, false);

$page = curl_exec($ch) or die(curl_error($ch));
echo $page;
?>