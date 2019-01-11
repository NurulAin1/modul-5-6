<!DOCTYPE html>
<html>
<head>
    <title>Tambah Data</title>
</head>
<style>
.hy{
    background-image: url(new.jpg);
    background-size: cover;
}
.rt{
    padding-top: 150px;
    padding-left: 620px;
}
</style>
<body class= "hy">
    <form action="<?php $_SERVER['PHP_SELF'];?>" method="post">
    <table class= "rt">
        <tr>
            <td>NIS</td>
            <td><input type="text" name="nis" /></td>
        </tr>
        <tr>
            <td>Nama</td>
            <td><input type="text" name="nama" size=40 /></td>
        </tr>
        <tr>
            <td>Alamat</td>
            <td><input type="text" name = "alamat" /></td>
        </tr>
        <tr>
            <td>Password</td>
            <td><input type="password" name="password"  /></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" value="Simpan" /></td>
        </tr>
        <tr>
            <td></td>
            <a href="Logout.php">Logout</a>
        </tr>
    </table>
    </form>
</body>
</html>

<!--PHP Script Begin -->
<?php
    require_once "connect.php";

    //jika field nis dan nama diisi lalu disubmit
    if(isset($_POST['nis']) && isset($_POST['nama'])){
        $nis = $_POST['nis'];
        $nama = $_POST['nama'];
        $alamat = $_POST['alamat'];
        $password = $_POST['password'];

         //Tambahkan data baru ke tabel
    $sql = "INSERT INTO tb_siswa VALUES ('" .$nis. "', '" .$nama. "', '" .$alamat."', '" .$password. "')";
    $result = mysqli_query($connect, $sql);
    if ($result){
        echo 'Data Berhasil Ditambahkan';
    }
    else{
        echo 'Gagal Menambahkan Data <br />';
        echo mysqli_error($connect);
    }
    }
    echo '<hr />';
    //memanggil file record.php untuk menampikan hasil
    require_once "record.php";
    ?>
