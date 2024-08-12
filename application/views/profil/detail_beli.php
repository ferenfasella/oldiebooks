<!-- Start banner Area -->
<section class="generic-banner bg">
    <div class="container">
        <div class="row height align-items-center justify-content-center">
            <div class="col-lg-10">
                <div class="generic-banner-content">
                    <h2 class="text-white">The Detail Page</h2>
                    <p class="text-white">See your the detail of your order <br></p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End banner Area -->

<!-- Detail Pemesanan -->
<div class="whole-wrap">
    <div class="container">
        <div class="section-top-border">
            <h3 class="mb-30">Detail Order</h3>
            <div class="row">
                <div class="col-lg-12">
                    <?php $i = 1; ?>
                    <?php foreach ($pembelian as $us) : ?>
                        <blockquote class="generic-blockquote">
                            <span>Number of Order : <?= $us['no_pemesanan']; ?></span><br>
                            <span>Date of Order : <?= $us['tanggal']; ?></span><br>
                            <span>Total of Order : <?= $us['total_bayar']; ?></span><br>
                            <span>Status : <?= $us['status']; ?></span>
                        </blockquote>
                        <?php $i++; ?>
                    <?php endforeach; ?>
                </div>
            </div>





            <!-- Detail Produk -->

            <div class="section-top-border">
                <h3 class="mb-30">Detail Order</h3>
                <?= $this->session->flashdata('message'); ?>
                <form action="" method="POST">
                    <div class="col-md-15">
                        <div class="progress-table">
                            <table class="table" border="0">
                                <thead>
                                    <tr>
                                        <td><b>No</b></td>
                                        <td><b>Number of Order</b></td>
                                        <td><b>Book</b></td>
                                        <td><b>Total of Book</b></td>
                                        <td><b>Total of Price</b></td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $i = 1; ?>
                                    <?php foreach ($detailbeli as $us) : ?>
                                        <tr>
                                            <td> <?= $i; ?>.</td>
                                            <td><?= $us['no_pemesanan']; ?></td>
                                            <td><?= $us['judul_buku']; ?></td>
                                            <td><?= $us['jumlah']; ?></td>
                                            <td><?= $us['total']; ?></td>

                                        </tr>
                                        <?php $i++; ?>
                                    <?php endforeach; ?>

                                </tbody>

                            </table>
                        </div>
                        <div class="col-md-12">
                            <input type="hidden" name="no_pemesanan" value="<?= $us['no_pemesanan']; ?>">
                            <table class="table">
                                <tr>
                                    <td>Have You Received Your Order?</td>
                                    <td>
                                        <!-- <select name="status" id="status" class="form-control">
                                <option value="">Pilih Status</option>
                                <option value="Diterima">Sudah</option>
                                <option value="Gagal">Belum</option>
                            </select> -->

                                        <div class="default-select" id="default-select">
                                            <select name="status" id="status" >
                                                <option value="">Change Status</option>
                                                <option value="Have Done">Have done</option>
                                                <option value="Failed">Not yet</option>
                                            </select>
                                        </div>


                                        <?= form_error('status', '<small class="text-danger pl-3">', '</small>'); ?>
                                    </td>

                                    <td>
                                        <button type="submit" class="btn btn-danger"><i class="fa fa-save"></i>&nbsp;&nbsp;Change Status</button>
                                    </td>
                                </tr>
                            </table>
                        </div>
                </form>
            </div>
        </div>
    </div>
</div>
</div>
</div>