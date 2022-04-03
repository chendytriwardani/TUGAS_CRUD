<?php
include "koneksi.php";

$id = $_POST['id_mhs'];
$nama = $_POST['nama'];
$asal = $_POST['asal'];
$prodi = $_POST['prodi'];

$query = "INSERT INTO tbl_041 (id_mhs,nama,asal,prodi) VALUE ('$id','$nama','$asal','$prodi')" ;//nama,umur,hobi sesuai pada database

$hasil = mysqli_query($koneksi,$query);

if($hasil){
    header ('Location:index.php');
}else{
    echo "input data gagal";
}
?>