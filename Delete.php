<?php
require_once("Conn.php");
$id = $_GET["nim"];
$sql = "DELETE FROM datamahasiswa WHERE nim=$id";
if (mysqli_query($conn, $sql)) {
    header("Location: ViewData.php");
}else {
    echo "Gagal";
}
mysqli_close($conn);
?>
