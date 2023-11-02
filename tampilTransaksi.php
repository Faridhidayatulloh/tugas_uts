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
             <th>id_transaksi</th>
             <th>tgl_transaksi</th>
            <th>no_transaksi</th>
            <th>jenis_transaksi</th>
            <th>barang_id</th>
            <th>jumlah_transaksi</th>
            <th>id_user</th>
            <th>OPSI</th>
</tr>
<?php
include 'koneksi.php';
$no = 1;
$data = mysqli_query($koneksi,"select * from transaksi");
while($d =mysqli_fetch_array ($data)){
    ?>
    <tr>
        <td><?php echo $no++; ?></td>
        <td><?php echo $d['id_transaksi']; ?></td>
        <td><?php echo $d['tgl_transaksi']; ?></td>
        <td><?php echo $d['no_transaksi']; ?></td>
        <td><?php echo $d['jenis_transaksi']; ?></td>
        <td><?php echo $d['barang_id']; ?></td>
        <td><?php echo $d['jumlah_transaksi']; ?></td>
        <td><?php echo $d['id_user']; ?></td>
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