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
			<section class="section-gap info-area" id="about">
				<div class="container">				
					<div class="single-info row mt-40 align-items-center">
						<div class="col-lg-6 col-md-12 text-center no-padding info-left">
							<div class="info-thumb">
								<img src="<?= base_url('/template/assets/img/profil/') . $user['gambar']; ?>" class="img-fluid info-img" style="width: 500px;" alt="">
							</div>
						</div>
						<div class="col-lg-6 col-md-12 no-padding info-rigth">
							<div class="info-content">
								<h2 class="pb-30"><?= $user['nama']; ?></h2>
								<p>
                <?= $user['email']; ?>
								</p>
		
								<p>
                Joined since <?= date('d F Y', $user['date_created']); ?>	
								</p>
							

								<a href="<?= base_url('Profil/edit') ?>?id=<?= $user['id'] ?>" class="badge badge-warning" style="color:white">Edit Your Profil</a>
								</div>
				
						</div>
					</div>
				</div>
			</section>
			<!-- End about Area -->