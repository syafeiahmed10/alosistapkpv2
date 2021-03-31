<?php


session_start();

include 'function.php';

$collection->deleteOne(['_id' => new MongoDB\BSON\ObjectID($_GET['id'])]);


$_SESSION['success'] = "Book deleted successfully";
header("Location: index.php");


?>