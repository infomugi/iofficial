<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<section id="main__content">
	<div class="action-header-alt">
		<div class="action-header__item action-header__item--search">

			<form action="<?php echo site_url('community/groups'); ?>" class="form-inline" method="get">
				<div class="input-group">
					<input type="text" class="form-control" placeholder="Cari Komunitas" name="q" value="<?php echo $q; ?>">
				</div>
			</form>

		</div>

		<div class="action-header__item action-header__add">
			<a href="<?php echo base_url(); ?>community/group" class="btn btn-danger btn-sm">Buat Komunitas</a>
		</div>

	</div>

	<div class="main__container">
		<header class="main__title">
			<h2>IOfficial</h2>
			<small>Connected Community</small>
		</header>

		<div class="row">
			<div class="col-md-12">
				<div class="list-group list-group--block contact-lists">
					<div class="list-group__header text-left">
						<?php echo $total_rows ?> Total Group
					</div>

					<?php
					foreach ($setting_data as $setting)
					{
						?>
						<div class="list-group__wrap">
							<a class="list-group-item media" href="#view-contact<?php echo $setting->id_site ?>" data-toggle="modal">
								<div class="pull-left">
									<div class="avatar-char mdc-bg-amber-400" style="text-transform:uppercase"><?php echo substr($setting->name, 0,1) ?></div>
								</div>
								<div class="media-body list-group__text">
									<strong style="text-transform:capitalize"><?php echo $setting->name ?></strong>

									<div class="list-group__attrs">
										<div><?php echo $setting->address; ?></div>
									</div>
								</div>
							</a>
							<div class="actions list-group__actions">
								<div class="dropdown">
									<a href="contacts.html" data-toggle="dropdown"><i class="zmdi zmdi-more-vert"></i></a>

									<ul class="dropdown-menu pull-right">
										<?php 
										echo "<li>";
										echo anchor(site_url('community/groupview/'.$setting->id_site),'Lihat','data-toggle="tooltip" title="Lihat '.$setting->name.'"');  
										echo "</li>";
										echo "<li>";
										echo anchor(site_url('community/groupedit/'.$setting->id_site),'Edit','data-toggle="tooltip" title="Edit '.$setting->name.'"');  
										echo "</li>";
										echo "<li>";
										echo anchor(site_url('community/groupremove/'.$setting->id_site),'Hapus','data-toggle="tooltip" title="Hapus '.$setting->name.'"');  
										echo "</li>";
										?>

									</ul>
								</div>
							</div>
						</div>

						<!-- View Contact -->
						<div class="modal fade" id="view-contact<?php echo $setting->id_site ?>">
							<div class="modal-dialog">
								<div class="modal-content">
									<div class="modal-body text-center">

										<img src="<?php echo base_url(); ?>assets/uploads/logo/big/<?php echo $setting->logo; ?>" alt="<?php echo $setting->name ?>">

										<div class="m-t-25">
											<h4><?php echo $setting->name ?></h4>
										</div>

										<div class="m-t-25">
											<small>Description</small>
											<div class="text-strong m-t-5"><?php echo $setting->description ?></div>
										</div>

										<div class="m-t-25">
											<small>Address</small>
											<div class="text-strong m-t-5"><?php echo $setting->address ?></div>
										</div>

										<div class="m-t-25">
											<small>Email</small>
											<div class="text-strong m-t-5"><?php echo $setting->email ?></div>
										</div>

										<div class="m-t-25">
											<small>Phone</small>
											<div class="text-strong m-t-5"><?php echo $setting->phone ?></div>
										</div>

										<div class="m-t-25">
											<small>Facebook</small>
											<div class="text-strong m-t-5"><?php echo $setting->facebook ?></div>
										</div>

										<div class="m-t-25">
											<small>Twitter</small>
											<div class="text-strong m-t-5"><?php echo $setting->twitter ?></div>
										</div>

										<div class="m-t-25">
											<small>Instagram</small>
											<div class="text-strong m-t-5"><?php echo $setting->instagram ?></div>
										</div>

									</div>

									<div class="modal-footer text-center modal-footer--bordered">
										<button type="button" class="btn btn-link" data-dismiss="modal">Close</button>
									</div>
								</div>
							</div>
						</div>

						<?php
					}
					?>




				</div>

				<div class="load-more">
					<a href="#"><i class="zmdi zmdi-refresh-alt"></i> Load more contacts</a>
				</div>
			</div>

		</div>
	</div>
</section>


