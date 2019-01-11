<?php
require_once "./connect.php";

$sql ='SELECT *FROM tb_siswa';
$result = mysqli_query($connect, $sql);
if($result){
    if(mysqli_num_rows($result)){
?>
<html>
    <head>
        <title></title>
    </head>
    <style>
    #re{
        padding-left: 620px;
    }
    </style>
<body>
<table border =1 cellspacing =1 cellpadding=5 id= "re">
    <tr id= "tu">
        <b><td>#</td></b>
        <b><td width=100>NIS</td></b>
        <b><td width=150>Nama</td></b>
        <b><td>Alamat</td></b>
        <b><td>Password</td></b>
    </tr>
    <?php
        $i = 1;
        while($row = mysqli_fetch_row($result)){
    ?>
    <tr id= "bi">
        <td>
            <b><?php echo $i;?></b>
        </td>
        <td>
            <b><?php echo $row[0];?></b>
        </td>
        <td>
            <b><?php echo $row[1];?></b>
        </td>
        <td>
            <b><?php echo $row[2];?></b>
        </td>
        <td>
            <b><?php echo $row[3];?></b>
        </td>
    </tr>
    <?php
        $i++;
    }
    ?>
</table>
</body>
</html>
<?php
}
else{
    echo 'Data Tidak Ditemukan';
}
mysqli_close($connect);
}
?>