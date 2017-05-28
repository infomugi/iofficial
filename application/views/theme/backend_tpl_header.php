<?php
$query = $this->db->query('SELECT name FROM setting WHERE status=1');
$app = $query->row();

$accounts = $this->db->query('SELECT * FROM user WHERE id_user='.$this->session->userdata('id'));
$account = $accounts->row();
?>


<!DOCTYPE html>
<html lang="en">
<!--[if IE 9 ]><html lang="en" class="ie9"><![endif]-->
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?php echo $pageTitle; ?></title>
  <?php require_once('backend_tpl_asset_header.php'); ?>
</head>

<body>
  <!-- Start page loader -->
  <div id="page-loader">
    <div class="page-loader__spinner"></div>
  </div>
  <!-- End page loader -->

  <header id="header-alt">
    <a href="contacts.html" class="header-alt__trigger hidden-lg" data-rmd-action="block-open" data-rmd-target="#main__sidebar">
      <i class="zmdi zmdi-menu"></i>
    </a>

    <a href="index.html" class="header-alt__logo hidden-xs"><?php echo $app->name; ?></a>

    <ul class="header-alt__menu">
      <li>
        <a href="contacts.html" data-rmd-action="block-open" data-rmd-target=".header-alt__search-wrap" data-rmd-backdrop-class="backdrop--search">
          <i class="zmdi zmdi-search"></i>
        </a>
      </li>
    <!--       
      <li class="dropdown">
        <a href="contacts.html" data-toggle="dropdown"><i class="zmdi zmdi-notifications"></i></a>

        <div class="dropdown-menu dropdown-menu--lg pull-right">
          <div class="list-group__header">
            NOTIFICATIONS
          </div>
          <div class="list-group">
            <a class="list-group-item media" href="contacts.html">
              <div class="pull-right">
                <img class="list-group__img img-circle" width="40" height="40" src="../img/demo/people/1.jpg" alt="">
              </div>
              <div class="media-body list-group__text">
                <strong>David Belle</strong>
                <small>Cum sociis natoque penatibus et magnis dis parturient montes</small>
              </div>
            </a>
            <a class="list-group-item media" href="contacts.html">
              <div class="pull-right">
                <img class="list-group__img img-circle" width="40" height="40" src="../img/demo/people/3.jpg" alt="">
              </div>
              <div class="media-body list-group__text">
                <strong class="lgi-heading">Jonathan Morris</strong>
                <small class="lgi-text">Nunc quis diam diamurabitur at dolor elementum, dictum turpis vel</small>
              </div>
            </a>
            <a class="list-group-item" href="contacts.html">
              <div class="list-group__text">
                <strong>Fredric Mitchell Jr.</strong>
                <small class="lgi-text">Phasellus a ante et est ornare accumsan at vel magnauis blandit turpis at augue ultricies</small>
              </div>
            </a>
            <a class="list-group-item" href="contacts.html">
              <div class="list-group__text">
                <strong>Glenn Jecobs</strong>
                <small class="lgi-text">Ut vitae lacus sem ellentesque maximus, nunc sit amet varius dignissim, dui est consectetur neque</small>
              </div>
            </a>
            <a class="list-group-item media" href="contacts.html">
              <div class="pull-right">
                <img class="list-group__img img-circle" width="40" height="40" src="../img/demo/people/6.jpg" alt="">
              </div>
              <div class="media-body list-group__text">
                <strong>Bill Phillips</strong>
                <small class="lgi-text">Proin laoreet commodo eros id faucibus. Donec ligula quam, imperdiet vel ante placerat</small>
              </div>
            </a>
            <a href="contacts.html" class="view-more">View all</a>
          </div>
        </div>
      </li>
      <li class="dropdown">
        <a href="contacts.html" data-toggle="dropdown"><i class="zmdi zmdi-email"></i></a>

        <div class="dropdown-menu dropdown-menu--lg pull-right">
          <div class="list-group">
            <div class="list-group__header">
              MESSAGES
            </div>
            <a class="list-group-item media" href="contacts.html">
              <div class="pull-left">
                <img class="list-group__img img-circle" width="40" height="40" src="../img/demo/people/1.jpg" alt="">
              </div>
              <div class="media-body list-group__text">
                <strong>David Belle</strong>
                <small>Cum sociis natoque penatibus et magnis dis parturient montes</small>
              </div>
            </a>
            <a class="list-group-item media" href="contacts.html">
              <div class="pull-left">
                <img class="list-group__img img-circle" width="40" height="40" src="../img/demo/people/3.jpg" alt="">
              </div>
              <div class="media-body list-group__text">
                <strong>Jonathan Morris</strong>
                <small>Nunc quis diam diamurabitur at dolor elementum, dictum turpis vel</small>
              </div>
            </a>
            <a class="list-group-item media" href="contacts.html">
              <div class="pull-left">
                <img class="list-group__img img-circle" width="40" height="40" src="../img/demo/people/4.jpg" alt="">
              </div>
              <div class="media-body list-group__text">
                <strong>Fredric Mitchell Jr.</strong>
                <small>Phasellus a ante et est ornare accumsan at vel magnauis blandit turpis at augue ultricies</small>
              </div>
            </a>
            <a class="list-group-item media" href="contacts.html">
              <div class="pull-left">
                <img class="list-group__img img-circle" width="40" height="40" src="../img/demo/people/5.jpg" alt="">
              </div>
              <div class="media-body list-group__text">
                <strong>Glenn Jecobs</strong>
                <small>Ut vitae lacus sem ellentesque maximus, nunc sit amet varius dignissim, dui est consectetur neque</small>
              </div>
            </a>
            <a class="list-group-item media" href="contacts.html">
              <div class="pull-left">
                <img class="list-group__img img-circle" width="40" height="40" src="../img/demo/people/6.jpg" alt="">
              </div>
              <div class="media-body list-group__text">
                <strong>Bill Phillips</strong>
                <small>Proin laoreet commodo eros id faucibus. Donec ligula quam, imperdiet vel ante placerat</small>
              </div>
            </a>

            <a class="view-more" href="contacts.html">View all</a>
          </div>
        </div>
      </li> 
    -->
    <li class="hidden-xs">
      <a href="<?php echo base_url(); ?>/community/index"><i class="zmdi zmdi-home"></i></a>
    </li>
    <li class="header-alt__profile dropdown">
      <a href="#" data-toggle="dropdown">
       <img src="<?php echo base_url(); ?>assets/uploads/avatar/middle/<?php echo $account->image; ?>" class="header-avatar img-circle" alt="<?php echo $account->fullname; ?>" title="<?php echo $account->fullname; ?>">
     </a>

     <ul class="dropdown-menu pull-right">
       <li>
        <a href="<?php echo base_url(); ?>user/setting">Edit Profile</a>
      </li>
      <li>
        <a href="<?php echo base_url(); ?>user/password">Change Password</a>
      </li>  
      <li>
        <a href="<?php echo base_url(); ?>user/avatar">Change Avatar</a>
      </li>                            
      <li role="separator" class="divider"></li>
      <li>
        <a href="<?php echo base_url(); ?>auth/logout">Logout</a>
      </li>
    </ul>
  </li>
