  <!-- Start banner Area -->
  <section class="generic-banner bg">
  	<div class="container">
  		<div class="row height align-items-center justify-content-center">
  			<div class="col-lg-10">
  				<div class="generic-banner-content">
  					<h2 class="text-white">The Shopping Page</h2>
  					<p class="text-white">You can view the catalogs of your prospective books! <br></p>
  				</div>
  			</div>
  		</div>
  	</div>
  </section>
  <!-- End banner Area -->




  <!-- Start price Area -->
  <section class="price-area section-gap" id="price">
  	<div class="container">
  		<div class="row d-flex justify-content-center">
  			<div class="menu-content pb-60 col-lg-8">

  			</div>
  		</div>
  		<div class="row">
  			<?php $i = 1; ?>
  			<?php foreach ($buku as $us) : ?>
  				<div class="col-lg-4">
  					<div class="single-price no-padding">
  						<div class="price-top">
  							<h4><?= $us['judul'] ?></h4>
  						</div>
  						<div style="overflow: hidden; padding: 0; max-width: 350px;">
  							<img class="img-fluid" src="<?= base_url('template/assets/img/buku/') . $us['gambar']; ?>" style="max-height: 400px; display: block; margin: auto; width: 600%;" alt="">
  						</div>

  						<p>
  							Stok: <?= $us['stok'] ?><br>
  							Kondisi Buku: <?= $us['kondisi'] ?>
  						</p>
  						<div class="price-bottom">
  							<h4><span>Rp.</span><?= $us['harga'] ?></h4>
  							<?php if ($us['stok'] <= 0) {
								?>
  								<a class="primary-btn header-btn" onclick="return confirm('Out of stock!');">Purchase Now</a>
  							<?php

								}else{
									?>
  								<a href="<?= base_url('Profil/keranjang/') . $us['id'] ?>" class="primary-btn header-btn">Purchase Now</a>
  							<?php
								} ?>
  				
  						</div>
  					</div>
  				</div>

  			<?php endforeach ?>
  		</div>
  	</div>

  </section>
  <!-- End price Area -->