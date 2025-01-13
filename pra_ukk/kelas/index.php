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
    <th> Id kelas</th>
    <th> Nama Kelas</th>
    <th> Kompetensi keahlian</th>
    <th> aksi </th>

</tr>
  </thead>
  <tbody>
 <?php
    include"koneksi.php";

    $no =1;
    $data= mysqli_query($koneksi,"SELECT * FROM kelas");
    while ($hasil= mysqli_fetch_array($data)) {
        ?>
    
    <tr> 
        <td><?php echo $no++; ?></td>
        <td><?php echo $hasil['id_kelas'] ?></td>
        <td><?php echo $hasil['nama_kelas'] ?></td>
        <td><?php echo $hasil['kompetensi_keahlian'] ?></td>
        
       

        <td align="center">
        <a href="edit_siswa.php?id=">Ubah</a>
            <a onclick="return confirm('Apakah Anda Yakin Ingin Menghapus Data ini?')  " href="hapus.php?id="> Hapus </a> 
        </td>
    </tr>
  </tbody>
  <?php } ?>
 
 
</tfoot>


</table>

 </body>
 </html>