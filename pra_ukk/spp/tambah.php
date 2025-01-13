<?php
        include"koneksi.php";

        if(isset($_POST['simpan'])){
            $id_kelas= $_POST['id_spp'];
            $nama_kelas= $_POST['tahun'];
            $kompetensi_keahlian= $_POST['nominal'];
          
           

            $sql = "INSERT INTO spp(id_spp,tahun,nominal)VALUES('$id_spp','$tahun','$nominal')";
            if(mysqli_query($koneksi,$sql)){
                header('location:index.php');
            }else{
                echo "Oupss....Maaf proses penyimpan data tidak berhasil";
            }
        }
    ?>