<?php 
$nmpenyewa = $_POST['nmpenyewa']; 
$notelp = $_POST['notelp'];
$kendaraan = $_POST['kendaraan'];
$lamasewa = $_POST['lamasewa'];


// Data 1
$data [] = array(
    'nmpenyewa'     => $nmpenyewa,
    'notelp'   => $notelp,
    'kendaraan' => $kendaraan,
    'lamasewa' => $lamasewa,
    'hargasewa' => $hargasewa
);

// Mengencode data menjadi json
$jsonfile = json_encode($data, JSON_PRETTY_PRINT);
// Menyimpan data ke dalam anggota.json
file_put_contents('datasewa.json', $jsonfile);

?>