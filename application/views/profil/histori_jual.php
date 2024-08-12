<!-- Start banner Area -->
<section class="generic-banner bg">
    <div class="container">
        <div class="row height align-items-center justify-content-center">
            <div class="col-lg-10">
                <div class="generic-banner-content">
                    <h2 class="text-white">The History Page</h2>
                    <p class="text-white">This page contains the history of your sell <br></p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End banner Area -->


 <!-- Detail Produk -->
 <div class="container">
 <div class="section-top-border">
                <h3 class="mb-30">Detail </h3>
                <?= $this->session->flashdata('message'); ?>
                <form action="" method="POST">
                    <div class="col-md-15">
                        <div class="progress-table">
                            <table class="table" border="0">
                                <thead>
                                    <tr>
                                        <td><b>No</b></td>
                                        <td><b>Number of Order</b></td>
                                        <td><b>Book Title</b></td>
                                        <td><b>Address</b></td>
                                        <td><b>Price</b></td>
                                        <td><b>Status</b></td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $i = 1; ?>
                                    <?php foreach ($penjualan as $us) : ?>
                                        <tr>
                                            <td> <?= $i; ?>.</td>
                                            <td><?= $us['no_penjualan']; ?></td>
                                            <td><?= $us['judul']; ?></td>
                                            <td><?= $us['alamat']; ?></td>
                                            <td><?= $us['harga']; ?></td>
                                            <td><?= $us['status']; ?></td>

                                        </tr>
                                        <?php $i++; ?>
                                    <?php endforeach; ?>

                                </tbody>

                            </table>
                        </div>
                        </div>
                        </div>
                        </div>
                        </div>
                        </div>
                        </div>
                        </div>
                        