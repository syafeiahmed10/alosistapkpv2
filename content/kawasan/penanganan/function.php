<?php

// require_once __DIR__ . "/vendor/autoload.php";
require __DIR__ . "/../../../vendor/autoload.php";
$mongoClient = new MongoDB\Client('mongodb://alosistapkpv2:permisitujuhtujuh@localhost:27017/alosistapkpv2');
$collection = $mongoClient->alosistapkpv2->penanganan_pemukiman_kumuh;
$kabupaten = $mongoClient->alosistapkpv2->kabupaten;