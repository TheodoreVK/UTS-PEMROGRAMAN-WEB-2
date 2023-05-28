<?php
$servername = "localhost";
$username = "root";
$password = "";
//Koneksi
$conn = new mysqli($servername, $username, $password);
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}
//Delete database siakad
$sql = "DROP DATABASE IF EXISTS siakad";
if ($conn->query($sql) === TRUE) {
    echo "Database siakad berhasil dihapus";
} else {
    echo "Database gagal dihapus: " . $conn->error;
}
$conn->close();
?>
