<!DOCTYPE html>
<html lang="en">

<head>
  <title>pemprograman3.com</title>
  <style>
    table {
      border-collapse: collapse;
      width: 100%;
    }

    th, td {
      border: 1px solid #dddddd;
      text-align: left;
      padding: 8px;
    }

    th {
      background-color: #f2f2f2;
    }
  </style>
</head>

<body>
  <h2>Pemprogaraman 3 2023</h2>
  <h5>Laporan Transaksi</h5>
  <table>

    <?php
include 'koneksi.php';

$data = mysqli_query($koneksi, "SELECT U.nama AS member, L.jenis_level AS level, L.jml_disc_level AS diskon_member, K.Diskon AS diskon_barang, 
        B.harga AS harga, T.jumlah_transaksi AS qty 
        FROM transaksi T 
        JOIN barang B ON T.barang_id = B.id_barang 
        JOIN kategori K ON B.kategori = K.id_kategori 
        JOIN user U ON T.id_user = U.id_user 
        JOIN level L ON U.id_level = L.id_level");

if (!$data) {
    die("Query failed: " . mysqli_error($koneksi));
}

if (mysqli_num_rows($data) == 0) {
    echo "No data found in the database.";
} else {
    ?>
    <table>
        <tr>
            <th>Member</th>
            <th>Level</th>
            <th>Diskon Member</th>
            <th>Diskon Barang</th>
            <th>Total Pembelian</th>
            <th>Total Diskon</th>
            <th>Total Transaksi</th>
        </tr>
        <?php
        while ($d = mysqli_fetch_array($data)) {
            $totalHarga = $d['harga'];
            $totalDiskon = $totalHarga * (($d['diskon_member'] + $d['diskon_barang']) / 100);
            $totalTransaksi = $totalHarga - $totalDiskon;
            ?>
            <tr>
                <td><?= $d['member']; ?></td>
                <td><?= $d['level']; ?></td>
                <td><?= $d['diskon_member'] . '%'; ?></td>
                <td><?= $d['diskon_barang'] . '%'; ?></td>
                <td><?= $totalHarga; ?></td>
                <td><?= $totalDiskon; ?></td>
                <td><?= $totalTransaksi; ?></td>
            </tr>
        <?php
        }
        ?>
    </table>
<?php
}
?>
