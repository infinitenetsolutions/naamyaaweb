<?php
include './Backend/database.inc.php';
$arc_data = "SELECT * FROM `whatwedo` WHERE `status`=1";
$arc_result = mysqli_query($connection, $arc_data);


?>
<!doctype html>
<html class="no-js" lang="en">

<head>
    <title>What We Do | Naamyaa</title>
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
    <main>
        <!--breadcrumb area start-->
        <section class="breadcrumb_area breadcrumb_overlay" data-background="assets/img/banners/Whatwedo.jpg">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="breadcrumb_section">
                            <ul class="breadcrumb-list volunteer_breadcrumb">
                                <li class="bhas_border"><a href="index.php">Home</a></li>
                                <li><span class="active">What We Do
                                    </span></li>
                            </ul>
                            <div class="breadcrumb_title">
                                <h2>What We Do
                                </h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--breadcrumb area end-->

        <!-- cause_details_area start  -->
        <section class="spacer">

            <div class="container"><br>
                <p class="partnertext" align="justify">We are a team of individuals with common spring of inspiration to uplift ‘the standard of life’ of each individual. We believe that every citizen is Naamyaa i.e., worthy of honour. Our common great goal of nation-building can be accomplished effectively by the three paramounts- Education, Health Care and Employment. We have structured our social services in such a way that we can reach masses and enrich all the spheres of their lives.
                    <a style="color: #339933;" href="https://www.Naamyaa
foundationindia.org/"><b> Naamyaa
                            Foundation,</b></a>
                </p>
            </div>
        </section>
        <section class="spacer" id="ways">
            <div class="container">
                <div class="membership">
                    <div class="Nation_Conference">
                        <p class="runtext"></p>
                        <div class="row " style=" margin-bottom:15px;">
                            <!-- here to generating the card -->
                            <?php while ($row = mysqli_fetch_array($arc_result)) { ?>
                                <div class="col-md-6">
                                    <div class="member">
                                        <div class="sub-heading">

                                            <div class="para" style="margin-bottom:8px; border:none;">
                                                <p class="lead" align="center"><strong><?php echo $row['name']; ?></strong></p>
                                            </div>

                                            <div class="sub-padd" align="center"><a href="ISP.html">
                                                    <img <?php echo 'src="data:image/jpeg;base64,' . base64_encode($row['image']) . '"'; ?> class="img-responsive" alt="Special Support Programme - Naamyaa Foundation" title="Special Support Programme - Naamyaa Foundation">
                                                </a>
                                            </div>
                                            <p class="partnertext" align="justify"><?php echo $row['description']; ?></p><br><br>


                                        </div>
                                    </div>
                                </div>
                            <?php } ?>
                            <!-- ends the card -->

                        </div>
                    </div>



                    <div>
                    </div>
                </div>
            </div>
        </section>

        <!-- <Get Involoved Start here> -->


        <!-- <Get Involoved End here> -->


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