</ul>

<div class="header-alt__search-wrap">
  <form class="header-alt__search" action="<?php echo site_url('community/members'); ?>" method="get">
    <div class="input-group">
      <input type="text" placeholder="Cari Member" name="q">
    </div>

    <i class="zmdi zmdi-long-arrow-left" data-rmd-action="block-close" data-rmd-target=".header-alt__search-wrap"></i>

  </form>
</div>
</header>


<main id="main">
  <aside id="main__sidebar">
    <a class="hidden-lg main__block-close" href="contacts.html" data-rmd-action="block-close" data-rmd-target="#main__sidebar">
      <i class="zmdi zmdi-long-arrow-left"></i>
    </a>

    <ul class="main-menu">
      <li><a href="<?php echo base_url(); ?>community/index"><i class="zmdi zmdi-home"></i> Beranda</a></li>
      <li><a href="<?php echo base_url(); ?>community/members"><i class="zmdi zmdi-account-box"></i> Anggota</a></li>
      <li><a href="<?php echo base_url(); ?>community/groups"><i class="zmdi zmdi-chart"></i> Komunitas</a></li>
      <!--         
      <li><a href="tasks-lists.html"><i class="zmdi zmdi-check-circle"></i> Verified Members</a></li>
        <li><a href="listings.html"><i class="zmdi zmdi-view-list"></i> Listings</a></li>
        <li><a href="leads.html"><i class="zmdi zmdi-assignment "></i> Leads</a></li>
        <li><a href="notes.html"><i class="zmdi zmdi-file-text"></i> Notes</a></li>
        <li><a href="calendar.html"><i class="zmdi zmdi-calendar"></i> Calendar</a></li>
        <li><a href="questions-answers.html"><i class="zmdi zmdi-help"></i> Questions & Answers</a></li>
        <li><a href="activity-log.html"><i class="zmdi zmdi-time"></i> Activity Log</a></li> 
      -->
    </ul>
  </aside>