<?php 

namespace App;

require("vendor/autoload.php");

use GuzzleHttp\Client;

//$client = new Client(['base-uri' => 'http://unicorns.idioti.se/']);
$client = new Client();

function getAllUnicorns() {
    global $client;
    $response = $client->request('GET', '');
    $data = json_decode($response->getBody());
    return $data;
}

function getUnicorn($id) {
    global $client;
    $response = $client->request('GET', 'http://unicorns.idioti.se/' . $id);
    $data = json_decode($response->getBody());
    return $data;
}

?>