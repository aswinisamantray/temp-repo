<?php

session_start();

require_once 'lib/google-api-php-client-2.2.4/vendor/autoload.php';
require_once "./wrapper.php";
require_once "./config.php";

$login_scopes = array('https://www.googleapis.com/auth/userinfo.email', 'https://www.googleapis.com/auth/userinfo.profile');
$temp_client = getClient('NSS SignIn', $login_scopes, 'offline', $OAuthCredentials, NULL);
$temp_client->setAccessToken($_SESSION['access']);
$temp_client->revokeToken();
unset($_SESSION['access']);
session_destroy();
//echo "You have been successfully signed out";
header("Location: " . $BASE_URL . "/index.php");
// header("Location: http://localhost:8080/index.php");
// header("Location: https://website-nss-iitbh.herokuapp.com/index.php");
// header("Location: https://nss.iitbhilai.ac.in/index.php");
