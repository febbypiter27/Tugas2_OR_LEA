<?php
    $ambil = $koneksi->query("SELECT * FROM buku WHERE id_buku='$_GET[id]'");
    $pecah = $ambil->fetch_assoc();
    $coverbuku = $pecah['cover_buku'];
    if(file_exists("../cover_buku/$coverbuku")){
        unlink("../cover_buku/$coverbuku");
    }

    $koneksi->query("DELETE FROM buku WHERE id_buku='$_GET[id]'");

    echo "<script>alert('Buku Terhapus');</script>";
    echo "<script>location='index.php?halaman=buku';</script>";

?>