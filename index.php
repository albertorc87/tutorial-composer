<?php

require __DIR__ . '/vendor/autoload.php';

// $calc = calc();
// echo $calc->sum(5, 4) . PHP_EOL;

$client = new \GuzzleHttp\Client();
$response = $client->request('GET', 'https://www.google.es/');

echo $response->getStatusCode();
