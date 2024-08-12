<!-- Start banner Area -->
<section class="generic-banner bg">
    <div class="container">
        <div class="row height align-items-center justify-content-center">
            <div class="col-lg-10">
                <div class="generic-banner-content">
                <h2 class="text-white">The Cart Page</h2>
                    <p class="text-white">Fill your cart and check out <br> </p>
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
                        <td><b>Date</b></td>
                        <td><b>Book Title</b></td>
                        <td><b>Price</b></td>
                        <td><b>Total of Book</b></td>
                        <td><b>Total of Price</b></td>
                        <td><b>Detele</b></td>
                    </tr>
                </thead>
                <tbody>
                    <form action="<?= base_url('Profil/pesanan'); ?>" method="POST" enctype="multipart/form-data">
                        <?php
                        function rupiah($angka)
                        {
                            $hasil_rupiah = "Rp " . number_format($angka, 2, ',', '.');
                            return $hasil_rupiah;
                        }
                        $i = 1;
                        $total_bayar = 0;
                        $total_p = 0; ?>
                        <?php foreach ($keranjang as $us) :
                            $total_bayar += $us['total'];
                        ?>
                            <tr>
                                <td><?= $us['tanggal']; ?></td>
                                <td><?= $us['judul']; ?></td>
                                <td><?= $us['harga']; ?></td>
                                <td><?= $us['jumlah']; ?></td>
                                <td><?= $us['total']; ?></td>
                                <td><a href="<?= base_url('profil/delkeranjang/') . $us['id']; ?>" class="btn btn-warning" onclick="return confirm('Are you sure you want to delete?');"><i class="fa fa-trash" style="color:white"></a></td>
                            </tr>
                            <input type="hidden" name="buku[]" value="<?= $us['id_buku']; ?>">
                            <input type="hidden" name="tanggal" value="<?= date('d/m/Y') ?>">
                            <input type="hidden" name="harga" value="<?= $us['harga']; ?>">
                            <input type="hidden" name="jumlah_p[]" value="<?= $us['jumlah']; ?>">
                            <input type="hidden" name="total_p[]" value="<?= $us['total']; ?>">
                            <?php $i++; ?>
                        <?php endforeach; ?>
                        <tr>
                            <td>Address</td>
                            <td colspan="5"><input name="alamat" type="text" class="form-control" id="alamat"></td>
                        </tr>
                        <tr>
                            <td>Pay</td>
                            <td colspan="5">
                                <select name="pembayaran" id="pembayaran" class="form-control" >
                                    <option value="" class="custom-file-label" >Choose Bank</option>
                                    <option value="BRI">BRI - 1111-11111-11111-1111</option>
                                    <option value="MANDIRI">MANDIRI - 2222-2222-2222</option>
                                    <option value="BNI">BNI - 3333-3333-3333</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td>Proof</td>
                            <td colspan="5">
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" name="gambar" id="gambar">
                                    <label for="gambar" class="custom-file-label">Choose File</label>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>Note</td>
                            <td colspan="5"><input name="keterangan" type="text" class="form-control" id="keterangan"></td>
                        </tr>
                        <tr>
                            <td colspan="4" align="right"><strong>Total: </strong></td>
                            <td><?= rupiah($total_bayar); ?></td>
                            <td>
                                <input type="hidden" name="no_pemesanan" value="OB<?= time() ?>" readonly class="form-control">
                                <input type="hidden" name="bayar" value="<?= $total_bayar; ?>">
                                <button type="submit" class="btn btn-danger"><i class="fa fa-save"></i>&nbsp;&nbsp;Order</button>
                            </td>
                        </tr>
                    </form>
                </tbody>

            </table>
        </div>
    </div>
</div> 
</div>