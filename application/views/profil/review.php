<!-- Start banner Area -->
<section class="generic-banner bg">
    <div class="container">
        <div class="row height align-items-center justify-content-center">
            <div class="col-lg-10">
                <div class="generic-banner-content">
                    <h2 class="text-white">The Review Page</h2>
                    <p class="text-white">Please fill in and your experience after buying a used book with us</p>
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

                <h3 class="mb-30">Tell us about your experience</h3>
                <?= $this->session->flashdata('message'); ?>

                <form action="" method="POST">
                    <div class="mt-10">
                        <label style="font-size: 15px;">Name: </label>
                        <input type="text" id="nama" value="<?= $user['nama'] ?>" name="nama" placeholder="Name" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Book Title'" readonly class="single-input-primary">
                    </div>

                    <div class="mt-10">
                        <label style="font-size: 15px;">Testimoni: </label>
                        <input type="text" id="testi" value="<?= set_value('testi'); ?>" name="testi" placeholder="Testimonial" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Book Title'" class="single-input-primary">
                        <?= form_error('testi', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                    <input type="hidden" name="id_user" value="<?= set_value('id_user'); ?>" readonly class="form-control">


                    <div class="mt-10">

                        <br>
                        <button type="submit" class="genric-btn primary circle">
                            Submit
                        </button>
                    </div>
                </form>
            </div>
        </div>

    </div>
</div>
</div>
</div>