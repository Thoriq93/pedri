<?php
// Fungsi untuk menghitung volume kubus
function hitungVolumeKubus($sisi) {
    return pow($sisi, 3);
}

// Fungsi untuk menghitung volume balok
function hitungVolumeBalok($panjang, $lebar, $tinggi) {
    return $panjang * $lebar * $tinggi;
}

// Fungsi untuk menghitung volume tabung
function hitungVolumeTabung($jari_jari, $tinggi) {
    return pi() * pow($jari_jari, 2) * $tinggi;
}

// Fungsi untuk menghitung volume kerucut
function hitungVolumeKerucut($jari_jari, $tinggi) {
    return (1/3) * pi() * pow($jari_jari, 2) * $tinggi;
}

// Input nilai-nilai yang diperlukan
$sisi_kubus = 5; // sisi kubus
$panjang_balok = 4; // panjang balok
$lebar_balok = 3; // lebar balok
$tinggi_balok = 6; // tinggi balok
$jari_jari_tabung = 2; // jari-jari tabung
$tinggi_tabung = 8; // tinggi tabung
$jari_jari_kerucut = 3; // jari-jari kerucut
$tinggi_kerucut = 7; // tinggi kerucut

// Menghitung volume dan mencetak hasilnya
echo "Volume kubus adalah: " . hitungVolumeKubus($sisi_kubus) . "<br>";
echo "Volume balok adalah: " . hitungVolumeBalok($panjang_balok, $lebar_balok, $tinggi_balok) . "<br>";
echo "Volume tabung adalah: " . hitungVolumeTabung($jari_jari_tabung, $tinggi_tabung) . "<br>";
echo "Volume kerucut adalah: " . hitungVolumeKerucut($jari_jari_kerucut, $tinggi_kerucut) . "<br>";
?>