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





                <div class="row no-gutters align-items-center">
                <div class="col-auto">
                            <img src="<?= base_url('template/assets/img/penjualan/') . $penjualan['gambar']; ?>" style="width:350px" class="img-thumbnail">
                        </div>
                        <div class="card-body">
                    <div class="col mr-2">
                        <form action="" method="POST" enctype="multipart/form-data">
                            <div class="form-group">
                                <label for="no_penjualan">No Penjualan</label>
                                <input name="no_penjualan" type="text" value="<?= $penjualan['no_penjualan']; ?>" readonly class="form-control" id="no_penjualan">

                            </div>

                            <div class="form-group">
                                <label for="pelanggan">Pelanggan</label>
                                <input name="pelanggan" value="<?= $penjualan['nama']; ?>" type="text" readonly class="form-control" id="pelanggan">
                            </div>

                            <div class="form-group">
                                <label for="no_hp">No HP</label>
                                <input name="no_hp" value="<?= $penjualan['no_hp']; ?>" type="text" readonly class="form-control">
                            </div>

                            <div class="form-group">
                                <label for="judul">Buku</label>
                                <input name="judul" value="<?= $penjualan['judul']; ?>" type="text" readonly class="form-control">
                            </div>

                            <div class="form-group">
                                <label for="kondisi">Kondisi</label>
                                <input name="kondisi" value="<?= $penjualan['kondisi']; ?>" type="text" readonly class="form-control">
                            </div>

                            <div class="form-group">
                                <label for="harga">Harga</label>
                                <input name="harga" value="<?= $penjualan['harga']; ?>" type="text" readonly class="form-control">
                            </div>

                            <div class="form-group">
                            <label for="alamat">Alamat COD</label>
                                        <input name="alamat" value="<?= $penjualan['alamat']; ?>" type="text" readonly class="form-control" id="harga">
                            </div>

                            <div class="form-group">
                            <label for="tanggal">Tanggal COD</label>
                                        <input name="tanggal" value="<?= $penjualan['tanggal']; ?>" type="text" readonly class="form-control" id="harga">
                            </div>

                            <div class="form-group">
                                        <label for="status">Status</label>
                                        <select name="status" id="status" class="form-control">
                                            <option value="">Pilih Status</option>
                                            <option value="Submission is accepted, please come according to the submission">Submission is accepted, please come according to the submission</option>
                                            <option value="Sorry, the submission was not accepted">Sorry, the submission was not accepted</option>
                                        </select>
                                        <?= form_error('status', '<small class="text-danger pl-3">', '</small>'); ?>
                                    </div>

                                    <a href="<?= base_url('Penjualan') ?>" class="btn btn-light">Tutup</a>
                        <button type="submit" name="tambah" class="btn btn-danger float-right">Ubah Status</button>
                        </form>

    </section>
</div>