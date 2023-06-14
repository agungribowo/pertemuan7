<!DOCTYPE html>
<html>
<head>
	<title>TUGAS PERTEMUAN KE 7</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="judul">		
		<h1>TUGAS PERTEMUAN KE 7</h1>
		<h2>Menampilkan data dari database</h2>
	
	</div>
	<br/>

	<?php 
	if(isset($_GET['pesan'])){
		$pesan = $_GET['pesan'];
		if($pesan == "input"){
			echo "Data berhasil di input.";
		}else if($pesan == "update"){
			echo "Data berhasil di update.";
		}else if($pesan == "hapus"){
			echo "Data berhasil di hapus.";
		}
	}
	?>
	<br/>
	<a class="tombol" href="input.php">+ Tambah Data Baru</a>

	<h3>Data user</h3>
	<table border="1" class="table">
		<tr>
			<th>No</th>
			<th>Kode Kota</th>
			<th>Nama Kota</th>		
		</tr>
		<?php 
        include "koneksi.php";
        $sql = mysqli_query($koneksi, "SELECT tb_kota.*  FROM tb_kota");
              if(mysqli_num_rows($sql) > 0){
                $no = 0;
                 while($row = mysqli_fetch_array($sql));
                  $no++;
		?>
		<tr>
			<td><?php echo '.$no;.' ?></td>
			<td><?php echo '.$row['kd_kota'].'; ?></td>
			<td><?php echo '.$row['kota'].'; ?></td>
			<td>
				<a class="edit" href="edit.php?id=<?php echo $row['id']; ?>">Edit</a> |
				<a class="hapus" href="hapus.php?id=<?php echo $row['id']; ?>">Hapus</a>					
			</td>
		</tr>
		<?php } ?>

	</table>
</body>
</html>