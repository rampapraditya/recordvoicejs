<?php
// pindahkan file
$namaFile = $_FILES['audio_data']['name'];
$namaSementara = $_FILES['audio_data']['tmp_name'];

// tentukan lokasi file akan dipindahkan
$dirUpload = "terupload/contoh.wav";

// pindahkan file
$terupload = move_uploaded_file($namaSementara, $dirUpload);

?>