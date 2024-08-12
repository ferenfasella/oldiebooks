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
                <div style="margin: 10px;" >
                    <a href="<?= base_url() ?>Kategori/tambah" class="btn btn-danger">Tambah
                        Kategori</a>
                </div>
                <div class="table-responsive">
                    <table class="table table-bordered table-md">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th style="width: 500px;">Kategori Buku</th>
                                <th >Deskripsi</th>
                                <th style="width: 145px;">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php $i = 1; ?>
                        <?php foreach ($kategori as $us) : ?>
                            <tr>
                                <td> <?= $i; ?>.</td>
                                <td><?= $us['kategori']; ?></td>
                                <td><?= $us['deskripsi']; ?></td>
                                <td>
                                    <a href="<?= base_url('Kategori/edit/') . $us['id'];?>" class="badge badge-info">Edit</a>
                                    <a href="<?= base_url('Kategori/hapus/') . $us['id'];?>" class="badge badge-warning">Hapus</a>
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