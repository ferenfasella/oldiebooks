<!-- Start banner Area -->
<section class="generic-banner bg">
    <div class="container">
        <div class="row height align-items-center justify-content-center">
            <div class="col-lg-10">
                <div class="generic-banner-content">
                <h2 class="text-white">The Form Cart Page</h2>
                    <p class="text-white">Fill the form and take your book to your cart <br> </p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End banner Area -->

<div class="container">
    <div class="section-top-border">
        <div class="row">
            <div class="col-lg-6">

                <h3 class="mb-30">Form Cart</h3>
                <?= $this->session->flashdata('message'); ?>
                <form method="post" action="">
                    <input type="hidden" name="id" value="<?= $buku['id']; ?>">
                    <input type="hidden" name="tanggal" value="<?= date('d/m/Y') ?>">
                    <input type="hidden" name="stok" value="<?= $buku['stok'] ?>">
                    <div class="mt-10">
                        <label style="font-size: 15px;" > Title:  </label>
                        <input type="text" id="judul" value="<?= $buku['judul']; ?>" name="judul" placeholder="Book Title" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Book Title'" readonly class="single-input-primary">
                    </div>
                    <div class="mt-10">
                    <label style="font-size: 15px;" > Condition:  </label>
                        <input type="text" id="kondisi" value="<?= $buku['kondisi']; ?>" name="kondisi" placeholder="Book Condition" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Book Condition'" readonly class="single-input-primary">
                    </div>
                    <div class="mt-10">
                    <label style="font-size: 15px;" > Weight:  </label>
                        <input type="text" id="berat" value="<?= $buku['berat']; ?>" name="berat" placeholder="The Weight of the Book" onfocus="this.placeholder = ''" onblur="this.placeholder = 'The Weight of the Book'" readonly class="single-input-primary">
                    </div>
                    <div class="mt-10">
                    <label style="font-size: 15px;" > Stock:  </label>
                        <input type="text" id="stok" value="<?= $buku['stok']; ?>" name="stok" placeholder="Stock" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Stock'" readonly class="single-input-primary">
                    </div>
                    <div class="mt-10">
                    <label style="font-size: 15px;" > Price:  </label>
                        <input type="text" id="harga" value="<?= $buku['harga']; ?>" name="harga" placeholder="Price" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Price'" readonly class="single-input-primary">
                    </div>
                    <div class="mt-10">
                    <label style="font-size: 15px;" > Total of Book:  </label>
                        <input type="number" id="jumlah" name="jumlah" placeholder="The Total Number Of Books You Want To Buy" onfocus="this.placeholder = ''" onblur="this.placeholder = 'The Total Number Of Books You Want To Buy'" required class="single-input-primary" min="1" max="<?= $buku['stok']?>">
                    </div>
                    <div class="mt-10">
                    <label style="font-size: 15px;" > Total of Price:  </label>
                        <input type="text" id="total" name="total" placeholder="Total" onfocus="this.placeholder = ''" onblur="findTotal()" readonly class="single-input-primary">
                    </div>
                    <div class="mt-10">
                        <p></p>
                    </div>
                    <div class="mb-30">
                        <button type="submit" class="genric-btn primary circle">
                            Add to Cart
                        </button>


                    </div>
                </form>
            </div>
            <div class="col-5">

                <div class="login__register">
                    <img src="<?= base_url('template/assets/img/buku/') . $buku['gambar']; ?>" style="width:400px" class="img-thumbnail">
                    <div class="mt-10">
                        <p></p>
                    </div>
                </div>


            </div>
        </div>
    </div>
</div>
</div>