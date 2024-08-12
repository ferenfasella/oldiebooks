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
                    <a href="<?= base_url() ?>Buku/tambah" class="btn btn-danger">Tambah
                        Buku</a>
                </div>
                <div class="table-responsive">
                    <table class="table table-bordered table-md">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Gambar</th>
                                <th>Judul</th>
                                <th>Stok</th>
                                <th>Harga</th>
                                <th>Kondisi</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php $i = 1; ?>
                        <?php foreach ($buku as $us) : ?>
                            <tr>
                                <td> <?= $i; ?>.</td>
                                <td><img src="<?= base_url('template/assets/img/buku/') . $us['gambar']; ?>" style="width: 100px;" class="img-thumbnail"></td>
                                <td><?= $us['judul']; ?></td>
                                <td><?= $us['stok']; ?></td>
                                <td><?= $us['harga']; ?></td>
                                <td><?= $us['kondisi']; ?></td>
                                <td>
                                    <a href="<?= base_url('Buku/edit/') . $us['id'];?>" class="badge badge-info">Edit</a>
                                    <a href="<?= base_url('Buku/hapus/') . $us['id'];?>" class="badge badge-warning">Hapus</a>
                                    <a href="<?= base_url('Buku/detail/') . $us['id'];?>" class="badge badge-secondary">Detail</a>
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