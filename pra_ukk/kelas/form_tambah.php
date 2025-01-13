<!DOCTYPE html>
<html>
<head>
	<title>Menambah Data praukk</title>
</head>
<body>
	<h1>Tambah Data</h1>
	<form method="post" action="tambah.php">
		<label>id_kelas</label><br>
		<input type="text" name="id_kelas"><br>
		<label for="nama_kelas">Nama kelas</label><br>
		<select name="nama_kelas" id="nama_kelas" >
  <option value="X">X</option>
  <option value="XI">XI</option>
  <option value="XII">XII</option>
</select><br>
<label for="kompetensi keahlian">kompetensi keahlian</label><br>
		<select name="kompetensi_keahlian"id="kompetensi_keahlian" >
  <option value="PPLG">PPLG</option>
  <option value="BCF">BCF</option>
  <option value="MPLB A">MPLB A</option>
  <option value="MPLB B">MPLB B</option>
</select><br>
		
		<button type="submit" name="simpan">Simpan</button> || <button><a href="index.php">kembali</a></button>
	</form>
</body>
</html>