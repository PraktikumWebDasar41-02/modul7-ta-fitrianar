<?php
require_once('Conn.php');
$id = $_GET['nim'];
$sql = mysqli_query($conn, "SELECT * FROM datamahasiswa WHERE nim = '$id'");
$row = mysqli_fetch_assoc($sql);

if(isset($_POST['upload'])){
	$nim		= $_POST["nim"];
	$nama 		= $_POST["nama"];
	$jk			= $_POST["jk"];
	$prodi		= $_POST["prodi"];
	$fakultas	= $_POST["fakultas"];
	$asal 		= $_POST["asal"];
	$mottohidup	= $_POST["mottohidup"];
	
	$sql = "UPDATE datamahasiswa SET nama = '$nama', nim = '$nim', jeniskelamin = '$jk', programstudi = '$prodi', fakultas = '$fakultas', asal = '$asal', mottohidup = '$mottohidup' WHERE nim='$id'";
 
if (mysqli_query($conn, $sql)) {
 	header('Location: Detail.php');
}else {
 	echo "Data gagal ditambahkan!".$sql."<br?". mysqli_error($conn);
}

mysqli_close($conn);
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>edit</title>
</head>
<body>
<center>
<h1>EDIT DATA</h1>
	<form method="POST">
		<table>
			<tr>
				<td>Nama</td>
				<td>:</td>
				<td><input type="text" name="nama"  minlength="1" maxlength="25"  value="<?php echo $row["nama"];?>"></td>
			</tr>
			<tr>
				<td>NIM</td>
				<td>:</td>
				<td><input type="number"  name="nim" maxlength="10"  value="<?php echo $row["nim"];?>"  required ></td>
			</tr>
			<tr>
				<td>Jenis Kelamin</td>
				<td>:</td>
				<td>
					<input type="radio" name="jk" value="Laki - Laki" required>Laki - Laki
					<input type="radio" name="jk" value="Perempuan" required>Perempuan
				</td>
			</tr>
			<tr>
				<td>Program Studi</td>
				<td>:</td>
				<td>
					<select name="prodi">
						<option>Sistem Informasi</option>
						<option>Manajemen Pemasaran</option>
						<option>Sistem Multimedia</option>
						<option>Teknik Telekomunikasi</option>
						<option>Teknik Fisika</option>
						<option>Teknik Elektro</option>
						<option>Perhotelan</option>
						<option>Teknik Informatika</option>
						<option>MBTI</option>
						<option>Akuntansi</option>
						<option>Ilmu Komunikasi</option>
						<option>Adminitrasi Bisnis</option>		
						<option>Teknik Industri</option>
						<option>Fashion Design</option>
						<option>DKV</option>
					</select>
				</td>
			</tr>
			<tr>
				<td>Fakultas</td>
				<td>:</td>
				<td>
					<select name="fakultas">
						<option>Fakultas Ilmu Terapan</option>	
						<option>Fakultas Informatika</option>
						<option>Fakultas Komunikasi Bisnis</option>
						<option>Fakultas Ekonomi Bisnis</option>
						<option>Faklutas Industri Kreatif</option>
						<option>Fakultas Teknik Elektro</option>
						<option>Fakultas Rekayasa Industri</option>
					</select>
				</td>
			</tr>
			<tr>
				<td>Asal</td>
				<td>:</td>
				<td><input type="text" name="asal" value="<?php echo $row["asal"];?>"></td>
			</tr>
			<tr>
				<td>Motto Hidup</td>
				<td>:</td>
				<td><input type="textarea" name="mottohidup" value="<?php echo $row["mottohidup"];?>"></td>
			</tr>
			<tr>
				<td></td>
				<td></td>
				<td><input type="submit" name="upload" id="upload" value="Edit" style="width: 120px"></td>
			</tr>
		</table>
	</form>
</center>
</body>
</html>