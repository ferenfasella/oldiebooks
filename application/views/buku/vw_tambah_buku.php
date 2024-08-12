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
                        <div class="form-group">
                            <label for="judul">Judul</label>
                            <input type="text" name="judul"  value="<?= set_value('judul'); ?>" class="form-control" id="judul" placeholder="Judul">
                            <?= form_error('judul', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>

                        <div class="form-group">
                            <label for="pengarang">Pengarang Buku</label>
                            <input type="text" name="pengarang"  value="<?= set_value('pengarang'); ?>" class="form-control" id="pengarang" placeholder="Pengarang">
                            <?= form_error('pengarang', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>

                        <div class="form-group">
                            <label for="penerbit">Penerbit Buku</label>
                            <input type="text" name="penerbit" value="<?= set_value('penerbit'); ?>" class="form-control" id="penerbit" placeholder="Penerbit">
                            <?= form_error('penerbit', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
    
                        <div class="form-group">
                            <label for="kategori">Kategori Buku</label>
                            <select name="kategori" value="<?= set_value('kategori'); ?>" id="kategori" class="form-control">
                                <option value="">Pilih Kategori</option>
                                <?php foreach ($kategori as $p) : ?>
                                    <option value="<?= $p['id']; ?>"><?= $p['kategori']; ?></option>
                                <?php endforeach; ?>
                            </select>
                            <?= form_error('kategori', '<small class="text-danger pl-3">', '</small>'); ?>

                        </div>

                        <div class="form-group">
                            <label for="kondisi">Kondisi Buku</label>
                            <select name="kondisi"  id="kondisi" value="<?= set_value('kondisi'); ?>" class="form-control" >
                            <option value="">Kondisi Buku</option>
                                <option value="Cluster I - Good condi">Cluster I - Good condi</option>
                                <option value="Cluster II - Damage 80%">Cluster II - Damage 80%</option>
                                <option value="Cluster III - Damage 50%">Cluster III - Damage 50%</option>
                                <option value="Cluster IV - Damage 30%">Cluster IV - Damage 30%</option>
                            </select>
                            <?= form_error('kondisi', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>

                        <div class="form-group">
                            <label for="berat">Berat</label>
                            <input type="text" name="berat" value="<?= set_value('berat'); ?>" class="form-control" id="berat" placeholder="Berat">
                            <?= form_error('berat', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                        
                        <div class="form-group">
                            <label for="stok">Stok</label>
                            <input type="number" name="stok" value="<?= set_value('stok'); ?>" class="form-control" id="stok" placeholder="Stok">
                            <?= form_error('stok', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>

                        <div class="form-group">
                            <label for="harga">Harga</label>
                            <input type="number" name="harga" value="<?= set_value('harga'); ?>" class="form-control" id="harga" placeholder="Harga">
                            <?= form_error('harga', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                        
                        <div class="form-group">
                            <label for="gambar">Gambar</label>
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" name="gambar" id="gambar">
                                <label for="gambar" class="custom-file-label">Choose File</label>
                            </div>
                        </div>

                        <a href="<?= base_url('Buku') ?>" class="btn btn-light">Tutup</a>
                        <button type="submit" name="tambah" class="btn btn-danger float-right">Tambah
                            Buku</button>
                    </form>
                </div>
            </div>
        </div>
        </section>
      </div>