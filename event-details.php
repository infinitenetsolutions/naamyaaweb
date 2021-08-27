<?php include './Backend/database.inc.php'; ?>
<!doctype html>
<html class="no-js" lang="en">

<head>
    <title>Event | Naamyaa</title>
    <?php include './naamaya.inc/head.php'; ?>

</head>

<body>

    <!-- Header One Start-->
    <?php include './naamaya.inc/header.php'; ?>
    <!-- slide-bar start -->

    <!-- Sidebar for Mobile -->
    <?php include './naamaya.inc/mobile_slider.php'; ?>


    <!-- Sidebar for Laptop -->
    <?php include './naamaya.inc/laptop_slider.php'; ?>


    <div class="offcanvas-overlay"></div>
    <!-- slide-bar end -->

    <!-- Main Area Start-->
    <?php
    $id = $_GET['id'];
    $data = "SELECT * FROM `event_details` WHERE `event_id`='$id'";
    $event_result = mysqli_query($connection, $data);
    $event_row = mysqli_fetch_array($event_result);
    $title = $event_row['title'];
    $details = $event_row['details'];
    $details1 = $event_row['details1'];
    $image1 = $event_row['image1'];
    $image2 = $event_row['image2'];
    $image3 = $event_row['image3'];

    ?>
    <main>
        <!--breadcrumb area start-->
        <section class="breadcrumb_area breadcrumb_overlay" data-background="assets/img/bg/breadcrumb_bg_4.jpg">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="breadcrumb_section">
                            <ul class="breadcrumb-list volunteer_breadcrumb">
                                <li class="bhas_border"><a href="index.php">Home</a></li>
                                <li><span class="active">Cause Details</span></li>
                            </ul>
                            <div class="breadcrumb_title">
                                <h2>Redcurrant food for homeless</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--breadcrumb area end-->

        <!-- cause_details_area start  -->
        <div class="cause_details_area pt-120 pb-80">
            <div class="container">
                <div class="row">
                    <div class="col-xxl-8 col-xl-8 col-lg-7">
                        <div class="single_details_wrapper mb-40">
                            <div class="single_details_img p-rel">
                                <?php echo '<img src="data:image/jpeg;base64,' . base64_encode($event_row['image1']) . '">' ?>



                            </div>
                            <div class="single_details_content">
                                <h4 class="details_title"><?php echo $title; ?></h4>
                                <p class="mb-40"><?php echo $details;  ?></p>

                                <div class="row mb-45">
                                    <div class="col-6 w_img">
                                    <?php echo '<img src="data:image/jpeg;base64,' . base64_encode($event_row['image2']) . '">' ?> 
                                    </div>
                                    <div class="col-6 w_img">
                                    <?php echo '<img src="data:image/jpeg;base64,' . base64_encode($event_row['image3']) . '">' ?> 
                                    </div>
                                </div>

                                <p class="mb-30"> <?php echo $details1; ?> </p>


                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-4 col-xl-4 col-lg-5">
                        <div class="single_sidebar_wrapper pl-15">

                            <div class="sidebar_widget has_border feed_widget mb-40">
                                <div class="sidebar_title">
                                    <h4 class="sidebar_title_text has_border"><span class="theme-1">//</span>Upcoming
                                        Events</h4>
                                </div>
                                <div class="feed_widget_content">
                                    <div class="single_feed_widget has_border">
                                        <div class="feed_widget_img"><a href="blog-details.php"><img src="assets/img/news/blog_feed1.jpg" alt="img"></a></div>
                                        <div class="feed_widget_text">
                                            <h5 class="feed_widget_title theme-1"><a href="blog-details.php">How to
                                                    improve knowledge for myself</a></h5>
                                            <a href="#" class="feed_widget_date theme-1"><i class="fal fa-calendar-alt"></i>24th March 2022</a>
                                        </div>
                                    </div>
                                    <div class="single_feed_widget has_border">
                                        <div class="feed_widget_img"><a href="blog-details.php"><img src="assets/img/news/blog_feed2.jpg" alt="img"></a></div>
                                        <div class="feed_widget_text">
                                            <h5 class="feed_widget_title theme-1"><a href="blog-details.php">Everybody
                                                    needs to know how to help myself</a></h5>
                                            <a href="#" class="feed_widget_date theme-1"><i class="fal fa-calendar-alt"></i>24th March 2022</a>
                                        </div>
                                    </div>
                                    <div class="single_feed_widget has_border">
                                        <div class="feed_widget_img"><a href="blog-details.php"><img src="assets/img/news/blog_feed3.jpg" alt="img"></a></div>
                                        <div class="feed_widget_text">
                                            <h5 class="feed_widget_title theme-1"><a href="blog-details.php">Good foods
                                                    available on behalf of fundraise</a></h5>
                                            <a href="#" class="feed_widget_date theme-1"><i class="fal fa-calendar-alt"></i>24th Sep 2021</a>
                                        </div>
                                    </div>
                                    <div class="single_feed_widget">
                                        <div class="feed_widget_img"><a href="blog-details.php"><img src="assets/img/news/blog_feed4.jpg" alt="img"></a></div>
                                        <div class="feed_widget_text">
                                            <h5 class="feed_widget_title theme-1"><a href="blog-details.php">Keep focus
                                                    on you to find out yourself</a></h5>
                                            <a href="#" class="feed_widget_date theme-1"><i class="fal fa-calendar-alt"></i>24th March 2022</a>
                                        </div>
                                    </div>

                                </div>
                            </div>

                            <div class="single_widget has_border post_widget mb-40">
                                <div class="single_widget_title">
                                    <h4 class="widget_title_text has_border">Donors Post</h4>
                                </div>
                                <div class="donor_post_wrapper">
                                    <div class="single_donor_post">
                                        <div class="donar_post_img"><a href="volunteer-details.php"><img src="assets/img/causes/donar1.jpg" alt="img"></a></div>
                                        <div class="donar_post_content">
                                            <h5 class="donar_name"><a href="volunteer-details.php">Nilmarendra Max</a>
                                            </h5>
                                            <div class="donar_meta">
                                                <a href="#" class="donar_amount theme-1 sep">₹900</a>
                                                <a href="#" class="donar_date theme-2"><i class="fal fa-calendar-alt"></i> February 20, 2022</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="single_donor_post">
                                        <div class="donar_post_img"><a href="volunteer-details.php"><img src="assets/img/causes/donar2.jpg" alt="img"></a></div>
                                        <div class="donar_post_content">
                                            <h5 class="donar_name"><a href="volunteer-details.php">Miranda H. Hilix</a>
                                            </h5>
                                            <div class="donar_meta">
                                                <a href="#" class="donar_amount theme-1 sep">₹500</a>
                                                <a href="#" class="donar_date theme-2"><i class="fal fa-calendar-alt"></i> February 20, 2022</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="single_donor_post">
                                        <div class="donar_post_img"><a href="volunteer-details.php"><img src="assets/img/causes/donar3.jpg" alt="img"></a></div>
                                        <div class="donar_post_content">
                                            <h5 class="donar_name"><a href="volunteer-details.php">Anayatulla Abbasi</a>
                                            </h5>
                                            <div class="donar_meta">
                                                <a href="#" class="donar_amount theme-1 sep">₹900</a>
                                                <a href="#" class="donar_date theme-2"><i class="fal fa-calendar-alt"></i> February 20, 2022</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="single_donor_post">
                                        <div class="donar_post_img"><a href="volunteer-details.php"><img src="assets/img/causes/donar4.jpg" alt="img"></a></div>
                                        <div class="donar_post_content">
                                            <h5 class="donar_name"><a href="volunteer-details.php">Ahmadullah Fokir</a>
                                            </h5>
                                            <div class="donar_meta">
                                                <a href="#" class="donar_amount theme-1 sep">₹300</a>
                                                <a href="#" class="donar_date theme-2"><i class="fal fa-calendar-alt"></i> February 20, 2022</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="single_donor_post">
                                        <div class="donar_post_img"><a href="volunteer-details.php"><img src="assets/img/causes/donar5.jpg" alt="img"></a></div>
                                        <div class="donar_post_content">
                                            <h5 class="donar_name"><a href="volunteer-details.php">Ahmed Riad</a></h5>
                                            <div class="donar_meta">
                                                <a href="#" class="donar_amount theme-1 sep">₹500</a>
                                                <a href="#" class="donar_date theme-2"><i class="fal fa-calendar-alt"></i> February 20, 2022</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="single_donor_post">
                                        <div class="donar_post_img"><a href="volunteer-details.php"><img src="assets/img/causes/donar6.jpg" alt="img"></a></div>
                                        <div class="donar_post_content">
                                            <h5 class="donar_name"><a href="volunteer-details.php">Andreu R.</a></h5>
                                            <div class="donar_meta">
                                                <a href="#" class="donar_amount theme-1 sep">₹500</a>
                                                <a href="#" class="donar_date theme-2"><i class="fal fa-calendar-alt"></i> February 20, 2022</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- cause_details_area end  -->

    </main>

    <!-- Main Area End-->


    <!-- back to top start -->
    <div class="progress-wrap">
        <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
        </svg>
    </div>
    <!-- back to top end -->

    <?php include './naamaya.inc/footer.php'; ?>
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
    <script src="assets/js/datepicker.min.js"></script>
    <script src="assets/js/back-to-top.min.js"></script>

    <script src="assets/js/swiper-bundle.min.js"></script>
    <script src="assets/js/main.js"></script>
</body>

</html>