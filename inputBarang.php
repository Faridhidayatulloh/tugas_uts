<!DOCTYPE html>
<html>
<head>
    <title>Pemrograman3.com</title>
</head>
<?php
include 'koneksi.php';
if (!empty($_POST['save'])){
    $id_barang = $_POST['id_barang'];
    $nama_barang = $_POST['nama_barang'];
    $kode_barang = $_POST['kode_barang'];
    $qty = $_POST['qty'];
    $kategori_id = $_POST['kategori'];
    $harga = $_POST['harga'];

    $a=mysqli_query($koneksi,"insert into barang values ('','$nama_barang','$kode_barang','$qty','$kategori','$harga')");
    if ($a) {
        header("location:tampilBarang.php");
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
    <h3>TAMBAH DATA USER</h3>
    <form method="POST">
        <table>
        <tr>
                <td>id_barang</td>
                <td><input type="number" name="id_barang"></td>
            </tr>
            <tr>
                <td>nama_barang</td>
                <td><input type="text" name="nama_barang"></td>
            </tr>
            <tr>
                <td>kode_barang</td>
                <td><input type="number" name="kode_barang"></td>
            </tr>
            <tr>
                <td>qty</td>
                <td><input type="number" name="qty"></td>
            </tr>
            <tr>
            <td>kategori</td>
            <td><input type="number" name="kategori"></td>
            </tr>  
            <tr>
            <td>harga</td>
            <td><input type="number" name="harga"></td>
            </tr>
             <tr>
            <td></td>
            <td><input type="submit" name="save"></td>
        </tr>
        </table>
    </form>
</body>
</html>