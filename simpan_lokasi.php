<?php
if (isset($_POST['lat']) && isset($_POST['lon']) && isset($_POST['nama'])) {
    $lat = $_POST['lat'];
    $lon = $_POST['lon'];
    $nama = $_POST['nama'];

    $link = "https://www.google.com/maps?q=$lat,$lon";

    // Simpan ke file
    $file = fopen("lokasi.txt", "a");
    fwrite($file, date("Y-m-d H:i:s") . " - Nama: $nama\n");
    fwrite($file, "Lokasi: $lat, $lon\n");
    fwrite($file, "Link Maps: $link\n\n");
    fclose($file);
}
?>
