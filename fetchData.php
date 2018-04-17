<?php 

namespace App;

require("vendor/autoload.php");

use GuzzleHttp\Client;
use GuzzleHttp\Exception\ClientException;

$client = new Client();

function getAllUnicorns() 
{
    global $client;
    $response = $client->request('GET', 'http://unicorns.idioti.se/', [
        'headers' => [
            'Accept' => 'application/json'
        ]
    ]);
    $unicorns = filterOutEmpty(json_decode($response->getBody()));
    return $unicorns;
}

function getUnicorn($id) 
{
    global $client;
    try {
        $response = $client->request('GET', 'http://unicorns.idioti.se/' . $id, [
            'headers' => [
                'Accept' => 'application/json'
            ]
        ]);
        $unicorn = json_decode($response->getBody());

        // if unicorn does not have a name, do not return it
        if ($unicorn->name !== "") {
            return $unicorn;
        } else {
            return false;
        }

    } catch(ClientException $e) {
        // if no unicorn with this id exists
        return false;
    }
}

/**
 * filters unicorn out of the unicorns array if it does not have a name
 */
function filterOutEmpty($unicorns)
{
    $unicorns = array_filter($unicorns, function ($unicorn) {
        return $unicorn->name !== "";
    });
    return $unicorns;
}

?>