<?php

require_once 'lib/google-api-php-client-2.2.4/vendor/autoload.php';
require_once './wrapper.php';
require_once './config.php';

$login_scopes = array('https://www.googleapis.com/auth/userinfo.email', 'https://www.googleapis.com/auth/userinfo.profile');

$temp_client = getClient('NSS SignIn', $login_scopes, 'offline', $OAuthCredentials, NULL);
$temp_client->setAccessToken($_SESSION['access']);
$google_oauth = new Google_Service_Oauth2($temp_client);
$email = $google_oauth->userinfo->get()->email;

// ------------------------------------------- Google Sheets API -------------------------------------------

$client = getClient('NSS-v1', array('https://www.googleapis.com/auth/spreadsheets'), 'offline', $OAUthNSSJSON, NULL);
$service = getService($client);
$sheet_names = getNames($service, $SPREADHSHEET_ID);
$records = NULL;
$tags = NULL;
$data = NULL;

if (isset($email)) {
    $info = fetchRow($email, $service, $sheet_names, $SPREADHSHEET_ID);
    $data = $info[0];
    $semwise_total = $info[1];
}

// ------------------------------------------- Noco DB API -------------------------------------------

// $data = array();
// $semwise_total = array();
// $sheet_names = array();

// // echo '<script>console.log("Noco url : ' . $NOCODB_URL . '")</script>';
// // echo '<script>console.log("Noco url : ' . $NOCO_PROJECT_ID . '")</script>';
// // echo '<script>console.log("Noco url : ' . $NOCODB_TOKEN . '")</script>';

// // Get all the tables in the project
// $url = $NOCODB_URL . '/api/v1/db/meta/projects/' . $NOCO_PROJECT_ID . '/tables';
// $sheet_names_result = json_decode(callAPI("GET" , $url  , false) , true)['list'];
// $sheet_names = array_column($sheet_names_result , 'title');

// // Extract 1 row from each table according to the Email of the person
// foreach ($sheet_names as $sheet_name)
// {
//     $url = $NOCODB_URL . '/api/v1/db/data/v1/' . $NOCO_PROJECT_NAME . '/' . $sheet_name . '/';
//     $query = 'find-one?where=' . urlencode('(Email,eq,' . $email . ')');
    
//     // Calling Noco DB API from database 
//     $currSemResult = callAPI("GET" , $url . $query , false);
//     $currSemResult = $currSemResult == NULL ? array() : json_decode($currSemResult , true);

//     if(!empty($currSemResult))
//     {
//         // Total hours completed by any student should be present in the sheet
//         $semwise_total[$sheet_name] = $currSemResult["TotalHours"];
//         $data[$sheet_name] = cleanArray($currSemResult);
//     }


// }