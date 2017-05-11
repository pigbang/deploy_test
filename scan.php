<?php
require './vendor/autoload.php';

$client = new GuzzleHttp\Client();

$httpResponse = $client->options('http://www.baidu.com');

echo $httpResponse->getStatusCode();
exit;
var_dump($httpResponse);