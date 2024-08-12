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

                </div>
                <div class="table-responsive">
                    <table class="table table-bordered table-md">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>No Penjualan</th>
                                <th>Tanggal</th>
                                <th>Pelanggan</th>
                                <th>Alamat</th>
                                <th>Status</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $i = 1; ?>
                            <?php foreach ($penjualan as $us) : ?>
                                <tr>
                                    <td> <?= $i; ?>.</td>
                                    <td><?= $us['no_penjualan']; ?></td>
                                    <td><?= $us['tanggal']; ?></td>
                                    <td><?= $us['nama']; ?></td>
                                    <td><?= $us['alamat']; ?></td>
                                    <td><?= $us['status']; ?></td>
                                    <td>
                                        <a href="<?= base_url('Penjualan/detail/') . $us['no_penjualan']; ?>" class="badge badge-warning">Detail</a>
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