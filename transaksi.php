<!DOCTYPE html>
<html>
<head>
    <title>Pemrograman3.com</title>
</head>
<?php
include 'koneksi.php';
if (!empty($_POST['save'])){
    $id_transaksi = $_POST['id_transaksi'];
    $tgl_transaksi = $_POST['tgl_transaksi'];
    $no_transaksi = $_POST['no_transaksi'];
    $jenis_transaksi = $_POST['jenis_transaksi'];
    $barang_id = $_POST['barang_id'];
    $jumlah_transaksi = $_POST['jumlah_transaksi'];
    $id_user = $_POST['id_user'];

    $a = mysqli_query($koneksi, "INSERT INTO transaksi VALUES ('','$tgl_transaksi','$no_transaksi','$jenis_transaksi','$barang_id','$jumlah_transaksi','$id_user')");
    if ($a) {
        header("location:tampilTransaksi.php");
    }else{
        echo mysqli_error($koneksi);
    }
}

?>
<body>
    <h2>Pemrograman 3 2023</h2>
    <br/>
    <a href="index.php">KEMBALI</a>
    <br/>
    <br/>
    <h3>TAMBAH DATA TRANSAKSI</h3>
    <form method="POST">
        <table>
        <tr>
                <td>id_transaksi</td>
                <td><input type="number" name="id_transaksi"></td>
            </tr>
            <tr>
                <td>tgl_transaksi</td>
                <td><input type="date" name="tgl_transaksi"></td>
            </tr>
            <tr>
                <td>no_transaksi</td>
                <td><input type="number" name="no_transaksi"></td>
            </tr>
            <tr>
                <td>jenis_transaksi</td>
                <td><input type="text" name="jenis_transaksi"></td>
            </tr>
            <tr>
                <td>barang_id</td>
                <td><input type="number" name="barang_id"></td>
            </tr>
            <tr>
                <td>jumlah_transaksi</td>
                <td><input type="number" name="jumlah_transaksi"></td>
            </tr>
            <tr>
                <td>id_user</td>
                <td><input type="number" name="id_user"></td>
     </tr>
     <tr>
            <td></td>
            <td><input type="submit" name="save"></td>
        </tr>
        </table>
    </form>
</body>
</html>