<?php


//Include Google client library 
include_once 'src/Google_Client.php';
include_once 'src/contrib/Google_Oauth2Service.php';

/*
 * Configuration and setup Google API
 */
$clientId = '428392418767-ftol75uabp6m2ctuol3h41c7llt8an8b.apps.googleusercontent.com'; //Google client ID
$clientSecret = '3H6DlpCWYzxZX4zpFZ93mf08'; //Google client secret
$redirectURL = 'http://localhost/pengaduan2017/'; //Callback URL

//Call Google API
$gClient = new Google_Client();
$gClient->setApplicationName('Login to CodexWorld.com');
$gClient->setClientId($clientId);
$gClient->setClientSecret($clientSecret);
$gClient->setRedirectUri($redirectURL);

$google_oauthV2 = new Google_Oauth2Service($gClient);
?>