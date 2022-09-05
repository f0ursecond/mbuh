<?php
    include "koneksi.php";
    if(isset($_POST['simpan'])){
            $nama =$_POST['nama'];
            $kota =$_POST['kota'];

            $insert = "INSERT INTO user (nama,kota) VALUES ('$nama','$kota')";
            $sql = mysqli_query($conn, $insert);

            if ($sql){
                header('Location: tampil.php?sukses');
            } else {
                echo "failed";
            }
        }
    
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
    <h1>crud teros</h1>
    <form action="" method="post">
        <div class="anjay">
            <input type="text" name="nama" placeholder="nama">
            <input type="text" name="kota" placeholder="kota">
            <input type="submit" value="simpan" name="simpan">
        </div>
    </form>


</body>

</html>