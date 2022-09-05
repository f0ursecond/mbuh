
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table border="1">
      <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Kota</th>
            <th colspan="2">Aksi</th>
      </tr>
    <?php
        include "koneksi.php";
        $no = 1;
        $putData = mysqli_query($conn, "select * from user");
        while ($show = mysqli_fetch_array($putData)){
            echo "
            <tr>
                <td>$no</td>
                <td>$show[nama]</td>
                <td>$show[kota]</td>
                <td><a href='edit.php?kode=$show[nama]'> edit </a></td>
                <td><a href='?kode=$show[nama]'> Hapus </a></td>
               
            </tr> ";
            $no++;
        }
        
    ?>
    
    </table>
    <a href='index.php'> home </a>
    <?php
        include "koneksi.php";
        if (isset($_GET['kode'])){
            mysqli_query($conn, "delete from user where nama='$_GET[kode]'");

            echo "data berhasil dihapus";
            echo  "<meta http-equiv=refresh content=2;URL='tampil.php'>";
        }
    ?>
</body>
</html>