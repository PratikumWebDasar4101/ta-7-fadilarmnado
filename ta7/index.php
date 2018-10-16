<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>mahasiswa</title>
  </head>
  <body>
    <form action="proses_input.php" method="post">
      <table>
        <tr>
          <td>Nama</td>
          <td><input type="text" name="nama" > </td>
        </tr>
        <tr>
          <td>NIM</td>
          <td><input type="text" name="nim" ></td>
        </tr>
        <tr>
          <td>Jenis Kelamin</td>
          <td><input type="radio" name="gender" value="Laki-Laki">Laki-Laki
              <input type="radio" name="gender" value="perempuan">Perempuan </td>
        </tr>
        <tr>
          <td>Program Studi</td>
          <td><select name="prodi">
              <option value="D3 Manajemen Informatika">D3 Manajemen Informatika</option>
              <option value="D3 Komputerisasi Akuntansi">D3 Komputerisasi Akuntansi</option>
              <option value="D3 Teknik Komputer">D3 Teknik Komputer</option>
              <option value="D3 Teknik Informatika">D3 Teknik Informatika</option>
              <option value="D4 Sistem Multimedia">D4 sistem multimedia</option>
              <option value="D3 Perhotelan">D3 Perhotelan</option>
          </select> </td>
        </tr>
        <tr>
          <td>Fakultas</td>
          <td><select name="fakultas">
            <option value="fakultas ilmu terapan">fakultas ilmu terapan</option>
            <option value="fakultas ekonomi dan bisnis">fakultas ekonomi dan bisnis</option>
            <option value="fakultas industri kreatif">fakultas industri kreatif</option>
            <option value="fakultas rekayasa industri">fakultas rekayasa industri</option>
          </select></td>
        </tr>
        <tr>
          <td>Asal</td>
          <td><input type="text" name="asal" > </td>
        </tr>
        <tr>
          <td>Motto Hidup</td>
          <td><textarea name="moto" rows="10" cols="70"></textarea></td>
        </tr>
        <tr>
          <td><input type="submit" name="submit" value="Kirim"> </td>
          <td><a href="data_mhs.php">data mahasiswa baru</a> </td>
        </tr>
        </table>
    </form>

  </body>
</html>
