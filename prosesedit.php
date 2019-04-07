<?php
include 'vendor/autoload.php';

$id_m = $_POST['idmekanik'];
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];



use GuzzleHttp\Client;

$client = new Client();
$data = $client->PUT('http://pkl.notaxcloth.com/dkwebhost/api/mekanik', [
    'form_params' => [
        'id_m' => $id_m,
        'nama' => $nama,
        'alamat' => $alamat,

    ]
]);

header('location: index.php');
exit();
