<!-- Start banner Area -->
<section class="generic-banner bg">
	<div class="container">
		<div class="row height align-items-center justify-content-center">
			<div class="col-lg-10">
				<div class="generic-banner-content">
					<h2 class="text-white">The Login Page</h2>
					<p class="text-white">To keep connected with us<br> please login with your personal info</p>
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



				<h3 class="mb-30">Login here</h3>
				<?= $this->session->flashdata('message'); ?>
				<form method="post" action="<?= base_url('auth/indexuser'); ?>">
					<div class="mt-10">
						<input type="email" id="email" value="<?= set_value('email'); ?>" name="email" placeholder="Email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Email'" required class="single-input-primary">
						<?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>
					</div>
					<div class="mt-10">
						<input type="password" name="password" value="<?= set_value('password'); ?>" placeholder="password" onfocus="this.placeholder = ''" onblur="this.placeholder = 'password'" required class="single-input-primary">
						<?= form_error('password', '<small class="text-danger pl-3">', '</small>'); ?>
					</div>
					<div class="mt-10">
						<a style="color: red;font-size: 10px;" href="<?= base_url('forgot'); ?>">Forgot Password?</a>
					</div>

					<div class="mt-10">
						<p></p>
					</div>
					<div class="mb-30">
						<button type="submit" class="genric-btn primary circle">
							Login
						</button>

					</div>
				</form>
			</div>

			<div class="col-5">

				<div class="login__register">
					<h3>Don’t Have An Account?</h3>
					<div class="mt-10">
						<p></p>
					</div>
					<a href="<?= base_url('Auth/registrasi') ?>" class="genric-btn primary circle">Regist Now</a>
				</div>
			</div>
		</div>
	</div>
</div>