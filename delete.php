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
//Delete Tabel
$sql_mk = "DELETE FROM mata_kuliah WHERE id = 1";
if ($conn->query($sql_mk) === TRUE) {
    echo "Data berhasil dihapus.";
} else {
    echo "Error: " . $sql_mk . "<br>" . $conn->error;
}
$sql_dosen = "DELETE FROM dosen WHERE id = 1";
if ($conn->query($sql_dosen) === TRUE) {
    echo "Data berhasil dihapus.";
} else {
    echo "Error: " . $sql_dosen . "<br>" . $conn->error;
}
$sql_mahasiswa = "DELETE FROM mahasiswa WHERE id = 1";
if ($conn->query($sql_mahasiswa) === TRUE) {
    echo "Data berhasil dihapus.";
} else {
    echo "Error: " . $sql_mahasiswa . "<br>" . $conn->error;
}
$conn->close();
?>