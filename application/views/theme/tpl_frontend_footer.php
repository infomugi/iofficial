<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$query = $this->db->query('SELECT * FROM setting WHERE status=1');
$app = $query->row();
?>

<footer id="footer">
  <div class="container hidden-xs">
    <div class="row">
      <div class="col-sm-4">
        <div class="footer__block">
          <a class="logo clearfix" href="#">
            <div class="logo__text">
              <span><?php echo $app->name; ?></span>
              <span><?php echo $app->description; ?></span>
            </div>
          </a>

          <address class="m-t-20 m-b-20 f-14">
            <?php echo $app->address; ?>
          </address>

          <div class="f-20"><?php echo $app->phone; ?></div>
          <div class="f-14 m-t-5"><?php echo $app->email; ?></div>

          <div class="f-20 m-t-20">
            <a href="<?php echo $app->instagram; ?>" class="m-r-10"><i class="zmdi zmdi-instagram"></i></a>
            <a href="<?php echo $app->facebook; ?>" class="m-r-10"><i class="zmdi zmdi-facebook"></i></a>
            <a href="<?php echo $app->twitter; ?>"><i class="zmdi zmdi-twitter"></i></a>
          </div>
        </div>
      </div>
      <div class="col-sm-4">
        <div class="footer__block footer__block--blog">
          <div class="footer__title">Terbaru</div>
          <?php
          $query = $this->db->query('
            SELECT * FROM page ORDER BY id_post DESC LIMIT 3');
          foreach ($query->result() as $row)
          {
            ?>

            <a href="#" title="<?php echo $row->title ?>">
             <?php echo $row->title ?>
             <small>On <?php echo $row->created_date ?></small>
           </a>

           <?php
         }
         ?>
       </div>
     </div>
     <div class="col-sm-4">
      <div class="footer__block">
        <div class="footer__title">Disclaimer</div>

        <div>Donec id elit non mi porta gravida at eget metus. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Donec sed odio dui. Maecenas sed diam eget risus varius blandit sit amet non magna. Sed posuere consectetur est at lobortis. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras justo odio, dapibus ac facilisis in, egestas eget quam.</div>
      </div>
    </div>
  </div>
</div>

<div class="footer__bottom">
  <div class="container">
    <span class="footer__copyright">© <?php echo $app->name; ?></span>

    <a href="#">Tentang Kami</a>
    <a href="#">Terms & Conditions</a>
    <a href="#">Privacy Policy</a>

  </div>

  <div class="footer__to-top" data-rmd-action="scroll-to" data-rmd-target="html">
    <i class="zmdi zmdi-chevron-up"></i>
  </div>
  
</div>
</footer>

<!-- Older IE warning message -->
        <!--[if lt IE 9]>
            <div class="ie-warning">
                <h1>Warning!!</h1>
                <p>You are using an outdated version of Internet Explorer, please upgrade <br/>to any of the following web browsers to access this website.</p>
                <div class="ie-warning__inner">
                    <ul class="ie-warning__download">
                        <li>
                            <a href="http://www.google.com/chrome/">
                                <img src="<?php echo base_url(); ?>assets/backend/img/browsers/chrome.png" alt="">
                                <div>Chrome</div>
                            </a>
                        </li>
                        <li>
                            <a href="https://www.mozilla.org/en-US/firefox/new/">
                                <img src="<?php echo base_url(); ?>assets/backend/img/browsers/firefox.png" alt="">
                                <div>Firefox</div>
                            </a>
                        </li>
                        <li>
                            <a href="http://www.opera.com">
                                <img src="<?php echo base_url(); ?>assets/backend/img/browsers/opera.png" alt="">
                                <div>Opera</div>
                            </a>
                        </li>
                        <li>
                            <a href="https://www.apple.com/safari/">
                                <img src="<?php echo base_url(); ?>assets/backend/img/browsers/safari.png" alt="">
                                <div>Safari</div>
                            </a>
                        </li>
                        <li>
                            <a href="http://windows.microsoft.com/en-us/internet-explorer/download-ie">
                                <img src="<?php echo base_url(); ?>assets/backend/img/browsers/ie.png" alt="">
                                <div>IE (New)</div>
                            </a>
                        </li>
                    </ul>
                </div>
                <p>Sorry for the inconvenience!</p>
            </div>
            <![endif]-->

            <!-- Javascript -->

            <!-- jQuery -->
            <script src="<?php echo base_url(); ?>assets/backend/vendors/bower_components/jquery/dist/jquery.min.js"></script>

            <!-- Bootstrap -->
            <script src="<?php echo base_url(); ?>assets/backend/vendors/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

            <!-- Waves button ripple effects -->
            <script src="<?php echo base_url(); ?>assets/backend/vendors/bower_components/Waves/dist/waves.min.js"></script>

            <!-- Select 2 - Custom Selects -->
            <script src="<?php echo base_url(); ?>assets/backend/vendors/bower_components/select2/dist/js/select2.full.min.js"></script>

            <!-- Slick Carousel - Custom Alerts -->
            <script src="<?php echo base_url(); ?>assets/backend/vendors/bower_components/slick-carousel/slick/slick.min.js"></script>

            <!-- NoUiSlider -->
            <script src="<?php echo base_url(); ?>assets/backend/vendors/bower_components/nouislider/distribute/nouislider.min.js"></script>

            <!-- IE9 Placeholder -->
        <!--[if IE 9 ]>
            <script src="<?php echo base_url(); ?>assets/backend/vendors/bower_components/jquery-placeholder/jquery.placeholder.min.js"></script>
            <![endif]-->

            <!-- Site functions and actions -->
            <script src="<?php echo base_url(); ?>assets/backend/js/app.min.js"></script>

            <!-- Demo only -->
            <script src="<?php echo base_url(); ?>assets/backend/<?php echo base_url(); ?>assets/backend/js/demo/demo.js"></script>
          </body>
          </html>