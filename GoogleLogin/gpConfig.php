<?php
session_start();

//Include Google client library
include_once 'src/Google_Client.php';
include_once 'src/contrib/Google_Oauth2Service.php';

/*
 * Configuration and setup Google API
 */
$clientId = '764983114938-1sa97d2jkgofsk5ceofg0c5b1ubcvr07.apps.googleusercontent.com';
$clientSecret = 'D5zv5qL-1RzAjaOUh83DCkXr';
$redirectURL = 'https://www.googleapis.com/oauth2/v1/certs';

//Call Google API
$gClient = new Google_Client();
$gClient->setApplicationName('Login to CodexWorld.com');
$gClient->setClientId($clientId);
$gClient->setClientSecret($clientSecret);
$gClient->setRedirectUri($redirectURL);

$google_oauthV2 = new Google_Oauth2Service($gClient);
?>
