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
                    <div class="card-body">
                        <h2 class="card-title"><?= $buku['judul']; ?></h2>

                        <h6 class="card-subtitle mb-2 text-muted"><?= $buku['pengarang']; ?></h6>
                        <!-- <div class="col-auto">
                            <img src="<?= base_url('assets/img/pembayaran/') . $penjualan['gambar']; ?>" style="width:400px" class="img-thumbnail">

                        </div> -->
                        <div class="row">
                            <div class="col-md-4">Penerbit Buku</div>
                            <div class="col-md-2">:</div>
                            <div class="col-md-6"><?= $buku['penerbit']; ?></div>
                        </div>

                        <div class="row">
                            <div class="col-md-4">Kategori Buku</div>
                            <div class="col-md-2">:</div>
                            <div class="col-md-6"><?= $buku['kategori']; ?></div>
                        </div>

                        <div class="row">
                            <div class="col-md-4">Kondisi Buku</div>
                            <div class="col-md-2">:</div>
                            <div class="col-md-6"><?= $buku['kondisi']; ?></div>
                        </div>

                        <div class="row">
                            <div class="col-md-4">Berat Buku</div>
                            <div class="col-md-2">:</div>
                            <div class="col-md-6"><?= $buku['berat']; ?></div>
                        </div>

                        <div class="row">
                            <div class="col-md-4">Stok Buku</div>
                            <div class="col-md-2">:</div>
                            <div class="col-md-6"><?= $buku['stok']; ?></div>
                        </div>

                        <div class="row">
                            <div class="col-md-4">Harga Buku</div>
                            <div class="col-md-2">:</div>
                            <div class="col-md-6"><?= $buku['harga']; ?></div>
                        </div>

                        </div>
            </div>
        </div>
    </section>
</div>






















                    </div>
    </section>
</div>