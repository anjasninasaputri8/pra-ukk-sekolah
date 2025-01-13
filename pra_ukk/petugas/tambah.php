<?php
        include"koneksi.php";

        if(isset($_POST['simpan'])){
            $id_petugas= $_POST['id_petugas'];
            $nis= $_POST['nis'];
            $nama= $_POST['nama'];
            $id_kelas= $_POST['id_kelas'];
            $alamat= $_POST['alamat'];
            $no_telp= $_POST['no_telp'];
            $id_spp= $_POST['id_spp'];
           

            $sql = "INSERT INTO siswa(nisn,nis,nama,id_kelas,alamat,no_telp,id_spp)VALUES('$nisn','$nis','$nama','$id_kelas','$alamat','$no_telp', '$id_spp')";
            if(mysqli_query($koneksi,$sql)){
                header('location:index.php');
            }else{
                echo "Oupss....Maaf proses penyimpan data tidak berhasil";
            }
        }
    ?>