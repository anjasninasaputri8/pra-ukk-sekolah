<?php
 include"koneksi.php";
 $nisn= $_GET['nisn'];
 $data= mysqli_query($koneksi,"SELECT * FROM siswa where nisn='$nisn'");
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
		 <label>nisn</label><br>
		<input type="text" name="nisn" value="<?php echo $hasil ['nisn']?>" readonly><br>
		<label>nis</label><br>
		<input type="text" name="nis"value="<?php echo $hasil ['nis']?>"><br>
		<label>nama</label><br>
		<input type="text" name="nama"value="<?php echo $hasil ['nama']?>"><br>
        <label>id_kelas</label><br>
		<input type="text" name="id_kelas" value="<?php echo $hasil ['id_kelas']?>" readonly><br>
		<label>alamat</label><br>
		<input type="text" name="alamat"value="<?php echo $hasil ['alamat']?>"><br>
		<label>no_telp</label><br>
		<input type="text" name="no_telp"value="<?php echo $hasil ['no_telp']?>"><br>
        <label>id_spp</label><br>
		<input type="text" name="id_spp"value="<?php echo $hasil ['id_spp']?>"><br>
		<br>
		<button type="submit" name="simpan">Simpan</button> || <button><a href="index.php">kembali</a></button>
	</form>
	<?php } ?>
</body>
</html>
<?php
    include"koneksi.php";

    if(isset($_POST['simpan'])){
    	$nisn= $_POST['nisn'];
    	$nis= $_POST['nis'];
    	$nama= $_POST['nama'];
    	$id_kelas= $_POST['id_kelas'];
    	$alamat= $_POST['alamat'];
    	$no_telp= $_POST['no_telp'];
    	$id_spp = $_POST['id_spp'];
    	
    	$sql = "UPDATE siswa SET nisn='$nisn', nis='$nis',  nama='$nama', id_kelas='$id_kelas', alamat='$alamat',no_telp='$no_telp',id_spp='$id_spp', WHERE id='$id'"; 
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