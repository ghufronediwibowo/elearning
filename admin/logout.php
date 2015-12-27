<?php
session_start();
unset($_SESSION['level']);
unset($_SESSION['id_pengguna']);
unset($_SESSION['level']);
unset($_SESSION['nama']);
session_destroy();
header('location: index.php');
?>