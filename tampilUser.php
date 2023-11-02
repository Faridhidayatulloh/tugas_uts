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
             <th>id_user</th>
             <th>id_level</th>
            <th>Nama</th>
            <th>Password</th>
            <th>level</th>
            <th>status</th>
            <th>OPSI</th>
</tr>
<?php
include 'koneksi.php';
$no = 1;
$data = mysqli_query($koneksi,"select * from user");
while($d =mysqli_fetch_array ($data)){
    ?>
    <tr>
        <td><?php echo $no++; ?></td>
        <td><?php echo $d['id_user']; ?></td>
        <td><?php echo $d['id_level']; ?></td>
        <td><?php echo $d['nama']; ?></td>
        <td><?php echo $d['password']; ?></td>
        <td><?php echo $d['level']; ?></td>
        <td><?php echo $d['status']; ?></td>
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