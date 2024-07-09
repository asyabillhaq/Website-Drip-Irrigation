<?php
$konek = mysqli_connect("localhost", "root", "", "dbmultisensor");
$sql = mysqli_query($konek, "SELECT * from tb_sensor2 ORDER BY id desc limit 1");
$data = mysqli_fetch_array($sql);
$Kelembaban = $data["Kelembaban"];
if ($Kelembaban == "") $Kelembaban = 0;
echo $Kelembaban;
?> 