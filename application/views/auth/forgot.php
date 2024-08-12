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



				<h3 class="mb-30">Find Your Account</h3>
				<?= $this->session->flashdata('message'); ?>
				<form method="post" action="<?= base_url('Forgot/forgot'); ?>">
					<div class="mt-10">
						<input type="email" id="email" value="<?= set_value('email'); ?>" name="email" placeholder="Check Email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Email'" required class="single-input-primary">
					</div>

					<div class="mt-10">
						<p></p>
					</div>
					<div class="mb-30">
						<button type="submit"  name="submit-step-one" class="genric-btn primary circle">
							Check
						</button>

					</div>
				</form>
			</div>

		</div>
	</div>
</div>