<?php

require_once('GoogleAuthenticator.php');

$secret = 'BM23YZSISSXU2DYV';

if(isset($_POST['google_code'])) {
	$code = $_POST['google_code'];
	$ga = new GoogleAuthenticator();
	$result = $ga->verifyCode($secret, $code, 3);

	echo $result;
}


?>