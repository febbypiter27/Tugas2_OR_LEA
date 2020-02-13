<div>
    <h2>Tambah Buku</h2>
    <form method="post" enctype="multipart/form-data">
        <div class="form-group">
            <label>ISBN</label>
            <input type="text" class="form-control" name="isbn">
        </div>
        <div class="form-group">
            <label>Judul</label>
            <input type="text" class="form-control" name="judul">
        </div>
        <div class="form-group">
            <label>Cover</label>
            <input type="file" class="form-control" name="cover">
        </div>
        <div class="form-group">
            <label>Penulis</label>
            <input type="text" class="form-control" name="penulis">
        </div>
        <div class="form-group">
            <label>Genre</label>
            <input type="text" class="form-control" name="genre">
        </div>
        <div class="form-group">
            <label>Penerbit</label>
            <input type="text" class="form-control" name="penerbit">
        </div>
        <div class="form-group">
            <label>Jumlah Halaman</label>
            <input type="number" class="form-control" name="jumlahhalaman">
        </div>
        <div class="form-group">
            <label>Harga</label>
            <input type="number" class="form-control" name="harga">
        </div>
        <div class="form-group">
            <label>Stok</label>
            <input type="number" class="form-control" name="stok">
        </div>
        <div class="form-group">
            <label>Sinopsis</label>
            <textarea class="form-control" name="sinopsis" cols="30" rows="10"></textarea>
        </div>
        <button class="btn btn-outline-primary" name="save">Simpan Buku</button>
    </form>
    <?php  
        if(isset($_POST['save'])){
            $nama=$_FILES['cover']['name'];
            $lokasi=$_FILES['cover']['tmp_name'];
            move_uploaded_file($lokasi, "../cover_buku/".$nama);
            $koneksi->query("INSERT INTO buku (isbn_buku, judul_buku, cover_buku, penulis_buku, 
                genre_buku, penerbit_buku, jumlah_halaman, harga_buku, stok_buku, sinopsis_buku)
                VALUES('$_POST[isbn]','$_POST[judul]','$nama','$_POST[penulis]','$_POST[genre]',
                '$_POST[penerbit]','$_POST[jumlahhalaman]','$_POST[harga]','$_POST[stok]','$_POST[sinopsis]')");

            echo "<script>alert('Data Buku Tertambah');</script>";
            echo "<script>location='index.php?halaman=buku';</script>";
            // echo "<div class='alert alert-info'>Data Tersimpan</div>;";
            // echo "<meta http-equiv='refresh' content='1;url=index.php?halaman=buku'>";
        }
    ?>
    
</div>