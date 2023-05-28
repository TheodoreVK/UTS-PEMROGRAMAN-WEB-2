<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "siakad";
//Koneksi 
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Koneksi ke database siakad gagal: " . $conn->connect_error);
}
//Insert Tabel
$sql_mk = "INSERT INTO mata_kuliah (nama_mk, kode_mk, deskripsi)
           VALUES ('Matematika', 'MAT01', 'Mata kuliah tentang matematika'),
                  ('Fisika', 'FIS01', 'Mata kuliah tentang fisika'),
                  ('Biologi', 'BIO01', 'Mata kuliah tentang biologi')";
if ($conn->query($sql_mk) === TRUE) {
    echo "Data berhasil ditambahkan.<br>";
} else {
    echo "Gagal memasukkan data ke tabel Mata Kuliah: " . $conn->error;
}

$sql_dosen = "INSERT INTO dosen (nama_dosen, nidn, jenjang_pendidikan)
              VALUES    ('Dr. Alex Suparno', '12345678', 'S3'),
                        ('Prof. Wahyu Santoso', '87654321', 'S2'),
                        ('Dr. Michael Sugianto', '54321678', 'S3')";
if ($conn->query($sql_dosen) === TRUE) {
    echo "Data berhasil ditambahkan.<br>";
} else {
    echo "Gagal memasukkan data ke tabel Dosen: " . $conn->error;
}

$sql_mahasiswa = "INSERT INTO mahasiswa (nama_mahasiswa, nim, programstudi)
                  VALUES    ('Jonatan Sigit', '1234567890', 'Informatika'),
                            ('Jessica Jane', '0987654321', 'Sistem Informasi'),
                            ('Mika Melantika', '5678901234', 'Teknik Elektro')";
if ($conn->query($sql_mahasiswa) === TRUE) {
    echo "Data berhasil ditambahkan.<br>";
} else {
    echo "Gagal memasukkan data ke tabel Mahasiswa: " . $conn->error;
}
$conn->close();
?>
