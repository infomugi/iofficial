<section id="main__content">
	<div class="action-header-alt">
		<a class="action-header__item action-header__back" href="<?php echo base_url(); ?>community/members">
			<i class="zmdi zmdi-long-arrow-left"></i> Kembali ke Dashboard
		</a>
	</div>

	<div class="main__container main__container-sm">
		<header class="main__title">
			<h2>Registrasi Member</h2>
		</header>

		<form action="<?php echo $action ?>" id="signinform" method="post" role="form" class="card new-contact" action="/">

			<div class="new-contact__img">
				<img src="<?php echo base_url(); ?>assets/backend/img/user_empty.png" alt="">
				<i input type="file" class="new-contact__upload zmdi zmdi-camera"></i>
			</div>

			<div class="card__body">
				<div class="row">
					<div class="col-sm-12 col-md-12">
						<div class="form-group form-group--float">
							<input type="text" name="fullname" required="true" class="form-control">
							<label>Nama Lengkap</label>
							<i class="form-group__bar"></i>
						</div>
					</div>

					<div class="col-sm-12 col-md-12">
						<div class="form-group form-group--float">
							<input type="text" name="username" required="true" class="form-control">
							<label>Username</label>
							<i class="form-group__bar"></i>
						</div>
					</div>

					<div class="col-sm-12 col-md-12">
						<div class="form-group form-group--float">
							<input type="email" name="email" required="true" class="form-control">
							<label>Email</label>
							<i class="form-group__bar"></i>
						</div>
					</div>

					<div class="col-sm-12 col-md-12">
						<div class="form-group form-group--float">
							<input type="password" name="password" required="true" class="form-control">
							<label>Password</label>
							<i class="form-group__bar"></i>
						</div>
					</div>

				</div>

				<div class="clearfix"></div>

				<div class="m-t-20">
					<button class="btn btn-primary">Register</button>
				</div>
			</div>
		</form>

	</div>
</section>
