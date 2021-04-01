<?php
session_start();
include 'function.php';
if (isset($_POST['submit'])) {

    $insertOneResult = $collection->insertOne([
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
    ]);


    $_SESSION['success'] = "Import Berhasil";
    header("Location: index.php");
}
?>