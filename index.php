<?php
session_start();

// CEK SUDAH LOGIN BELUM
if(!isset($_SESSION["login"])) {
    header("Location: login.php");
    exit;
}
