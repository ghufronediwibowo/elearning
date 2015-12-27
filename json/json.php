<?php
@mysql_connect("localhost", "root", "");
@mysql_select_db("elearning");
$query = "SELECT * from kalender_kegiatan ";

#echo($query);exit;
$result = mysql_query($query) or die(mysql_error());

$arr = array();
while ($row = mysql_fetch_assoc($result)) {
    $temp = array(
        "date" => $row["tanggal"],       
        "title" => $row["kegiatan"],
        "description" => $row["keterangan"]);

    array_push($arr, $temp);}
$data = json_encode($arr);
echo $data
?>