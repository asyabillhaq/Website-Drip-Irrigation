<?php
$konek = mysqli_connect("localhost", "root", "", "dbmultisensor");
$sql = mysqli_query($konek, "SELECT * from tb_sensor2 ORDER BY id desc limit 1");
$data = mysqli_fetch_array($sql);
$Debit2 = $data["Debit2"];
if ($Debit2 == "") $Debit2 = 0;
echo $Debit2;
?>