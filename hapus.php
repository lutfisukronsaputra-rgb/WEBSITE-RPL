<?php
include("koneksi.php");

if (isset($_POST["btnhapus"])) {
    $id = intval($_POST["id_komentar"]);

    $sql = "DELETE FROM komentar WHERE id_komentar = $id";
    if (mysqli_query($koneksi, $sql)) {
        echo "<script>
            alert('Komentar berhasil dihapus');
            window.location.href='tampil.php';
        </script>";
    } else {
        echo "<script>
            alert('Gagal menghapus komentar: " . mysqli_error($koneksi) . "');
            window.location.href='tampil.php';
        </script>";
    }
}
?>
