<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Educatia, Learning to Earning | <?=isset($title)?$title:''?></title>
    <link rel="apple-touch-icon" sizes="180x180" href="<?=base_url()?>assets/images/favicons/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="<?=base_url()?>assets/images/favicons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="<?=base_url()?>assets/images/favicons/favicon-16x16.png">
    <link rel="manifest" href="<?=base_url()?>assets/images/favicons/site.webmanifest">

    <!-- plugin scripts -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,500i,600,700,800%7CSatisfy&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?=base_url()?>assets/css/animate.min.css">
    <link rel="stylesheet" href="<?=base_url()?>assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?=base_url()?>assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="<?=base_url()?>assets/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="<?=base_url()?>assets/plugins/fontawesome-free-5.11.2-web/css/all.min.css">
    <link rel="stylesheet" href="<?=base_url()?>assets/plugins/kipso-icons/style.css">
    <link rel="stylesheet" href="<?=base_url()?>assets/css/magnific-popup.css">
    <link rel="stylesheet" href="<?=base_url()?>assets/css/vegas.min.css">

    <!-- template styles -->
    <link rel="stylesheet" href="<?=base_url()?>assets/css/style.css">
    <link rel="stylesheet" href="<?=base_url()?>assets/css/responsive.css">
</head>

<body>
    <div class="preloader"><span></span></div><!-- /.preloader -->
    <div class="page-wrapper">
        <div class="topbar-one">
            <div class="container">
                <div class="topbar-one__left">
                    <a href="mailto:educatia@gmail.com">
                        <span class="kipso-icon-email"></span>&nbsp; <?=$web->email?></a>
                    <a href="tel:+919630022515"><span class="kipso-icon-contact"></span>&nbsp; <?=$web->phone1?></a>
                </div><!-- /.topbar-one__left -->
                <div class="topbar-one__right">
                    <a href="<?=$web->fblink?>"><i class="fab fa-facebook-square fa-lg"></i></a>
                    <a href="<?=$web->instalink?>"><i class="fab fa-instagram fa-lg"></i></a>
                    <a href="<?=$web->youtubelink?>"><i class="fab fa-youtube fa-lg"></i></a>
                </div><!-- /.topbar-one__right -->
            </div><!-- /.container -->
        </div><!-- /.topbar-one -->
        <header class="site-header site-header__header-one ">
            <nav class="navbar navbar-expand-lg navbar-light header-navigation stricky">
                <div class="container clearfix">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="logo-box clearfix">
                        <a class="navbar-brand" href="index.html">
                            <img src="<?=base_url()?>assets/images/logo-dark.png" class="main-logo" width="128" alt="Awesome Image" />
                        </a>
                        <div class="div d-flex ml-auto" style="align-items:center">
                            <a class="header__search-btn search-popup__toggler mr-5" style="display: none;" href="#"><i class="kipso-icon-professor"></i>&nbsp;+
                                <!-- /.kipso-icon-magnifying-glass --></a>
                            <button class="menu-toggler" data-target=".main-navigation">
                                <span class="kipso-icon-menu"></span>
                            </button>
                        </div>
                    </div><!-- /.logo-box -->
                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="main-navigation">
                        <ul class=" navigation-box">
                            <li class="current">
                                <a href="index.html">Home</a>
                            </li>
                            <li>
                                <a href="<?=base_url('about')?>">About Us</a>
                            </li>
                            <li>
                                <a href="#">Our Work</a>
                                <ul class="sub-menu">
                                    <li><a href="<?=base_url('courses')?>">Courses</a></li>
                                    <li><a href="<?=base_url('training')?>">Trainings & Workshops</a></li>
                                    <li><a href="<?=base_url('gallery')?>">Gallery</a></li>
                                </ul><!-- /.sub-menu -->
                            </li>
                            <li>
                                <a href="<?=base_url('news')?>">News & Events</a>
                            </li>
                            <!-- <li>
                                <a href="contact.html">Blog</a>
                            </li> -->
                            <li>
                                <a href="<?=base_url('contact')?>">Contact</a>
                            </li>
                        </ul>
                    </div><!-- /.navbar-collapse -->
                    <div class="right-side-box"  data-toggle="tooltip" data-placement="top" title="Enroll now">
                        <a class="header__search-btn search-popup__toggler" href="#"><i class="kipso-icon-professor"></i> &nbsp;+
                            <!-- /.kipso-icon-magnifying-glass --></a>
                    </div><!-- /.right-side-box -->
                </div>
                <!-- /.container -->
            </nav>
        </header><!-- /.site-header -->