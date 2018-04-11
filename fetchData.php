<?php 

namespace App;

require("vendor/autoload.php");

use GuzzleHttp\Client;

$client = new Client();

function getAllUnicorns() {
    global $client;
    $response = $client->request('GET', 'http://unicorns.idioti.se/', [
        'headers' => [
            'Accept' => 'application/json'
        ]
    ]);
    return json_decode($response->getBody());
}

function getUnicorn($id) {
    global $client;
    $response = $client->request('GET', 'http://unicorns.idioti.se/' . $id, [
        'headers' => [
            'Accept' => 'application/json'
        ]
    ]);
    return json_decode($response->getBody());
}

?>