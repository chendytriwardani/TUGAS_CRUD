<?php
$server = "localhost";
$user = "root";
$pass = "" ;
$db = "chendy" ;
$koneksi = mysqli_connect($server,$user,$pass,$db);
// if (!$koneksi) {
// 	echo "Tidak Terkoneksi";
// 	}else{
// 		echo"Terkoneksi";
// 	}

$query = "SELECT * FROM tbl_041 ";
$hasil = mysqli_query($koneksi,$query);
?>


<!DOCTYPE HTML>
<head>
	<title></title>
	<link href = "css/bootstrap.css" rel="stylesheet">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css">
<body>
	<H1 align="center">TABEL MAHASISWA</H1>
	<table align="center" class="table table-hover table-dark table-striped"  style="width: 800px; margin-top: 50px">
		<tr>
			<td>ID</td>
			<td>NAMA</td>
			<td>ASAL</td>
			<td>PRODI</td>
			<td class='text-center' colspan='2'>EDIT</td>
		</tr>
		<?php
		   while($baris=mysqli_fetch_assoc($hasil)) {
		   	?>
		   	<tr class='table-light'>
		   		<td><?php echo $baris['id_mhs']?></td>
		   		<td><?php echo $baris['nama']?></td>
		   		<td><?php echo $baris['asal']?></td>
		   		<td><?php echo $baris['prodi']?></td>
		   		<td><a class="btn btn-success" href="updatet3.php?id=<?php echo $baris["id_mhs"] ?>" role="button">Update</a></td>
		   		<td><a class="btn btn-danger" href="delete.php?id=<?php echo $baris["id_mhs"] ?>" 
				  onclick="return confirm('Apakah anda yakin akan menghapusdata ini?')" role="button">Delete</a></td>
		   	</tr>
		<?php }?>
</table>
		<a class="btn btn-primary" href="insert.php" role="button" style="margin-left:700px">Input data</a>