<?php
$contact_data = "SELECT * FROM `contact_data` WHERE 1";
$contact_result = mysqli_query($connection, $contact_data);
$contact_row = mysqli_fetch_array($contact_result);
$location = $contact_row['location'];
$email = $contact_row['email'];
$phone = $contact_row['phone'];
$location_link = $contact_row['location_link'];
?>
<footer>
    <div class="footer_top_area footer_top_2">
        <div class="footer_top_wrapper">
            <div class="container">
                <div class="row">
                    <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-7 col-sm-7">
                        <div class="footer_widget footer_about mb-50">
                            <div class="footer_logo mb-35">
                                <a href="index.php" class="animation"><img src="assets/img/logo/logo-png.png" alt="img" style="height:135px;width:165px;margin-top:-35px;"></a>
                            </div>
                            <p class="mb-30">Don’t be afraid. Be focused. Be determined. Be hopeful. Be empowered.</p>
                            <div class="footer_social_2">
                                <a target="_blank" href="https://www.facebook.com/Namya-106766691275997/" class="facebook"><i class="fab fa-facebook-f"></i></a>
                                <a target="_blank" href="https://twitter.com/TeamNaamyaa?t=TJ2RV4xfZVgxdNGKyCF9vw&s=03" class="twitter"><i class="fab fa-twitter"></i></a>
                                <a target="_blank" href="#" class="youtube"><i class="fab fa-youtube"></i></a>
                                <a target="_blank" href="https://www.instagram.com/teamnaamyaa/" class="instagram"><i class="fab fa-instagram"></i></a>

                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-2 col-xl-2 col-lg-2 col-md-5 col-sm-5">
                        <div class="footer_widget mb-50 pl_15">
                            <div class="footer_widget_title mb-25">
                                <h4 class="footer_title footer_title_2">Useful links</h4>
                            </div>
                            <div class="footer_links footer_links_2">
                                <ul>
                                    <li><a href="about.php">About Us</a></li>
                                    <li><a href="volunteer.php">Meet The Team</a></li>
                                    <li><a href="volunteer.php">Volunteers</a></li>
                                    <li><a href="whatwedo.php">Service Provided</a></li>
                                    <li><a href="event_upcoming.php">Events</a></li>
                                    <li><a href="contact.php">Contact Us</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-7 col-sm-7">
                        <div class="footer_widget mb-50 pl_25">
                            <div class="footer_widget_title mb-25">
                                <h4 class="footer_title footer_title_2">Donations</h4>
                            </div>
                            <!-- <div class="footer_links footer_links_2">
                                <ul>
                                    <li><a href="donation.php">How to Donate</a></li>
                                    <li><a href="donation.php">Donation List</a></li>
                                    <li><a href="cause.php">Recent Causes</a></li>
                                    <li><a href="faq.php">FAQ</a></li>
                                </ul>
                            </div> -->
                            <div class="footer_btn">
                                <a href="about.php" class="g_btn fbtn_2 to_right1 p-40 rad-50">Get Support<span></span></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-5 col-sm-5">
                        <div class="footer_widget footer_news mb-50">
                            <div class="footer_widget_title mb-25">
                                <h4 class="footer_title footer_title_2">Keep In Touch</h4>
                            </div>
                            <div class="footer_info_content">
                                <p><span><strong>Address :</strong><?php echo $location ?></span></p>
                                <p><a href="tel:<?php echo $phone; ?>"><span><strong>Phone :</strong><?php echo $phone; ?></span></a></p>
                                <p><a href="mailto:<?php echo $email; ?>"><span><strong>Email :</strong> <span class="__cf_email__" data-cfemail="80e9eee6efc0c5f8e1edf0ece5aee3efed">[email&#160;protected]</span></span></a></p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-xxl-6 col-xl-6 col-lg-6 col-sm-12">
                        <div class="fcta_sigle has_bg mb-30">
                            <img src="assets/img/footer/fcta2_1.png" alt="img">
                            <div class="fcta_text">
                                <h4>Help & Support Now</h4>
                                <span>It’s not how much we give but how much love we put into giving.</span>
                            </div>
                            <div class="fcta_button">
                                <a href="donation.php" class="g_btn fca_btn1 to_right2 p-40 rad-50">Donate <span></span></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-6 col-xl-6 col-lg-6 col-sm-12">
                        <div class="fcta_sigle has_bg mb-30">
                            <img src="assets/img/footer/fcta2_2.png" alt="img">
                            <div class="fcta_text">
                                <h4>Join as Volunteer</h4>
                                <span>If you can dream it, you can do it. </span>
                            </div>
                            <div class="fcta_button">
                                <a href="../../naamyaa/volunteer.php" class="g_btn fca_btn to_left p-40 rad-50">Join <span></span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer_copyright_area">
        <div class="container">
            <div class="row">
                <div class="col-xxl-12 text-center">
                    <p>Copyright © <?php echo date('Y') ?> All Rights Reserved by <strong><a href="../../naamyaa/">Naamyaa Foundation</a></strong> <span class="poweredby">powered by <a target="_blank" class="infinitenetsolutions" href="http://infinitenetsolutions.com/">Infinite Net Solutions</a></span></p>
                </div>
            </div>
        </div>
    </div>
</footer>