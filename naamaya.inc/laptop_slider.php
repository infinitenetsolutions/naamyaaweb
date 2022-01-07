<?php
$contact_data = "SELECT * FROM `contact_data` WHERE 1";
$contact_result = mysqli_query($connection, $contact_data);
$contact_row = mysqli_fetch_array($contact_result);
$location = $contact_row['location'];
$email = $contact_row['email'];
$phone = $contact_row['phone'];
$location_link = $contact_row['location_link'];
?>




<div class="fix d-none d-lg-block">

    <div class="offset-sidebar side-info">

        <div class="offset-widget offset-logo mb-30 pb-20">
            <div class="row align-items-center">
                <div class="col-8"><a href="index.html"><img src="assets/img/logo/logo-png.png" alt="Logo"></a></div>
                <div class="col-4 text-end"><button class="side-info-close"><i class="fal fa-times"></i></button></div>
            </div>

        </div>



        <div class="offset-widget mb-40">
            <div class="info-widget">
                <h4 class="offset-title mb-20 d-none">About Us</h4>
                <p class="mb-30">We rise by lifting others. Naamyaa smile foundation a ngo in Jamshedpur , Jharkhand . To support the underserved has taken its intervention to the interiors of East Singhbhum , reaching the unreached in the remote areas and urban slums with our services and making this helping foundation in India , the best NGO in India.

                </p>
                <a href="#" class="c-btn btn-round-02 d-none">Contact Us</a>
            </div>
        </div>



        <div class="side-map mt-20 mb-30">
            <?php echo $location_link; ?>
        </div>



        <div class="contact-infos mt-30 mb-30">
            <div class="contact-list mb-30">
                <h4>Contact Info</h4>
                <a href="#" class="theme-1"><i class="fal fa-map-marker-alt"></i><span><?php echo $location; ?></span></a>
                <a href="tel:088889797697" class="theme-2"><i class="fal fa-phone"></i><span> <?php echo $phone ?> </span></a>
                <a href="mailto:<?php echo $email; ?>" class="theme-3"><i class="far fa-envelope"></i><span><span class="__cf_email__" data-cfemail="2b4a4f4642456b4f44464a424505484446">[email&#160;protected]</span></span></a>

            </div>

            <div class="top_social offset_social mt-20 mb-30">
                <a href="https://www.facebook.com/Namya-106766691275997/" target="_blank" class="facebook"><i class="fab fa-facebook-f"></i></a>
                <a href="https://twitter.com/TeamNaamyaa?t=TJ2RV4xfZVgxdNGKyCF9vw&s=03" target="_blank" class="twitter"><i class="fab fa-twitter"></i></a>

            </div>


        </div>


    </div>

</div>



<div class="offcanvas-overlay"></div>