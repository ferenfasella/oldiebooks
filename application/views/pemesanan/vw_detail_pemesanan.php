</div>
<!-- Main Content -->
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1><?php echo $judul; ?></h1>
        </div>
        <?= $this->session->flashdata('message') ?>
        <div class="card shadow mb-4">
            <div class="card-body">

                <div class="table-responsive">
                    <table class="table table-bordered table-md">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>No Pemesanan</th>
                                <th>Pelanggan</th>
                                <th>Buku</th>
                                <th>Jumlah</th>
                                <th>Total</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $i = 1; ?>
                            <?php foreach ($detail as $us) : ?>
                                <tr>
                                    <td> <?= $i; ?>.</td>
                                    <td><?= $us['no_pemesanan']; ?></td>
                                    <td><?= $us['nama']; ?></td>
                                    <td><?= $us['buku']; ?></td>
                                    <td><?= $us['jumlah']; ?></td>
                                    <td><?= $us['total']; ?></td>
                                </tr>
                                <?php $i++; ?>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <div class="card shadow mb-4">
            <div class="card-body">

                <div class="row no-gutters align-items-center">
                <div class="col-auto">
                            <img src="<?= base_url('template/assets/img/pembayaran/') . $pemesanan['gambar']; ?>" style="width:350px" class="img-thumbnail">
                        </div>
                        <div class="card-body">
                    <div class="col mr-2">
                        <form action="" method="POST" enctype="multipart/form-data">
                            <div class="form-group">
                                <label for="no_pemesanan">No Pemesanan</label>
                                <input name="no_pemesanan" type="text" value="<?= $pemesanan['no_pemesanan']; ?>" readonly class="form-control" id="no_penjualan">

                            </div>

                            <div class="form-group">
                                <label for="pelanggan">Pelanggan</label>
                                <input name="pelanggan" value="<?= $pemesanan['nama']; ?>" type="text" readonly class="form-control" id="pelanggan">
                            </div>

                            <div class="form-group">
                                <label for="alamat">Alamat</label>
                                <input name="alamat" value="<?= $pemesanan['alamat']; ?>" type="text" readonly class="form-control">
                            </div>

                            <div class="form-group">
                            <label for="total_bayar">Total Pembayaran</label>
                                        <input name="total_bayar" value="<?= $pemesanan['total_bayar']; ?>" type="text" readonly class="form-control" id="harga">
                            </div>

                            <div class="form-group">
                                        <label for="status">Status</label>
                                        <select name="status" id="status" class="form-control">
                                            <option value="">Pilih Status</option>
                                            <option value="Orders in packaging">Pengemasan</option>
                                            <option value="Order has been processed">Proses Pengiriman</option>
                                            <option value="Order has been sent">Dikirim</option>
                                        </select>
                                        <?= form_error('status', '<small class="text-danger pl-3">', '</small>'); ?>
                                    </div>

                                    <a href="<?= base_url('Pemesanan') ?>" class="btn btn-light">Tutup</a>
                        <button type="submit" name="tambah" class="btn btn-danger float-right">Ubah Status</button>
                        </form>

    </section>
</div>