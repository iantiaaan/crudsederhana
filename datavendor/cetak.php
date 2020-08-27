<!DOCTYPE html>
<html>
<head>
	<title>Cetak</title>
</head>
<body>

	<center>

		<h2>DATA VENDOR</h2>

	</center>

	<?php 
	include 'koneksi.php';
	?>

	<table border="1" style="width: 100%">
		
		<tr>
			<th>No</th>
            <th>Nama Perusahaan</th>
            <th>PIC Nama</th>
            <th>Bidang Perusahaan</th>
            <th>Alamat</th>
            <th>Email</th>
            <th>No Telepon</th>
		</tr>

		<?php 
		$no = 1;
		$sql = "select * from anggota";
		while($data = mysqli_fetch_array($sql))

		{?>
		
		<tr>
			<td><?php echo $no++; ?></td>
			<td><?php echo $data['username'];   ?></td>
            <td><?php echo $data['nama'];       ?></td>
            <td><?php echo $data['bidang'];     ?></td>
            <td><?php echo $data['alamat'];     ?></td>
            <td><?php echo $data['email'];      ?></td>
            <td><?php echo $data['no_hp'];      ?></td>
		</tr>
		
		<?php 
		}
		
		?>
	</table>

	<script>
		window.print();
	</script>

</body>
</html>