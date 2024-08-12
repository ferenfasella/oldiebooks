</div>
<!-- Main Content -->
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1><?php echo $judul; ?></h1>
        </div>

        <div class="row justify-content">
            <div class="col-md-12 ">
                <div class="card">
                    <div class="card-body">
                        <form action="" method="POST" enctype="multipart/form-data">
                            <input type="hidden" name="id" value="<?= $buku['id']; ?>">
                            <div class="form-group">
                                <label for="judul">Judul</label>
                                <input type="text" name="judul" value="<?= $buku['judul']; ?>" class="form-control" id="judul" placeholder="Judul">
                                <?= form_error('judul', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>

                            <div class="form-group">
                                <label for="pengarang">Pengarang Buku</label>
                                <input type="text" name="pengarang" value="<?= $buku['pengarang']; ?>" class="form-control" id="pengarang" placeholder="Pengarang">
                                <?= form_error('pengarang', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>

                            <div class="form-group">
                                <label for="penerbit">Penerbit Buku</label>
                                <input type="text" name="penerbit" value="<?= $buku['penerbit']; ?>" class="form-control" id="penerbit" placeholder="Penerbit">
                                <?= form_error('penerbit', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>

                            <div class="form-group">
                                <label for="kategori">Kategori Buku</label>
                                <select name="kategori" id="kategori" class="form-control">
                                    <option value="">Pilih Kategori</option>
                                    <?php foreach ($kategori as $p) : ?>
                                        <option value="<?= $p['id']; ?>"><?= $p['kategori']; ?></option>
                                    <?php endforeach; ?>

                                </select>
                                <?= form_error('kategori', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>


                            <div class="form-group">
                                <label for="kondisi">Kondisi Buku</label>
                                <select name="kondisi" id="kondisi" class="form-control">
                                    <option value="Cluster I - Good condi" <?php if ($buku['kondisi'] == "Cluster I - Good condi") {
                                                                                echo "selected";
                                                                            } ?>>Cluster I - Good condi</option>

                                    <option value="Cluster II - Damage 80%" <?php if ($buku['kondisi'] == "Cluster II - Damage 80%") {
                                                                                echo "selected";
                                                                            } ?>>Cluster II - Damage 80%</option>
                                    <option value="Cluster III - Damage 50%" <?php if ($buku['kondisi'] == "Cluster III - Damage 50%") {
                                                                                echo "selected";
                                                                            } ?>>Cluster III - Damage 50%</option>
                                    <option value="Cluster IV - Damage 30%" <?php if ($buku['kondisi'] == "Cluster IV - Damage 30%") {
                                                                                echo "selected";
                                                                            } ?>>Cluster IV - Damage 30%</option>
                                </select>
                                <?= form_error('kondisi', '<small class="text-danger pl-3">', '</small>'); ?>

                            </div>

                            <div class="form-group">
                                <label for="berat">Berat</label>
                                <input type="text" name="berat" value="<?= $buku['berat']; ?>" class="form-control" id="berat" placeholder="Berat">
                                <?= form_error('berat', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>

                            <div class="form-group">
                                <label for="stok">Stok</label>
                                <input type="number" name="stok" value="<?= $buku['stok']; ?>" class="form-control" id="stok" placeholder="Stok">
                                <?= form_error('stok', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>

                            <div class="form-group">
                                <label for="harga">Harga</label>
                                <input type="number" name="harga" value="<?= $buku['harga']; ?>" class="form-control" id="harga" placeholder="Harga">
                                <?= form_error('harga', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>

                            <div class="form-group">
                            <img src="<?= base_url('template/assets/img/buku/') . $buku['gambar']; ?>" style="width: 100px;" class="img-thumbnail">
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" name="gambar" id="gambar">
                                <label for="gambar" class="custom-file-label">Choose File</label>
                                <?= form_error('gambar', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>
                            </div>

                            <a href="<?= base_url('Buku') ?>" class="btn btn-light">Tutup</a>
                            <button type="submit" name="tambah" class="btn btn-danger float-right">Update
                                Buku</button>
                        </form>
                    </div>
                </div>
            </div>
    </section>
</div>