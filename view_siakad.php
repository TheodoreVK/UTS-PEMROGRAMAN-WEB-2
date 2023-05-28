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

$sql = "SELECT * FROM mata_kuliah";
$result_mk = $conn->query($sql);

$sql = "SELECT * FROM dosen";
$result_dosen = $conn->query($sql);

$sql = "SELECT * FROM mahasiswa";
$result_mahasiswa = $conn->query($sql);
?>

<!DOCTYPE html>
<html>
<head>
    <title>View Siakad</title>
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
        }

        th, td {
            border: 1px solid black;
            padding: 8px;
        }

        th {
            background-color: white;
            color: black;
        }
    </style>
</head>
<body>
    <h1>View Siakad</h1>
    <h2>Tabel Mata Kuliah</h2>
    <table>
        <tr>
            <th>ID</th>
            <th>Nama MK</th>
            <th>Kode MK</th>
            <th>Deskripsi</th>
        </tr>
        <?php
        if ($result_mk->num_rows > 0) {
            while ($row = $result_mk->fetch_assoc()) {
                echo "<tr>
                        <td>".$row["id"]."</td>
                        <td>".$row["nama_mk"]."</td>
                        <td>".$row["kode_mk"]."</td>
                        <td>".$row["deskripsi"]."</td>
                    </tr>";
            }
        } else {
            echo "<tr><td colspan='4'>Tidak ada data dalam tabel Mata Kuliah</td></tr>";
        }
        ?>
    </table>

    <h2>Tabel Dosen</h2>
    <table>
        <tr>
            <th>ID</th>
            <th>Nama Dosen</th>
            <th>NIDN</th>
            <th>Jenjang Pendidikan</th>
        </tr>
        <?php
        if ($result_dosen->num_rows > 0) {
            while ($row = $result_dosen->fetch_assoc()) {
                echo "<tr>
                        <td>".$row["id"]."</td>
                        <td>".$row["nama_dosen"]."</td>
                        <td>".$row["nidn"]."</td>
                        <td>".$row["jenjang_pendidikan"]."</td>
                    </tr>";
            }
        } else {
            echo "<tr><td colspan='4'>Tidak ada data dalam tabel Dosen</td></tr>";
        }
        ?>
    </table>

    <h2>Tabel Mahasiswa</h2>
    <table>
        <tr>
            <th>ID</th>
            <th>Nama Mahasiswa</th>
            <th>NIM</th>
            <th>Program Studi</th>
        </tr>
        <?php
        if ($result_mahasiswa->num_rows > 0) {
            while ($row = $result_mahasiswa->fetch_assoc()) {
                echo "<tr>
                        <td>".$row["id"]."</td>
                        <td>".$row["nama_mahasiswa"]."</td>
                        <td>".$row["nim"]."</td>
                        <td>".$row["programstudi"]."</td>
                    </tr>";
            }
        } else {
            echo "<tr><td colspan='4'>Tidak ada data dalam tabel Mahasiswa</td></tr>";
        }
        ?>
    </table>

    <?php
    $conn->close();
    ?>
</body>
</html>
