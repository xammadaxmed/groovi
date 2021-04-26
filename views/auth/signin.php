<?php

use app\helpers\Route;

$this->title = "Sign In";
?>

<!-- Start of breadcurmb section
        ============================================= -->
<section id="saasio-breadcurmb" class="saasio-breadcurmb-section">
    <div class="container">
        <div class="breadcurmb-title text-center">
            <h2><?=$this->title?></h2>
        </div>
        <div class="breadcurmb-item-list text-center ul-li">
            <ul class="saasio-page-breadcurmb">
                <li><a href="#">Home</a></li>
                <li><a href="#"><?=$this->title?></a></li>
            </ul>
        </div>
    </div>
</section>
<!-- End of breadcurmb section
        ============================================= -->

<!-- Start of blog page section
        ============================================= -->
<section id="news-feed" class="news-feed-section">
    <div class="container">
        <div class="blog-feed-content">
            <div class="row">
                <div class="col-md-12">
                    <div class="blog-feed-post">
                        <div class="blog-feed-img-txt">
                            <div class="row">
                                <div class="col-lg-6 col-md-8 col-sm-8">
                                    <div class="saasio-blog-img">
                                        <img width="100%" src="<?=Route::base()?>/assets/img/blog/news-4.jpg" alt="">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-8 col-sm-8 text-center" style="padding: 30px;">
                                    <h2><?=$this->title?></h2>
                                    <span>Enter you credentials to proceed</span>
                                    <br>
                                    <br>
                                   <form action="<?=Route::make('/auth/login')?>" method="POST" id="frmAjax">
                                        <div class="form-group">
                                            <input placeholder="Enter Your email" type="email" name="email" id="email" class="form-control">
                                        </div>
                                        <br>
                                        <div class="form-group">
                                            <input placeholder="Enter Your password" type="password" name="password" id="password" class="form-control">
                                        </div>
                                        <a class="btn btn-link float-left text-info" href="<?=Route::make('/auth/signup')?>">Don't you have account?</a>
                                        <a class="btn btn-link float-right text-info" href="<?=Route::make('/auth/recover')?>">forget password?</a>
                                        <br><br>
                                        <button type="submit" class="btn_pricing_footer">Sign In</button>
                                   </form>
                                </div>
                            </div>
                        </div>
                    </div>
              
                </div>
               
            </div>
        </div>
    </div>
</section>
<!-- End of blog section
        ============================================= -->