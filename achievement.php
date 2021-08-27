<?php
include './Backend/database.inc.php';
$arc_data = "SELECT * FROM `archievment` WHERE 1";
$arc_result = mysqli_query($connection, $arc_data);


?>
<!doctype html>
<html class="no-js" lang="en">

<head>
    <title>Achievement | Naamyaa</title>
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
        <section class="breadcrumb_area breadcrumb_overlay" data-background="assets/img/bg/breadcrumb_bg_4.jpg">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="breadcrumb_section">
                            <ul class="breadcrumb-list volunteer_breadcrumb">
                                <li class="bhas_border"><a href="index.php">Home</a></li>
                                <li><span class="active">Achievement
                                    </span></li>
                            </ul>
                            <div class="breadcrumb_title">
                                <h2>Achievement
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
                <p class="partnertext" align="justify">Children are the future of a nation. For an emerging country like India, development of underprivileged children holds the key to the progress of the nation itself, and their education is the cornerstone of this progress. But education for children cannot be achieved without ensuring the welfare of the family – a child can go to school regularly only when the family, particularly the mother is healthy and empowered; the family has decent livelihood opportunities and a steady income.</p>
                <p class="partnertext" align="justify">Realizing this, <a style="color: #339933;" href="https://www.Naamyaafoundationindia.org/"><b>Naamyaa
                            Foundation,</b></a> beginning in the corridors of education, has adopted a lifecycle approach with intensive programmes focused on family health, livelihood and community engagement through women empowerment, which addresses the needs of less privileged children, their families and the larger community.</p>
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

                                            <div class="sub-padd" align="center"><a href="#">
                                                    <img <?php echo 'src="data:image/jpeg;base64,' . base64_encode($row['image']) . '"'; ?> class="img-responsive" alt="Special Support Programme - Naamyaa Foundation" title="Special Support Programme - Naamyaa Foundation">
                                                </a>
                                            </div>
                                            <p class="partnertext" align="justify"><?php echo $row['description']; ?></p><br><br>

                                            <div class="partnertext" align="left"><a href="#"><i> » To know more click here</i></a></div>
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