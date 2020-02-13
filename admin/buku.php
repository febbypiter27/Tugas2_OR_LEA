<div class="container" style="overflow-x:auto;">
<h2>Data Buku</h2>
<a href="index.php?halaman=tambahbuku" class="btn btn-primary">Tambah Buku</a>
<h2></h2>
<table class="table table-bordered">
    <thread>
        <tr>
            <th>No</th>
            <th>Judul</th>
            <th>Cover</th>
            <th>Penulis</th>
            <th>Genre</th>
            <th>Harga</th>
            <th>Aksi</th>
        </tr>
    </thread>
    <tbody>
        <?php $nomor=1; ?>
        <?php $ambil=$koneksi->query("SELECT * FROM buku"); ?>
        <?php while($pecah=$ambil->fetch_assoc()){ ?>
        <tr>
            <td><?php echo $nomor; ?></td>
            <td><?php echo $pecah['judul_buku'];?></td>
            <td>
                <img src="../cover_buku/<?php echo $pecah['cover_buku'];?>" width="100">
            </td>
            <td><?php echo $pecah['penulis_buku'];?></td>
            <td><?php echo $pecah['genre_buku'];?></td>
            <td><?php echo $pecah['harga_buku'];?></td>
            <td>
                <a href="index.php?halaman=detailbuku&id=<?php echo $pecah['id_buku']; ?>" class="btn btn-info">Detail</a>
                <a href="index.php?halaman=hapusbuku&id=<?php echo $pecah['id_buku']; ?>" class="btn btn-danger">Hapus</a>
                <a href="index.php?halaman=ubahbuku&id=<?php echo $pecah['id_buku']; ?>" class="btn btn-success">Ubah</a>
            </td>
        </tr>
        <?php $nomor++; ?>
        <?php } ?>
    </tbody>
</table>

</div>