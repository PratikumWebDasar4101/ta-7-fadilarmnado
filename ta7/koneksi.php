<?php
$servername = "localhost";
$user = "root";
$pass = "";
$dbname = "jurnal7";

$conn = new mysqli($servername,$user,$pass,$dbname);

if ($conn -> connect_error) {
  echo "koneksi gagal : ".$conn->connect_error."<br>";
}
?>
