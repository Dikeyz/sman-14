<?php
// koneksi ke database
$conn = mysqli_connect("localhost", "arif2174_ariniel", "Ariniel_22", "arif2174_sman14");

// check koneksi database
if (!$conn) {
    die("Koneksi database gagal: " . mysqli_connect_error());
}

// ambil data dari database
$query = "SELECT * FROM guru";
$result = mysqli_query($conn, $query);

// looping setiap hasil query
while ($row = mysqli_fetch_assoc($result)) {
    $jenis_alert = $row['jenis_alert'];
    $id_guru = $row['id_guru'];

    // cek jenis alert, jika update kirim pesan ke bot telegram
    if ($jenis_alert == 'update') {
        $pesan = "Data dengan id ".$id_guru." telah diperbarui.";
        file_get_contents("https://api.telegram.org/bot6166985253:AAE2gODWwA3KWekzD8EtO2_jD5Ii4hnu0Dc/sendMessage?chat_id=-861423275&text=".urlencode($pesan));
    }
    // jika delete, kirim pesan ke bot telegram
    else if ($jenis_alert == 'delete') {
        $pesan = "Data dengan id ".$id_guru." telah dihapus.";
        file_get_contents("https://api.telegram.org/bot6166985253:AAE2gODWwA3KWekzD8EtO2_jD5Ii4hnu0Dc/sendMessage?chat_id=-861423275&text=".urlencode($pesan));
    }
}
// tutup koneksi ke database
mysqli_close($conn);
?>
