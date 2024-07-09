<?php
//buat koneksi ke database
$konek = mysqli_connect("localhost", "root","", "dbmultisensor");
$sql = mysqli_query($konek, "SELECT * from tb_sensor2 ORDER BY id desc");
$data = mysqli_fetch_array($sql);

$Relay1 = $data["Relay1"];
if ($Relay1 == 0) 
$keterangan1 = "Solenoid ON";
else if ($Relay1 == 1)
$keterangan1 = "Solenoid OFF";


//apabila nilai belum ada, anggap 0
if ($Relay1 == "") $Relay1 = 0;
//cetak status relay
echo $keterangan1;