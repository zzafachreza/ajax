<?php
include"koneksi.php";


$sql = "DELETE FROM mahasiswa 
							WHERE id_mahasiswa ='".$_POST['id']."'";

$conn->query($sql);
?>

