<?php

namespace App\Http\services;

use Google\Client;
use Google\Service\Sheets;
use Google\Service\Sheets\ValueRange;


use GuzzleHttp\Client as GuzzleClient;

class GoogleSheetsServices
{
    private $client, $service, $documentId, $range, $secure_ssl;

    public function __construct()
    {

        $this->client = $this->getClient();
        $this->service = new Sheets($this->client);
        $this->documentId = config('google.post_spreadsheet_id');
        $this->secure_ssl = new GuzzleClient(['verify' => false]);
        $this->client->setHttpClient($this->secure_ssl);
        $this->range = 'A:Z';

    }


    public function getClient()
    {
        $client = new Client();
        $client->setApplicationName('Google Sheets API PHP Quickstart');
        $client->setScopes(Sheets::SPREADSHEETS);
        $client->setAuthConfig('' . __DIR__ . '/credentials.json');
        $client->setAccessType('offline');

        return $client;
    }
    public function readSheet()
    {
        $doc = $this->service->spreadsheets_values->get($this->documentId, $this->range);
        return $doc;
    }

    public function appendSheet($row)
    {

        $body = new ValueRange(
            [
                'values' => $row
            ]
        );
        $params = [
            'valueInputOption' => 'RAW'
        ];
        $result = $this->service->spreadsheets_values->append($this->documentId, $this->range, $body, $params);

    }

    public function newSheetCreateCustom()
    {
        $spreadsheet = new Google_Service_Sheets_Spreadsheet([
            'properties' => [
                'title' => 'lodhabhandup'
            ]
        ]);
        $spreadsheet = $this->service->spreadsheets_values->create($spreadsheet, [
            'fields' => 'spreadsheetId'
        ]);
        return $spreadsheet->spreadsheetId;
    }
}
