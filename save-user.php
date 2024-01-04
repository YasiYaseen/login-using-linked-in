<?php
session_start();
include 'config.php';
require_once 'vendor/autoload.php';


$client = new GuzzleHttp\Client([
    'base_uri' => 'https://www.linkedin.com',
]);

$response = $client->request('POST', 'oauth/v2/accessToken?grant_type=authorization_code&code=' . $_POST['code'] . '&client_id='.CLIENT_ID.'&client_secret='.CLIENT_SECRET.'&redirect_uri='.REDIRECT_URI.'', [
    'forms_params' => [
        "grant_type" => "authorization_code",
        "code" => $_POST['code'],
        "client_id" => CLIENT_ID,
        "client_secret" => CLIENT_SECRET,
        "redirect_uri" => REDIRECT_URI,
    ]
]);
$res = json_decode($response->getBody());
$token = $res->access_token;
var_dump($token);


$client1 = new GuzzleHttp\Client([
    'base_uri' => 'https://api.linkedin.com',
]);

$response = $client1->request('GET', 'v2/userinfo', [
    'headers' => [
        'Authorization' => 'Bearer ' . $token
    ],
]);
$totalRes = json_decode($response->getBody());
var_dump($totalRes);

$conn= new mysqli(DBHOST,DBHOST,DBPASSWORD,DATABASE);

$query = 'INSERT INTO '