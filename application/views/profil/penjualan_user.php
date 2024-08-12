
<!-- Start banner Area -->
<section class="generic-banner bg">
    <div class="container">
         <div class="row height align-items-center justify-content-center">
            <div class="col-lg-10">
                <div class="generic-banner-content">
                    <h2 class="text-white">The Form Sell Page</h2>
                    <p class="text-white">ONLY FOR PEKANBARU AND SURROUNDING AREA</p>
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

                <h3 class="mb-30">Form Sell</h3>
                <?= $this->session->flashdata('message'); ?>
                
                <form action="<?= base_url('Profil/tambah'); ?>" method="POST" enctype="multipart/form-data">
                    <div class="mt-10">
                    <label style="font-size: 15px;" >Book Title:  </label>
                        <input type="text" id="judul" value="<?= set_value('judul'); ?>" name="judul" placeholder="Book Title" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Book Title'" class="single-input-primary">
                        <?= form_error('judul', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>

                    <div class="mt-10">
                    <label style="font-size: 15px;" >Author:  </label>
                        <input type="text" id="pengarang" value="<?= set_value('pengarang'); ?>" name="pengarang" placeholder="Author" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Book Title'" class="single-input-primary">
                        <?= form_error('pengarang', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>

                    <div class="mt-10">
                    <label style="font-size: 15px;" >Phone Number:  </label>
                        <input type="text" id="no_hp" value="<?= set_value('no_hp'); ?>" name="no_hp" placeholder="Phone Number" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Book Title'" class="single-input-primary">
                        <?= form_error('no_hp', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>

                    <div class="mt-10">
                    <label style="font-size: 15px;" >Book Condition:  </label>
                    <div class="default-select" id="default-select">
                    <select name="kondisi"  id="kondisi" value="<?= set_value('kondisi'); ?>"  >
                              <option value="">Book Condition</option>
                                <option value="Cluster I - Good condi">Cluster I - Good condi</option>
                                <option value="Cluster II - Damage 80%">Cluster II - Damage 80%</option>
                                <option value="Cluster III - Damage 50%">Cluster III - Damage 50%</option>
                                <option value="Cluster IV - Damage 30%">Cluster IV - Damage 30%</option>
                            </select>
                        <?= form_error('kondisi', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                    </div>

                    <div class="mt-10">
                    <label style="font-size: 15px;" >Address for COD:  </label>
                        <input type="text" id="alamat" value="<?= set_value('alamat'); ?>" name="alamat" placeholder="Address of COD" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Book Title'" class="single-input-primary">
                        <?= form_error('alamat', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>

                    <div class="mt-10">
                    <label style="font-size: 15px;" >Price:  </label>
                        <input type="number" id="harga" value="<?= set_value('harga'); ?>" name="harga" placeholder="Price" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Book Title'" class="single-input-primary">
                        <?= form_error('harga', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                    <div class="mt-10">
                    <label style="font-size: 15px;" >Date:  </label>
                        <input type="date" id="tanggal" value="<?= set_value('tanggal'); ?>" name="tanggal" placeholder="Price" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Book Title'" class="single-input-primary">
                        <?= form_error('tanggal', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>

                    <div class="mt-10">
                    <label style="font-size: 15px;" >Proof of Book Condition:  </label>
                    <div class="custom-file">
                    <input type="file"  id="gambar" name="gambar" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Name'" required class="single-input-primary">
                    </div>
                    </div>

                    <div class="mt-10">  
                        
                    <input type="hidden" name="no_penjualan" value="BOP<?= time() ?>" readonly class="form-control">
                    <input type="hidden" name="id_user" value="<?= set_value('id_user'); ?>" readonly class="form-control">
                    <br>
                    <button type="submit" class="genric-btn primary circle">
                            Sell
                        </button>
                    </div>
                </form>
            </div>
        </div>

    </div>
</div>
</div>
</div>