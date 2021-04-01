<?php
require 'vendor/autoload.php';

$user = "alosistapkpv2";
$pwd = "permisitujuhtujuh";
$mongo = new MongoDB\Client("mongodb://${user}:${pwd}@127.0.0.1:27017");
$collection = $mongo->alosistapkpv2->kabupaten;
$result = $collection->find()->toArray();

var_dump($result);
?>