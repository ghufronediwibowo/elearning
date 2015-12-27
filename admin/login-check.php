<?php
require_once('inc-db.php');
$var_username=mysql_real_escape_string($_POST['frm_username']);
$var_password=mysql_real_escape_string(md5($_POST['frm_password']));
$sql_check="select * from pengguna 
            where username='".$var_username."' and 
            password='".$var_password."'";
//echo $sql_check; exit;
$result=mysql_query($sql_check);
$rows=mysql_num_rows($result);
//echo $rows; exit;
if($rows > 0 ){
    session_start();
    $data=mysql_fetch_array($result);
   // $_SESSION['petugas_id']=$data['id_pengguna'];
    //$_SESSION['username']=$data['username'];
    $_SESSION['id_pengguna']=$data['id_pengguna'];
    $_SESSION['level']=$data['level'];
    $_SESSION['nama']=$data['nama'];
    //echo $_SESSION['level'];
    header('location: admin-area.php');
}else{
    header('location: index.php?action=gagal');
}
?>
