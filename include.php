<?php
require_once 'google-api-php-client-2.4.1\vendor\autoload.php';
$client = new \Google_Client();
$client->setApplicationName('YOURAPPNAME');
$client->setScopes([\Google_Service_Sheets::SPREADSHEETS]);
$client->setAccessType('offline');
$client->setAuthConfig(__DIR__ . '/your-think-space-d1149fde842f.json');
$service = new Google_Service_Sheets($client);
$spreadsheetId = "1lZeDeYNZoGATw8DqdSy2hN9jQexbmMHsNC4CCKeRbcM";
$range = 'congress';
$response = $service->spreadsheets_values->get($spreadsheetId, $range);
$values = $response->getValues();

 ?>
