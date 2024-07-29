<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "sic database";

// Membuat koneksi
$conn = new mysqli($servername, $username, $password, $dbname);

// Memeriksa koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}
echo "Koneksi berhasil!<br>";

// Query SQL
$sql = "SELECT * FROM nama_tabel";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Menampilkan data dari setiap baris
    while($row = $result->fetch_assoc()) {
        echo "ID: " . $row["id"]. " - Name: " . $row["name"]. "<br>";
    }
} else {
    echo "0 hasil";
}

// Menutup koneksi
$conn->close();
?>
