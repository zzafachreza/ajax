	<table id="tableHolder" class="table table-bordered">
		<tr>
			<th>
				Nama 
			</th>
			<th>
				Alamat 
			</th>
			<th>
				Opsi
			</th>
		</tr>
			<?php
				include"koneksi.php";
				$no = 1;
				$data = $conn->query("select*from mahasiswa");

				while ($row = $data->fetch(PDO::FETCH_OBJ))
				{
			?>
		<tr>
			<td>
				<?php echo $row->nama; ?>
			</td>
			<td>
				<?php echo $row->alamat; ?>
			</td>
			<td>
				<a href="#" id="edit" data-id="<?php echo $row->id_mahasiswa; ?>">Edit</a> |
				<a href="#" id="hapus" data-id="<?php echo $row->id_mahasiswa; ?>">Hapus</a> 
			</td>
		</tr>
		<?php
			}
		?>
	</table>