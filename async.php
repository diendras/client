<?php require 'vendor/autoload.php';

use GuzzleHttp\Client;
use GuzzleHttp\Psr7\Response;
use GuzzleHttp\Exception\RequestException;

$id = $_GET['id'];
$client = new Client();
$promise = $client->requestAsync(
    'GET',
    'https://diendrakur.000webhostapp.com/dk/api/profil', [
        
        'form_params' => ['id' => $id]
        
    ]);

$promise->then(
    function (Response $res) {
        echo $res->getBody();
    },
    function (RequestException $e){
        echo $e->getMessage();
    }

);
$promise->wait();
header('Location: index.php');
exit();
 ?>