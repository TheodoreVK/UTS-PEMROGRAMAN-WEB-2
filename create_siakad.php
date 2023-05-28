<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "siakad";
//Koneksi
$conn = new mysqli($servername, $username, $password);
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}
//Create Database
$sql = "CREATE DATABASE IF NOT EXISTS siakad";
if ($conn->query($sql) === TRUE) {
    echo "Database siakad berhasil dibuat atau sudah ada";
} else {
    echo "Database siakad gagal dibuat: " . $conn->error;
}
$conn->close();

//Koneksi
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Koneksi ke database siakad gagal: " . $conn->connect_error);
}

//Create Tabel
$sql_mk = "CREATE TABLE IF NOT EXISTS mata_kuliah (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nama_mk VARCHAR(255) NOT NULL,
    kode_mk CHAR(5) NOT NULL,
    deskripsi TEXT NOT NULL
)";
if ($conn->query($sql_mk) === TRUE) {
    echo "Tabel Mata Kuliah berhasil dibuat.<br>";
} else {
    echo "Error tabel Mata Kuliah gagal dibuat: " . $conn->error;
}

$sql_dosen = "CREATE TABLE IF NOT EXISTS dosen (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nama_dosen VARCHAR(255) NOT NULL,
    nidn CHAR(8) NOT NULL,
    jenjang_pendidikan ENUM('S2', 'S3')
)";

if ($conn->query($sql_dosen) === TRUE) {
    echo "Tabel Dosen berhasil dibuat.<br>";
} else {
    echo "Error tabel Mata Kuliah gagal dibuat: " . $conn->error;
}

$sql_mahasiswa = "CREATE TABLE IF NOT EXISTS mahasiswa (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nama_mahasiswa VARCHAR(255) NOT NULL,
    nim CHAR(10) NOT NULL,
    programstudi VARCHAR(255) NOT NULL
)";

if ($conn->query($sql_mahasiswa) === TRUE) {
    echo "Tabel Mahasiswa berhasil dibuat.<br>";
} else {
    echo "Error tabel Mata Kuliah gagal dibuat: " . $conn->error;
}
$conn->close();
?>
