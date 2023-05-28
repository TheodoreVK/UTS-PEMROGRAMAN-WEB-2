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
//Read Table
$sql_mk = "SELECT * FROM mata_kuliah";
$result_mk = $conn->query($sql_mk);
echo "<h2>Tabel Mata Kuliah</h2>";
if ($result_mk->num_rows > 0) {
    echo "<table>
            <tr>
                <th>ID</th>
                <th>Nama MK</th>
                <th>Kode MK</th>
                <th>Deskripsi</th>
            </tr>";
    while ($row = $result_mk->fetch_assoc()) {
        echo "<tr>
                <td>".$row["id"]."</td>
                <td>".$row["nama_mk"]."</td>
                <td>".$row["kode_mk"]."</td>
                <td>".$row["deskripsi"]."</td>
            </tr>";
    }
    echo "</table>";
} else {
    echo "Tidak ada data dalam tabel Mata Kuliah.";
}

$sql_dosen = "SELECT * FROM dosen";
$result_dosen = $conn->query($sql_dosen);
echo "<h2>Tabel Dosen</h2>";
if ($result_dosen->num_rows > 0) {
    echo "<table>
            <tr>
                <th>ID</th>
                <th>Nama Dosen</th>
                <th>NIDN</th>
                <th>Jenjang Pendidikan</th>
            </tr>";
    while ($row = $result_dosen->fetch_assoc()) {
        echo "<tr>
                <td>".$row["id"]."</td>
                <td>".$row["nama_dosen"]."</td>
                <td>".$row["nidn"]."</td>
                <td>".$row["jenjang_pendidikan"]."</td>
            </tr>";
    }
    echo "</table>";
} else {
    echo "Tidak ada data dalam tabel Dosen.";
}

$sql_mahasiswa = "SELECT * FROM mahasiswa";
$result_mahasiswa = $conn->query($sql_mahasiswa);
echo "<h2>Tabel Mahasiswa</h2>";
if ($result_mahasiswa->num_rows > 0) {
    echo "<table>
            <tr>
                <th>ID</th>
                <th>Nama Mahasiswa</th>
                <th>NIM</th>
                <th>Program Studi</th>
            </tr>";
    while ($row = $result_mahasiswa->fetch_assoc()) {
        echo "<tr>
                <td>".$row["id"]."</td>
                <td>".$row["nama_mahasiswa"]."</td>
                <td>".$row["nim"]."</td>
                <td>".$row["programstudi"]."</td>
            </tr>";
    }
    echo "</table>";
} else {
    echo "Tidak ada data dalam tabel Mahasiswa.";
}
$conn->close();
?>