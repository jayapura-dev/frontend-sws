<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title><?php echo $title ?></title>
    <!-- Meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Pengaduan Elektronik">
    <meta name="keywords" content="By Inspektorat">
    <!-- Favicon icon -->
    <link rel="icon" href="<?php echo base_url()?>assets\frontend\images\KabJayapura.png" type="image/png" sizes="32x32">
    <!-- Bootstrap -->
    <link href="<?php echo base_url()?>assets\frontend\css\bootstrap.min.css" rel="stylesheet" type="text/css" media="all">
    <!-- Font -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,300,500,700,600" rel="stylesheet" type="text/css">
    <!-- Animate CSS -->
    <link rel="stylesheet" href="<?php echo base_url()?>assets\frontend\css\animate.css">
    <!-- Owl Carousel -->
    <link rel="stylesheet" href="<?php echo base_url()?>assets\frontend\css\owl.carousel.css">
    <link rel="stylesheet" href="<?php echo base_url()?>assets\frontend\css\owl.theme.css">
    <!-- Magnific Popup -->
    <link rel="stylesheet" href="<?php echo base_url()?>assets\frontend\css\magnific-popup.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.css" />
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css" />
    <!-- Full Page Animation -->
    <link rel="stylesheet" href="<?php echo base_url()?>assets\frontend\css\animsition.min.css">
    <!-- Ionic Icons -->
    <link rel="stylesheet" href="<?php echo base_url()?>assets\frontend\css\ionicons.min.css">
    <!-- Main Style css -->
    <link href="<?php echo base_url()?>assets\frontend\css\style.css" rel="stylesheet" type="text/css" media="all">
    <link href="<?php echo base_url()?>assets\frontend\css\card.css" rel="stylesheet" type="text/css">
    <link href="<?php echo base_url()?>assets\frontend\css\card2.css" rel="stylesheet" type="text/css">

</head>
<body>
    <div class="wrapper animsition" data-animsition-in-class="fade-in" data-animsition-in-duration="1000" data-animsition-out-class="fade-out" data-animsition-out-duration="1000">
        <div class="container">
             <nav class="navbar navbar-expand-lg navbar-light navbar-default navbar-fixed-top" role="navigation">
                <div class="container">
                    <a class="navbar-brand page-scroll" href="<?php echo base_url()?>"><img src="<?php echo base_url()?>assets\frontend\logos\epengaduan.png" width="100px" alt="jayapuradev Logo"></a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <?php if($this->session->userdata('username') === NULL){?>
                      <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav mr-auto">
                        </ul>
                        <ul class="navbar-nav my-2 my-lg-0">
                            <li className="nav-link page-scroll">
                                <a href="<?php echo base_url()?>Auth"><button class="ui teal button"><i class="fa fa-lock"></i> Login</button></a>
                            </li>
                        </ul>
                      </div>
                    <?php } else {?>
                      <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav mr-auto">
                        </ul>
                        <ul class="navbar-nav my-2 my-lg-0">
                          <li class="nav-link page-scroll">
                            <a href="<?php echo base_url()?>Aduan"><button class="ui green button"><i class="fa fa-bookmark"></i> Aduan</button></a>
                          </li>
                          <li class="nav-link page-scroll">
                              <div class="ui dropdown item">
                                  <button type="button" class="ui green button dropdown-toggle" data-toggle="dropdown">
                                      <strong><i class="fa fa-user"></i> <?php echo $this->session->userdata('username') ?></strong>
                                  </button>
                                  <div class="dropdown-menu">
                                      <div class="ui divider"></div>
                                      <a class="dropdown-item" href="#"><i class="fa fa-lock"></i> Ganti Password</a>
                                      <a class="dropdown-item" href="<?php echo base_url()?>Auth/logout"><i class="fa fa-sign-out"></i> Logout</a>
                                  </div>
                              </div>
                          </li>
                        </ul>
                      </div>

                    <?php } ?>
                </div>
            </nav>
        </div>
        <div class="main" id="main">
            <!-- Main Section-->
            <?php echo $contents ?>
            <!-- Footer Section -->
            <div class="footer">
                <div class="container">
                    <div class="col-md-12 text-center">
                        <img src="<?php echo base_url()?>assets\frontend\images\KabJayapura.png" width="6%" alt="kabjayapura">
                        <ul class="footer-menu">
                            <li><a href="#" target="_blank">Inspektorat</a></li> 
                            | <li><a href="#">Kab. Jayapura</a></li>
                        </ul>
                        <div class="footer-text">
                            <p>
                                Copyright © 2020 Inspektorat.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Scroll To Top -->
            <a id="back-top" class="back-to-top page-scroll" href="#main">
                <i class="ion-ios-arrow-thin-up"></i>
            </a>
            <!-- Scroll To Top Ends-->
        </div>
        <!-- Main Section -->
    </div>
    <!-- Wrapper-->

    <!-- Jquery and Js Plugins -->
    <script type="text/javascript" src="<?php echo base_url()?>assets\frontend\js\jquery-2.1.1.js"></script>
    <script type="text/javascript" src="<?php echo base_url()?>assets\frontend\js\bootstrap.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url()?>assets\frontend\js\plugins.js"></script>
    <script type="text/javascript" src="<?php echo base_url()?>assets\frontend\js\menu.js"></script>
    <script type="text/javascript" src="<?php echo base_url()?>assets\frontend\js\custom.js"></script>

    <script type="text/javascript" src="<?php echo base_url()?>assets\frontend\prism\custom-prism.js"></script>

    
</body>
</html>