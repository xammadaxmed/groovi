<?php

use app\assets\AppAsset;
use app\helpers\Route;
use yii\helpers\Html;

AppAsset::register($this);
?>


<?php
$this->beginPage();
?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">

<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>

    <link rel="stylesheet" href="<?= Route::base() ?>/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?= Route::base() ?>/assets/css/animate.css">
    <link rel="stylesheet" href="<?= Route::base() ?>/assets/css/newfont.css">
    <link rel="stylesheet" href="<?= Route::base() ?>/assets/css/owl.carousel.css">
    <link rel="stylesheet" href="<?= Route::base() ?>/assets/css/fontawesome-all.css">
    <link rel="stylesheet" href="<?= Route::base() ?>/assets/css/swiper.css">
    <link rel="stylesheet" href="<?= Route::base() ?>/assets/css/jquery.bxslider.min.css">
    <link rel="stylesheet" href="<?= Route::base() ?>/assets/css/jquery.mCustomScrollbar.min.css">
    <link rel="stylesheet" href="<?= Route::base() ?>/assets/css/odometer-theme-default.css">
    <link rel="stylesheet" href="<?= Route::base() ?>/assets/css/flaticon.css">
    <link rel="stylesheet" href="<?= Route::base() ?>/assets/css/style.css">
    <style>
        .feature-eight-section .eight-feature-box {
            height: 400px !important;
        }
        .btn_pricing_footer
        {
            height: 48px;
            width: 162px;
            border: none;
            border-radius: 30px;
            text-align: center;
            background-color: transparent;
            background-image: linear-gradient(90deg, #ff03d0 0%, #4599fb 53%, #70fcff 99%);
            color: white !important;
            padding: 15px 50px 15px 50px;
            margin-bottom: 20px;
            font-weight: bold;

        }
    </style>
</head>

<body class="app-eight-home" data-spy="scroll" data-target=".navigation-eight" data-offset="50">
    <!-- preloader - start -->
    <?php $this->beginBody() ?>
    <div id="preloader" class="ei-preloader"></div>
    <div class="ei-up">
        <a href="#" id="scrollup" class="ei-scrollup text-center"><i class="fas fa-angle-up"></i></a>
    </div>
    <!-- Start of header section
        ============================================= -->
    <header id="header-eight" class="main-header-eight">
        <div class="appheader-content">
            <div class="site-logo float-left">
                <a href="#"><img src="<?= Route::base() ?>/assets/img/app-landing/logo/logo1.png" alt=""></a>
            </div>
            <nav class="navigation-eight ul-li">
                <ul>

                    <li><a class="nav-link" href="#">Home</a></li>
                    <li class="dropdown">
                        <a href="#">Services</a>
                        <ul class="dropdown-menu clearfix">
                            <li><a target="_blank" href="#">Instagram Bot</a></li>
                            <li><a target="_blank" href="#">Tiktok Bot</a></li>
                        </ul>
                    </li>
                    <li><a class="nav-link" href="#">Pricing</a></li>
                    <li class="dropdown">
                        <a href="#">Tools</a>
                        <ul class="dropdown-menu clearfix">
                            <li><a target="_blank" href="#">HASHTAGS</a></li>
                            <li><a target="_blank" href="#">PROFILES</a></li>
                            <li><a target="_blank" href="#">DOWNLOADER</a></li>
                            <li><a target="_blank" href="#">FONTS</a></li>
                        </ul>
                    </li>

                    <li class="dropdown">
                        <a href="#">LAB</a>
                        <ul class="dropdown-menu clearfix">
                            <li><a target="_blank" href="#">BLOG</a></li>
                            <li><a target="_blank" href="#">Help Center</a></li>
                            <li><a target="_blank" href="#">Contact</a></li>
                        </ul>
                    </li>


                </ul>
            </nav>
            <div class="h-eight-social ul-li float-right clearfix">
                <ul>
                    <li><a href="#"><i class="fab fa-youtube"></i></a></li>
                    <li><a href="#"><i class="fab fa-linkedin"></i></a></li>
                </ul>
            </div>
            <div class="sign-up-btn-eight text-center float-right clearfix">
                <a href="<?=Route::make('/auth/signin')?>">Sign In</a>
            </div>
        </div>
        <!-- /desktop-menu -->
        <div class="appi-ei-mobile_menu relative-position">
            <div class="appi-ei-mobile_menu_button appi-ei-open_mobile_menu">
                <i class="fas fa-bars"></i>
            </div>
            <div class="appi-ei-mobile_menu_wrap">
                <div class="mobile_menu_overlay appi-ei-open_mobile_menu"></div>
                <div class="appi-ei-mobile_menu_content">
                    <div class="appi-ei-mobile_menu_close appi-ei-open_mobile_menu">
                        <i class="far fa-times-circle"></i>
                    </div>
                    <div class="m-brand-logo text-center">
                        <img src="<?= Route::base() ?>/assets/img/app-landing/logo/f-logo.png" alt="">
                    </div>
                    <nav class="appi-ei-mobile-main-navigation  clearfix ul-li">


                        <ul id="main-nav" class="navbar-nav text-capitalize clearfix">

                            <li><a class="nav-link" href="#">Home</a></li>
                            <li class="dropdown">
                                <a href="#">Services</a>
                                <ul class="dropdown-menu clearfix">
                                    <li><a target="_blank" href="#">Instagram Bot</a></li>
                                    <li><a target="_blank" href="#">Tiktok Bot</a></li>
                                </ul>
                            </li>
                            <li><a class="nav-link" href="#">Pricing</a></li>
                            <li class="dropdown">
                                <a href="#">Tools</a>
                                <ul class="dropdown-menu clearfix">
                                    <li><a target="_blank" href="#">HASHTAGS</a></li>
                                    <li><a target="_blank" href="#">PROFILES</a></li>
                                    <li><a target="_blank" href="#">DOWNLOADER</a></li>
                                    <li><a target="_blank" href="#">FONTS</a></li>
                                </ul>
                            </li>

                            <li class="dropdown">
                                <a href="#">LAB</a>
                                <ul class="dropdown-menu clearfix">
                                    <li><a target="_blank" href="#">BLOG</a></li>
                                    <li><a target="_blank" href="#">Help Center</a></li>
                                    <li><a target="_blank" href="#">Contact</a></li>
                                </ul>
                            </li>


                        </ul>
                    </nav>
                </div>
            </div>
        </div>
        <!-- /mobile-menu -->
    </header>
    <!-- End of header section
        ============================================= -->

        <?=$content?>

        
    <!-- Start of Footer  section
        ============================================= -->
    <section id="ei-footer" class="ei-footer-section position-relative">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="ei-footer-widget pera-content appeight-headline">
                        <div class="ei-footer-logo">
                            <img src="<?= Route::base() ?>/assets/img/app-landing/logo/f-logo.png" alt="">
                        </div>
                        <p>
                            Lorem Ipsum is simply dummy text of the printing and type.
                        </p>
                        <div class="ei-payment-mathod">
                            <img src="<?= Route::base() ?>/assets/img/app-landing/logo/paypal.png" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="ei-footer-widget appeight-headline ul-li-block">
                        <h3 class="ei-widget-title">Useful link:</h3>
                        <ul>
                            <li><a href="#">Home</a></li>
                            <li><a href="#">Team</a></li>
                            <li><a href="#">Servce</a></li>
                            <li><a href="#">FAQ</a></li>
                            <li><a href="#">About Us</a></li>
                            <li><a href="#">Gallery</a></li>
                            <li><a href="#">Testimonials</a></li>
                            <li><a href="#">Contact</a></li>
                            <li><a href="#">News</a></li>
                            <li><a href="#">Portfolio</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="ei-footer-widget appeight-headline  ul-li-block">
                        <h3 class="ei-widget-title">Contact:</h3>
                        <h4>
                            <i class="fas fa-phone"></i>
                            Call Us: (210) 123451
                            <span>(Sat - Thursday)</span>
                        </h4>
                        <h4>
                            <i class="fas fa-map-marker-alt"></i>
                            380 St Kilda Road,
                            <span>Melbourne, Australia</span>
                        </h4>
                      
                        <div class="ei-footer-social">
                            <a href="#"><i class="fab fa-facebook-f "></i></a>
                            <a href="#"><i class="fab fa-twitter"></i></a>
                            <a href="#"><i class="fab fa-dribbble"></i></a>
                            <a href="#"><i class="fab fa-behance"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="ei-footer-copyright">
            <div class="container">
                <div class="ei-footer-copyright-content">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="ei-copyright-text">
                                <p>© 2020 <a href="#">Themexriver</a></p>
                            </div>
                        </div>
                        <div class="col-md-8">
                            <div class="ei-copyright-menu">
                                <a href="#">Help</a>
                                <a href="#">Terms & Conditions </a>
                                <a href="#">Privacy </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="ei-footer-shape1 position-absolute" data-parallax='{"x" : 60}'><img src="<?= Route::base() ?>/assets/img/app-landing/shape/fo-shape1.png" alt=""></div>
        <div class="ei-footer-shape2 position-absolute" data-parallax='{"y" : 60}'><img src="<?= Route::base() ?>/assets/img/app-landing/shape/fo-shape2.png" alt=""></div>
        <div class="ei-footer-shape3 position-absolute"><img src="<?= Route::base() ?>/assets/img/app-landing/shape/eimap.png" alt=""></div>
    </section>
    <!-- End of Footer  section
        ============================================= -->

    <!-- JS library -->

    <script src="<?= Route::base() ?>/assets/js/jquery.js"></script>
    <script src="<?= Route::base() ?>/assets/js/popper.min.js"></script>
    <script src="<?= Route::base() ?>/assets/js/bootstrap.min.js"></script>
    <script src="<?= Route::base() ?>/assets/js/appear.js"></script>
    <script src="<?= Route::base() ?>/assets/js/owl.js"></script>
    <script src="<?= Route::base() ?>/assets/js/wow.min.js"></script>
    <script src="<?= Route::base() ?>/assets/js/aos.js"></script>
    <script src="<?= Route::base() ?>/assets/js/slick.js"></script>
    <script src="<?= Route::base() ?>/assets/js/pagenav.js"></script>
    <script src="<?= Route::base() ?>/assets/js/odometer.js"></script>
    <script src="<?= Route::base() ?>/assets/js/bxslider.js"></script>
    <script src="<?= Route::base() ?>/assets/js/jquery.barfiller.js"></script>
    <script src="<?= Route::base() ?>/assets/js/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="<?= Route::base() ?>/assets/js/parallax-scroll.js"></script>
    <script src="<?= Route::base() ?>/assets/js/swiper.min.js"></script>
    <script src="<?= Route::base() ?>/assets/js/typer-new.js"></script>
    <script src="<?= Route::base() ?>/assets/js/script.js"></script>
    <?php $this->endBody() ?>
</body>

</html>
<?php $this->endPage() ?>