<?php
include_once 'koneksi.php';
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>data mahasiswa</title>
  </head>
  <body>
      <center>
      <table>
        <tr>
          <td></td>
            <td colspan="2">
              <form action="data_mhs.php" method="get">
                <input type="hidden" name="search" value="carimhs">
                <input type="text" name="data" >
                <input type="submit">
              </form>
            </td>
        </tr>
        <?php
        if (isset($_GET['search']) && $_GET['search']== 'carimhs' && isset($_GET['data'])) {
          $data = $_GET['data'];
          $sql = "SELECT nim,nama from mhs_baru where nim like '%$data%' or nama like '%$data%'";

        }else {
          $sql = "SELECT nim,nama FROM mhs_baru where 2";
        }
        $result = $conn->query($sql);
        ?>
        <tr>
          <th>Nama</th>
          <th>NIM</th>
          <th>Aksi</th>
        </tr>
        <?php
          $result = $conn->query($sql);

          if ($result->num_rows > 0) {
            while ($row = $result->FETCH_ASSOC()) {
              ?>
              <tr>
                <td><?php echo $row['nama'] ; ?> </td>
                <td><?php echo $row['nim']; ?> </td>
                <td><a href="hapus.php?nim=<?php echo $row['nim']; ?>">delete</a>||<a href="update.php?nim=<?php echo $row['nim']; ?>">Update</a></td>
              </tr>
              <?php
            }
          }
          ?>
      </table>
    </center>
  </body>
</html>
