<?php
$contact_data = "SELECT * FROM `contact_data` WHERE 1";
$contact_result = mysqli_query($connection, $contact_data);
$contact_row = mysqli_fetch_array($contact_result);
$location = $contact_row['location'];
$email = $contact_row['email'];
$phone = $contact_row['phone'];
$location_link = $contact_row['location_link'];
?>

<div class="fix d-lg-none">
    <div class="side-info">

        <div class="offset-widget offset-logo mb-30 pb-20">
            <div class="row align-items-center">
                <div class="col-8"><a href="index.php" class="mobile_logo"><img src="assets/img/logo/logo-png.png" alt="Logo"></a></div>
                <div class="col-4 text-end"><button class="side-info-close"><i class="fal fa-times"></i></button></div>
            </div>

        </div>



        <div class="mobile-menu"></div>

        <div class="contact-infos mt-30 mb-30">
            <div class="contact-list mobile_contact mb-30">
                <h4>Contact Info</h4>
                <a href="#" class="theme-1"><i class="fal fa-map-marker-alt"></i><span><?php echo $location; ?></span></a>
                <a href="tel:<?php echo $phone; ?>" class="theme-2"><i class="fal fa-phone"></i><span><?php echo $phone; ?></span></a>
                <a href="mailto:<?php echo $email; ?>" class="theme-3"><i class="far fa-envelope"></i><span><span class="__cf_email__" data-cfemail="ceafaaa3a7a08eaaa1a3afa7a0e0ada1a3">[email&#160;protected]</span></span></a>

            </div>

            <div class="top_social offset_social mt-20 mb-30">
                <a target="_blank" href="https://twitter.com/TeamNaamyaa?t=TJ2RV4xfZVgxdNGKyCF9vw&s=03" class="twitter"><i class="fab fa-twitter"></i></a>
                <a target="_blank" href="https://www.facebook.com/Namya-106766691275997/" class="facebook"><i class="fab fa-facebook-f"></i></a>
                <a target="_blank" href="https://www.instagram.com/teamnaamyaa/" class="instagram"><i class="fab fa-instagram"></i></a>


            </div>
        </div>

    </div>
</div>