<?php
include_once 'koneksi.php';

if (isset($_GET['nim'])) {
  $nim = $_GET['nim'];
  $delete = "DELETE FROM mhs_baru where nim=$nim";
  if ($conn->query($delete) === true) {
    echo "berhasil hapus";
    header("location: data_mhs.php");
  }else {
    echo "gagal";
  }
}
$conn->close();
?>
