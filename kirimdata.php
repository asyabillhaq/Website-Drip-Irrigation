<?php
// Koneksi ke database
$konek = mysqli_connect("localhost", "root", "", "dbmultisensor");
    
// Baca data yang dikirim dari ESP32
$Debit = ($_GET['Debit']);
$Debit2 = ($_GET['Debit2']);
$Kelembaban = ($_GET['Kelembaban']);
$Kelembaban2 = ($_GET['Kelembaban2']);
$relay = ($_GET['Relay1']);
$relay2 = ($_GET['Relay2']);

// Auto increment = 1
mysqli_query($konek, "ALTER TABLE tb_sensor2 AUTO_INCREMENT= 1");

// Simpan ke tb_sensor2
$simpan = mysqli_query($konek, "INSERT INTO tb_sensor2 (Debit, Debit2, Kelembaban, Kelembaban2, Relay1, Relay2) 
VALUES ('$Debit', '$Debit2', '$Kelembaban', '$Kelembaban2', '$relay1', '$relay2')");


// Uji simpan untuk memberikan respon
if ($simpan) {
    echo "Berhasil dikirim";
} else {
    echo "Gagal terkirim";
}
?>