<?php

include"koneksi.php";

$nama = $_POST['nama'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$alamat = $_POST['alamat'];
$telepon = $_POST['telepon'];

if ($nama == '') {
    $data['error']['nama'] = 'Nama tidak boleh kosong';
}
if ($jenis_kelamin == '') {
    $data['error']['jenis_kelamin'] = 'Piih Jenis Kelammin';
}
if ($telepon == '') {
    $data['error']['telepon'] = 'Telepon Tidak Boleh Kosong';
}
if ($alamat == '') {
    $data['error']['alamat'] = 'Alamat tidak boleh kosong';
}

if (empty($data['error'])) {
    
		$sql = "insert INTO mahasiswa SET
										nama = '$nama',
										jenis_kelamin = '$jenis_kelamin',
										alamat = '$alamat',
										telepon = '$telepon'
										";

		$conn->query($sql);
		
    $data['hasil'] = 'sukses';
    
} else {
    
    $data['hasil'] = 'gagal';
}

echo json_encode($data);

?>

