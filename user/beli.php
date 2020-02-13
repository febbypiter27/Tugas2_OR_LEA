<?php
    session_start();

    //mendapatkan id_buku dari url
    $id_buku = $_GET['id'];

    //jika buku sudah ada di keranjang, maka buku ditambah jumlahnya +1
    if(isset($_SESSION['keranjang'][$id_buku])){
        $_SESSION['keranjang'][$id_buku]+=1;
    }

    //jika buku belum ada di keranjang, maka buku dianggap dibeli 1
    else{
        $_SESSION['keranjang'][$id_buku]=1;
    }

    //ke halaman keranjang
    echo "<script>alert('Buku Telah Masuk Keranjang');</script>";
    echo "<script>location='keranjang.php';</script>";
?>