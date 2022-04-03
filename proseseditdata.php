<?php
include_once("koneksi.php");
$id = $_POST['id'];
$nama = $_POST['nama'];
$asal = $_POST['asal'];
$prodi = $_POST['prodi'];

$query = "UPDATE tbl_041 SET id_mhs='$id', nama='$nama',asal='$asal',prodi='$prodi' WHERE id_mhs='$id'";

$hasil = mysqli_query($koneksi,$query);

if($hasil){
    header('location:index.php');
}else{
    echo "GAGAL";
}
?>