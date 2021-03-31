<?php

session_start();

include 'function.php';


$collection->updateOne(
    ['_id' => new MongoDB\BSON\ObjectID($_POST['id_edit'])],

    [
        '$set' => [
            'kota' => $_POST['kota'],
            'nama_lokasi' => $_POST['lokasi'],
            'luas_tertangani' => $_POST['luas_tertangani'],
            'lingkup_administratif' => [
                'kecamatan' => $_POST['kecamatan'],
                'kelurahan' => $_POST['kelurahan'],
                'RW' => $_POST['rw'],
                'RT' => $_POST['rt']
            ],
            'koordinat' => [
                'lintang' => $_POST['lintang'],
                'bujur' => $_POST['bujur']
            ],
            'tahun' => $_POST['tahun'],
            'jenis_kegiatan' => $_POST['kegiatan'],
            'sumber_dana' => $_POST['sumber_dana'],
            'sisa_kumuh' => $_POST['sisa_kumuh'],
        ]
    ]
);


$_SESSION['success'] = "Book updated successfully";
header("Location: index.php");
var_dump($_POST['kota']);
var_dump($gema);
