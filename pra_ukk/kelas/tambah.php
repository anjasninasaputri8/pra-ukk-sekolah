<?php
        include"koneksi.php";

        if(isset($_POST['simpan'])){
            $id_kelas= $_POST['id_kelas'];
            $nama_kelas= $_POST['nama_kelas'];
            $kompetensi_keahlian= $_POST['kompetensi_keahlian'];
          
           

            $sql = "INSERT INTO kelas(id_kelas,nama_kelas,kompetensi_keahlian)VALUES('$id_kelas','$nama_kelas','$kompetensi_keahlian')";
            if(mysqli_query($koneksi,$sql)){
                header('location:index.php');
            }else{
                echo "Oupss....Maaf proses penyimpan data tidak berhasil";
            }
        }
    ?>