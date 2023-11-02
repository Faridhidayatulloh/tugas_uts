<!DOCTYPE html>
<html>
<head>
    <title>Pemrograman3.com</title>
</head>
<body>
    <h2>Pemrograman 3 2023</h2>
    <br/>
    <table border="1">
        <tr>
        <th>No</th>
             <th>id_barang</th>
             <th>nama_barang</th>
            <th>kode_barang</th>
            <th>qty</th>
            <th>kategori</th>
            <th>harga</th>
            <th>OPSI</th>
</tr>
<?php
include 'koneksi.php';
$no = 1;
$data = mysqli_query($koneksi,"select * from barang");
while($d =mysqli_fetch_array ($data)){
    ?>
    <tr>
        <td><?php echo $no++; ?></td>
        <td><?php echo $d['id_barang']; ?></td>
        <td><?php echo $d['nama_barang']; ?></td>
        <td><?php echo $d['kode_barang']; ?></td>
        <td><?php echo $d['qty']; ?></td>
        <td><?php echo $d['kategori']; ?></td>
        <td><?php echo $d['harga']; ?></td>
        <td><a href="edit_user.php?id=<?php echo $d ['id']; ?>">EDIT</a>
            <a href="hapus_user.php?id=<?php echo $d ['id']; ?>">HAPUS</a>
        </td>
</tr>
<?php
}
    ?>
</table>
</body>
</html>