<?php 
require_once("Conn.php");
$nama = $_POST['nama'];
$nim = $_POST['nim'];
$jk = $_POST['jk'];
$prodi = $_POST['prodi'];
$fakultas = $_POST['fakultas'];
$asal = $_POST['asal'];
$mottohidup = $_POST['mottohidup'];

	$sql = "INSERT INTO datamahasiswa VALUES ('$nama','$nim', '$jk', '$prodi', '$fakultas','$asal', '$mottohidup')";

if (mysqli_query($conn, $sql)) {
	mysqli_close($conn);
	echo "<center>Selamat, data baru berhasil ditambahkan</center><br>";
	echo "<center>Silahkan klik <a href='ViewData.php'>Lihat Data</a></center>";
}else {
	echo "Error: ". $sql . "<br>" . mysqli_error($conn);
}	
?> 