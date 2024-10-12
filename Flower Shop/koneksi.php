<?php
$servername = "localhost";
$username = "root";
$password = " ";
$db_name = "user";
//Membuat Koneksi ke MySQL
$conn = new mysqli($servername, $username, $password, $dbname);
//Cek Koneksi
if ($conn->connect_eror) {
	die("koneksi gagal: . $conn->connect_error");
}
?>