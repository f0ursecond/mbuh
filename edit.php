<?php
    include "koneksi.php";
    $sql = mysqli_query($conn, "select * from user where nama='$_GET[kode]'");
    $data = mysqli_fetch_array($sql);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>

    </style>
</head>

<body>
    <h1>update</h1>
    <form action="" method="post">
        <div class="anjay">
            <input type="text" name="nama" placeholder="nama" value="<?php echo $data['nama']; ?>">
            <input type="text" name="kota" placeholder="kota" value="<?php echo $data['kota']; ?>">
            <input type="submit" value="simpan" name="simpan">
        </div>
    </form>
    <?php
        include "koneksi.php";
        if(isset($_POST['simpan'])){
            mysqli_query($conn, "update user set nama='$_POST[nama]',kota = '$_POST[kota]' where nama = '$_GET[kode]' ");
            echo "Data user telah diubah";
            echo "<meta http-equiv=refresh content=1;URL='tampil.php'>";
        }
    ?>

</body>
</html>

