<?php
include "koneksi.php";
?>


<!DOCTYPE HTML>
<head>
	<title></title>
	<link href = "css/bootstrap.css" rel="stylesheet">
</head>
<body>
	<H1 align=center>Masukkan datamu disini</h1>
	<div class='container col-8'>
	<form method="post" action="prosestambahdata.php">
		<div class="form-floating mb-4">
			<input type="text" class="form-control" id="nama" name="nama" placeholder="masukkan nama">
			<label for="floatingPassword">nama</label>
		</div>
		<div class="form-floating mb-4">
			<input type="text" class="form-control" id="asal" name="asal" placeholder="masukkan asal">
			<label for="floatingPassword">Asal</label>
		</div>
		<div class="form-floating mb-4">
			<input type="text" class="form-control" id="prodi" name="prodi" placeholder="masukkan prodi">
			<label for="floatingPassword">prodi</label>
		</div>
        <br>
		<button type="submit" class="btn btn-secondary" name="submit">Submit</button>
		<a href="index.php"><button type="button" class="btn btn-danger">Cancel</button></a>
	</form>
	</div>
</body>