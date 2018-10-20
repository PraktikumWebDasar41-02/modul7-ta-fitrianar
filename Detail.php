<?php
require_once("Conn.php");
?>
<a href="ViewData.php" style="text-decoration: none;">Kembali</a>
<br> <br>

<table border="1">
	<thead>
		<th>Nama</th>
		<th>NIM</th>
		<th>Jenis Kelamin</th>
		<th>Program Studi</th>
		<th>Fakultas</th>
		<th>Asal</th>
		<th>Motto Hidup</th>
		<th>Aksi</th>
	</thead>

	<body style="font-family: mimich">
		<?php
		$sql = "SELECT * FROM datamahasiswa";
		$result = mysqli_query($conn, $sql);
		if(mysqli_num_rows($result) > 0){
			while($row = mysqli_fetch_assoc($result)){
				?>
				<center>
				<tr>
				 	<td><?php echo $row["nama"] ?></td>
				 	<td><?php echo $row["nim"] ?></td>
				 	<td><?php echo $row["jeniskelamin"] ?></td>
				 	<td><?php echo $row["programstudi"] ?></td>
				 	<td><?php echo $row["fakultas"] ?></td>
				 	<td><?php echo $row["asal"] ?></td>
				 	<td><?php echo $row["mottohidup"] ?></td>
				 	<td> <a href='Edit.php?nim=<?php echo $row['nim']?>' style="text-decoration: none;">Edit</a></td>
				</tr>
				</center>
				<?php
			}
		}else{
			echo "Mohon maaf, data tidak tersedia";
		}
		mysqli_close($conn);
		?>
	</body>
</table