<style>
	img.testi {
		width: 100px;
		height: 100px;
		position: relative;
		overflow: hidden;
		border-radius: 50%;
		display: block;
		margin-left: auto;
		margin-right: auto;
	}
</style>
<!-- start banner Area -->
<section class="banner-area bg" id="home" >
	<div class="container">
		<div class="row fullscreen d-flex align-items-center justify-content-start">
			<div class="banner-content col-lg-7">
				<h5 class="text-white text-uppercase">Welcome to</h5>
				<h1 class="text-uppercase">
					Oldie Books
				</h1>
				<p class="text-white pt-20 pb-20">
					We offer lots of used books in good condition
				</p>
				<a href="<?= base_url('Auth/indexuser') ?>" class="primary-btn text-uppercase">Login Now!</a>
			</div>
			<div class="col-lg-5 banner-right">
				<img class="img-fluid" src="<?= base_url() ?>/template2/img/header-img.png" alt="">
			</div>
		</div>
	</div>
</section>
<!-- End banner Area -->
<!-- halo ini feren -->
<!-- halo lagi -->

<!-- Start testomial Area -->
<section class="testomial-area section-gap">
	<div class="container">
		<div class="row d-flex justify-content-center">
			<div class="menu-content pb-60 col-lg-8">
				<div class="title text-center">
					<h1 class="mb-10">What our Customer’s Say about us</h1>
					<p>Who are in extremely love with our service.</p>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="active-tstimonial-carusel">
				<?php $i = 1; ?>
				<?php foreach ($testi as $us) : ?>
					<div class="single-testimonial item">
						<img class="testi" src="<?= base_url('/template/assets/img/profil/') . $us['gambar']; ?>" alt="">
						<p class="desc">
							<?= $us['testi']; ?>
						</p>
						<h4></h4>
						<p>
							<?= $us['nama']; ?>
						</p>
					</div>
					<?php endforeach ?>
			</div>


		</div>
	</div>
</section>
<!-- End testomial Area -->