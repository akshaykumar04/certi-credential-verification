<?php
require_once 'google-api-php-client-2.4.1\vendor\autoload.php';
$client = new \Google_Client();
$client->setApplicationName('GBUJobs');
$client->setScopes([\Google_Service_Sheets::SPREADSHEETS]);
$client->setAccessType('online');
$client->setAccessType('offline');
$client->setAuthConfig(__DIR__ . '/api.json');
$service = new Google_Service_Sheets($client);
$spreadsheetId = "1W89pRZ1FTBrc04st-h7nhk8iuPeIc85dBMr1byAV64U";
$range = 'responses';
$response = $service->spreadsheets_values->get($spreadsheetId, $range);
$values = $response->getValues();
?>
