<?php

//config.php

//Include Google Client Library for PHP autoload file
require_once 'vendor/autoload.php';

//Make object of Google API Client for call Google API
$google_client = new Google_Client();

//Set the OAuth 2.0 Client ID
$google_client->setClientId('539246690236-tvoad6op2k24t4010o2re4nd9v2kjq1n.apps.googleusercontent.com');

//Set the OAuth 2.0 Client Secret key
$google_client->setClientSecret('WpZooC_GLJZXb9zunI3SH828');

//Set the OAuth 2.0 Redirect URI
$google_client->setRedirectUri('https://maja-etact.herokuapp.com/index.php');

//
$google_client->addScope('email');

$google_client->addScope('profile');

//start session on web page
session_start();
// credits: john paul majaaaaaa
?>
