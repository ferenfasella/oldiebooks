<!-- Start banner Area -->
<section class="generic-banner bg">
	<div class="container">
		<div class="row height align-items-center justify-content-center">
			<div class="col-lg-10">
				<div class="generic-banner-content">
					<h2 class="text-white">The Register Page</h2>
					<p class="text-white">
						Create your account and enjoy <br> shopping used books conveniently</p>
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

				<?= $this->session->flashdata('message'); ?>

				<h3 class="mb-30">Regist here</h3>
				<form method="post" action="<?= base_url('auth/registrasi'); ?>">
					<div class="mt-10">
						<input type="nama" id="nama" value="<?= set_value('nama'); ?>" name="nama" placeholder="Full Name" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Full Name'" required class="single-input-primary">
					</div>
					<div class="mt-10">
						<p></p>
					</div>
					<div class="mt-10">
						<input type="email" id="email" value="<?= set_value('email'); ?>" name="email" placeholder="Email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Email'" required class="single-input-primary">
					</div>
					<div class="mt-10">
						<p></p>
					</div>
					<div class="row">

						<div class="col-6">
							<input type="password" name="password1" value="<?= set_value('password1'); ?>" placeholder="password" onfocus="this.placeholder = ''" onblur="this.placeholder = 'password'" required class="single-input-primary">
						</div>
						<div class="col-6">
							<input type="password" name="password2" value="<?= set_value('password2'); ?>" placeholder="confirm password" onfocus="this.placeholder = ''" onblur="this.placeholder = 'password'" required class="single-input-primary">
						</div>
					</div>

					<div class="mt-10">
						<p></p>
					</div>
					<div class="mb-30">
						<button type="submit" class="genric-btn primary circle">
							Register Now
						</button>
					</div>
				</form>
				<div class="mt-10">
						<span style="font-size: 14px;">Have an account? </span><a style="color: red;font-size: 14px;" href="<?= base_url('Auth/indexuser'); ?>">Login Here</a>
					</div>
			</div>


		</div>
	</div>
</div>