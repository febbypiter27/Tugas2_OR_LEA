<div>
    <h2>Ubah Data Buku</h2>
    <?php
        $ambil = $koneksi->query("SELECT * FROM buku WHERE id_buku='$_GET[id]'");
        $pecah = $ambil->fetch_assoc();

        echo "<pre>";
        print_r($pecah);
        echo "</pre>"
        
    ?>

    <form method="post" enctype="multipart/form-data">
    <div class="form-group">
            <label>ISBN</label>
            <input type="text" class="form-control" name="isbn" value="<?php echo $pecah['isbn_buku']; ?>">
        </div>
        <div class="form-group">
            <label>Judul</label>
            <input type="text" class="form-control" name="judul" value="<?php echo $pecah['judul_buku']; ?>">
        </div>
        <div class="form-group">
            <img src="../cover_buku/<?php echo $pecah['cover_buku'] ?>">
        </div>
        <div class="form-group">
            <label>Ganti Cover</label>
            <input type="file" class="form-control" name="cover">
        </div>
        <div class="form-group">
            <label>Penulis</label>
            <input type="text" class="form-control" name="penulis" value="<?php echo $pecah['penulis_buku']; ?>">
        </div>
        <div class="form-group">
            <label>Genre</label>
            <input type="text" class="form-control" name="genre" value="<?php echo $pecah['genre_buku']; ?>">
        </div>
        <div class="form-group">
            <label>Penerbit</label>
            <input type="text" class="form-control" name="penerbit" value="<?php echo $pecah['penerbit_buku']; ?>">
        </div>
        <div class="form-group">
            <label>Jumlah Halaman</label>
            <input type="number" class="form-control" name="jumlahhalaman" value="<?php echo $pecah['jumlah_halaman']; ?>">
        </div>
        <div class="form-group">
            <label>Harga</label>
            <input type="number" class="form-control" name="harga" value="<?php echo $pecah['harga_buku']; ?>">
        </div>
        <div class="form-group">
            <label>Stok</label>
            <input type="number" class="form-control" name="stok" value="<?php echo $pecah['stok_buku']; ?>">
        </div>
        <div class="form-group">
            <label>Sinopsis</label>
            <textarea class="form-control" name="sinopsis" cols="30" rows="10"><?php echo $pecah['sinopsis_buku']; ?></textarea>
        </div>
        <button class="btn btn-outline-primary" name="update">Ubah Buku</button>
    </form>

    <?php 
        if(isset($_POST['update'])){
            $namacover = $_FILES['cover']['name'];
            $lokasicover = $_FILES['cover']['tmp_name'];
            //jika cover diubah
            if(!empty($lokasicover)){
                move_uploaded_file($lokasicover, "../cover_buku/$namacover");

                $koneksi->query("UPDATE buku SET isbn_buku='$_POST[isbn]', judul_buku='$_POST[judul]', 
                cover_buku='$namacover', penulis_buku='$_POST[penulis]', genre_buku='$_POST[genre]', 
                penerbit_buku='$_POST[penerbit]', jumlah_halaman='$_POST[jumlahhalaman]', 
                harga_buku='$_POST[harga]', stok_buku='$_POST[stok]', sinopsis_buku='$_POST[sinopsis]'
                WHERE id_buku='$_GET[id]'");
            }
            else
            {
                $koneksi->query("UPDATE buku SET isbn_buku='$_POST[isbn]', judul_buku='$_POST[judul]', 
                penulis_buku='$_POST[penulis]', genre_buku='$_POST[genre]', penerbit_buku='$_POST[penerbit]', 
                jumlah_halaman='$_POST[jumlahhalaman]', harga_buku='$_POST[harga]', stok_buku='$_POST[stok]', 
                sinopsis_buku='$_POST[sinopsis]'
                WHERE id_buku='$_GET[id]'");
            }
            echo "<script>alert('Data Buku Terubah');</script>";
            echo "<script>location='index.php?halaman=buku';</script>";
        }
    ?>

</div>