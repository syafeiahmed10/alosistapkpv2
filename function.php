<?php
require 'vendor/autoload.php';

$user = "alosistapkpv2";
$pwd = "permisitujuhtujuh";
$mongo = new MongoDB\Client("mongodb://${user}:${pwd}@127.0.0.1:27017/alosistapkpv2");
// $collection = $mongo->alosistapkpv2->kabupaten;
// $result = $collection->find()->toArray();
// var_dump($result);

// panggil database
$alosistapkpv2 = $mongo->alosistapkpv2;

function registration($data){
    global $alosistapkpv2;
    // $username = strtolower(stripslashes($data["username"])); //hilangkan backslah dan paksa huruf kecil
    $username = $data["username"];
    $password = $data["password"];
    $password2 = $data["password2"];
    

    // cek apakah username sudah ada yang pakai
    
    
    if($alosistapkpv2->user->countDocuments(['username'=>$username]) === 1) {
        // echo "<script>alert('nama pengguna telah digunakan')</script>";
        // return false;
        $_SESSION["BAD_MESSAGE"] = "Nama Pengguna Telah Digunakan";
        return false;
    }

    if ($password !== $password2) {
        $_SESSION["BAD_MESSAGE"] = "Kata Sandi Tidak Sama";
        return false;
    }

    // enkripsi passwordnya
    $password = password_hash($password, PASSWORD_DEFAULT); //hash algoritma nya PASSWORD_DEFAULT(akan berubah dinamis kalo ada cara pengamanan baru)

    $result = $alosistapkpv2->user->insertOne(['username'=>$username, 'password'=>$password]);
    return $result->getInsertedCount();
}
?>