<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<section id="main__content">
	<div class="action-header-alt">
		<div class="action-header__item action-header__item--search">

			<form action="<?php echo site_url('community/members'); ?>" class="form-inline" method="get">
				<div class="input-group">
					<input type="text" class="form-control" placeholder="Cari Member" name="q" value="">
				</div>
			</form>

		</div>

		<div class="action-header__item action-header__add">
			<a href="<?php echo base_url(); ?>community/groupedit/<?php echo $id_site; ?>" class="btn btn-danger btn-sm">Edit Komunitas</a>
		</div>

	</div>

	<div class="main__container">
		<header class="main__title">
			<h2><?php echo $name; ?></h2>
			<small><?php echo $description; ?></small>
		</header>

		<div class="row">
			<div class="col-md-12">
				<div class="list-group list-group--block contact-lists">
					<div class="list-group__header text-left">
						Total Member
					</div>

					
					<div class="col-md-12">
						<table class="table">
							<tr><td>Keywords</td><td><?php echo $keywords; ?></td></tr>
							<tr><td>Favicon</td><td><?php echo $favicon; ?></td></tr>
							<tr><td>Logo</td><td><?php echo $logo; ?></td></tr>
							<tr><td>Address</td><td><?php echo $address; ?></td></tr>
							<tr><td>Phone</td><td><?php echo $phone; ?></td></tr>
							<tr><td>Email</td><td><?php echo $email; ?></td></tr>
							<tr><td>Facebook</td><td><?php echo $facebook; ?></td></tr>
							<tr><td>Instagram</td><td><?php echo $instagram; ?></td></tr>
							<tr><td>Twitter</td><td><?php echo $twitter; ?></td></tr>
							<tr><td>Status</td><td><?php echo $status; ?></td></tr>
						</table>
					</div>
					



				</div>

			</div>

		</div>
	</div>
</section>


