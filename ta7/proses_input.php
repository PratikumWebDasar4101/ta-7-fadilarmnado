<?php
include_once 'koneksi.php';
$nama = $_POST['nama'];
$nim = $_POST['nim'];
$gender = $_POST['gender'];
$prodi = $_POST['prodi'];
$fakultas = $_POST['fakultas'];
$asal = $_POST['asal'];
$moto = $_POST['moto'];

if (isset($_POST['submit'])) {
  $sql = "INSERT INTO mhs_baru (nama, nim, jenis_kelamin, prodi, fakultas, asal, moto_hidup)
          VALUES ('$nama', '$nim', '$gender','$prodi','$fakultas','$asal','$moto')";
  if ($conn ->query($sql) === true) {
    echo "Data berhasil di input";
    header("location: data_mhs.php");
  }else {
    echo "gagal di input :".$conn->error;
    header("location: input_mahasiswa.php");
  }
}
?>
