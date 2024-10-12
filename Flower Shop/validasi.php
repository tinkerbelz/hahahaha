<?php
include 'koneksi.php';
$user = $_POST['USER'];
$pass = $_POST['PASS'];
//Membuat SQL query
$SQL = "SELECT username, pass FROM user WHERE ((username='$user') AND (pass='$pass'))";
//eksekusi SQL Query
$result=mysqli_query($conn, $SQL)
	or die("gagal data query : " . mysqli_error($conn));

//mengkonfirmasi
if (mysqli_num_rows($result)> 0) {
	//menampung hasil query
	$row=mysqli_fetch_array($result);
	if ($row['username']==$user && $row['pass']==$pass){
		$conn->close();
		echo "sukses";
		header('location:index.html');
	}else{
		$conn->close();
		echo "gagal login karrena username dan password tidak sama";
		header('location:login.php');
	}
}else{
	$conn->close();
	echo "gagal login karena username dan password tidak ditemukan";
	header('location:login.php');
}
?>