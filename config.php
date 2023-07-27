<?php
if ($_ENV["BASE_URL"]) {
    $BASE_URL = $_ENV["BASE_URL"];
} else {
    // $BASE_URL = "http://localhost:8080"; // Local
    // $BASE_URL = "https://nss-iitbh.herokuapp.com"; // Staging
    $BASE_URL = "https://nss.iitbhilai.ac.in"; // Production
}


$EMAIL_COLUMN_INDEX = 0;
$CREDITS_COLUMN_INDEX = 4;
$EVENT_COLUMN_START_INDEX = 5;
$SPREADHSHEET_ID = "1Dz2IyfPAsOsCysmIfwWAb9_seZmQX5g_EmdkVSBTrh0";

if ($_ENV["NOCODB_TOKEN"]) {
    $NOCODB_TOKEN = $_ENV["NOCODB_TOKEN"];
} else {
    $NOCODB_TOKEN = "";
}

if ($_ENV["NOCO_PROJECT_ID"]) {
    $NOCO_PROJECT_ID = $_ENV["NOCO_PROJECT_ID"];
} else {
    $NOCO_PROJECT_ID = "";
}

if ($_ENV["NOCO_PROJECT_NAME"]) {
    $NOCO_PROJECT_NAME = $_ENV["NOCO_PROJECT_NAME"];
} else {
    $NOCO_PROJECT_NAME = "noco-test";
}

if ($_ENV["NOCODB_URL"]) {
    $NOCODB_URL = $_ENV["NOCODB_URL"];
} else {
    $NOCODB_URL = "http://192.168.56.1:5000"; // Local
    // $BASE_URL = "https://nss-iitbh.herokuapp.com"; // Staging
    // $NOCODB_URL = "https://nss.iitbhilai.ac.in"; // Production
}

// TODO: Clean this (I believe some of these files are not in use)
$OAuthCredentials = "./crypto-material/OAuth-Cred.json";
$OAuthClientSecret = "./crypto-material/client_secret-OAuth.json";
$OAUthNSSJSON = './crypto-material/NSS-v1-d408d7b9032d.json';
