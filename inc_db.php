<?php

$server = "localhost";
$username = "root";
$password = "";
$database = "elearning";
// Koneksi dan memilih database di server php 7
@mysql_connect($server,$username,$password) or die("Koneksi gagal");
@mysql_select_db($database) or die("Database tidak bisa dibuka");

?>
