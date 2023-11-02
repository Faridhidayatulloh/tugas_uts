<!DOCTYPE html>
<html>
<head>
    <title>Pemrograman3.com</title>
</head>
<?php
include 'koneksi.php';
if (!empty($_POST['save'])){
    $id_user = $_POST['id_user'];
    $id_level = $_POST['id_level'];
    $Nama = $_POST['Nama'];
    $Password = $_POST['Password'];
    $level = $_POST['level'];
    $status = $_POST['status'];

    $a=mysqli_query($koneksi,"insert into user values ('','$id_user','$Nama','$Password','$level','$Status')");
    if ($a) {
        header("location:tampilUser.php");
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
                <td>id_user</td>
                <td><input type="number" name="id_user"></td>
            </tr>
            <tr>
                <td>id_level</td>
                <td><input type="number" name="id_level"></td>
            </tr>
            <tr>
                <td>Nama</td>
                <td><input type="text" name="Nama"></td>
            </tr>
            <tr>
                <td>Password</td>
                <td><input type="Password" name="Password"></td>
            </tr>
            <tr>
            <td>level</td>
             <td><select name="level">
                    <option value="">-----Pilih</option>
                    <option value="Gold">Gold</option>
                    <option value="Silver">Silver</option>
                    <option value="Platinum">Platinum</option>
            </select>
            </td>
            </tr>
            <tr>
                <td>status</td>
                <td><select type="Status">
                <option value="">-----Pilih</option>
                <option value="Aktif">1</option>
                <option value="Tdk aktif">2</option>
            </select>
         </td>
     </tr>
     <tr>
            <td></td>
            <td><input type="submit" name="save"></td>
        </tr>
        </table>
    </form>
</body>
</html>