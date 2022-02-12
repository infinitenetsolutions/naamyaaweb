<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Fundraising & Charity php Template</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="manifest" href="site.webmanifest">
    <link rel="shortcut icon" type="image/x-icon" href="./assets/img/favicon.png">
    <!-- Place favicon.ico in the root directory -->

    <!-- CSS here -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/owl.default.min.css">
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/css/animate.min.css">
    <link rel="stylesheet" href="assets/css/magnific-popup.css">
    <link rel="stylesheet" href="assets/css/fontawesome-all.min.css">
    <link rel="stylesheet" href="assets/css/nice-select.css">
    <link rel="stylesheet" href="assets/css/flaticon.css">
    <link rel="stylesheet" href="assets/css/meanmenu.css">
    <link rel="stylesheet" href="assets/css/slick.css">
    <link rel="stylesheet" href="assets/css/swiper-bundle.css">
    <link rel="stylesheet" href="assets/css/main.css">
</head>

<body>

    <!-- Header One Start-->
    <?php include './naamaya.inc/header.php'; ?>
    <!-- Header One End-->

    <!-- slide-bar start -->

    <!-- Sidebar for Mobile -->
    <?php include './naamaya.inc/mobile_slider.php'; ?>

    <!-- Sidebar for Laptop -->
    <?php include './naamaya.inc/laptop_slider.php'; ?>
    <!-- slide-bar end -->

    <!-- Main Area Start-->
    <main>
        <!--breadcrumb area start-->
        <section class="breadcrumb_area breadcrumb_overlay" data-background="assets/img/bg/breadcrum_bg_2.jpg">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="breadcrumb_section">
                            <ul class="breadcrumb-list volunteer_breadcrumb">
                                <li class="bhas_border"><a href="index.php">Home</a></li>
                                <li><span class="active">Cause</span></li>
                            </ul>
                            <div class="breadcrumb_title">
                                <h2>Recent Causes</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- breadcrumb area end-->


        <!--Recent causes area start-->
        <section class="causes_area gray-bg pt-120 pb-85">
            <div class="container">
                <div class="row">
                    <div class="col-xxl-12 text-center">
                        <div class="cause_button_wrapper mb-25">
                            <nav>
                                <div class="nav tab_buttons" id="nav-tab" role="tablist">
                                    <button class="nav-link active" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home" aria-selected="true">All Categories</button>
                                    <button class="nav-link" id="nav-water" data-bs-toggle="tab" data-bs-target="#water" type="button" role="tab" aria-controls="water" aria-selected="false">Water</button>
                                    <button class="nav-link" id="nav-education" data-bs-toggle="tab" data-bs-target="#education" type="button" role="tab" aria-controls="education" aria-selected="false">Education</button>
                                    <button class="nav-link" id="nav-medical" data-bs-toggle="tab" data-bs-target="#medical" type="button" role="tab" aria-controls="medical" aria-selected="false">Medical</button>
                                    <button class="nav-link" id="nav-furniture" data-bs-toggle="tab" data-bs-target="#furniture" type="button" role="tab" aria-controls="furniture" aria-selected="false">Food</button>
                                </div>
                            </nav>
                        </div>
                    </div>
                </div>

                <div class="tab-content" id="nav-tabContent">
                    <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">

                        <div class="row">

                            <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6">
                                <div class="single_cause mb-30">
                                    <div class="single_cause_img_wrapper">
                                        <div class="single_cause_img w_img img_effect_white">
                                            <a href="cause-details.php"><img src="assets/img/causes/cause3.jpg" alt="img"></a>
                                        </div>
                                        <div class="progress cause_progress">
                                            <div class="progress-bar" role="progressbar" data-width="88%" aria-valuenow="88" aria-valuemin="0" aria-valuemax="100"><span>88%</span></div>
                                        </div>
                                    </div>

                                    <div class="single_cause_content">
                                        <div class="single_cause">
                                            <span class="sub_title">Education</span>
                                            <h3 class="title"><a href="cause-details.php">Give your helping hand to teach poor people always</a></h3>
                                        </div>
                                        <div class="single_cause_meta">
                                            <div class="single_meta d-inline-block">
                                                <span class="meta_text clr_theme1"><i class="fal fa-globe"></i> Goal</span>
                                                <span class="meta_price clr_theme1">$4,5100</span>
                                            </div>
                                            <div class="single_meta d-inline-block">
                                                <span class="meta_text clr_theme2"><i class="fal fa-users"></i> Raised</span>
                                                <span class="meta_price clr_theme2">$45,300</span>
                                            </div>
                                            <div class="single_meta d-inline-block">
                                                <span class="meta_text clr_theme3"><i class="fal fa-reply"></i> To go</span>
                                                <span class="meta_price clr_theme3">$45,200</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6">
                                <div class="single_cause mb-30">
                                    <div class="single_cause_img_wrapper">
                                        <div class="single_cause_img w_img img_effect_white">
                                            <a href="cause-details.php"><img src="assets/img/causes/cause17.jpg" alt="img"></a>
                                        </div>
                                        <div class="progress cause_progress">
                                            <div class="progress-bar" role="progressbar" data-width="98%" aria-valuenow="98" aria-valuemin="0" aria-valuemax="100"><span>98%</span></div>
                                        </div>
                                    </div>

                                    <div class="single_cause_content">
                                        <div class="single_cause">
                                            <span class="sub_title">Education</span>
                                            <h3 class="title"><a href="cause-details.php">If poor will well educated, you and you country will be rich.</a></h3>
                                        </div>
                                        <div class="single_cause_meta">
                                            <div class="single_meta d-inline-block">
                                                <span class="meta_text clr_theme1"><i class="fal fa-globe"></i> Goal</span>
                                                <span class="meta_price clr_theme1">$4,7100</span>
                                            </div>
                                            <div class="single_meta d-inline-block">
                                                <span class="meta_text clr_theme2"><i class="fal fa-users"></i> Raised</span>
                                                <span class="meta_price clr_theme2">$43,300</span>
                                            </div>
                                            <div class="single_meta d-inline-block">
                                                <span class="meta_text clr_theme3"><i class="fal fa-reply"></i> To go</span>
                                                <span class="meta_price clr_theme3">$40,200</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6">
                                <div class="single_cause mb-30">
                                    <div class="single_cause_img_wrapper">
                                        <div class="single_cause_img w_img img_effect_white">
                                            <a href="cause-details.php"><img src="assets/img/causes/cause18.jpg" alt="img"></a>
                                        </div>
                                        <div class="progress cause_progress">
                                            <div class="progress-bar" role="progressbar" data-width="68%" aria-valuenow="68" aria-valuemin="0" aria-valuemax="100"><span>68%</span></div>
                                        </div>
                                    </div>

                                    <div class="single_cause_content">
                                        <div class="single_cause">
                                            <span class="sub_title">Education</span>
                                            <h3 class="title"><a href="cause-details.php">The various agency help the poor, you also can try.</a></h3>
                                        </div>
                                        <div class="single_cause_meta">
                                            <div class="single_meta d-inline-block">
                                                <span class="meta_text clr_theme1"><i class="fal fa-globe"></i> Goal</span>
                                                <span class="meta_price clr_theme1">$21,100</span>
                                            </div>
                                            <div class="single_meta d-inline-block">
                                                <span class="meta_text clr_theme2"><i class="fal fa-users"></i> Raised</span>
                                                <span class="meta_price clr_theme2">$19,300</span>
                                            </div>
                                            <div class="single_meta d-inline-block">
                                                <span class="meta_text clr_theme3"><i class="fal fa-reply"></i> To go</span>
                                                <span class="meta_price clr_theme3">$31,200</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6">
                                <div class="single_cause mb-30">
                                    <div class="single_cause_img_wrapper">
                                        <div class="single_cause_img w_img img_effect_white">
                                            <a href="cause-details.php"><img src="assets/img/causes/cause10.jpg" alt="img"></a>
                                        </div>
                                        <div class="progress cause_progress">
                                            <div class="progress-bar" role="progressbar" data-width="88%" aria-valuenow="88" aria-valuemin="0" aria-valuemax="100"><span>88%</span></div>
                                        </div>
                                    </div>

                                    <div class="single_cause_content">
                                        <div class="single_cause">
                                            <span class="sub_title">Medical</span>
                                            <h3 class="title"><a href="cause-details.php">We have to careful and helpful to poor people always.</a></h3>
                                        </div>
                                        <div class="single_cause_meta">
                                            <div class="single_meta d-inline-block">
                                                <span class="meta_text clr_theme1"><i class="fal fa-globe"></i> Goal</span>
                                                <span class="meta_price clr_theme1">$4,5100</span>
                                            </div>
                                            <div class="single_meta d-inline-block">
                                                <span class="meta_text clr_theme2"><i class="fal fa-users"></i> Raised</span>
                                                <span class="meta_price clr_theme2">$45,300</span>
                                            </div>
                                            <div class="single_meta d-inline-block">
                                                <span class="meta_text clr_theme3"><i class="fal fa-reply"></i> To go</span>
                                                <span class="meta_price clr_theme3">$45,200</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6">
                                <div class="single_cause mb-30">
                                    <div class="single_cause_img_wrapper">
                                        <div class="single_cause_img w_img img_effect_white">
                                            <a href="cause-details.php"><img src="assets/img/causes/cause11.jpg" alt="img"></a>
                                        </div>
                                        <div class="progress cause_progress">
                                            <div class="progress-bar" role="progressbar" data-width="98%" aria-valuenow="98" aria-valuemin="0" aria-valuemax="100"><span>98%</span></div>
                                        </div>
                                    </div>

                                    <div class="single_cause_content">
                                        <div class="single_cause">
                                            <span class="sub_title">Medical</span>
                                            <h3 class="title"><a href="cause-details.php">Share your money to serve poor people as far possible.</a></h3>
                                        </div>
                                        <div class="single_cause_meta">
                                            <div class="single_meta d-inline-block">
                                                <span class="meta_text clr_theme1"><i class="fal fa-globe"></i> Goal</span>
                                                <span class="meta_price clr_theme1">$4,7100</span>
                                            </div>
                                            <div class="single_meta d-inline-block">
                                                <span class="meta_text clr_theme2"><i class="fal fa-users"></i> Raised</span>
                                                <span class="meta_price clr_theme2">$43,300</span>
                                            </div>
                                            <div class="single_meta d-inline-block">
                                                <span class="meta_text clr_theme3"><i class="fal fa-reply"></i> To go</span>
                                                <span class="meta_price clr_theme3">$40,200</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6">
                                <div class="single_cause mb-30">
                                    <div class="single_cause_img_wrapper">
                                        <div class="single_cause_img w_img img_effect_white">
                                            <a href="cause-details.php"><img src="assets/img/causes/cause12.jpg" alt="img"></a>
                                        </div>
                                        <div class="progress cause_progress">
                                            <div class="progress-bar" role="progressbar" data-width="68%" aria-valuenow="68" aria-valuemin="0" aria-valuemax="100"><span>68%</span></div>
                                        </div>
                                    </div>

                                    <div class="single_cause_content">
                                        <div class="single_cause">
                                            <span class="sub_title">Medical</span>
                                            <h3 class="title"><a href="cause-details.php">Donate now to forward for poor at this pandemic time.</a></h3>
                                        </div>
                                        <div class="single_cause_meta">
                                            <div class="single_meta d-inline-block">
                                                <span class="meta_text clr_theme1"><i class="fal fa-globe"></i> Goal</span>
                                                <span class="meta_price clr_theme1">$21,100</span>
                                            </div>
                                            <div class="single_meta d-inline-block">
                                                <span class="meta_text clr_theme2"><i class="fal fa-users"></i> Raised</span>
                                                <span class="meta_price clr_theme2">$19,300</span>
                                            </div>
                                            <div class="single_meta d-inline-block">
                                                <span class="meta_text clr_theme3"><i class="fal fa-reply"></i> To go</span>
                                                <span class="meta_price clr_theme3">$31,200</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6">
                                <div class="single_cause mb-30">
                                    <div class="single_cause_img_wrapper">
                                        <div class="single_cause_img w_img img_effect_white">
                                            <a href="cause-details.php"><img src="assets/img/causes/cause24.jpg" alt="img"></a>
                                        </div>
                                        <div class="progress cause_progress">
                                            <div class="progress-bar" role="progressbar" data-width="88%" aria-valuenow="88" aria-valuemin="0" aria-valuemax="100"><span>88%</span></div>
                                        </div>
                                    </div>

                                    <div class="single_cause_content">
                                        <div class="single_cause">
                                            <span class="sub_title">Food</span>
                                            <h3 class="title"><a href="cause-details.php">Putting the power of law in people's hand</a></h3>
                                        </div>
                                        <div class="single_cause_meta">
                                            <div class="single_meta d-inline-block">
                                                <span class="meta_text clr_theme1"><i class="fal fa-globe"></i> Goal</span>
                                                <span class="meta_price clr_theme1">$4,5100</span>
                                            </div>
                                            <div class="single_meta d-inline-block">
                                                <span class="meta_text clr_theme2"><i class="fal fa-users"></i> Raised</span>
                                                <span class="meta_price clr_theme2">$45,300</span>
                                            </div>
                                            <div class="single_meta d-inline-block">
                                                <span class="meta_text clr_theme3"><i class="fal fa-reply"></i> To go</span>
                                                <span class="meta_price clr_theme3">$45,200</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6">
                                <div class="single_cause mb-30">
                                    <div class="single_cause_img_wrapper">
                                        <div class="single_cause_img w_img img_effect_white">
                                            <a href="cause-details.php"><img src="assets/img/causes/cause25.jpg" alt="img"></a>
                                        </div>
                                        <div class="progress cause_progress">
                                            <div class="progress-bar" role="progressbar" data-width="98%" aria-valuenow="98" aria-valuemin="0" aria-valuemax="100"><span>98%</span></div>
                                        </div>
                                    </div>

                                    <div class="single_cause_content">
                                        <div class="single_cause">
                                            <span class="sub_title">Food</span>
                                            <h3 class="title"><a href="cause-details.php">Don't rude to poor who respect you and your family</a></h3>
                                        </div>
                                        <div class="single_cause_meta">
                                            <div class="single_meta d-inline-block">
                                                <span class="meta_text clr_theme1"><i class="fal fa-globe"></i> Goal</span>
                                                <span class="meta_price clr_theme1">$4,7100</span>
                                            </div>
                                            <div class="single_meta d-inline-block">
                                                <span class="meta_text clr_theme2"><i class="fal fa-users"></i> Raised</span>
                                                <span class="meta_price clr_theme2">$43,300</span>
                                            </div>
                                            <div class="single_meta d-inline-block">
                                                <span class="meta_text clr_theme3"><i class="fal fa-reply"></i> To go</span>
                                                <span class="meta_price clr_theme3">$40,200</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6">
                                <div class="single_cause mb-30">
                                    <div class="single_cause_img_wrapper">
                                        <div class="single_cause_img w_img img_effect_white">
                                            <a href="cause-details.php"><img src="assets/img/causes/cause26.jpg" alt="img"></a>
                                        </div>
                                        <div class="progress cause_progress">
                                            <div class="progress-bar" role="progressbar" data-width="68%" aria-valuenow="68" aria-valuemin="0" aria-valuemax="100"><span>68%</span></div>
                                        </div>
                                    </div>

                                    <div class="single_cause_content">
                                        <div class="single_cause">
                                            <span class="sub_title">Food</span>
                                            <h3 class="title"><a href="cause-details.php">Donate now to help the helpless people authentically</a></h3>
                                        </div>
                                        <div class="single_cause_meta">
                                            <div class="single_meta d-inline-block">
                                                <span class="meta_text clr_theme1"><i class="fal fa-globe"></i> Goal</span>
                                                <span class="meta_price clr_theme1">$21,100</span>
                                            </div>
                                            <div class="single_meta d-inline-block">
                                                <span class="meta_text clr_theme2"><i class="fal fa-users"></i> Raised</span>
                                                <span class="meta_price clr_theme2">$19,300</span>
                                            </div>
                                            <div class="single_meta d-inline-block">
                                                <span class="meta_text clr_theme3"><i class="fal fa-reply"></i> To go</span>
                                                <span class="meta_price clr_theme3">$31,200</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6">
                                <div class="single_cause mb-30">
                                    <div class="single_cause_img_wrapper">
                                        <div class="single_cause_img w_img img_effect_white">
                                            <a href="cause-details.php"><img src="assets/img/causes/cause8.jpg" alt="img"></a>
                                        </div>
                                        <div class="progress cause_progress">
                                            <div class="progress-bar" role="progressbar" data-width="78%" aria-valuenow="78" aria-valuemin="0" aria-valuemax="100"><span>78%</span></div>
                                        </div>
                                    </div>

                                    <div class="single_cause_content">
                                        <div class="single_cause">
                                            <span class="sub_title">Water</span>
                                            <h3 class="title"><a href="cause-details.php">Don't afraid man, poor is not dangerous but helpful.</a></h3>
                                        </div>
                                        <div class="single_cause_meta">
                                            <div class="single_meta d-inline-block">
                                                <span class="meta_text clr_theme1"><i class="fal fa-globe"></i> Goal</span>
                                                <span class="meta_price clr_theme1">$21,100</span>
                                            </div>
                                            <div class="single_meta d-inline-block">
                                                <span class="meta_text clr_theme2"><i class="fal fa-users"></i> Raised</span>
                                                <span class="meta_price clr_theme2">$19,300</span>
                                            </div>
                                            <div class="single_meta d-inline-block">
                                                <span class="meta_text clr_theme3"><i class="fal fa-reply"></i> To go</span>
                                                <span class="meta_price clr_theme3">$31,200</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6">
                                <div class="single_cause mb-30">
                                    <div class="single_cause_img_wrapper">
                                        <div class="single_cause_img w_img img_effect_white">
                                            <a href="cause-details.php"><img src="assets/img/causes/cause1.jpg" alt="img"></a>
                                        </div>
                                        <div class="progress cause_progress">
                                            <div class="progress-bar" role="progressbar" data-width="78%" aria-valuenow="78" aria-valuemin="0" aria-valuemax="100"><span>78%</span></div>
                                        </div>
                                    </div>

                                    <div class="single_cause_content">
                                        <div class="single_cause">
                                            <span class="sub_title">Water</span>
                                            <h3 class="title"><a href="cause-details.php">Let them take pure water from country government.</a></h3>
                                        </div>
                                        <div class="single_cause_meta">
                                            <div class="single_meta d-inline-block">
                                                <span class="meta_text clr_theme1"><i class="fal fa-globe"></i> Goal</span>
                                                <span class="meta_price clr_theme1">$21,100</span>
                                            </div>
                                            <div class="single_meta d-inline-block">
                                                <span class="meta_text clr_theme2"><i class="fal fa-users"></i> Raised</span>
                                                <span class="meta_price clr_theme2">$19,300</span>
                                            </div>
                                            <div class="single_meta d-inline-block">
                                                <span class="meta_text clr_theme3"><i class="fal fa-reply"></i> To go</span>
                                                <span class="meta_price clr_theme3">$31,200</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6">
                                <div class="single_cause mb-30">
                                    <div class="single_cause_img_wrapper">
                                        <div class="single_cause_img w_img img_effect_white">
                                            <a href="cause-details.php"><img src="assets/img/causes/cause_s2.jpg" alt="img"></a>
                                        </div>
                                        <div class="progress cause_progress">
                                            <div class="progress-bar" role="progressbar" data-width="78%" aria-valuenow="78" aria-valuemin="0" aria-valuemax="100"><span>78%</span></div>
                                        </div>
                                    </div>

                                    <div class="single_cause_content">
                                        <div class="single_cause">
                                            <span class="sub_title">Water</span>
                                            <h3 class="title"><a href="cause-details.php">Human beings has right to take water evenly from the earth.</a></h3>
                                        </div>
                                        <div class="single_cause_meta">
                                            <div class="single_meta d-inline-block">
                                                <span class="meta_text clr_theme1"><i class="fal fa-globe"></i> Goal</span>
                                                <span class="meta_price clr_theme1">$21,100</span>
                                            </div>
                                            <div class="single_meta d-inline-block">
                                                <span class="meta_text clr_theme2"><i class="fal fa-users"></i> Raised</span>
                                                <span class="meta_price clr_theme2">$19,300</span>
                                            </div>
                                            <div class="single_meta d-inline-block">
                                                <span class="meta_text clr_theme3"><i class="fal fa-reply"></i> To go</span>
                                                <span class="meta_price clr_theme3">$31,200</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>


                        </div>

                    </div>
                    <div class="tab-pane fade" id="water" role="tabpanel" aria-labelledby="nav-water">
                        <div class="row">
                            <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6">
                                <div class="single_cause mb-30">
                                    <div class="single_cause_img_wrapper">
                                        <div class="single_cause_img w_img img_effect_white">
                                            <a href="cause-details.php"><img src="assets/img/causes/cause6.jpg" alt="img"></a>
                                        </div>
                                        <div class="progress cause_progress">
                                            <div class="progress-bar" role="progressbar" data-width="88%" aria-valuenow="88" aria-valuemin="0" aria-valuemax="100"><span>88%</span></div>
                                        </div>
                                    </div>

                                    <div class="single_cause_content">
                                        <div class="single_cause">
                                            <span class="sub_title">Water</span>
                                            <h3 class="title"><a href="cause-details.php">Putting the power of law in people's hand</a></h3>
                                        </div>
                                        <div class="single_cause_meta">
                                            <div class="single_meta d-inline-block">
                                                <span class="meta_text clr_theme1"><i class="fal fa-globe"></i> Goal</span>
                                                <span class="meta_price clr_theme1">$4,5100</span>
                                            </div>
                                            <div class="single_meta d-inline-block">
                                                <span class="meta_text clr_theme2"><i class="fal fa-users"></i> Raised</span>
                                                <span class="meta_price clr_theme2">$45,300</span>
                                            </div>
                                            <div class="single_meta d-inline-block">
                                                <span class="meta_text clr_theme3"><i class="fal fa-reply"></i> To go</span>
                                                <span class="meta_price clr_theme3">$45,200</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6">
                                <div class="single_cause mb-30">
                                    <div class="single_cause_img_wrapper">
                                        <div class="single_cause_img w_img img_effect_white">
                                            <a href="cause-details.php"><img src="assets/img/causes/cause5.jpg" alt="img"></a>
                                        </div>
                                        <div class="progress cause_progress">
                                            <div class="progress-bar" role="progressbar" data-width="98%" aria-valuenow="98" aria-valuemin="0" aria-valuemax="100"><span>98%</span></div>
                                        </div>
                                    </div>

                                    <div class="single_cause_content">
                                        <div class="single_cause">
                                            <span class="sub_title">Water</span>
                                            <h3 class="title"><a href="cause-details.php">Don't rude to poor who respect you and your family</a></h3>
                                        </div>
                                        <div class="single_cause_meta">
                                            <div class="single_meta d-inline-block">
                                                <span class="meta_text clr_theme1"><i class="fal fa-globe"></i> Goal</span>
                                                <span class="meta_price clr_theme1">$4,7100</span>
                                            </div>
                                            <div class="single_meta d-inline-block">
                                                <span class="meta_text clr_theme2"><i class="fal fa-users"></i> Raised</span>
                                                <span class="meta_price clr_theme2">$43,300</span>
                                            </div>
                                            <div class="single_meta d-inline-block">
                                                <span class="meta_text clr_theme3"><i class="fal fa-reply"></i> To go</span>
                                                <span class="meta_price clr_theme3">$40,200</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6">
                                <div class="single_cause mb-30">
                                    <div class="single_cause_img_wrapper">
                                        <div class="single_cause_img w_img img_effect_white">
                                            <a href="cause-details.php"><img src="assets/img/causes/cause4.jpg" alt="img"></a>
                                        </div>
                                        <div class="progress cause_progress">
                                            <div class="progress-bar" role="progressbar" data-width="68%" aria-valuenow="68" aria-valuemin="0" aria-valuemax="100"><span>68%</span></div>
                                        </div>
                                    </div>

                                    <div class="single_cause_content">
                                        <div class="single_cause">
                                            <span class="sub_title">Water</span>
                                            <h3 class="title"><a href="cause-details.php">Donate now to help the helpless people authentically</a></h3>
                                        </div>
                                        <div class="single_cause_meta">
                                            <div class="single_meta d-inline-block">
                                                <span class="meta_text clr_theme1"><i class="fal fa-globe"></i> Goal</span>
                                                <span class="meta_price clr_theme1">$21,100</span>
                                            </div>
                                            <div class="single_meta d-inline-block">
                                                <span class="meta_text clr_theme2"><i class="fal fa-users"></i> Raised</span>
                                                <span class="meta_price clr_theme2">$19,300</span>
                                            </div>
                                            <div class="single_meta d-inline-block">
                                                <span class="meta_text clr_theme3"><i class="fal fa-reply"></i> To go</span>
                                                <span class="meta_price clr_theme3">$31,200</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6">
                                <div class="single_cause mb-30">
                                    <div class="single_cause_img_wrapper">
                                        <div class="single_cause_img w_img img_effect_white">
                                            <a href="cause-details.php"><img src="assets/img/causes/cause8.jpg" alt="img"></a>
                                        </div>
                                        <div class="progress cause_progress">
                                            <div class="progress-bar" role="progressbar" data-width="78%" aria-valuenow="78" aria-valuemin="0" aria-valuemax="100"><span>78%</span></div>
                                        </div>
                                    </div>

                                    <div class="single_cause_content">
                                        <div class="single_cause">
                                            <span class="sub_title">Water</span>
                                            <h3 class="title"><a href="cause-details.php">Don't afraid man, poor is not dangerous but helpful.</a></h3>
                                        </div>
                                        <div class="single_cause_meta">
                                            <div class="single_meta d-inline-block">
                                                <span class="meta_text clr_theme1"><i class="fal fa-globe"></i> Goal</span>
                                                <span class="meta_price clr_theme1">$21,100</span>
                                            </div>
                                            <div class="single_meta d-inline-block">
                                                <span class="meta_text clr_theme2"><i class="fal fa-users"></i> Raised</span>
                                                <span class="meta_price clr_theme2">$19,300</span>
                                            </div>
                                            <div class="single_meta d-inline-block">
                                                <span class="meta_text clr_theme3"><i class="fal fa-reply"></i> To go</span>
                                                <span class="meta_price clr_theme3">$31,200</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6">
                                <div class="single_cause mb-30">
                                    <div class="single_cause_img_wrapper">
                                        <div class="single_cause_img w_img img_effect_white">
                                            <a href="cause-details.php"><img src="assets/img/causes/cause1.jpg" alt="img"></a>
                                        </div>
                                        <div class="progress cause_progress">
                                            <div class="progress-bar" role="progressbar" data-width="78%" aria-valuenow="78" aria-valuemin="0" aria-valuemax="100"><span>78%</span></div>
                                        </div>
                                    </div>

                                    <div class="single_cause_content">
                                        <div class="single_cause">
                                            <span class="sub_title">Water</span>
                                            <h3 class="title"><a href="cause-details.php">Let them take pure water from country government.</a></h3>
                                        </div>
                                        <div class="single_cause_meta">
                                            <div class="single_meta d-inline-block">
                                                <span class="meta_text clr_theme1"><i class="fal fa-globe"></i> Goal</span>
                                                <span class="meta_price clr_theme1">$21,100</span>
                                            </div>
                                            <div class="single_meta d-inline-block">
                                                <span class="meta_text clr_theme2"><i class="fal fa-users"></i> Raised</span>
                                                <span class="meta_price clr_theme2">$19,300</span>
                                            </div>
                                            <div class="single_meta d-inline-block">
                                                <span class="meta_text clr_theme3"><i class="fal fa-reply"></i> To go</span>
                                                <span class="meta_price clr_theme3">$31,200</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6">
                                <div class="single_cause mb-30">
                                    <div class="single_cause_img_wrapper">
                                        <div class="single_cause_img w_img img_effect_white">
                                            <a href="cause-details.php"><img src="assets/img/causes/cause_s2.jpg" alt="img"></a>
                                        </div>
                                        <div class="progress cause_progress">
                                            <div class="progress-bar" role="progressbar" data-width="78%" aria-valuenow="78" aria-valuemin="0" aria-valuemax="100"><span>78%</span></div>
                                        </div>
                                    </div>

                                    <div class="single_cause_content">
                                        <div class="single_cause">
                                            <span class="sub_title">Water</span>
                                            <h3 class="title"><a href="cause-details.php">Human beings has right to take water evenly from the earth.</a></h3>
                                        </div>
                                        <div class="single_cause_meta">
                                            <div class="single_meta d-inline-block">
                                                <span class="meta_text clr_theme1"><i class="fal fa-globe"></i> Goal</span>
                                                <span class="meta_price clr_theme1">$21,100</span>
                                            </div>
                                            <div class="single_meta d-inline-block">
                                                <span class="meta_text clr_theme2"><i class="fal fa-users"></i> Raised</span>
                                                <span class="meta_price clr_theme2">$19,300</span>
                                            </div>
                                            <div class="single_meta d-inline-block">
                                                <span class="meta_text clr_theme3"><i class="fal fa-reply"></i> To go</span>
                                                <span class="meta_price clr_theme3">$31,200</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>


                        </div>

                    </div>
                    <div class="tab-pane fade" id="education" role="tabpanel" aria-labelledby="nav-education">
                        <div class="row">
                            <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6">
                                <div class="single_cause mb-30">
                                    <div class="single_cause_img_wrapper">
                                        <div class="single_cause_img w_img img_effect_white">
                                            <a href="cause-details.php"><img src="assets/img/causes/cause3.jpg" alt="img"></a>
                                        </div>
                                        <div class="progress cause_progress">
                                            <div class="progress-bar" role="progressbar" data-width="88%" aria-valuenow="88" aria-valuemin="0" aria-valuemax="100"><span>88%</span></div>
                                        </div>
                                    </div>

                                    <div class="single_cause_content">
                                        <div class="single_cause">
                                            <span class="sub_title">Education</span>
                                            <h3 class="title"><a href="cause-details.php">Give your helping hand to teach poor people always</a></h3>
                                        </div>
                                        <div class="single_cause_meta">
                                            <div class="single_meta d-inline-block">
                                                <span class="meta_text clr_theme1"><i class="fal fa-globe"></i> Goal</span>
                                                <span class="meta_price clr_theme1">$4,5100</span>
                                            </div>
                                            <div class="single_meta d-inline-block">
                                                <span class="meta_text clr_theme2"><i class="fal fa-users"></i> Raised</span>
                                                <span class="meta_price clr_theme2">$45,300</span>
                                            </div>
                                            <div class="single_meta d-inline-block">
                                                <span class="meta_text clr_theme3"><i class="fal fa-reply"></i> To go</span>
                                                <span class="meta_price clr_theme3">$45,200</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6">
                                <div class="single_cause mb-30">
                                    <div class="single_cause_img_wrapper">
                                        <div class="single_cause_img w_img img_effect_white">
                                            <a href="cause-details.php"><img src="assets/img/causes/cause17.jpg" alt="img"></a>
                                        </div>
                                        <div class="progress cause_progress">
                                            <div class="progress-bar" role="progressbar" data-width="98%" aria-valuenow="98" aria-valuemin="0" aria-valuemax="100"><span>98%</span></div>
                                        </div>
                                    </div>

                                    <div class="single_cause_content">
                                        <div class="single_cause">
                                            <span class="sub_title">Education</span>
                                            <h3 class="title"><a href="cause-details.php">If poor will well educated, you and you country will be rich.</a></h3>
                                        </div>
                                        <div class="single_cause_meta">
                                            <div class="single_meta d-inline-block">
                                                <span class="meta_text clr_theme1"><i class="fal fa-globe"></i> Goal</span>
                                                <span class="meta_price clr_theme1">$4,7100</span>
                                            </div>
                                            <div class="single_meta d-inline-block">
                                                <span class="meta_text clr_theme2"><i class="fal fa-users"></i> Raised</span>
                                                <span class="meta_price clr_theme2">$43,300</span>
                                            </div>
                                            <div class="single_meta d-inline-block">
                                                <span class="meta_text clr_theme3"><i class="fal fa-reply"></i> To go</span>
                                                <span class="meta_price clr_theme3">$40,200</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6">
                                <div class="single_cause mb-30">
                                    <div class="single_cause_img_wrapper">
                                        <div class="single_cause_img w_img img_effect_white">
                                            <a href="cause-details.php"><img src="assets/img/causes/cause18.jpg" alt="img"></a>
                                        </div>
                                        <div class="progress cause_progress">
                                            <div class="progress-bar" role="progressbar" data-width="68%" aria-valuenow="68" aria-valuemin="0" aria-valuemax="100"><span>68%</span></div>
                                        </div>
                                    </div>

                                    <div class="single_cause_content">
                                        <div class="single_cause">
                                            <span class="sub_title">Education</span>
                                            <h3 class="title"><a href="cause-details.php">The various agency help the poor, you also can try.</a></h3>
                                        </div>
                                        <div class="single_cause_meta">
                                            <div class="single_meta d-inline-block">
                                                <span class="meta_text clr_theme1"><i class="fal fa-globe"></i> Goal</span>
                                                <span class="meta_price clr_theme1">$21,100</span>
                                            </div>
                                            <div class="single_meta d-inline-block">
                                                <span class="meta_text clr_theme2"><i class="fal fa-users"></i> Raised</span>
                                                <span class="meta_price clr_theme2">$19,300</span>
                                            </div>
                                            <div class="single_meta d-inline-block">
                                                <span class="meta_text clr_theme3"><i class="fal fa-reply"></i> To go</span>
                                                <span class="meta_price clr_theme3">$31,200</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6">
                                <div class="single_cause mb-30">
                                    <div class="single_cause_img_wrapper">
                                        <div class="single_cause_img w_img img_effect_white">
                                            <a href="cause-details.php"><img src="assets/img/causes/cause16.jpg" alt="img"></a>
                                        </div>
                                        <div class="progress cause_progress">
                                            <div class="progress-bar" role="progressbar" data-width="68%" aria-valuenow="68" aria-valuemin="0" aria-valuemax="100"><span>68%</span></div>
                                        </div>
                                    </div>

                                    <div class="single_cause_content">
                                        <div class="single_cause">
                                            <span class="sub_title">Education</span>
                                            <h3 class="title"><a href="cause-details.php">Everyone moves to stand besides the affected children.</a></h3>
                                        </div>
                                        <div class="single_cause_meta">
                                            <div class="single_meta d-inline-block">
                                                <span class="meta_text clr_theme1"><i class="fal fa-globe"></i> Goal</span>
                                                <span class="meta_price clr_theme1">$21,100</span>
                                            </div>
                                            <div class="single_meta d-inline-block">
                                                <span class="meta_text clr_theme2"><i class="fal fa-users"></i> Raised</span>
                                                <span class="meta_price clr_theme2">$19,300</span>
                                            </div>
                                            <div class="single_meta d-inline-block">
                                                <span class="meta_text clr_theme3"><i class="fal fa-reply"></i> To go</span>
                                                <span class="meta_price clr_theme3">$31,200</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6">
                                <div class="single_cause mb-30">
                                    <div class="single_cause_img_wrapper">
                                        <div class="single_cause_img w_img img_effect_white">
                                            <a href="cause-details.php"><img src="assets/img/causes/cause21.jpg" alt="img"></a>
                                        </div>
                                        <div class="progress cause_progress">
                                            <div class="progress-bar" role="progressbar" data-width="68%" aria-valuenow="68" aria-valuemin="0" aria-valuemax="100"><span>68%</span></div>
                                        </div>
                                    </div>

                                    <div class="single_cause_content">
                                        <div class="single_cause">
                                            <span class="sub_title">Education</span>
                                            <h3 class="title"><a href="cause-details.php">Every Children in the society has to be well educated.</a></h3>
                                        </div>
                                        <div class="single_cause_meta">
                                            <div class="single_meta d-inline-block">
                                                <span class="meta_text clr_theme1"><i class="fal fa-globe"></i> Goal</span>
                                                <span class="meta_price clr_theme1">$21,100</span>
                                            </div>
                                            <div class="single_meta d-inline-block">
                                                <span class="meta_text clr_theme2"><i class="fal fa-users"></i> Raised</span>
                                                <span class="meta_price clr_theme2">$19,300</span>
                                            </div>
                                            <div class="single_meta d-inline-block">
                                                <span class="meta_text clr_theme3"><i class="fal fa-reply"></i> To go</span>
                                                <span class="meta_price clr_theme3">$31,200</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6">
                                <div class="single_cause mb-30">
                                    <div class="single_cause_img_wrapper">
                                        <div class="single_cause_img w_img img_effect_white">
                                            <a href="cause-details.php"><img src="assets/img/causes/cause22.jpg" alt="img"></a>
                                        </div>
                                        <div class="progress cause_progress">
                                            <div class="progress-bar" role="progressbar" data-width="68%" aria-valuenow="68" aria-valuemin="0" aria-valuemax="100"><span>68%</span></div>
                                        </div>
                                    </div>

                                    <div class="single_cause_content">
                                        <div class="single_cause">
                                            <span class="sub_title">Education</span>
                                            <h3 class="title"><a href="cause-details.php">Everyone moves to stand besides the affected children.</a></h3>
                                        </div>
                                        <div class="single_cause_meta">
                                            <div class="single_meta d-inline-block">
                                                <span class="meta_text clr_theme1"><i class="fal fa-globe"></i> Goal</span>
                                                <span class="meta_price clr_theme1">$21,100</span>
                                            </div>
                                            <div class="single_meta d-inline-block">
                                                <span class="meta_text clr_theme2"><i class="fal fa-users"></i> Raised</span>
                                                <span class="meta_price clr_theme2">$19,300</span>
                                            </div>
                                            <div class="single_meta d-inline-block">
                                                <span class="meta_text clr_theme3"><i class="fal fa-reply"></i> To go</span>
                                                <span class="meta_price clr_theme3">$31,200</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>

                    </div>
                    <div class="tab-pane fade" id="medical" role="tabpanel" aria-labelledby="nav-medical">

                        <div class="row">
                            <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6">
                                <div class="single_cause mb-30">
                                    <div class="single_cause_img_wrapper">
                                        <div class="single_cause_img w_img img_effect_white">
                                            <a href="cause-details.php"><img src="assets/img/causes/cause10.jpg" alt="img"></a>
                                        </div>
                                        <div class="progress cause_progress">
                                            <div class="progress-bar" role="progressbar" data-width="88%" aria-valuenow="88" aria-valuemin="0" aria-valuemax="100"><span>88%</span></div>
                                        </div>
                                    </div>

                                    <div class="single_cause_content">
                                        <div class="single_cause">
                                            <span class="sub_title">Medical</span>
                                            <h3 class="title"><a href="cause-details.php">We have to careful and helpful to poor people always.</a></h3>
                                        </div>
                                        <div class="single_cause_meta">
                                            <div class="single_meta d-inline-block">
                                                <span class="meta_text clr_theme1"><i class="fal fa-globe"></i> Goal</span>
                                                <span class="meta_price clr_theme1">$4,5100</span>
                                            </div>
                                            <div class="single_meta d-inline-block">
                                                <span class="meta_text clr_theme2"><i class="fal fa-users"></i> Raised</span>
                                                <span class="meta_price clr_theme2">$45,300</span>
                                            </div>
                                            <div class="single_meta d-inline-block">
                                                <span class="meta_text clr_theme3"><i class="fal fa-reply"></i> To go</span>
                                                <span class="meta_price clr_theme3">$45,200</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6">
                                <div class="single_cause mb-30">
                                    <div class="single_cause_img_wrapper">
                                        <div class="single_cause_img w_img img_effect_white">
                                            <a href="cause-details.php"><img src="assets/img/causes/cause11.jpg" alt="img"></a>
                                        </div>
                                        <div class="progress cause_progress">
                                            <div class="progress-bar" role="progressbar" data-width="98%" aria-valuenow="98" aria-valuemin="0" aria-valuemax="100"><span>98%</span></div>
                                        </div>
                                    </div>

                                    <div class="single_cause_content">
                                        <div class="single_cause">
                                            <span class="sub_title">Medical</span>
                                            <h3 class="title"><a href="cause-details.php">Share your money to serve poor people as far possible.</a></h3>
                                        </div>
                                        <div class="single_cause_meta">
                                            <div class="single_meta d-inline-block">
                                                <span class="meta_text clr_theme1"><i class="fal fa-globe"></i> Goal</span>
                                                <span class="meta_price clr_theme1">$4,7100</span>
                                            </div>
                                            <div class="single_meta d-inline-block">
                                                <span class="meta_text clr_theme2"><i class="fal fa-users"></i> Raised</span>
                                                <span class="meta_price clr_theme2">$43,300</span>
                                            </div>
                                            <div class="single_meta d-inline-block">
                                                <span class="meta_text clr_theme3"><i class="fal fa-reply"></i> To go</span>
                                                <span class="meta_price clr_theme3">$40,200</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6">
                                <div class="single_cause mb-30">
                                    <div class="single_cause_img_wrapper">
                                        <div class="single_cause_img w_img img_effect_white">
                                            <a href="cause-details.php"><img src="assets/img/causes/cause12.jpg" alt="img"></a>
                                        </div>
                                        <div class="progress cause_progress">
                                            <div class="progress-bar" role="progressbar" data-width="68%" aria-valuenow="68" aria-valuemin="0" aria-valuemax="100"><span>68%</span></div>
                                        </div>
                                    </div>

                                    <div class="single_cause_content">
                                        <div class="single_cause">
                                            <span class="sub_title">Medical</span>
                                            <h3 class="title"><a href="cause-details.php">Donate now to forward for poor at this pandemic time.</a></h3>
                                        </div>
                                        <div class="single_cause_meta">
                                            <div class="single_meta d-inline-block">
                                                <span class="meta_text clr_theme1"><i class="fal fa-globe"></i> Goal</span>
                                                <span class="meta_price clr_theme1">$21,100</span>
                                            </div>
                                            <div class="single_meta d-inline-block">
                                                <span class="meta_text clr_theme2"><i class="fal fa-users"></i> Raised</span>
                                                <span class="meta_price clr_theme2">$19,300</span>
                                            </div>
                                            <div class="single_meta d-inline-block">
                                                <span class="meta_text clr_theme3"><i class="fal fa-reply"></i> To go</span>
                                                <span class="meta_price clr_theme3">$31,200</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6">
                                <div class="single_cause mb-30">
                                    <div class="single_cause_img_wrapper">
                                        <div class="single_cause_img w_img img_effect_white">
                                            <a href="cause-details.php"><img src="assets/img/causes/cause27.jpg" alt="img"></a>
                                        </div>
                                        <div class="progress cause_progress">
                                            <div class="progress-bar" role="progressbar" data-width="98%" aria-valuenow="98" aria-valuemin="0" aria-valuemax="100"><span>98%</span></div>
                                        </div>
                                    </div>

                                    <div class="single_cause_content">
                                        <div class="single_cause">
                                            <span class="sub_title">Medical</span>
                                            <h3 class="title"><a href="cause-details.php">Serve the people as like as Mather Teresa</a></h3>
                                        </div>
                                        <div class="single_cause_meta">
                                            <div class="single_meta d-inline-block">
                                                <span class="meta_text clr_theme1"><i class="fal fa-globe"></i> Goal</span>
                                                <span class="meta_price clr_theme1">$21,100</span>
                                            </div>
                                            <div class="single_meta d-inline-block">
                                                <span class="meta_text clr_theme2"><i class="fal fa-users"></i> Raised</span>
                                                <span class="meta_price clr_theme2">$19,300</span>
                                            </div>
                                            <div class="single_meta d-inline-block">
                                                <span class="meta_text clr_theme3"><i class="fal fa-reply"></i> To go</span>
                                                <span class="meta_price clr_theme3">$31,200</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6">
                                <div class="single_cause mb-30">
                                    <div class="single_cause_img_wrapper">
                                        <div class="single_cause_img w_img img_effect_white">
                                            <a href="cause-details.php"><img src="assets/img/causes/cause28.jpg" alt="img"></a>
                                        </div>
                                        <div class="progress cause_progress">
                                            <div class="progress-bar" role="progressbar" data-width="88%" aria-valuenow="88" aria-valuemin="0" aria-valuemax="100"><span>88%</span></div>
                                        </div>
                                    </div>

                                    <div class="single_cause_content">
                                        <div class="single_cause">
                                            <span class="sub_title">Medical</span>
                                            <h3 class="title"><a href="cause-details.php">Don't neglect poor but serve them from heart.</a></h3>
                                        </div>
                                        <div class="single_cause_meta">
                                            <div class="single_meta d-inline-block">
                                                <span class="meta_text clr_theme1"><i class="fal fa-globe"></i> Goal</span>
                                                <span class="meta_price clr_theme1">$21,100</span>
                                            </div>
                                            <div class="single_meta d-inline-block">
                                                <span class="meta_text clr_theme2"><i class="fal fa-users"></i> Raised</span>
                                                <span class="meta_price clr_theme2">$19,300</span>
                                            </div>
                                            <div class="single_meta d-inline-block">
                                                <span class="meta_text clr_theme3"><i class="fal fa-reply"></i> To go</span>
                                                <span class="meta_price clr_theme3">$31,200</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6">
                                <div class="single_cause mb-30">
                                    <div class="single_cause_img_wrapper">
                                        <div class="single_cause_img w_img img_effect_white">
                                            <a href="cause-details.php"><img src="assets/img/causes/cause29.jpg" alt="img"></a>
                                        </div>
                                        <div class="progress cause_progress">
                                            <div class="progress-bar" role="progressbar" data-width="68%" aria-valuenow="68" aria-valuemin="0" aria-valuemax="100"><span>68%</span></div>
                                        </div>
                                    </div>

                                    <div class="single_cause_content">
                                        <div class="single_cause">
                                            <span class="sub_title">Medical</span>
                                            <h3 class="title"><a href="cause-details.php">Creator wants you to be a doctor for animal also.</a></h3>
                                        </div>
                                        <div class="single_cause_meta">
                                            <div class="single_meta d-inline-block">
                                                <span class="meta_text clr_theme1"><i class="fal fa-globe"></i> Goal</span>
                                                <span class="meta_price clr_theme1">$21,100</span>
                                            </div>
                                            <div class="single_meta d-inline-block">
                                                <span class="meta_text clr_theme2"><i class="fal fa-users"></i> Raised</span>
                                                <span class="meta_price clr_theme2">$19,300</span>
                                            </div>
                                            <div class="single_meta d-inline-block">
                                                <span class="meta_text clr_theme3"><i class="fal fa-reply"></i> To go</span>
                                                <span class="meta_price clr_theme3">$31,200</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>


                        </div>

                    </div>
                    <div class="tab-pane fade" id="furniture" role="tabpanel" aria-labelledby="nav-furniture">
                        <div class="row">
                            <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6">
                                <div class="single_cause mb-30">
                                    <div class="single_cause_img_wrapper">
                                        <div class="single_cause_img w_img img_effect_white">
                                            <a href="cause-details.php"><img src="assets/img/causes/cause24.jpg" alt="img"></a>
                                        </div>
                                        <div class="progress cause_progress">
                                            <div class="progress-bar" role="progressbar" data-width="88%" aria-valuenow="88" aria-valuemin="0" aria-valuemax="100"><span>88%</span></div>
                                        </div>
                                    </div>

                                    <div class="single_cause_content">
                                        <div class="single_cause">
                                            <span class="sub_title">Food</span>
                                            <h3 class="title"><a href="cause-details.php">Putting the power of law in people's hand</a></h3>
                                        </div>
                                        <div class="single_cause_meta">
                                            <div class="single_meta d-inline-block">
                                                <span class="meta_text clr_theme1"><i class="fal fa-globe"></i> Goal</span>
                                                <span class="meta_price clr_theme1">$4,5100</span>
                                            </div>
                                            <div class="single_meta d-inline-block">
                                                <span class="meta_text clr_theme2"><i class="fal fa-users"></i> Raised</span>
                                                <span class="meta_price clr_theme2">$45,300</span>
                                            </div>
                                            <div class="single_meta d-inline-block">
                                                <span class="meta_text clr_theme3"><i class="fal fa-reply"></i> To go</span>
                                                <span class="meta_price clr_theme3">$45,200</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6">
                                <div class="single_cause mb-30">
                                    <div class="single_cause_img_wrapper">
                                        <div class="single_cause_img w_img img_effect_white">
                                            <a href="cause-details.php"><img src="assets/img/causes/cause25.jpg" alt="img"></a>
                                        </div>
                                        <div class="progress cause_progress">
                                            <div class="progress-bar" role="progressbar" data-width="98%" aria-valuenow="98" aria-valuemin="0" aria-valuemax="100"><span>98%</span></div>
                                        </div>
                                    </div>

                                    <div class="single_cause_content">
                                        <div class="single_cause">
                                            <span class="sub_title">Food</span>
                                            <h3 class="title"><a href="cause-details.php">Don't rude to poor who respect you and your family</a></h3>
                                        </div>
                                        <div class="single_cause_meta">
                                            <div class="single_meta d-inline-block">
                                                <span class="meta_text clr_theme1"><i class="fal fa-globe"></i> Goal</span>
                                                <span class="meta_price clr_theme1">$4,7100</span>
                                            </div>
                                            <div class="single_meta d-inline-block">
                                                <span class="meta_text clr_theme2"><i class="fal fa-users"></i> Raised</span>
                                                <span class="meta_price clr_theme2">$43,300</span>
                                            </div>
                                            <div class="single_meta d-inline-block">
                                                <span class="meta_text clr_theme3"><i class="fal fa-reply"></i> To go</span>
                                                <span class="meta_price clr_theme3">$40,200</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6">
                                <div class="single_cause mb-30">
                                    <div class="single_cause_img_wrapper">
                                        <div class="single_cause_img w_img img_effect_white">
                                            <a href="cause-details.php"><img src="assets/img/causes/cause26.jpg" alt="img"></a>
                                        </div>
                                        <div class="progress cause_progress">
                                            <div class="progress-bar" role="progressbar" data-width="68%" aria-valuenow="68" aria-valuemin="0" aria-valuemax="100"><span>68%</span></div>
                                        </div>
                                    </div>

                                    <div class="single_cause_content">
                                        <div class="single_cause">
                                            <span class="sub_title">Food</span>
                                            <h3 class="title"><a href="cause-details.php">Share your food with homeless children to get peace.</a></h3>
                                        </div>
                                        <div class="single_cause_meta">
                                            <div class="single_meta d-inline-block">
                                                <span class="meta_text clr_theme1"><i class="fal fa-globe"></i> Goal</span>
                                                <span class="meta_price clr_theme1">$21,100</span>
                                            </div>
                                            <div class="single_meta d-inline-block">
                                                <span class="meta_text clr_theme2"><i class="fal fa-users"></i> Raised</span>
                                                <span class="meta_price clr_theme2">$19,300</span>
                                            </div>
                                            <div class="single_meta d-inline-block">
                                                <span class="meta_text clr_theme3"><i class="fal fa-reply"></i> To go</span>
                                                <span class="meta_price clr_theme3">$31,200</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6">
                                <div class="single_cause mb-30">
                                    <div class="single_cause_img_wrapper">
                                        <div class="single_cause_img w_img img_effect_white">
                                            <a href="cause-details.php"><img src="assets/img/causes/cause23.jpg" alt="img"></a>
                                        </div>
                                        <div class="progress cause_progress">
                                            <div class="progress-bar" role="progressbar" data-width="68%" aria-valuenow="68" aria-valuemin="0" aria-valuemax="100"><span>68%</span></div>
                                        </div>
                                    </div>

                                    <div class="single_cause_content">
                                        <div class="single_cause">
                                            <span class="sub_title">Food</span>
                                            <h3 class="title"><a href="cause-details.php">Donate now to help the helpless people authentically</a></h3>
                                        </div>
                                        <div class="single_cause_meta">
                                            <div class="single_meta d-inline-block">
                                                <span class="meta_text clr_theme1"><i class="fal fa-globe"></i> Goal</span>
                                                <span class="meta_price clr_theme1">$21,100</span>
                                            </div>
                                            <div class="single_meta d-inline-block">
                                                <span class="meta_text clr_theme2"><i class="fal fa-users"></i> Raised</span>
                                                <span class="meta_price clr_theme2">$19,300</span>
                                            </div>
                                            <div class="single_meta d-inline-block">
                                                <span class="meta_text clr_theme3"><i class="fal fa-reply"></i> To go</span>
                                                <span class="meta_price clr_theme3">$31,200</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6">
                                <div class="single_cause mb-30">
                                    <div class="single_cause_img_wrapper">
                                        <div class="single_cause_img w_img img_effect_white">
                                            <a href="cause-details.php"><img src="assets/img/causes/cause7.jpg" alt="img"></a>
                                        </div>
                                        <div class="progress cause_progress">
                                            <div class="progress-bar" role="progressbar" data-width="68%" aria-valuenow="68" aria-valuemin="0" aria-valuemax="100"><span>68%</span></div>
                                        </div>
                                    </div>

                                    <div class="single_cause_content">
                                        <div class="single_cause">
                                            <span class="sub_title">Food</span>
                                            <h3 class="title"><a href="cause-details.php">Putting the power of law in people's hand</a></h3>
                                        </div>
                                        <div class="single_cause_meta">
                                            <div class="single_meta d-inline-block">
                                                <span class="meta_text clr_theme1"><i class="fal fa-globe"></i> Goal</span>
                                                <span class="meta_price clr_theme1">$21,100</span>
                                            </div>
                                            <div class="single_meta d-inline-block">
                                                <span class="meta_text clr_theme2"><i class="fal fa-users"></i> Raised</span>
                                                <span class="meta_price clr_theme2">$19,300</span>
                                            </div>
                                            <div class="single_meta d-inline-block">
                                                <span class="meta_text clr_theme3"><i class="fal fa-reply"></i> To go</span>
                                                <span class="meta_price clr_theme3">$31,200</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6">
                                <div class="single_cause mb-30">
                                    <div class="single_cause_img_wrapper">
                                        <div class="single_cause_img w_img img_effect_white">
                                            <a href="cause-details.php"><img src="assets/img/causes/cause20.jpg" alt="img"></a>
                                        </div>
                                        <div class="progress cause_progress">
                                            <div class="progress-bar" role="progressbar" data-width="68%" aria-valuenow="68" aria-valuemin="0" aria-valuemax="100"><span>68%</span></div>
                                        </div>
                                    </div>

                                    <div class="single_cause_content">
                                        <div class="single_cause">
                                            <span class="sub_title">Food</span>
                                            <h3 class="title"><a href="cause-details.php">Serve the people as like as Hazi Muhammad Mohsin</a></h3>
                                        </div>
                                        <div class="single_cause_meta">
                                            <div class="single_meta d-inline-block">
                                                <span class="meta_text clr_theme1"><i class="fal fa-globe"></i> Goal</span>
                                                <span class="meta_price clr_theme1">$21,100</span>
                                            </div>
                                            <div class="single_meta d-inline-block">
                                                <span class="meta_text clr_theme2"><i class="fal fa-users"></i> Raised</span>
                                                <span class="meta_price clr_theme2">$19,300</span>
                                            </div>
                                            <div class="single_meta d-inline-block">
                                                <span class="meta_text clr_theme3"><i class="fal fa-reply"></i> To go</span>
                                                <span class="meta_price clr_theme3">$31,200</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>


                        </div>

                    </div>
                </div>
                <div class="row">
                    <div class="cause_button text-center mt-10 mb-30">
                        <a href="cause.php" class="cause_btn g_btn to_right1 rad-30">Load More <i class="far fa-plus"></i> <span></span></a>
                    </div>
                </div>
            </div>
        </section>
        <!--Recent causes area end-->

    </main>

    <!-- Main Area End-->



    <!-- back to top start -->
    <div class="progress-wrap">
        <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
        </svg>
    </div>
    <!-- back to top end -->

    <!-- Footer Area Start -->
    <?php include './naamaya.inc/footer.php'; ?>
    <!-- Footer Area End -->

    <?php include './naamaya.inc/foot.php'; ?>

</body>

</html>