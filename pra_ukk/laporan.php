<?php
// Koneksi ke database
$host = "localhost";
$user = "root";
$pass = "";
$db = "pra_ukk";

$conn = mysqli_connect($host, $user, $pass, $db);
if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}

// Ambil data tagihan
$query = "SELECT * FROM pembayaran";
$result = mysqli_query($conn, $query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="laporan.css">
    <title>Pembayaran Siswa</title>
   
</head>
<body>
    <h2>Pembayaran Siswa</h2>

    <!-- Informasi Tagihan -->
    <div>
       <!-- Informasi Tagihan -->
<div>
    <h3>Informasi Tagihan</h3>
    <p><strong>id pembayaran ;</strong> 56478</p>
    <p><strong>id petugas:</strong> 45436</p>
    <p><strong>NISN:</strong> 1001</p>
    <p><strong>tanggal bayar:</strong> 8</p>
    <p><strong>bulan dibayar:</strong> januari</p>
    <p><strong>tahun dibayar:</strong> 2024</p>
    <p><strong>id spp:</strong> 12345</p>
    <p><strong>jumlah dibayar:</strong> Rp. 1.200.000</p>
</div>

<!-- Tabel Pembayaran -->
<h3>Pembayaran Tagihan Bulanan</h3>
<table>
    <tr>
        <th>No.</th>
        <th>id pembayaran</th>
        <th>id petugas</th>
        <th>nisn</th>
        <th>tanggal bayar</th>
        <th>bulan dibayar</th>
        <th>tahun dibayar</th>
        <th>id spp</th>
        <th>jumlah dibayar</th>
       
    </tr>
    <?php 
    $no = 1;
    while ($row = mysqli_fetch_assoc($result)) { ?>
        <tr>
            <td><?php echo $no++; ?></td>
            <td><?php echo $row['nama_bulan']; ?></td>
            <td>Rp. <?php echo number_format($row['tagihan'], 2, ',', '.'); ?></td>
            <td class="<?php echo ($row['status'] == 'Lunas') ? 'status-lunas' : 'status-belum-lunas'; ?>">
                <?php echo $row['status']; ?>
            </td>
            <td>
                <?php if ($row['status'] == 'Belum Lunas') { ?>
                    <button class="red">Bayar</button>
                <?php } else { ?>
                    <button disabled>Lunas</button>
                <?php } ?>
            </td>
            <td><button>Cetak</button></td>
        </tr>
    <?php } ?>
</table>

</body>
</html>

<?php
// Tutup koneksi database
mysqli_close($conn);
?>