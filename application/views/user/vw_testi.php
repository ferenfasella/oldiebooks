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
                                <th>ID User</th>
                                <th>Testi</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php $i = 1; ?>
                        <?php foreach ($review as $us) : ?>
                            <tr>
                                <td> <?= $i; ?>.</td>
                                <td><?= $us['id_user']; ?></td>
                                <td><?= $us['testi']; ?></td>
                                <td>
                                    <a href="<?= base_url('Main/hapus/') . $us['id'];?>" class="badge badge-warning">Hapus</a>
        
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