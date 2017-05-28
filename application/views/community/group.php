<section id="main__content">
	<div class="action-header-alt">
		<a class="action-header__item action-header__back" href="<?php echo base_url(); ?>community/groups">
			<i class="zmdi zmdi-long-arrow-left"></i> Kembali ke Dashboard
		</a>
	</div>

	<div class="main__container main__container-sm">
		<header class="main__title">
			<h2>Registrasi Komunitas</h2>
		</header>

		<form action="<?php echo $action ?>" id="signinform" method="post" role="form" class="card new-contact">

			<div class="new-contact__img">
				<img src="<?php echo base_url(); ?>assets/backend/img/user_empty.png" alt="">
			</div>

			<div class="card__body">
				<div class="row">
					<div class="col-sm-12 col-md-12">
						<div class="form-group form-group--float">
							<input type="text" class="form-control" name="name" id="name" value="<?php echo $name; ?>" />
							<?php echo form_error('name') ?>
							<label>Nama Komunitas</label>
							<i class="form-group__bar"></i>
						</div>
					</div>

					<div class="col-sm-12 col-md-12">
						<div class="form-group form-group--float">
							<textarea class="form-control" rows="3" name="description" id="description"><?php echo $description; ?></textarea>
							<?php echo form_error('description') ?>
							<label>Description</label>
							<i class="form-group__bar"></i>
						</div>
					</div>


					<div class="col-sm-12 col-md-12">
						<div class="form-group form-group--float">
							<input type="text" class="form-control" name="keywords" id="keywords" value="<?php echo $keywords; ?>" />
							<?php echo form_error('keywords') ?>
							<label>Keywords</label>
							<i class="form-group__bar"></i>
						</div>
					</div>


					<div class="col-sm-12 col-md-12">
						<div class="form-group form-group--float">
							<input type="text" class="form-control" name="favicon" id="favicon" value="<?php echo $favicon; ?>" />
							<?php echo form_error('favicon') ?>
							<label>Favicon</label>
							<i class="form-group__bar"></i>
						</div>
					</div>

					<div class="col-sm-12 col-md-12">
						<div class="form-group form-group--float">
							<textarea class="form-control" rows="3" name="address" id="address"><?php echo $address; ?></textarea>
							<?php echo form_error('address') ?>
							<label>Address</label>
							<i class="form-group__bar"></i>
						</div>
					</div>					

					<div class="col-sm-12 col-md-12">
						<div class="form-group form-group--float">
							<input type="text" class="form-control" name="keywords" id="keywords" value="<?php echo $keywords; ?>" />
							<label>Keywords</label>
							<i class="form-group__bar"></i>
						</div>
					</div>

					<div class="col-sm-12 col-md-12">
						<div class="form-group form-group--float">
							<textarea class="form-control" rows="3" name="address" id="address"><?php echo $address; ?></textarea>
							<label>Address</label>
							<i class="form-group__bar"></i>
						</div>
					</div>

					<div class="col-sm-12 col-md-12">
						<div class="form-group form-group--float">
							<input type="text" class="form-control" name="phone" id="phone" value="<?php echo $phone; ?>" />
							<?php echo form_error('phone') ?>
							<label>Phone</label>
							<i class="form-group__bar"></i>
						</div>
					</div>

					<div class="col-sm-12 col-md-12">
						<div class="form-group form-group--float">
							<input type="text" class="form-control" name="email" id="email" value="<?php echo $email; ?>" />
							<?php echo form_error('email') ?>
							<label>Email</label>
							<i class="form-group__bar"></i>
						</div>
					</div>					

					<div class="col-sm-12 col-md-12">
						<div class="form-group form-group--float">
							<input type="text" class="form-control" name="facebook" id="facebook" value="<?php echo $facebook; ?>" />
							<?php echo form_error('facebook') ?>
							<label>Facebook</label>
							<i class="form-group__bar"></i>
						</div>
					</div>	

					<div class="col-sm-12 col-md-12">
						<div class="form-group form-group--float">
							<input type="text" class="form-control" name="instagram" id="instagram" value="<?php echo $instagram; ?>" />
							<?php echo form_error('instagram') ?>
							<i class="form-group__bar"></i>
						</div>
					</div>	

					<div class="col-sm-12 col-md-12">
						<div class="form-group form-group--float">
							<input type="text" class="form-control" name="twitter" id="twitter" value="<?php echo $twitter; ?>" />
							<?php echo form_error('twitter') ?>
							<label>Twitter</label>
						</div>
					</div>															

				</div>

				<div class="clearfix"></div>
				<div class="m-t-20">
					<button type="submit" class="btn btn-primary"><?php echo $button ?></button> 
					<input type="hidden" name="id_site" value="<?php echo $id_site; ?>" /> 
				</div>
			</div>
			
		</form>

	</div>
</section>
