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
            <div style="margin: 10px;">
            <a href="<?= base_url('Pemesanan/export') ?>" class="btn btn-secondary "><i class="fa fa-file-pdf"></i>&nbsp;&nbsp;Export</a>
                </div>
                <div class="table-responsive">
                    <table class="table table-bordered table-md">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>No Pemesanan</th>
                                <th>Tanggal</th>
                                <th>Pelanggan</th>
                                <th>Total</th>
                                <th>Status</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $i = 1; ?>
                            <?php foreach ($pemesanan as $us) : ?>
                                <tr>
                                    <td> <?= $i; ?>.</td>
                                    <td><?= $us['no_pemesanan']; ?></td>
                                    <td><?= $us['tanggal']; ?></td>
                                    <td><?= $us['nama']; ?></td>
                                    <td><?= $us['total_bayar']; ?></td>
                                    <td><?= $us['status']; ?></td>
                                    <td>
                                        <a href="<?= base_url('Pemesanan/detail/') . $us['no_pemesanan']; ?>" class="badge badge-warning">Detail</a>
                                    </td>
                                </tr>
                                <?php $i++; ?>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>
</div>