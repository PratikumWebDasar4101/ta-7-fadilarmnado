<?php
include_once 'koneksi.php';

if (isset($_GET['nim'])) {
  $nim = $_GET['nim'];
  $sqlInsert = "SELECT * FROM mhs_baru where nim=$nim";
  $result = $conn->query($sqlInsert);
  $row = $result->FETCH_ASSOC();
      ?>
      <!DOCTYPE html>
      <html lang="en" dir="ltr">
        <head>
          <meta charset="utf-8">
          <title>Edit Data</title>
        </head>
        <body>
          <form method="post">
            <table>
              <tr>
                <td>Nama</td>
                <td><input type="text" name="nama" value="<?php echo $row['nama']; ?>" > </td>
              </tr>
              <tr>
                <td>NIM</td>
                <td><input type="text" name="nim" value="<?php echo $row['nim']; ?>" ></td>
              </tr>
              <tr>
                <td>Jenis Kelamin</td>
                <td><input type="radio" name="gender" <?php if ($row['jenis_kelamin'] == 'Laki-Laki' ) {
                      echo "checked";} ?> value="Laki-Laki">Laki-Laki
                    <input type="radio" name="gender" <?php if ($row['jenis_kelamin'] == 'perempuan' ) {
                          echo "checked";} ?> value="perempuan">Perempuan </td>
              </tr>
              <tr>
                <td>Program Studi</td>
                <td><select>
                    <option <?php if ($row['prodi'] == 'D3 Manajemen Informatika') {
                      echo "checked";
                    } ?> value="D3 Manajemen Informatika">D3 Manajemen Informatika</option>
                    <option <?php if ($row['prodi'] == 'D3 Komputerisasi Akuntansi') {
                      echo "checked";
                    } ?> value="D3 Komputerisasi Akuntansi">D3 Komputerisasi Akuntansi</option>
                    <option <?php if ($row['prodi'] =='D3 Teknik Komputer') {
                      echo "checked";
                    } ?> value="D3 Teknik Komputer">D3 Teknik Komputer</option>
                    <option <?php if ($row['prodi'] =='D3 Teknik Informatika') {
                      echo "checked";
                    } ?> value="D3 Teknik Informatika">D3 Teknik Informatika</option>
                    <option <?php if ($row['prodi'] =='D4 Sistem Multimedia') {
                      echo "checked";
                    } ?> value="D4 Sistem Multimedia">D4 sistem multimedia</option>
                    <option <?php if ($row['prodi'] =='D3 Perhotelan') {
                      echo "checked";
                    } ?> value="D3 Perhotelan">D3 Perhotelan</option>
                </select></td>
              </tr>
              <tr>
                <td>Fakultas</td>
                <td><select name="fakultas">
                  <option <?php if ($row['fakultas'] == 'fakultas ilmu terapan') { echo "checked";} ?> value="fakultas ilmu terapan">fakultas ilmu terapan</option>
                  <option <?php if ($row['fakultas'] == 'fakultas ekonomi dan bisnis') { echo "checked";} ?> value="fakultas ekonomi dan bisnis">fakultas ekonomi dan bisnis</option>
                  <option <?php if ($row['fakultas'] == 'fakultas industri kreatif') { echo "checked";} ?> value="fakultas industri kreatif">fakultas industri kreatif</option>
                  <option <?php if ($row['fakultas'] == 'fakultas rekayasa industri') { echo "checked";} ?> value="fakultas rekayasa industri">fakultas rekayasa industri</option>
                </select></td>
              </tr>
              <tr>
                <td>Asal</td>
                <td><input type="text" value="<?php echo $row['asal'];?>" name="asal"  ></td>
              </tr>
              <tr>
                <td>Motto Hidup</td>
                <td><textarea name="moto"  rows="10" cols="70" ><?php echo $row['moto_hidup'];?></textarea></td>
              </tr>
              <tr>
                <td><input type="submit" name="" value="kirim"> </td>
              </tr>
            </table>
          </form>
        </body>
      </html>
      <?php
  }
      ?>
      <?php
      if (isset($_POST['nim'])) {
        $nama = $_POST['nama'];
        $nim = $_POST['nim'];
        $gender = $_POST['gender'];
        $prodi = $_POST['prodi'];
        $fakultas = $_POST['fakultas'];
        $asal = $_POST['asal'];
        $moto = $_POST['moto'];

        $sql = "UPDATE mhs_baru set
                        nama ='$nama',
                        nim = '$nim',
                        jenis_kelamin = '$gender',
                        prodi = '$prodi',
                        fakultas = '$fakultas',
                        asal = '$asal',
                        moto_hidup = '$moto'
              WHERE nim = '$nim'";
      $resultupdt = $conn->query($sql);
      if ($resultupdt) {
        header("location: data_mhs.php");
      }else {
        echo "gagal" .$conn->error;
      }
      }
      ?>
