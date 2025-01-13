<?php
include "koneksi.php";

// Pastikan parameter 'nisn' ada
if (isset($_GET['nisn'])) {
    $nisn = $_GET['nisn'];

    // Prepare the DELETE statement
    $stmt = $koneksi->prepare("DELETE FROM kelas WHERE nisn = ?");
    $stmt->bind_param("i", $nisn); // "i" for integer parameter

    // Eksekusi query
    if ($stmt->execute()) {
        header('Location: index.php'); // Arahkan kembali ke index.php setelah data dihapus
        exit; // Pastikan script berhenti di sini
    } else {
        echo "Maaf, data tidak berhasil dihapus.";
    }

    // Tutup statement
    $stmt->close();
} else {
    echo "Data tidak ditemukan.";
}
?>
