<?php
include_once ("koneksi.php");
$id  = $_GET['id'] ;

$query="SELECT * FROM tbl_041 WHERE id_mhs=".$id;

$hasil=mysqli_query($koneksi,$query);

?>

<!DOCTYPE HTML>
<head>
	<title></title>
	<link href = "css/bootstrap.css" rel="stylesheet">
</head>
<body>
	<?php while($data=mysqli_fetch_array($hasil)){ ?>
		<h1 align='center'>Update Data</h1><br>
	<div class='container col-8'>
	<form method="post" action="proseseditdata.php">
		<div class="form-floating mb-3">
			<input type="number" class="form-control" id="id" name="id" value="<?php echo $data['id_mhs'] ?>">
			<label for="floatingInput">id</label>
		</div>
		<div class="form-floating mb-3">
			<input type="text" class="form-control" id="nama" name="nama" value="<?php echo $data['nama'] ?>">
			<label for="floatingPassword">nama</label>
		</div>
		<div class="form-floating">
			<input type="text" class="form-control" id="asal" name="asal" value="<?php echo $data['asal'] ?>">
			<label for="floatingPassword">Asal</label>
		</div>
		<div class="form-floating">
			<input type="text" class="form-control" id="prodi" name="prodi" value="<?php echo $data['prodi'] ?>">
			<label for="floatingPassword">prodi</label>
		</div>
		<br>
		<input type="hidden" name="id" value="<?php echo $data['id']?>">
		<button type="submit" class="btn btn-secondary" name="submit">Submit</button>
		<a href="index.php"><button type="button" class="btn btn-danger">Cancel</button></a>
	</form>
	<?php } ?>
	</div>
</body>