<?php include 'vendor/autoload.php';


use GuzzleHttp\Client;
use function GuzzleHttp\json_decode;

$client = new Client();

$dt = $client->request('GET', 'https://pkl.notaxcloth.com/dk/api/profil', []);
$result = json_decode($dt->getBody()->getContents(), true);



?>
<style>
    table,
    th,
    td {
        border: 1px solid black;
    }

    tr {
        text-align: center;
    }
</style>
<a href="tambah.php">tambah
</a>

<table style="width:100%">
    <thead class="center">
        <tr>
            <th>ID</th>
            <th>nama bengkel</th>
            <th>alamat</th>
            <th>pemilik</th>
            <th>foto</th>
            <th>aksi</th>
        </tr>
    </thead>
    <tbody class="center">
        <?php foreach ($result['data'] as $data) {
            ?>
        <tr>
            <td> <?= $data['id_bengkel']; ?></td>
            <td><?= $data['nama_bengkel']; ?> </td>
            <td><?= $data['pemilik']; ?> </td>
            <td><?= $data['alamat']; ?></td>
            <td><?= $data['foto']; ?></td>
            <td>
                <a href="edit.php?id=<?= $data['id_bengkel']; ?>">edit</a>
                <a href="hapus.php?id=<?= $data['id_bengkel']; ?>">hapus</a></td>
        </tr>
        <?php 
    }
    ?>
    </tbody>
</table> 