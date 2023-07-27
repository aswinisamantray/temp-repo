<?php
session_start();
require_once 'lib/google-api-php-client-2.2.4/vendor/autoload.php';
require_once './wrapper.php';
require_once './config.php';

$login_scopes = array('https://www.googleapis.com/auth/userinfo.email', 'https://www.googleapis.com/auth/userinfo.profile');

$login_client = getClient('NSS SignIn', $login_scopes, 'offline', $OAuthClientSecret, $BASE_URL . '/oauth.php');

$email = checkAuth($login_client);
if (!$email) {
   include('./login.php');
} else {
   header("Location: " . $BASE_URL .  "/redirect.php");
}
