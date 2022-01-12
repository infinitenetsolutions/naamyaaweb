<?php
include './Backend/database.inc.php';
$date = date("Y-m-d");
$event_name = '';


$event_name = 'Ongoing';
$sql_query = "SELECT * FROM `Event` WHERE `date`='$date' && `status`=1";
$result = mysqli_query($connection, $sql_query);

?>
<script>
    console.log()
</script>
<!doctype html>
<html class="no-js" lang="en">

<head>
    <title>Events | Naamyaa</title>
    <?php include './naamaya.inc/head.php'; ?>
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
        <section class="breadcrumb_area breadcrumb_overlay" data-background="assets/img/banners/Event.jpg">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="breadcrumb_section">
                            <ul class="breadcrumb-list volunteer_breadcrumb">
                                <li class="bhas_border"><a href="index.php">Home</a></li>
                                <li><span class="active">Events </span></li>
                            </ul>
                            <div class="breadcrumb_title">
                                <h2><?php echo $event_name; ?> Events</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--breadcrumb area end-->
        <!--Recent causes area start-->
        <section class="event_causes_area pt-120 pb-85">
            <div class="container">
                <div class="row">
                    <div class="col-xxl-12 text-center">
                        <div class="cause_button_wrapper mb-25">
                            <nav>
                                <div class="nav tab_buttons" id="nav-tab" role="tablist">
                                    <button class="nav-link active" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home" aria-selected="true">All Categories</button>
                                    <?php
                                    $cate_name = "SELECT * FROM `categories` WHERE `status`=1";
                                    $cat_result = mysqli_query($connection, $cate_name);
                                    while ($data = mysqli_fetch_array($cat_result)) {

                                    ?>
                                        <button class="nav-link" id="nav-water" data-bs-toggle="tab" data-bs-target="#<?php echo $data['name']; ?>" type="button" role="tab" aria-controls="water" aria-selected="true"><?php echo $data['name']; ?></button>

                                    <?php } ?>
                                </div>
                            </nav>
                        </div>
                    </div>
                </div>

                <div class="tab-content" id="nav-tabContent">
                    <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                        <?php while ($row1 = mysqli_fetch_array($result)) {

                            $event_id = $row1['id'];
                            $event_img = mysqli_query($connection, "SELECT * FROM `event_details` WHERE `event_id`='$event_id'");
                            $event_img_result = mysqli_fetch_array($event_img);
                        ?>
                            <div class="single_events_wrapper tab-border mb-30">
                                <div class="row align-items-center">
                                    <div class="col-xxl-3 col-xl-3 col-lg-3 d-md-none d-lg-block">
                                        <div class="eventcount_img w_img">
                                        <a href="event-details.php?id=<?php echo $row1['id']; ?>"><img <?php echo ' src="data:image/jpeg;base64,' . base64_encode($event_img_result['image1']) . '"' ?>></a>
                                        </div>
                                    </div>
                                    <div class="col-xxl-3 col-xl-4 col-lg-3 col-md-5 text-center text-md-start">
                                        <div class="eventcount_text heading-clr">
                                            <h5><a href="event-details.php?id=<?php echo $row1['id']; ?>"><?php echo $row1['name']; ?></a></h5>
                                            <span><?php echo $row1['address'];
                                                    echo ", ";
                                                    echo $row1['city'].', ';
                                                    echo $row1['state'];
                                                    echo ", ";
                                                    echo $row1['country'];  ?></span>
                                        </div>
                                    </div>
                                    <div class="col-xxl-6 col-xl-5 col-lg-6 col-md-7 text-center text-md-end">
                                        <div class="count_down_box heading-clr" data-countdown="<?php echo $row1['date']; ?>"></div>
                                    </div>
                                </div>
                            </div>

                        <?php } ?>
                    </div>
                    <?php
                    $cate_name = "SELECT * FROM `categories` WHERE `status`=1";
                    $cat_result = mysqli_query($connection, $cate_name);
                    while ($data = mysqli_fetch_array($cat_result)) {
                        $name = $data['name'];
                        $id = $data['id'];


                    ?>
                        <div class="tab-pane fade" id="<?php echo $name; ?>" role="tabpanel" aria-labelledby="nav-water">

                            <?php $sql_query = "SELECT * FROM `Event` WHERE `date`='$date' && `categories_id`='$id'";
                            $result = mysqli_query($connection, $sql_query);
                            while ($row_cat = mysqli_fetch_array($result)) {
                                $event_id = $row_cat['id'];
                                $event_img = mysqli_query($connection, "SELECT * FROM `event_details` WHERE `event_id`='$event_id'");
                                $event_img_result = mysqli_fetch_array($event_img);
                            ?>

                                <div class="single_events_wrapper tab-border mb-30">
                                    <div class="row align-items-center">
                                        <div class="col-xxl-3 col-xl-3 col-lg-3 d-md-none d-lg-block">
                                            <div class="eventcount_img w_img">
                                                <a href="event-details.php?id=<?php echo $row_cat['id']; ?>"><img <?php echo ' src="data:image/jpeg;base64,' . base64_encode($event_img_result['image1']) . '"' ?>></a>
                                            </div>
                                        </div>
                                        <div class="col-xxl-3 col-xl-4 col-lg-3 col-md-5 text-center text-md-start">
                                            <div class="eventcount_text heading-clr">
                                                <h5><a href="event-details.php?id=<?php echo $row1['id']; ?>"><?php echo $row_cat['name'];  ?></a></h5>
                                                <span><?php echo $row_cat['address'];
                                                        echo " ' ";
                                                        echo $row_cat['city'];
                                                        echo $row_cat['state'];
                                                        echo " , ";
                                                        echo $row_cat['country'];  ?></span>
                                            </div>
                                        </div>
                                        <div class="col-xxl-6 col-xl-5 col-lg-6 col-md-7 text-center text-md-end">
                                            <div class="count_down_box heading-clr" data-countdown="<?php $row_cat['date']; ?>"></div>
                                        </div>
                                    </div>
                                </div>
                            <?php } ?>


                        </div>
                    <?php } ?>

                </div>

                <div class="row">
                    <!-- <div class="cause_button text-center mt-10 mb-30">
                        <a href="event.php" class="cause_btn g_btn to_right1 rad-30">Load More <i class="far fa-plus"></i> <span></span></a>
                    </div> -->
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

</html>