<div class="container" style="overflow-x:auto;">
<h2>Detail Buku</h2>
<a href="index.php?halaman=buku" class="btn btn-primary">Kembali</a>
<h2></h2>

<table class="table table-bordered">
    <thead>
        <tr>
        <th>No</th>
            <th>ISBN</th>
            <th>Judul</th>
            <th>Cover</th>
            <th>Penulis</th>
            <th>Genre</th>
            <th>Penerbit</th>
            <th>Jumlah Halaman</th>
            <th>Harga</th>
            <th>Stok</th>
            <th>Sinopsis</th>
        </tr>
    </thead>
    <tbody>
        <?php $nomor=1; ?>
        <?php $ambil=$koneksi->query("SELECT * FROM buku
            WHERE id_buku='$_GET[id]'"); ?>
        <?php while($pecah=$ambil->fetch_assoc()){ ?>
        <tr>
            <td><?php echo $nomor; ?></td>
            <td><?php echo $pecah['isbn_buku']; ?></td>
            <td><?php echo $pecah['judul_buku']; ?></td>
            <td>
                <img src="../cover_buku/<?php echo $pecah['cover_buku'];?>" width="100">
            </td>
            <td><?php echo $pecah['penulis_buku']; ?></td>
            <td><?php echo $pecah['genre_buku']; ?></td>
            <td><?php echo $pecah['penerbit_buku']; ?></td>
            <td><?php echo $pecah['jumlah_halaman']; ?></td>
            <td><?php echo $pecah['harga_buku']; ?></td>
            <td><?php echo $pecah['stok_buku']; ?></td>
            <td><?php echo $pecah['sinopsis_buku']; ?></td>
        </tr>
        <?php $nomor++; ?>
        <?php } ?>
    </tbody>
</table>

</div>
