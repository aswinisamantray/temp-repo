<?php

require_once 'lib/google-api-php-client-2.2.4/vendor/autoload.php';

function getClient($applicationName, $scopes, $accessType, $credpath, $redirect_uri)
{
   $client = new Google_Client();
   $client->setApplicationName($applicationName);
   $client->setScopes($scopes);
   $client->setAccessType($accessType);
   $client->setAuthConfig($credpath);
   $client->setRedirectUri($redirect_uri);
   return $client;
}

function checkAuth($client)
{
   if (isset($_GET['code'])) {
      $client->authenticate($_GET['code']);
      $access_token = $client->getAccessToken();
      $_SESSION['access'] = $access_token;
      $client->setAccessToken($_SESSION['access']);
      $google_oauth = new Google_Service_Oauth2($client);
      $google_account_info = $google_oauth->userinfo->get();
      return $google_account_info->email;
   } else return FALSE;
}

function getService($client)
{
   $service = new Google_Service_Sheets($client);
   return $service;
}

function getNames($service, $spreadSheetId)
{
   $sheets_obj = $service->spreadsheets->get($spreadSheetId);
   $sheets_name = array();
   foreach ($sheets_obj as $i) {
      array_push($sheets_name, $i['properties']['title']);
   }

   return $sheets_name;
}

function cleanup($value_array)
{
   $linear = array_map(function ($v) {
      return ($v == "" ? "0" : $v);
   }, array($value_array[0]));
   return $linear;
   //var_dump($linear);
}

function array_value($array, $key, $default_value = null)
{
   return is_array($array) && array_key_exists($key, $array) ? $array[$key] : $default_value;
}


function fetchRow($primary, $service, $sheet_names, $spreadsheet_id)
{
   require './config.php';
   // Terminology: "spreadhsheet" has mutliple "sheets"
   // Here, primary = email 
   // we are assuming that every sheet represents a unique semester
   // Also, Col A = email and Col B = total hours in a semester

   $sem_event_hours = array(
      // "Sem 1" => array(
      //    "Event 1" => 11,
      //    "Event 2" => 23,
      //    "Event 3" => 34,
      // ),
   );

   $semwise_total = array();

   foreach ($sheet_names as $sheet_name) {
      $range = $sheet_name . '!A1:ZZ1000'; // Get the whole sheet at once to avoid multiple network calls
      $values = $service->spreadsheets_values->get($spreadsheet_id, $range)->getValues();
      $row_index = array_search($primary, array_column($values, $EMAIL_COLUMN_INDEX)); // 0th col is email (and that's our identifier)
      if ($row_index === FALSE) continue; // Email not found in current sheet, so move to next one.
      else {
         
         $event_hours_map = array(); // Nested dictionary
         $row = $values[$row_index];
         $row_size = sizeof($row);

         $semwise_total[$sheet_name] = $row[$CREDITS_COLUMN_INDEX];

         for ($col_indx = $EVENT_COLUMN_START_INDEX; $col_indx < $row_size; $col_indx++) {
            $event_title = $values[0][$col_indx]; // 0th row, same column
            $event_hours = (int) $row[$col_indx];
            if($event_hours > 0){
               $event_hours_map[$event_title] = $event_hours; 
            }
         }
         $sem_event_hours[$sheet_name] = $event_hours_map;
      }
   }
   return array($sem_event_hours, $semwise_total);
}

function callAPI($method, $url, $data){
   require './config.php';

   $curl = curl_init();
   switch ($method){
      case "POST":
         curl_setopt($curl, CURLOPT_POST, 1);
         if ($data)
            curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
         break;
      case "PUT":
         curl_setopt($curl, CURLOPT_CUSTOMREQUEST, "PUT");
         if ($data)
            curl_setopt($curl, CURLOPT_POSTFIELDS, $data);			 					
         break;
      default:
         if ($data)
            $url = sprintf("%s?%s", $url, http_build_query($data));
   }

   // OPTIONS:
   curl_setopt($curl, CURLOPT_URL, $url);
   curl_setopt($curl, CURLOPT_HTTPHEADER, array(
      'xc-token: ' . $NOCODB_TOKEN,
      'accept: application/json',
   ));

   curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
   curl_setopt($curl, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
   
   // EXECUTE:
   $result = curl_exec($curl);
   if(!$result){
      // echo 'Curl error: ' . curl_error($curl);
      die("Connection Failure");
   }

   $httpstatuscode = curl_getinfo($curl, CURLINFO_HTTP_CODE);
   if($httpstatuscode >= 400)
      $result = NULL;
   curl_close($curl);
   
   return $result;
}

function cleanArray($array) {
   $excludeKeys = array("Id", "CreatedAt", "UpdatedAt", "Email", "Status",  "CreditsReg", "Name", "Roll", "TotalHours", "RequiredHours", "CarriedOver");
   foreach ($array as $key => $value) {
      if($value == NULL)
         unset($array[$key]);
   }
   foreach($excludeKeys as $key){
       unset($array[$key]);
   }
   return $array;
}

