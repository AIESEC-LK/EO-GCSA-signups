<?php

// require_once("configs.php");
require_once __DIR__ . '/vendor/autoload.php';
require_once("configs.php");

$client = new Google_Client();
$client->setApplicationName('Google Sheets and PHP');
$client->setScopes([Google_Service_Sheets::SPREADSHEETS]);
$client->setAccessType('offline');
$client->setAuthConfig(__DIR__ . '/credentials.json');
$sheet_service = new Google_Service_Sheets($client);

function append($values)
{

    global $sheet_service;
    global $spreadsheetId;

    $body = new Google_Service_Sheets_ValueRange([
        'values' => $values
    ]);

    $params = [
        'valueInputOption' => 'USER_ENTERED'
    ];

    $range = 'Sheet1';
    $insert = ["insertDataOption" => "INSERT_ROWS"];
    //Append to all sheet
    $result = $sheet_service->spreadsheets_values->append(
        $spreadsheetId,
        $range,
        $body,
        $params,
        $insert
    );

    if ($result->getUpdates()->getUpdatedCells() == 9) {
        return true;
    }

    return false;
}
