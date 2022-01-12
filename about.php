<?php
// here is detail of backend
include './Backend/database.inc.php';
include './Backend/database.inc.php';
$female = "assets/img/team/me2.png";
$male = "assets/img/team/me.png";
// retring the about page
$retrive_about = "SELECT * FROM `about_us` WHERE `type`='About us'";
$result = mysqli_query($connection, $retrive_about);
$about_row = mysqli_fetch_array($result);
//retriving the about mission and vission
$retrive_m_and_v = "SELECT * FROM `about_us` WHERE `type`!='About us' && `type`!='donation'";
$result = mysqli_query($connection, $retrive_m_and_v);
?>
<!doctype php>
<php class="no-js" lang="en">

    <head>

        <?php include './naamaya.inc/head.php'; ?>
        <link rel="stylesheet" href="./assets/css/about.css">
        <title>About | Naamyaa</title>

    </head>

    <body>
        <!-- Header One End-->

        <!-- slide-bar start -->
        <?php include './naamaya.inc/header.php'; ?>
        <!-- Sidebar for Mobile -->
        <?php include './naamaya.inc/mobile_slider.php';  ?>
        <!-- Sidebar for Laptop -->
        <?php include './naamaya.inc/laptop_slider.php'; ?>
        <!-- slide-bar end -->

        <!-- Main Area Start-->
        <main>
            <!--breadcrumb area start-->
            <section class="breadcrumb_area breadcrumb_overlay" data-background="assets/img/banners/organization.jpg">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="breadcrumb_section">
                                <ul class="breadcrumb-list volunteer_breadcrumb">
                                    <li class="bhas_border"><a href="index.php">Home</a></li>
                                    <li><span class="active">About Us</span></li>
                                </ul>
                                <div class="breadcrumb_title">
                                    <h2>About Us</h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!--breadcrumb area end-->


            <!--about area start-->
            <section class="about_area pt-120">
                <div class="about_white_bg">
                    <div class="container">
                        <div class="row">
                            <div class="col-xxl-6 col-xl-4 col-lg-4">
                                <div class="donate_img_wrapper about_img_wrapper mr-10">
                                    <div class="donate_img_inner about_img_inner p-rel">
                                        <!-- row<img class="about_block" src="assets/img/about/aboutus1.jpg" alt="img"> -->
                                        <img class="about_block" <?php echo ' src="data:image/jpeg;base64,' . base64_encode($about_row['images']) . '"' ?>>

                                        <div class="about_champ_card about_abs_single">
                                            <i class="flaticon-creativity"></i>
                                            <h5 class="abs_numb">40 <span class="plus">+</span></h5>
                                            <span>Years Experience</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-6 col-xl-8 col-lg-8">
                                <div class="about_wrapper pl-30">
                                    <div class="section_title">
                                        <!-- <span class="sub_title sub_title_2"><?php echo $about_row['type']; ?></span> -->
                                        <h5 class="title title_2 mb-20"><?php echo $about_row['title']; ?></h5>
                                    </div>
                                    <p class="mb-40 justify"><?php echo $about_row['description']; ?></p>

                                    <!-- <a href="about.php" class="g_btn trans_btn rad-50 p-45">Learn More <span></span></a> -->

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!--about area end-->

            <!--about feature area start -->
            <div class="about_features_area soft-grey-2 pt-205 pb-3901">
                <?php while ($row=mysqli_fetch_array($result)){ ?>
                <div class="container">
                    <div class="row">
                        <div class="col-xxl-12">
                            <div class="section_title text-center mb-60">
                            
                        
                            </div>
                        </div>
                    </div>
                    <div class="about_single_area pt-120 pb-80">
                        <div class="container">
                            <div class="row align-items-center">
                                <div class="col-xl-6">
                                    <div class="about_signle_video mb-40">
                                        <div class="img_effect_white about_video_image_wrapper">
                                            <a href="event.php">
                                            <img <?php echo ' src="data:image/jpeg;base64,' . base64_encode($row['images']) . '"' ?>>
    
                                        </a>
                                        </div>

                                        <a href="<?php echo $row['youtube']; ?>" class="video_icon">
                                            <i class="fal fa-play"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-xl-6">
                                    <div class="about_wrapper pl-50 mb-40">
                                        <div class="section_title mb-30">
                                            <!-- <span class="sub_title sub_title_2">OUR <?php echo $row['type']; ?></span> -->
                                            <h5 class="title title_2 no_br"><?php echo $row['title']; ?></h5>
                                        </div>
                                        <p class="mb-55 justify"><?php echo $row['description']; ?></p>

                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <?php }?>
            </div>

            <div class="icon_box_area pt-120 pb-80">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-xxl-2 col-xl-2 col-lg-2 col-md-4 col-sm-6">
                            <a href="#" class="single_iconbox text-center theme-1 mb-40">
                                <i class="flaticon-lotus-flower"></i>
                                <h5 class="icon_title">Community & Culture</h5>
                            </a>
                        </div>
                        <div class="col-xxl-2 col-xl-2 col-lg-2 col-md-4 col-sm-6">
                            <a href="#" class="single_iconbox text-center theme-2 mb-40">
                                <i class="flaticon-graduation-cap"></i>
                                <h5 class="icon_title">Family & Education</h5>
                            </a>
                        </div>
                        <div class="col-xxl-2 col-xl-2 col-lg-2 col-md-4 col-sm-6">
                            <a href="#" class="single_iconbox text-center theme-3 mb-40">
                                <i class="flaticon-care"></i>
                                <h5 class="icon_title">Charity & Causes</h5>
                            </a>
                        </div>
                        <div class="col-xxl-2 col-xl-2 col-lg-2 col-md-4 col-sm-6">
                            <a href="#" class="single_iconbox text-center theme-5 mb-40">
                                <i class="flaticon-dumbbell"></i>
                                <h5 class="icon_title">Sports & Fitness</h5>
                            </a>
                        </div>
                        <div class="col-xxl-2 col-xl-2 col-lg-2 col-md-4 col-sm-6">
                            <a href="#" class="single_iconbox text-center theme-6 mb-40">
                                <i class="flaticon-creativity"></i>
                                <h5 class="icon_title">Conference & Ideas</h5>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Icon Box area end -->
            <!--about feature area end-->

            <!-- about videos area start -->

            <div class="about_videos_area mtm-300">
                <div class="container">
                    <div class="row">
                        <div class="col-xxl-12">
                            <div class="about_video_section text-center p-2500 bg_cover" data-background="assets/img/bg/video_bg.jpg">
                                <a href="#" class="play_btn p-rel popup-video ab_4"><i class="fas fa-play"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--about videos area end-->

            <!--about_faq area start -->


        </main>

        <!-- Main Area End-->

        <!-- back to top start -->

        <!-- back to top end -->

        <!-- Footer Area Start -->
        <?php include './naamaya.inc/footer.php' ?>
        <!-- Footer Area End -->

        <script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
        <script src="assets/js/jquery.min.js"></script>
        <script src="assets/js/bootstrap.bundle.min.js"></script>
        <script src="assets/js/owl.carousel.min.js"></script>
        <script src="assets/js/slick.min.js"></script>
        <script src="assets/js/jquery.meanmenu.min.js"></script>
        <script src="assets/js/wow.min.js"></script>
        <script src="assets/js/jquery.scrollUp.min.js"></script>
        <script src="assets/js/jquery.magnific-popup.min.js"></script>
        <script src="assets/js/isotope.pkgd.min.js"></script>
        <script src="assets/js/imagesloaded.pkgd.min.js"></script>
        <script src="assets/js/jquery.nice-select.js"></script>
        <script src="assets/js/jquery.countdown.min.js"></script>
        <script src="assets/js/back-to-top.min.js"></script>

        <script src="assets/js/swiper-bundle.min.js"></script>
        <script src="assets/js/main.js"></script>
    </body>

</php>