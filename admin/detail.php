<div>
<h2>Detail Pembelian</h2>

<table class="table table-bordered">
    <thead>
        <tr>
            <th>No</th>
            <th>Judul Buku</th>
            <th>Harga</th>
            <th>Jumlah</th>
            <th>Subtotal</th>
        </tr>
    </thead>
    <tbody>
        <?php $nomor=1; ?>
        <?php $ambil=$koneksi->query("SELECT * FROM pembelian_buku JOIN buku 
            ON pembelian_buku.id_buku=buku.id_buku
            WHERE pembelian_buku.id_pembelian='$_GET[id]'"); ?>
        <?php while($pecah=$ambil->fetch_assoc()){ ?>
        <tr>
            <td><?php echo $nomor; ?></td>
            <td><?php echo $pecah['judul_buku']; ?></td>
            <td><?php echo $pecah['harga_buku']; ?></td>
            <td><?php echo $pecah['jumlah']; ?></td>
            <td><?php echo $pecah['harga_buku']*$pecah['jumlah']; ?></td>
        </tr>
        <?php $nomor++; ?>
        <?php } ?>
    </tbody>
</table>

</div>
