<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<section id="main__content">
	<div class="action-header-alt">
		<div class="action-header__item action-header__item--search">

			<form action="<?php echo site_url('site/dashboard'); ?>" class="form-inline" method="get">
				<div class="input-group">
					<input type="text" class="form-control" placeholder="Cari Member" name="q" value="<?php echo $q; ?>">
				</div>
			</form>

		</div>

		<div class="action-header__item action-header__add">
			<a href="<?php echo base_url(); ?>community/register" class="btn btn-danger btn-sm">Registrasi Member</a>
		</div>

	</div>

	<div class="main__container">
		<header class="main__title">
			<h2>IOfficial</h2>
			<small>Connected Community</small>
		</header>

		<div class="row">
			<div class="col-md-8">
				<div class="list-group list-group--block contact-lists">
					<div class="list-group__header text-left">
						<?php echo $total_rows ?> Total Members
					</div>

					<?php
					foreach ($user_data as $user)
					{
						?>
						<div class="list-group__wrap">
							<a class="list-group-item media" href="#view-contact<?php echo $user->id_user ?>" data-toggle="modal">
								<div class="pull-left">
									<div class="avatar-char mdc-bg-amber-400" style="text-transform:uppercase"><?php echo substr($user->fullname, 0,1) ?></div>
								</div>
								<div class="media-body list-group__text">
									<strong style="text-transform:capitalize"><?php echo $user->fullname ?></strong>

									<div class="list-group__attrs">
										<div><?php echo $this->User_model->level($user->level); ?></div>
									</div>
								</div>
							</a>
							<div class="actions list-group__actions">
								<div class="dropdown">
									<a href="contacts.html" data-toggle="dropdown"><i class="zmdi zmdi-more-vert"></i></a>

									<ul class="dropdown-menu pull-right">
										<?php 
										echo "<li>";
										echo anchor(site_url('user/read/'.$user->id_user),'Lihat','data-toggle="tooltip" title="Lihat '.$user->fullname.'"');  
										echo "</li>";
										echo "<li>";
										echo anchor(site_url('user/update/'.$user->id_user),'Edit','data-toggle="tooltip" title="Edit '.$user->fullname.'"');  
										echo "</li>";
										echo "<li>";
										echo anchor(site_url('user/delete/'.$user->id_user),'Hapus','data-toggle="tooltip" title="Hapus '.$user->fullname.'"');  
										echo "</li>";
										?>

									</ul>
								</div>
							</div>
						</div>

						<!-- View Contact -->
						<div class="modal fade" id="view-contact<?php echo $user->id_user ?>">
							<div class="modal-dialog">
								<div class="modal-content">
									<div class="modal-body text-center">
										<div class="view-contact__img">
											<img src="<?php echo base_url(); ?>assets/uploads/avatar/middle/<?php echo $user->image; ?>" class="img-circle" width="150" height="150" alt="">
										</div>

										<div class="m-t-25">
											<h4><?php echo $user->fullname ?></h4>
										</div>

										<div class="m-t-25">
											<small>Email Address</small>
											<div class="text-strong m-t-5"><?php echo $user->email ?></div>
										</div>

										<div class="m-t-25">
											<small>Date of Birth</small>
											<div class="text-strong m-t-5"><?php echo $user->birth ?></div>
										</div>

										<div class="m-t-25">
											<small>Last Login</small>
											<div class="text-strong m-t-5"><?php echo $user->visit_time ?></div>
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

			<div class="col-md-4 visible-lg visible-md">
				<div class="card">
					<div class="card__header">
						<h2>Komunitas</h2>
						<small>Daftar Komunitas</small>
					</div>

					<?php foreach ($group_data as $group) { ?>
						
						<div class="groups-grid groups-grid--widget">
							<a class="groups-grid__item" href="#">
								<div class="groups-grid__img">

									<img class="groups-grid__avatar" src="../img/demo/people/1.jpg" alt="">
									<img class="groups-grid__avatar" src="../img/demo/people/2.jpg" alt="">
									<img class="groups-grid__avatar" src="../img/demo/people/3.jpg" alt="">
									<img class="groups-grid__avatar" src="../img/demo/people/4.jpg" alt="">
								</div>

								<div class="groups-grid__info">
									<strong><?php echo $group->name ?></strong>
									<small class="text-muted">106 Contacts</small>
								</div>
							</a>

							<?php } ?>

							<div class="clearfix"></div>

							<a href="<?php echo base_url(); ?>community/groups" class="view-more">View All</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>




	<!-- Add to group modal -->
	<div class="modal fade" id="add-to-group" data-backdrop="static" data-keyboard="false">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<h4 class="modal-title">Add to group</h4>
				</div>

				<div class="contact-highlight media">
					<div class="pull-left">
						<img src="../img/demo/people/1.jpg" class="img-circle" width="50" height="50" alt="">
					</div>
					<div class="media-body">
						<strong>Mallinda Hollaway</strong>

						<div class="list-group__attrs m-t-5">
							<div>mallinda-h@hmail.com</div>
							<div>(203) 991-4171</div>
						</div>
					</div>
				</div>

				<div class="modal-body">
					<div class="form-group m-0">
						<input type="text" class="form-control" placeholder="Group name...">
						<i class="form-group__bar"></i>
					</div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-link" data-dismiss="modal">Dismiss</button>
					<button type="button" class="btn btn-link">Add</button>
				</div>
			</div>
		</div>
	</div>
