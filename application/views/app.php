<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- SEO Meta Tags -->
    <meta name="description" content="Mobile app HTML landing page template to help you build a great online presence for your app which will convert visitors into users">
    <meta name="author" content="Inovatik">

    <!-- OG Meta Tags to improve the way the post looks when you share the page on LinkedIn, Facebook, Google+ -->
    <meta property="og:site_name" content="" /> <!-- website name -->
    <meta property="og:site" content="" /> <!-- website link -->
    <meta property="og:title" content="" /> <!-- title shown in the actual shared post -->
    <meta property="og:description" content="" /> <!-- description shown in the actual shared post -->
    <meta property="og:image" content="" /> <!-- image link, make sure it's jpg -->
    <meta property="og:url" content="" /> <!-- where do you want your post to link to -->
    <meta property="og:type" content="article" />

    <!-- Website Title -->
    <title>SKCK - Online</title>

    <!-- Styles -->
    <!-- <link href="https://fonts.googleapis.com/css?family=Montserrat:400,600,700" rel="stylesheet"> -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,400i,700,700i" rel="stylesheet">
    <link href="<?= base_url('src/') ?>css/bootstrap.css" rel="stylesheet">
    <link href="<?= base_url('src/') ?>css/fontawesome-all.css" rel="stylesheet">
    <link href="<?= base_url('src/') ?>css/swiper.css" rel="stylesheet">
    <link href="<?= base_url('src/') ?>css/magnific-popup.css" rel="stylesheet">
    <link href="<?= base_url('src/') ?>css/styles.css" rel="stylesheet">

    <!-- Favicon  -->
    <link rel="icon" href="<?= base_url('src/') ?>images/logo-polres.png">

    <!-- Scripts -->
    <script src="<?= base_url('src/') ?>js/jquery.min.js"></script> <!-- jQuery for Bootstrap's JavaScript plugins -->
    <script src="<?= base_url('src/') ?>js/popper.min.js"></script> <!-- Popper tooltip library for Bootstrap -->
    <script src="<?= base_url('src/') ?>js/bootstrap.min.js"></script> <!-- Bootstrap framework -->
    <script src="<?= base_url('src/') ?>js/jquery.easing.min.js"></script> <!-- jQuery Easing for smooth scrolling between anchors -->
    <script src="<?= base_url('src/') ?>js/swiper.min.js"></script> <!-- Swiper for image and text sliders -->
    <script src="<?= base_url('src/') ?>js/jquery.magnific-popup.js"></script> <!-- Magnific Popup for lightboxes -->
    <script src="<?= base_url('src/') ?>js/morphext.min.js"></script> <!-- Morphtext rotating text in the header -->
    <script src="<?= base_url('src/') ?>js/validator.min.js"></script> <!-- Validator.js - Bootstrap plugin that validates forms -->
    <script src="<?= base_url('src/') ?>js/scripts.js"></script> <!-- Custom scripts -->
</head>

<body data-spy="scroll" data-target=".fixed-top">

    <!-- Preloader -->
    <div class="spinner-wrapper">
        <div class="spinner">
            <div class="bounce1"></div>
            <div class="bounce2"></div>
            <div class="bounce3"></div>
        </div>
    </div>
    <!-- end of preloader -->


    <!-- Navigation -->
    <nav class="navbar navbar-expand-md navbar-dark navbar-custom fixed-top">
        <!-- Text Logo - Use this if you don't have a graphic logo -->
        <!-- <a class="navbar-brand logo-text page-scroll" href="index.html">Leno</a> -->

        <!-- Image Logo -->
        <a class="navbar-brand logo-image" href="<?= base_url('') ?>"><img src="<?= base_url('src/') ?>images/logo.png" alt="alternative"></a>

        <!-- Mobile Menu Toggle Button -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-awesome fas fa-bars"></span>
            <span class="navbar-toggler-awesome fas fa-times"></span>
        </button>
        <!-- end of mobile menu toggle button -->

        <div class="collapse navbar-collapse" id="navbarsExampleDefault">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link page-scroll" href="#header">HOME <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link page-scroll" href="#details">ABOUT </a>
                </li>
                <!-- Dropdown Menu -->

                <!-- end of dropdown menu -->
                <li class="nav-item">
                    <a class="nav-link page-scroll" href="#preview">PREVIEW</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link page-scroll" href="#features">FEATURES</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link page-scroll" href="#contact">CONTACT</a>
                </li>
                <li class="nav-item">
                    <button class="btn-solid-reg" data-toggle="modal" data-target="#pendaftaran">PENDAFTARAN</button>
                </li>

            </ul>
            <span class="nav-item social-icons">
                <span class="fa-stack">
                    <a target="_blank" href="#your-link">
                        <i class="fas fa-circle fa-stack-2x"></i>
                        <i class="fab fa-facebook-f fa-stack-1x"></i>
                    </a>
                </span>
                <span class="fa-stack">
                    <a target="_blank" href="https://www.instagram.com/skck_polrestabandaaceh/?hl=id">
                        <i class="fas fa-circle fa-stack-2x"></i>
                        <i class="fab fa-instagram fa-stack-1x"></i>
                    </a>
                </span>
                <span class="fa-stack">
                    <a target="_blank" href="#your-link">
                        <i class="fas fa-circle fa-stack-2x"></i>
                        <i class="fab fa-twitter fa-stack-1x"></i>
                    </a>
                </span>
            </span>
        </div>
    </nav> <!-- end of navbar -->
    <!-- end of navigation -->

    <!-- Header -->
    <header id="header" class="header">
        <div class="header-content">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="text-container">
                            <h1>WELCOME<br>IN <span id="js-rotating">POLRES, POLRESTA BANDA ACEH</span></h1>
                            <p class="p-large">Kepolisian Republik Indonesia (POLRES) berkomitmen siap mempermudah proses pengurusan SKCK</p>
                            <!-- <a class="btn-solid-lg page-scroll" href="#your-link"><i class="fab fa-apple"></i>APP STORE</a> -->
                            <a class="btn-solid-lg page-scroll" href="#your-link" target="_blank">PENDAFTARAN</a>
                        </div>
                    </div> <!-- end of col -->
                    <div class="col-lg-6">
                        <div class="image-container">
                            <img class="img-fluid" src="<?= base_url('src/') ?>images/logo-polres.png" alt="alternative">
                        </div> <!-- end of image-container -->
                    </div> <!-- end of col -->
                </div> <!-- end of row -->
            </div> <!-- end of container -->
        </div> <!-- end of header-content -->
    </header> <!-- end of header -->
    <!-- end of header -->

    <?php $this->load->view($view);
    ?>

    <!-- Copyright -->
    <div class="copyright">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <p class="p-small">Copyright © 2020 <a href="https://inovatik.com">SKCK Online Banda Aceh</a> - All rights reserved</p>
                </div> <!-- end of col -->
            </div> <!-- enf of row -->
        </div> <!-- end of container -->
    </div> <!-- end of copyright -->
    <!-- end of copyright -->

    <?php $this->load->view($modal);
    ?>

</body>

</html>