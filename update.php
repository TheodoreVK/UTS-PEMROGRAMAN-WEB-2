<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "siakad";
//Koneksi
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}
//Update Tabel
$sql_mk = "UPDATE mata_kuliah SET nama_mk = 'Sistem Jaringan 1', kode_mk = 'SJ01', deskripsi = 'Mata Kuliah Tentang Sistem Jaringan' WHERE id = 1";
if ($conn->query($sql_mk) === TRUE) {
    echo "Data berhasil diperbarui.";
} else {
    echo "Error: " . $sql_mk . "<br>" . $conn->error;
}
$sql_dosen = "UPDATE dosen SET nama_dosen = 'Ir. Bambang Panjahitan', nidn = '71329487', jenjang_pendidikan = 'S2' WHERE id = 1";
if ($conn->query($sql_dosen) === TRUE) {
    echo "Data berhasil diperbarui.";
} else {
    echo "Error: " . $sql_dosen . "<br>" . $conn->error;
}
$sql_mahasiswa = "UPDATE mahasiswa SET nama_mahasiswa = 'Theodore Verrill Kendrick', nim = '210401070034', programstudi = 'Informatika' WHERE id = 1";
if ($conn->query($sql_mahasiswa) === TRUE) {
    echo "Data berhasil diperbarui.";
} else {
    echo "Error: " . $sql_mahasiswa . "<br>" . $conn->error;
}
$conn->close();
?>