<?php
//buat koneksi ke database
$konek = mysqli_connect("localhost", "root","", "kontroling");
$sql = mysqli_query($konek, "SELECT * from tb_kontrol ORDER BY id desc");
$data = mysqli_fetch_array($sql);
$relay = $data["relay"];
if ($relay == 0) 
$keterangan = "Solenoid ON";
else if ($relay == 1)
$keterangan = "Solenoid OFF";
//apabila nilai belum ada, anggap 0
if ($relay == "") $relay = 0;
//cetak status relay
echo $keterangan;