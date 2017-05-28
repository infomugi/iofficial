<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$query = $this->db->query('SELECT * FROM setting WHERE status=1');
$app = $query->row();
?>

<div class="header__main">
	<div class="container">
		<a class="logo" href="#">
			<img src="<?php echo base_url(); ?>assets/uploads/logo/big/<?php echo $app->logo; ?>" alt="<?php echo $app->name; ?>" title="<?php echo $app->name; ?>">
			<div class="logo__text">
				<span><?php echo $app->name; ?></span>
				<span><?php echo $app->email; ?></span>
			</div>
		</a>

		<div class="navigation-trigger visible-xs visible-sm" data-rmd-action="block-open" data-rmd-target=".navigation">
			<i class="zmdi zmdi-menu"></i>
		</div>

		<ul class="navigation">
			<li class="visible-xs visible-sm"><a class="navigation__close" data-rmd-action="navigation-close" href="#"><i class="zmdi zmdi-long-arrow-right"></i></a></li>

			<li><a href="#">Home</a></li>
			<li><a href="#">Berita</a></li>
			<li><a href="#">Komunitas</a></li>
			<li><a href="#">Event</a></li>
			<li><a href="#">Kontak</a></li>


		</ul>
	</div>
</div>

<div class="header__search container">
	<form>
		<div class="search">
			<div class="search__type dropdown">
				<a href="#" data-toggle="dropdown">Search</a>

				<div class="dropdown-menu">
					<div>
						<input type="radio" name="property-type" value="community">
						<span>Komunitas</span>
					</div>
					<div>
						<input type="radio" name="property-type" value="people">
						<span>Orang</span>
					</div>
				</div>
			</div>

			<div class="search__body">
				<input type="text" class="search__input" placeholder="Ketik Nama Komunitas" data-rmd-action="advanced-search-open">

				<div class="search__advanced">
					<div class="col-sm-6">
						<div class="form-group form-group--float">
							<input type="text" class="form-control" value="Soreang">
							<label>Lokasi</label>
							<i class="form-group__bar"></i>
						</div>
					</div>

					<div class="col-sm-6">
						<div class="form-group">
							<label>Jenis Komunitas</label>

							<select class="select2">
								<option value="">Olahraga</option>
								<option value="">Seni</option>
								<option value="">Otomotif</option>
								<option value="">Teknologi</option>
								<option value="">Lainnya</option>
							</select>

						</div>
					</div>

					<div class="col-xs-12 m-t-10">
						<button class="btn btn-primary">Search</button>
						<button class="btn btn-link" data-rmd-action="advanced-search-close">Cancel</button>
					</div>
				</div>
			</div>
		</div>
	</form>
</div>

<div class="header__recommended">
	<div class="my-location">
		<div class="my-location__title">Komunitas terdekat dengan lokasi anda</div>
		<div class="dropdown my-location__location hidden-xs">
			<a href="#" data-toggle="dropdown"><i class="zmdi zmdi-pin"></i> Bandung, ID.</a>

			<div class="dropdown-menu pull-right stop-propagate">
				<strong>Ganti Lokasi</strong>
				<small>Cari komunitas berdasarkan nama lokasi.</small>

				<form>
					<div class="form-group form-group--float">
						<input type="email" class="form-control" placeholder="Enter City, State, Zip">
						<i class="form-group__bar"></i>
					</div>

					<div class="my-location__map">
						<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d84147.43307199534!2d-74.15863267618451!3d40.71380993356828!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c24fa5d33f083b%3A0xc80b8f06e177fe62!2sNew+York%2C+NY%2C+USA!5e0!3m2!1sen!2slk!4v1465216708326" style="border:0; width: 100%; height: 250px;" allowfullscreen></iframe>
					</div>
				</form>
			</div>
		</div>
	</div>

	<div class="listings-grid">

		<?php
		$query = $this->db->query('
			SELECT * FROM setting ORDER BY id_site DESC');
		foreach ($query->result() as $row)
		{
			?>
			<div class="listings-grid__item">
				<a href="#">
					<div class="listings-grid__main">
						<img src="<?php echo base_url(); ?>assets/uploads/logo/big/<?php echo $row->logo; ?>" alt="">
						<div class="listings-grid__price"><?php echo $row->name ?></div>
					</div>

					<div class="listings-grid__body">
						<small><?php echo $row->address ?></small>
						<h5><?php echo $row->description ?></h5>
					</div>
				</a>
			</div>
			<?php
		}
		?>


	</div>
</div>
</header>

<section class="section">
	<div class="container">
		<div class="row">
			<div class="col-md-6">
				<div class="card">
					<div class="card__header card__header--minimal">
						<h2>Terpopuler</h2>
						<small>Daftar Komunitas Terpopuler</small>
					</div>

					<div class="grid-widget grid-widget--listings">
						<?php
						$query = $this->db->query('
							SELECT * FROM setting ORDER BY id_site DESC LIMIT 4 ');
						foreach ($query->result() as $row)
						{
							?>

							<div class="col-xs-6">
								<a class="grid-widget__item" href="#">
									<img src="<?php echo base_url(); ?>assets/uploads/logo/big/<?php echo $row->logo; ?>" alt="">

									<div class="grid-widget__info">
										<h3><?php echo $row->name ?></h3>
										<small><?php echo $row->address ?></small>
									</div>
								</a>
							</div>

							<?php
						}
						?>

					</div>

					<a class="view-more" href="#">
						Komunitas Terpopuler <i class="zmdi zmdi-long-arrow-right"></i>
					</a>
				</div>
			</div>

			<div class="col-md-6">
				<div class="card">
					<div class="card__header card__header--minimal">
						<h2>Terbaru</h2>
						<small>Daftar Komunitas Terbaru</small>
					</div>

					<div class="grid-widget grid-widget--listings">

						<?php
						$query = $this->db->query('
							SELECT * FROM setting ORDER BY id_site ASC LIMIT 4');
						foreach ($query->result() as $row)
						{
							?>

							<div class="col-xs-6">
								<a class="grid-widget__item" href="#">
									<img src="<?php echo base_url(); ?>assets/uploads/logo/big/<?php echo $row->logo; ?>" alt="">

									<div class="grid-widget__info">
										<h3><?php echo $row->name ?></h3>
										<small><?php echo $row->address ?></small>
									</div>
								</a>
							</div>

							<?php
						}
						?>

					</div>

					<a class="view-more" href="#">
						Komunitas Terbaru <i class="zmdi zmdi-long-arrow-right"></i>
					</a>
				</div>
			</div>

		</div>
	</div>
</section>