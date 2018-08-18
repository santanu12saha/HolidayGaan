<?php
if(!session_id()){
	session_start();
}

// Include the autoloader provided in the SDK
require_once __DIR__ . '/facebook-php-sdk/autoload.php';

// Include required libraries
use Facebook\Facebook;
use Facebook\Exceptions\FacebookResponseException;
use Facebook\Exceptions\FacebookSDKException;

/*
 * Configuration and setup Facebook SDK
 */
$appId 			= '1894652987526496'; //Facebook App ID
$appSecret 		= '925f4bb9df5c7cc2c3fb81b9b3a9ad10'; //Facebook App Secret
$redirectURL 	= 'http://localhost/vKationdemo/fb-login/fbsave.php'; //Callback URL
$fbPermissions 	= array('email','user_birthday');  //Optional permissions

$fb = new Facebook(array(
	'app_id' => $appId,
	'app_secret' => $appSecret,
	'default_graph_version' => 'v2.2',
));

// Get redirect login helper
$helper = $fb->getRedirectLoginHelper();

$logoutURL = ""; 
// Try to get access token
try {
	if(isset($_SESSION['facebook_access_token'])){
		$accessToken = $_SESSION['facebook_access_token'];
		$logoutURL = $helper->getLogoutUrl($accessToken, 'http://localhost/vKationdemo/logout.php');
		}
	else{
  		$accessToken = $helper->getAccessToken();
		$logoutURL = $helper->getLogoutUrl($accessToken, 'http://localhost/vKationdemo/logout.php');
	}
} catch(FacebookResponseException $e) {
 	echo 'Graph returned an error: ' . $e->getMessage();
  	exit;
} catch(FacebookSDKException $e) {
	echo 'Facebook SDK returned an error: ' . $e->getMessage();
  	exit;
}



?>