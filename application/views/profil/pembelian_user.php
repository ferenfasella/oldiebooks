<!-- Start banner Area -->
<section class="generic-banner bg">
    <div class="container">
        <div class="row height align-items-center justify-content-center">
            <div class="col-lg-10">
                <div class="generic-banner-content">
                    <h2 class="text-white">The Order Page</h2>
                    <p class="text-white">Check the status of your book order here</p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End banner Area -->


<div class="container">
    <div class="section-top-border">
    <?= $this->session->flashdata('message');?>
    <div class="col-md-15">
        <div class="progress-table">
            <table class="table" border="0">
                <thead>
                    <tr>
                        <td><b>No</b></td>
                        <td><b>Number of Order</b></td>
                        <td><b>Date</b></td>
                        <td><b>Total of Price</b></td>
                        <td><b>Status</b></td>
                        <td><b>Action</b></td>
                    </tr>
                </thead>
                <tbody>
                <?php $i = 1; ?>
                    <?php foreach ($pembelian as $us) : ?>
                        <tr>
                            <td> <?= $i; ?>.</td>
                            <td><?= $us['no_pemesanan']; ?></td>
                            <td><?= $us['tanggal']; ?></td>
                            <td><?= $us['total_bayar']; ?></td>
                            <td><?= $us['status']; ?></td>
                            <td>

                                <a href="<?= base_url('Profil/statusbeli/') . $us['no_pemesanan']; ?>" class="badge badge-warning" style="color:white">Detail</a>

                            </td>
                        </tr>
                        <?php $i++; ?>
                    <?php endforeach; ?>
                        
                </tbody>

            </table>
        </div>
    </div>
</div> 
</div>