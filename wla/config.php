<?php

//config.php

//Include Google Client Library for PHP autoload file
require_once 'vendor/autoload.php';

//Make object of Google API Client for call Google API
$google_client = new Google_Client();

//Set the OAuth 2.0 Client ID
$google_client->setClientId('302699445942-3unsom02e9b2hc1f69rmnm92g3biie1p.apps.googleusercontent.com');

//Set the OAuth 2.0 Client Secret key
$google_client->setClientSecret('seLDKEPjBg6lTt_IV8maLV9_');

//Set the OAuth 2.0 Redirect URI
$google_client->setRedirectUri('https://kyzier.herokuapp.com/index.php');

//
$google_client->addScope('email');

$google_client->addScope('profile');

//start session on web page
session_start();
// credits: john paul majaaaaaa
?>
