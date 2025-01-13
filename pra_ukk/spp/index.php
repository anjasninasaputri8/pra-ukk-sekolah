<!DOCTYPE html>
<html>
<head>
     <Title>Halaman admin</Title>
</head>
 <body>

<h1 style="text-align:center;"><strong>PEMBAYARAN SPP</strong></h1>

<button style="background-color: skyblue;"><a href="form_tambah.php">Tambah</a></button>
 <br>
<!-- Table -->
<!-- <table d="table" table border="1"> -->
<table width="97%" border="1" align="center" cellpadding="3" cellspacing="0">
  <thead>
 <tr style="background-color: green;">
    <th> No. </th>
    <th> id kelas</th>
    <th> tahun </th>
    <th> nominal</th>
    <th> aksi </th>

</tr>
  </thead>
  <tbody>
 <?php
    include"koneksi.php";

    $no =1;
    $data= mysqli_query($koneksi,"SELECT * FROM siswa");
    while ($hasil= mysqli_fetch_array($data)) {
        ?>
    
    <tr> 
        <td><?php echo $no++; ?></td>
        <td><?php echo $hasil['id_spp'] ?></td>
        <td><?php echo $hasil['tahun'] ?></td>
        <td><?php echo $hasil['nominal'] ?></td>
       
       

        <td align="center">
        <a href="edit_siswa.php?id=<?php echo urlencode($hasil['id']); ?>">Ubah</a>
            <a onclick="return confirm('Apakah Anda Yakin Ingin Menghapus Data ini?')  " href="hapus.php?id=<?php echo$hasil['id'] ?>"> Hapus </a> 
        </td>
    </tr>
  </tbody>
  <?php } ?>
 
  <tfoot>
<?php 
$tampil = mysqli_query($koneksi, "SELECT SUM(jumlah_bayar) as total_bayar FROM pembayaran");
$row = mysqli_fetch_assoc($tampil);
$total = $row['total_bayar'] ?? 0; // menampilkan 0 jika tidak ada data
?>
<tr>
<td colspan="8" style="text-align:center;"><strong>Total</strong></td>
<td colspan="1"><strong>Rp.<?php echo $total; ?></strong></td>
</tr>
</tfoot>


</table>

 </body>
 </html>