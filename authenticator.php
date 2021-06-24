<?php

require_once('GoogleAuthenticator.php');

$ga = new GoogleAuthenticator();

$secret = "BM23YZSISSXU2DYV";
echo $secret. '<br/>';

$qr = $ga->getQRCodeGoogleUrl('Home Settings', $secret);
echo '<img src="'.$qr.'"/><br/>';

$myCode = $ga->getCode($secret);

$result = $ga->verifyCode($secret, $myCode, 3);

echo $result;

  ?>