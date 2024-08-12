  <!-- Start banner Area -->
  <section class="generic-banner bg">				
				<div class="container">
					<div class="row height align-items-center justify-content-center">
						<div class="col-lg-10">
							<div class="generic-banner-content">
								<h2 class="text-white">The Profile Page</h2>
								<p class="text-white">You can see the account <br> you are currently using here</p>
							</div>
						</div>
					</div>
				</div>
			</section>		
			<!-- End banner Area -->
   

    <!-- Start about Area -->
	<div class="container">
    <div class="section-top-border">
        <div class="row">
            <div class="col-lg-6">

                <h3 class="mb-30">Edit Your Profil</h3>
                <?= $this->session->flashdata('message'); ?>
                <form method="post" action="<?= base_url('Profil/edit') ?>" enctype="multipart/form-data">
                    <input type="hidden" name="id" value="<?= $user['id']; ?>">
					<!-- <input type="hidden" name="role" value="<?= $user['role']; ?>">
					<input type="hidden" name="date_created" value="<?= $user['date_created']; ?>">
					<input type="hidden" name="password" value="<?= $user['password']; ?>"> -->
	
                    <div class="mt-10">
                        <label style="font-size: 15px;" >Email:  </label>
                        <input type="text" id="email" value="<?= $user['email']; ?>" name="email" placeholder="Book Title" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Book Title'" readonly class="single-input-primary">
                    </div>
                    
                    <div class="mt-10">
                    <label style="font-size: 15px;" >Name:  </label>
                        <input type="text"  id="nama" name="nama" value="<?= $user['nama']; ?>" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Name'" required class="single-input-primary">
                    </div>
                    <div class="mt-10">
                    <label style="font-size: 15px;" >Avatar:  </label>
					<input type="file"  id="gambar" name="gambar" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Name'" required class="single-input-primary">
                    </div>

                    <div class="mt-10">
                        <p></p>
                    </div>
                    <div class="mb-30">
                        <button type="submit" class="genric-btn primary circle">
                            Edit
                        </button>


                    </div>
                </form>
            </div>
            <img src="<?= base_url('template/assets/img/profil/') . $user['gambar']; ?>" style="width: 500px;" class="img-thumbnail">
        </div>
    </div>
</div>
</div>
			<!-- End about Area -->