<?php
require_once("Conn.php");
if (isset($_GET["cari"])) {
    $value = $_GET["cari"];
$sql = "SELECT * FROM datamahasiswa where nim like '%$value%'";
}else {
$sql = "SELECT * FROM datamahasiswa";
}
$result = mysqli_query($conn, $sql);
?>

<!DOCTYPE html>
<head>
    <title>Lihat Data</title>
</head>
<body style="font-family: mimich">
    <center>
    <h1>DATA MAHASISWA</h1>
    <table>
       <td>
            <form action="ViewData.php" method = "get">
            <input type="text" name="cari" placeholder="Masukkan NIM">
            <input type="submit" value="Cari">
        </form>
    </td>
        <tr>
            <th>Nama</th>
            <th>Nim</th>
            <th>Aksi</th>
        </tr>
        <?php
        
        $row = mysqli_num_rows($result);
        if(mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                ?>
                <tr>
                    <td><?php echo $row['nama']?></td>
                    <td><?php echo $row['nim']?></td>
                    <td> <a href="Delete.php?nim=<?php echo $row['nim']?>">Delete</a>&nbsp;&nbsp;&nbsp; | &nbsp;&nbsp;&nbsp;
                <a href="Detail.php?nim=<?php echo $row['nim']?>">Detail</a></td>
                </tr>
                <?php
            }
        }else {
            echo "0 result";
        }
        ?>
        <tr>
            <td><a href="Input.php">INPUT DATA BARU</a></td>
        </tr>
        <?php
        mysqli_close($conn);
        ?>

    </table>
    </center>
</body>
</html>