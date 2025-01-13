<?php
 include"koneksi.php";
 $id= $_GET['id'];
 $data= mysqli_query($koneksi,"SELECT * FROM kelas where id='$id'");
 while ($hasil= mysqli_fetch_array($data)){

?>
<!DOCTYPE html>
<html>
<head>
	<title>Mengubah Data pra ukk</title>
</head>
<body>
	<h1>Ubah Data</h1>
	<form method="post" action="">
		 <label>id_kelas</label><br>
		<input type="text" name="id_kelas" value="<?php echo $hasil ['id_kelas']?>" readonly><br>
		<label>nama_kelas</label><br>
		<input type="text" name="nama_kelas"value="<?php echo $hasil ['nama_kelas']?>"><br>
		<label>kompetensi_keahlian</label><br>
		<input type="text" name="kompetensi_keahlian"value="<?php echo $hasil ['kompetensi_keahlian']?>"><br>
        
		<br>
		<button type="submit" name="simpan">Simpan</button> || <button><a href="index.php">kembali</a></button>
	</form>
	<?php } ?>
</body>
</html>
<?php
    include"koneksi.php";

    if(isset($_POST['simpan'])){
    	$id_kelas= $_POST['id_kelas'];
    	$nama_kelas= $_POST['nama_kelas'];
    	$kompetensi_keahlian= $_POST['kompetensi_keahlian'];
    	
    	
    	$sql = "UPDATE kelas SET id_kelas='$id_kelas', nama_kelas='$nama_kelas',  kompetensi_keahlian='$kompetensi_keahlian',  WHERE id='$id'"; 
    	//cek apakah proses simpan berhasil
    	if(mysqli_query($koneksi,$sql)){
    	//jika berhasil, redirect ke index.php
    		header('location:index.php');
    	}else{
    		//jika tidak berhasil
    		echo "Oupss....Maaf proses penyimpan data tidak berhasil";
    	}
    }
?>