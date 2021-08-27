<?php
$inputerr = '';
include './Backend/sessionstart.php';
include './Backend/database.inc.php';
include './Backend/functions.inc.php';
// inserting the data in session for payment 
if (isset($_POST['donate'])) {
    $name = name($_POST['name']);
    $email = email($_POST['email']);
    $categories = $_POST['categories'];
    if ($name != '' && $email != '' && $categories != '') {
        $_SESSION['name'] = $name;
        $_SESSION['email'] = $email;
        $_SESSION['categories'] = $categories;
        header("location:donation.php?do");
    } else {
        $inputerr = "please input proper email";
    }
}

// Retriving the Categories from the database
$categorie = "SELECT * FROM `categories` WHERE 1";
$result = mysqli_query($connection, $categorie);

$event = "SELECT  * FROM `Event` WHERE 1";
$event_result = mysqli_query($connection, $event);

// here the retring the data of the contact page


?>




<!doctype html>
<html class="no-js" lang="en">

<head>
    <title>Home | naamaya</title>
    <?php include './naamaya.inc/head.php' ?>

    <link rel="stylesheet" href="./assets/css1/style-starter.css">
</head>

<body>

    <!-- header start  -->
    <?php
    include './naamaya.inc/header.php';
    ?>
    <!-- Header One End-->

    <!-- slide-bar start -->

    <!-- Sidebar for Mobile -->

    <?php include './naamaya.inc/mobile_slider.php' ?>

    <!-- Sidebar for Laptop -->
    <?php include './naamaya.inc/laptop_slider.php' ?>
    <!-- slide-bar end -->


    <!-- Main Area Start-->
    <main>
        <!--slider area start-->
        <section class="slider_area">
            <div class="img_topleft"><img class="slider_img" data-depth="1" src="assets/img/slider/slider.jpg"
                    alt="img"></div>
            <!-- <div class="img_topright"><img data-depth="1.3" src="assets/img/slider/slider.jpg" alt="img"></div> -->
            <!-- <div class="img_bottomleft"><img data-depth="1.5" src="assets/img/slider/slider.jpg" alt="img"></div> -->
            <div class="slider_active">
                <div class="single_slider slider_height p-rel d-flex align-items-center align-items-md-end">
                    <!-- <div class="img_bottomright"><img data-depth="0.8" src="assets/img/slider/slider.jpg" alt="img"></div> -->
                    <div class="container">
                        <div class="row mrt-40 mrt-40">
                            <div class="col-xxl-6 col-xl-7 col-lg-8 col-md-9">
                                <div class="slider_content text_space">
                                    <div class="slider_text text_overlay">
                                        <h6 class="slider_title"> <span>Make</span> <br> Donation</h6>
                                        <div class="slider_button"><a href="event_upcoming.php"
                                                class="g_btn theme1_bg to_right2 slider_btn i_left rad-30 p-35"><i
                                                    class="fal fa-heart"></i> Explore Events<span></span></a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--slider area end-->



        <!--cta area start-->
        <section class="cta_area cta-bg text-white pt-90 pb-60">
            <div class="container">
                <div class="row mrt-40 mrt-40 align-items-center">
                    <div class="col-xxl-4 text-center text-xxl-start">
                        <div class="section_title_2 mb-30">
                            <span class="sub_title_2">Make Donation</span>
                            <h3 class="section_title_2 mb-0">Become a Donar</h3>
                        </div>
                    </div>
                    <div class="col-xxl-8">
                        <form action="" method="POST">
                            <div
                                class="donar_section d-lg-flex justify-content-center justify-content-xxl-end text-center">
                                <div class="donar_form d-inline-block mb-30">
                                    <input name="name" required type="text" placeholder="Your name"
                                        class="donar_input mr-15">
                                    <input name="email" required type="text" placeholder="Enter email"
                                        class="donar_input mr-15">
                                </div>
                                <div class="donar_currency d-inline-block mb-30">
                                    <select name="categories" type="number" class="currency mr-15" pattern="[0-9]+"
                                        title="please input any ammount only" placeholder="select Categories">
                                        <option value="any">anyone</option>
                                        <?php while ($row = mysqli_fetch_array($result)) { ?>
                                        <option value="<?php echo $row['name'];  ?>"><?php echo $row['name']; ?>
                                        </option>
                                        <?php } ?>
                                    </select>
                                </div>
                                <div class="donnar_button text-center">
                                    <button name="donate"
                                        class="g_btn2 g_btn theme1_bg to_right2 donation rad-30 p-60 mb-30">Make a
                                        Donation</button>
                                </div>

                            </div>
                            <p> <?php echo $inputerr; ?></p>
                        </form>

                    </div>
                </div>
            </div>
        </section>
        <!--cta area end-->



        <!--about area start-->


        <!-- causes area start-->
        <section class="causes_area grey-bg pt-15 pb-385" data-background="assets/img/causes/cause_map.png">
            <div class="container">
                <div class="row ">
                    <div class="col-xxl-12 text-center">
                        <div class="section_title back-border mb-45">
                            <a class="anchertag" href="#"> <span class="sub_title"><i
                                        class="fal fa-heart"></i>Target</span>
                                <h3 class="title">Target <span class="more">More</span></h3>
                            </a>

                        </div>

                    </div>
                </div>
                <div class="swiper-container1 cause_container_active">
                    <div class="swiper-wrapper">
                        <div class="single_cause swiper-slide mb-30">
                            <div class="single_cause_img img_effect_white p-rel">
                                <a href="donation.php"><img src="assets/img/causes/cause1.jpg" alt="img"></a>
                                <div class="progress_wrapper pbar_1">
                                    <div class="progress_circle" data-percentage="65">
                                        <span class="progress-left">
                                            <span class="progress-bar"></span>
                                        </span>
                                        <span class="progress-right">
                                            <span class="progress-bar"></span>
                                        </span>
                                        <div class="progress-value">
                                            <div>
                                                65%
                                            </div>
                                        </div>
                                    </div>
                                    <span>Water</span>
                                </div>
                            </div>
                            <div class="single_cause_content single_cause_content_2">
                                <div class="single_cause">
                                    <h3 class="title"><a href="donation.php">The various agency help the poor, you also
                                            can try.</a></h3>
                                </div>
                                <div class="single_cause_meta">
                                    <div class="single_meta d-inline-block">
                                        <span class="meta_text clr_theme1"><i class="fal fa-globe"></i> Goal</span>
                                        <span class="meta_price clr_theme1">₹4,5100</span>
                                    </div>
                                    <div class="single_meta d-inline-block">
                                        <span class="meta_text clr_theme2"><i class="fal fa-users"></i> Raised</span>
                                        <span class="meta_price clr_theme2">₹45,300</span>
                                    </div>
                                    <div class="single_meta d-inline-block">
                                        <span class="meta_text clr_theme3"><i class="fal fa-reply"></i> To go</span>
                                        <span class="meta_price clr_theme3">₹45,200</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="single_cause swiper-slide mb-30">
                            <div class="single_cause_img p-rel img_effect_white">
                                <a href="donation.php"><img src="assets/img/causes/cause17.jpg" alt="img"></a>
                                <div class="progress_wrapper pbar_2">
                                    <div class="progress_circle" data-percentage="80">
                                        <span class="progress-left">
                                            <span class="progress-bar"></span>
                                        </span>
                                        <span class="progress-right">
                                            <span class="progress-bar"></span>
                                        </span>
                                        <div class="progress-value">
                                            <div>
                                                80%
                                            </div>
                                        </div>
                                    </div>
                                    <span>Food</span>
                                </div>
                            </div>
                            <div class="single_cause_content single_cause_content_2">
                                <div class="single_cause">
                                    <h3 class="title"><a href="donation.php">If poor will well educated, you and you
                                            country will</a></h3>
                                </div>
                                <div class="single_cause_meta">
                                    <div class="single_meta d-inline-block">
                                        <span class="meta_text clr_theme1"><i class="fal fa-globe"></i> Goal</span>
                                        <span class="meta_price clr_theme1">₹4,7100</span>
                                    </div>
                                    <div class="single_meta d-inline-block">
                                        <span class="meta_text clr_theme2"><i class="fal fa-users"></i> Raised</span>
                                        <span class="meta_price clr_theme2">₹43,300</span>
                                    </div>
                                    <div class="single_meta d-inline-block">
                                        <span class="meta_text clr_theme3"><i class="fal fa-reply"></i> To go</span>
                                        <span class="meta_price clr_theme3">₹40,200</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="single_cause swiper-slide mb-30">
                            <div class="single_cause_img p-rel img_effect_white">
                                <a href="donation.php"><img src="assets/img/causes/cause3.jpg" alt="img"></a>
                                <div class="progress_wrapper pbar_3">
                                    <div class="progress_circle" data-percentage="80">
                                        <span class="progress-left">
                                            <span class="progress-bar"></span>
                                        </span>
                                        <span class="progress-right">
                                            <span class="progress-bar"></span>
                                        </span>
                                        <div class="progress-value">
                                            <div>
                                                50%
                                            </div>
                                        </div>
                                    </div>
                                    <span>Education</span>
                                </div>
                            </div>
                            <div class="single_cause_content single_cause_content_2">
                                <div class="single_cause">
                                    <h3 class="title"><a href="donation.php">Give your helping hand to teach poor people
                                            always</a></h3>
                                </div>
                                <div class="single_cause_meta">
                                    <div class="single_meta d-inline-block">
                                        <span class="meta_text clr_theme1"><i class="fal fa-globe"></i> Goal</span>
                                        <span class="meta_price clr_theme1">₹21,100</span>
                                    </div>
                                    <div class="single_meta d-inline-block">
                                        <span class="meta_text clr_theme2"><i class="fal fa-users"></i> Raised</span>
                                        <span class="meta_price clr_theme2">₹19,300</span>
                                    </div>
                                    <div class="single_meta d-inline-block">
                                        <span class="meta_text clr_theme3"><i class="fal fa-reply"></i> To go</span>
                                        <span class="meta_price clr_theme3">₹31,200</span>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="single_cause swiper-slide mb-30">
                            <div class="single_cause_img p-rel img_effect_white">
                                <a href="donation.php"><img src="assets/img/causes/cause10.jpg" alt="img"></a>
                                <div class="progress_wrapper pbar_3">
                                    <div class="progress_circle" data-percentage="80">
                                        <span class="progress-left">
                                            <span class="progress-bar"></span>
                                        </span>
                                        <span class="progress-right">
                                            <span class="progress-bar"></span>
                                        </span>
                                        <div class="progress-value">
                                            <div>
                                                50%
                                            </div>
                                        </div>
                                    </div>
                                    <span>Medical</span>
                                </div>
                            </div>
                            <div class="single_cause_content single_cause_content_2">
                                <div class="single_cause">
                                    <h3 class="title"><a href="donation.php">We have to careful and helpful to poor
                                            people always.</a></h3>
                                </div>
                                <div class="single_cause_meta">
                                    <div class="single_meta d-inline-block">
                                        <span class="meta_text clr_theme1"><i class="fal fa-globe"></i> Goal</span>
                                        <span class="meta_price clr_theme1">₹21,100</span>
                                    </div>
                                    <div class="single_meta d-inline-block">
                                        <span class="meta_text clr_theme2"><i class="fal fa-users"></i> Raised</span>
                                        <span class="meta_price clr_theme2">₹19,300</span>
                                    </div>
                                    <div class="single_meta d-inline-block">
                                        <span class="meta_text clr_theme3"><i class="fal fa-reply"></i> To go</span>
                                        <span class="meta_price clr_theme3">₹31,200</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="single_cause swiper-slide mb-30">
                            <div class="single_cause_img p-rel img_effect_white">
                                <a href="donation.php"><img src="assets/img/causes/cause11.jpg" alt="img"></a>
                                <div class="progress_wrapper pbar_3">
                                    <div class="progress_circle" data-percentage="80">
                                        <span class="progress-left">
                                            <span class="progress-bar"></span>
                                        </span>
                                        <span class="progress-right">
                                            <span class="progress-bar"></span>
                                        </span>
                                        <div class="progress-value">
                                            <div>
                                                50%
                                            </div>
                                        </div>
                                    </div>
                                    <span>Medical</span>
                                </div>
                            </div>
                            <div class="single_cause_content single_cause_content_2">
                                <div class="single_cause">
                                    <h3 class="title"><a href="donation.php">Share your money to serve poor people as
                                            far possible.</a></h3>
                                </div>
                                <div class="single_cause_meta">
                                    <div class="single_meta d-inline-block">
                                        <span class="meta_text clr_theme1"><i class="fal fa-globe"></i> Goal</span>
                                        <span class="meta_price clr_theme1">₹21,100</span>
                                    </div>
                                    <div class="single_meta d-inline-block">
                                        <span class="meta_text clr_theme2"><i class="fal fa-users"></i> Raised</span>
                                        <span class="meta_price clr_theme2">₹19,300</span>
                                    </div>
                                    <div class="single_meta d-inline-block">
                                        <span class="meta_text clr_theme3"><i class="fal fa-reply"></i> To go</span>
                                        <span class="meta_price clr_theme3">₹31,200</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="single_cause swiper-slide mb-30">
                            <div class="single_cause_img p-rel img_effect_white">
                                <a href="donation.php"><img src="assets/img/causes/cause12.jpg" alt="img"></a>
                                <div class="progress_wrapper pbar_3">
                                    <div class="progress_circle" data-percentage="80">
                                        <span class="progress-left">
                                            <span class="progress-bar"></span>
                                        </span>
                                        <span class="progress-right">
                                            <span class="progress-bar"></span>
                                        </span>
                                        <div class="progress-value">
                                            <div>
                                                50%
                                            </div>
                                        </div>
                                    </div>
                                    <span>Medical</span>
                                </div>
                            </div>
                            <div class="single_cause_content single_cause_content_2">
                                <div class="single_cause">
                                    <h3 class="title"><a href="donation.php">Donate now to forward for poor at this
                                            pandemic time.</a></h3>
                                </div>
                                <div class="single_cause_meta">
                                    <div class="single_meta d-inline-block">
                                        <span class="meta_text clr_theme1"><i class="fal fa-globe"></i> Goal</span>
                                        <span class="meta_price clr_theme1">₹21,100</span>
                                    </div>
                                    <div class="single_meta d-inline-block">
                                        <span class="meta_text clr_theme2"><i class="fal fa-users"></i> Raised</span>
                                        <span class="meta_price clr_theme2">₹19,300</span>
                                    </div>
                                    <div class="single_meta d-inline-block">
                                        <span class="meta_text clr_theme3"><i class="fal fa-reply"></i> To go</span>
                                        <span class="meta_price clr_theme3">₹31,200</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="single_cause swiper-slide mb-30">
                            <div class="single_cause_img p-rel img_effect_white">
                                <a href="donation.php"><img src="assets/img/causes/cause24.jpg" alt="img"></a>
                                <div class="progress_wrapper pbar_3">
                                    <div class="progress_circle" data-percentage="80">
                                        <span class="progress-left">
                                            <span class="progress-bar"></span>
                                        </span>
                                        <span class="progress-right">
                                            <span class="progress-bar"></span>
                                        </span>
                                        <div class="progress-value">
                                            <div>
                                                50%
                                            </div>
                                        </div>
                                    </div>
                                    <span>Food</span>
                                </div>
                            </div>
                            <div class="single_cause_content single_cause_content_2">
                                <div class="single_cause">
                                    <h3 class="title"><a href="donation.php">Putting the power of law in people's
                                            hand</a></h3>
                                </div>
                                <div class="single_cause_meta">
                                    <div class="single_meta d-inline-block">
                                        <span class="meta_text clr_theme1"><i class="fal fa-globe"></i> Goal</span>
                                        <span class="meta_price clr_theme1">₹21,100</span>
                                    </div>
                                    <div class="single_meta d-inline-block">
                                        <span class="meta_text clr_theme2"><i class="fal fa-users"></i> Raised</span>
                                        <span class="meta_price clr_theme2">₹19,300</span>
                                    </div>
                                    <div class="single_meta d-inline-block">
                                        <span class="meta_text clr_theme3"><i class="fal fa-reply"></i> To go</span>
                                        <span class="meta_price clr_theme3">₹31,200</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>


            </div>
        </section>
        <!-- causes area end-->
        <?php include './naamaya.inc/volunteer_registration.php';  ?>
        <!--support area start-->
        <div class="support_area mtm-394 pb-90">
            <div class="container">
                <div class="support_bg white-bg">
                    <div class="row mrt-40">
                        <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-12">
                            <div class="support_images_active swiper-container dots_style">
                                <div class="swiper-wrapper">
                                    <div class="support_img_single swiper-slide img_effect_white">
                                        <a href="volunteer.php"><img class="support-img"
                                                src="assets/img/bg/support1.jpg" alt="img"></a>
                                    </div>
                                    <div class="support_img_single swiper-slide img_effect_white">
                                        <a href="volunteer.php"><img class="support-img"
                                                src="assets/img/bg/support3.jpg" alt="img"></a>
                                    </div>
                                    <div class="support_img_single swiper-slide img_effect_white">
                                        <a href="volunteer.php"><img class="support-img"
                                                src="assets/img/bg/support4.jpg" alt="img"></a>
                                    </div>
                                    <div class="support_img_single swiper-slide img_effect_white">
                                        <a href="volunteer.php"><img class="support-img"
                                                src="assets/img/bg/support3.jpg" alt="img"></a>
                                    </div>
                                </div>
                                <!-- Add Pagination -->
                                <div class="swiper-pagination-join text-center"></div>
                            </div>
                        </div>
                        <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-12 d-flex align-items-center">
                            <div class="support_wrapper">
                                <div class="section_title back-border" style="margin-top:66px;">
                                    <span class="sub_title"><i class="fal fa-users"></i> Join Us</span>
                                    <h3 class="title">Want to volunteer?</h3>
                                </div>
                                <p class="mb-45">Any individual who believes in ‘karma-yoga’ and ‘seva’ can join us for
                                    the sheer joy of serving. We promise you will never regret.
                                    </p>

                            </div>

                            <a href="" data-toggle="modal" data-target="#modalContactForm"
                                class="g_btn1  theme1_bg to_right2 i_right rad-30">Join Us</a>
                        </div>

                    </div>
                </div>
            </div>
        </div>

        </div>
        <!--support area end-->


        <!--featureevent area start -->
        <div class="f_event_area bg_cover p-rel  " data-background="assets/img/featureEvent/fevent_bg.jpg">
            <div class="container">
                <div class="row mrt-40">
                    <div class="col-xxl-12">
                        <div class="section_title back-border back-border text-center mb-45">
                            <span class="sub_title"><i class="fal fa-heart"></i> Events</span>
                            <h3 class="title">Featured Events</h3>
                        </div>
                    </div>
                </div>
                <div class="row mrt-40">
                    <div class="col-xxl-12">
                        <div class="">
                            <?php while ($event_row = mysqli_fetch_array($event_result)) {
                                $str = $event_row['date'];
                                $newdate = str_replace('-', '/', $str);

                            ?>
                            <div class="single_events_wrapper tab-border mb-30">
                                <div class="row align-items-center">
                                    <div class="col-xxl-3 col-xl-3 col-lg-3 d-md-none d-lg-block">
                                        <div class="eventcount_img w_img">
                                            <a href="event-details.php"><img src="assets/img/causes/cause1.jpg"
                                                    alt="img"></a>
                                        </div>
                                    </div>
                                    <div class="col-xxl-3 col-xl-4 col-lg-3 col-md-5 text-center text-md-start">
                                        <div class="eventcount_text heading-clr">
                                            <h5><a href="event-details.php"><?php echo $event_row['name']; ?></a></h5>
                                            <span><?php echo $event_row['address'];
                                                        echo " , ";
                                                        echo $event_row['city'];
                                                        echo " , ";
                                                        echo $event_row['state']; ?></span>
                                        </div>
                                    </div>
                                    <div class="col-xxl-6 col-xl-5 col-lg-6 col-md-7 text-center text-md-end">
                                        <div class="count_down_box heading-clr"
                                            data-countdown="<?php echo $newdate; ?>"></div>
                                    </div>
                                </div>
                            </div>
                            <?php } ?>
                        </div>
                        <div class="tab-pane fade" id="water" role="tabpanel" aria-labelledby="nav-water">


                            <div class="single_events_wrapper tab-border mb-70">
                                <div class="row mrt-40 align-items-center">
                                    <div class="col-xxl-3 col-xl-3 col-lg-3 d-md-none d-lg-block">
                                        <div class="eventcount_img w_img">
                                            <a href="event-details.php"><img src="assets/img/causes/cause6.jpg"
                                                    alt="img"></a>
                                        </div>
                                    </div>
                                    <div class="col-xxl-3 col-xl-4 col-lg-3 col-md-5 text-center text-md-start">
                                        <div class="eventcount_text heading-clr">
                                            <h5><a href="event-details.php">Every Second Until the Event</a></h5>
                                            <span>Douglas Park, Chicago, IL</span>
                                        </div>
                                    </div>
                                    <div class="col-xxl-6 col-xl-5 col-lg-6 col-md-7 text-center text-md-end">
                                        <div class="count_down_box heading-clr" data-countdown="2021/08/19"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <section class="reach-marg back-color display-none">
            <div class="timeline spacer-map">
                <div class="container">
                    <div class="row ">
                        <div class="col-md-7">
                            <div class="story-text">
                                <div class="heading">
                                    <h2>Our Reach</h>
                                </div>
                                <p class="text-gray">In keeping with its philosophy of 'Real Work Real Change', Smile
                                    Foundation , an <b>NGO in Delhi,</b> India to support the underserved, has taken its
                                    intervention into the interiors of India, reaching the unreached in the remotest of
                                    rural areas and urban slums with our services and making this <b>helping foundation
                                        in India,</b> the <b>best NGO in India.</b></p>
                                <div class="row mrt-40 vdivide spacer">
                                    <div class="stories" id="stories">
                                        <div class="col-md-4 col-sm-4">
                                            <h6 class="our-reach">25</h6>
                                            <h6 class="text-color">States</h6>
                                        </div>
                                        <div class="col-md-4 col-sm-4">
                                            <h6 class="our-reach">400+</h6>
                                            <h6 class="text-color">Projects</h6>
                                        </div>
                                        <div class="col-md-4 col-sm-4">
                                            <h6 class="our-reach">2000+</h6>
                                            <h6 class="text-color">villages &amp; slums</h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-5">
                            <div class="img-wrap-2">
                                <img src="./assets/images/map.png" class="bt-wr img-responsive">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Modal For map pop-up Start here-->
            <div class="modal fade" id="map" tabindex="-1" role="dialog" aria-labelledby="project-4-label"
                aria-hidden="true">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal"><span
                                    aria-hidden="true">×</span><span class="sr-only">Close</span></button>
                            <h3 class="modal-title" id="project-4-label" style="color:#fff;">Smile Foundation India</h3>
                        </div>
                        <div class="modal-body">
                            <div class="row mrt-40">
                                <div class="col-md-12 map">
                                    <img src="images/home/map-1.png" class="img-responsive">
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-details2" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Modal For banner pop-up end here-->
        </section>
        <!--featureevent area end-->

        <section class="w3l-testimonials" id="testimonials">
            <div class="customers-6-content py-5">
                <div class="container py-lg-3">
                    <div class="heading text-center mx-auto">
                        <h3 class="head back-border">What They Says</h3>
                        <p class="my-3 head "> Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere
                            cubilia Curae;
                            Nulla mollis dapibus nunc, ut rhoncus
                            turpis sodales quis. Integer sit amet mattis quam.</p>
                    </div>

                    <div id="customerhnyCarousel" class="carousel slide" data-ride="carousel">

                        <ol class="carousel-indicators">
                            <li data-target="#customerhnyCarousel" data-slide-to="0" class="active"></li>
                            <li data-target="#customerhnyCarousel" data-slide-to="1"></li>

                        </ol>
                        <!-- Carousel items -->
                        <div class="carousel-inner pb-5">

                            <div class="carousel-item active">
                                <div class="customer row mrt-40 mrt-40 py-5 mt-3">
                                    <div class="col-lg-4 col-md-6">
                                        <div class="card">

                                            <div class="card-body">
                                                <img class="card-img-top img-responsive" src="assets/images/c1.jpg"
                                                    alt="">
                                                <h3 class="card-title mt-2">Henry Nicholas</h3>
                                                <p class="sub-title mb-3">Photographer</p>
                                                <p class="card-text"> "Neque porro quisquam est, qui dolorem ipsum quia
                                                    dolor sit amet,
                                                    consectetur, adipisci velit, sed quia non numquam eius modi tempora
                                                    incidunt ut labore et
                                                    dolore"
                                                </p>


                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-6 off-testi-2">
                                        <div class="card">

                                            <div class="card-body">
                                                <img class="card-img-top img-responsive" src="assets/images/c2.jpg"
                                                    alt="">
                                                <h3 class="card-title mt-2">Mark Waugh</h3>
                                                <p class="sub-title mb-3">Web Designer</p>
                                                <p class="card-text"> "Neque porro quisquam est, qui dolorem ipsum quia
                                                    dolor sit amet,
                                                    consectetur, adipisci velit, sed quia non numquam eius modi tempora
                                                    incidunt ut labore et
                                                    dolore"
                                                </p>


                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 offset-md-3 offset-lg-0 col-md-6 off-testi">
                                        <div class="card">

                                            <div class="card-body">
                                                <img class="card-img-top img-responsive" src="assets/images/c3.jpg"
                                                    alt="">
                                                <h3 class="card-title mt-2">Sarina Willams</h3>
                                                <p class="sub-title mb-3">Graphic Designer</p>
                                                <p class="card-text"> "Neque porro quisquam est, qui dolorem ipsum quia
                                                    dolor sit amet,
                                                    consectetur, adipisci velit, sed quia non numquam eius modi tempora
                                                    incidunt ut labore et
                                                    dolore"
                                                </p>


                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--.item-->

                            <div class="carousel-item">
                                <div class="customer row mrt-40 mrt-40 py-5 mt-3">
                                    <div class="col-lg-4 col-md-6">
                                        <div class="card">

                                            <div class="card-body">
                                                <img class="card-img-top img-responsive" src="assets/images/c2.jpg"
                                                    alt="">
                                                <h3 class="card-title mt-2">Mark Waugh</h3>
                                                <p class="sub-title mb-3">Engineer</p>
                                                <p class="card-text"> "Neque porro quisquam est, qui dolorem ipsum quia
                                                    dolor sit amet,
                                                    consectetur, adipisci velit, sed quia non numquam eius modi tempora
                                                    incidunt ut labore et
                                                    dolore"
                                                </p>


                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-6 off-testi-2">
                                        <div class="card">

                                            <div class="card-body">
                                                <img class="card-img-top img-responsive" src="assets/images/c3.jpg"
                                                    alt="">
                                                <h3 class="card-title mt-2">Sarina Willams</h3>
                                                <p class="sub-title mb-3">Engineer</p>
                                                <p class="card-text"> "Neque porro quisquam est, qui dolorem ipsum quia
                                                    dolor sit amet,
                                                    consectetur, adipisci velit, sed quia non numquam eius modi tempora
                                                    incidunt ut labore et
                                                    dolore"
                                                </p>


                                            </div>
                                        </div>


                                    </div>
                                    <div class="col-lg-4 offset-md-3 offset-lg-0 col-md-6 off-testi">
                                        <div class="card">

                                            <div class="card-body">
                                                <img class="card-img-top img-responsive" src="assets/images/c1.jpg"
                                                    alt="">
                                                <h3 class="card-title mt-2">Henry Nicholas</h3>
                                                <p class="sub-title mb-3">Engineer</p>
                                                <p class="card-text"> "Neque porro quisquam est, qui dolorem ipsum quia
                                                    dolor sit amet,
                                                    consectetur, adipisci velit, sed quia non numquam eius modi tempora
                                                    incidunt ut labore et
                                                    dolore"
                                                </p>


                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>


                        </div>
                        <!--.carousel-inner-->
                    </div>
                </div>
            </div>
            <!--//customers -->
        </section>
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
    <?php
    include './naamaya.inc/footer.php';
    ?>
    <!-- Footer Area End -->


    <!-- Fullscreen search -->
    <div class="search-wrap">
        <div class="search-inner">
            <i class="fas fa-times search-close" id="search-close"></i>
            <div class="search-cell">
                <form method="get">
                    <div class="search-field-holder">
                        <input type="search" class="main-search-input" placeholder="Search Your Keyword...">
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- end fullscreen search -->
    <?php include './naamaya.inc/foot.php'; ?>
</body>
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

</html>