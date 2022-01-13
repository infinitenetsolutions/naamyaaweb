 <!-- Header One Start-->
 
 <?php 
//  here to geting the data of the contact
$contact_data = "SELECT * FROM `contact_data` WHERE 1";
$contact_result = mysqli_query($connection, $contact_data);
$contact_row = mysqli_fetch_array($contact_result);
$location = $contact_row['location'];
$email = $contact_row['email'];
$phone = $contact_row['phone'];
$location_link = $contact_row['location_link'];
?>
 <header class="header-area">
     <div class="header_top_area">
         <div class="container">
             <div class="row align-items-center">
                 <div class="col-xxl-9 col-xl-9 col-lg-8  d-none d-lg-block">
                     <div class="top_mailing">
                         <a href="mailto:<?php echo $email; ?>" class="theme-1"><i class="fal fa-envelope"></i><span class="__cf_email__" data-cfemail="fa9b9e979394ba9e95979b9394d4999597">[email&#160;protected]</span></a>
                         <a href="tel:<?php echo $phone; ?>" class="theme-2"><i class="fal fa-phone"></i><?php echo $phone; ?></a>
                         <a href="#" class="theme-3"><i class="fal fa-map-marker-alt"></i><?php echo $location; ?></a>
                     </div>
                 </div>

                 <div class="col-xxl-3 col-xl-3 col-lg-4 text-start text-md-end mr-left-20">
                     <div class="top_social">
                     
                         <a target="_blank" href="https://twitter.com/TeamNaamyaa?t=TJ2RV4xfZVgxdNGKyCF9vw&s=03" class="twitter"><i class="fab fa-twitter"></i></a>
                         <a target="_blank" href="https://www.facebook.com/Namya-106766691275997/" class="facebook"><i class="fab fa-facebook-f"></i></a>
                         <a target="_blank" href="https://www.instagram.com/teamnaamyaa/" class="instagram"><i class="fab fa-instagram"></i></a>

<span> &nbsp;</span>
                         <a class="covid19"  href="donation.php" name="donate" class="g_btn2 g_btn theme1_bg to_right2 donation rad-30 p-60 mb-30"><strong>Covid19&nbspSupport</strong> </a>
                     </div>
                 </div>
        
                            
               
             </div>
         </div>
     </div>

     <div id="sticky-header" class="header_menu_area header_menu_area_2">
         <div class="container">
             <div class="row align-items-center">
                 <div class="col-xxl-2 col-xl-2 col-lg-2 col-md-6 col-6">
                     <div class="logo">
                         <a href="index.php"><img src="assets/img/logo/logo-png.png" alt="" /></a>
                     </div>
                 </div>
                 <div class="col-xxl-7 col-xl-7 col-lg-9 d-none d-lg-block">
                     <div class="main-menu menu_2 text-center">
                         <nav id="mobile-menu">
                             <ul>
                                 <li class="menu-item-has-children"><a href="index.php">Home</a>

                                 </li>
                                 <li class="menu-item-has-children"><a href="#">About</a>
                                     <ul class="sub-menu">

                                         <li><a href="../../naamyaa/about.php">Our Organization</a>
                                         <li><a href="../../naamyaa/volunteer.php">Our Team</a>
                                         <li><a href="../../naamyaa/whatwedo.php">What We Do</a>
                                     </ul>
                                 </li>


                                 </li>
                                 <li class="menu-item-has-children"><a href="#">Gallery</a>
                                     <ul class="sub-menu">

                                         <li><a href="../../naamyaa/mediagallery.php">Media Gallery</a>
                                         <li><a href="../../naamyaa/photosgallery.php">Photos Gallery</a>

                                         <li><a href="../../naamyaa/videogallery.php">Vidoes Gallery</a>
                                     </ul>
                                 </li>
                                 <li class="menu-item-has-children"><a href="#">Events</a>
                                     <ul class="sub-menu">

                                         <li><a href="../../naamyaa/event_upcoming.php">Upcoming Events</a>
                                         <li><a href="../../naamyaa/event_ongoing.php">Ongoing Events</a>
                                         <li><a href="../../naamyaa/event_held.php">Held Events</a>
                                     </ul>
                                 </li>
                                 <li><a href="achievement.php">Achievement</a></li>
                                 <li><a href="contact.php">Contact</a></li>
                                 <!-- <li><a href="faq.php">Faq</a> -->
                             </ul>
                         </nav>
                     </div>
                 </div>
                 
                 <div class="col-xxl-3 col-xl-3 col-lg-1 col-md-6 col-6">
                     <div class="header-right d-flex align-items-center justify-content-end">
                         <div class="header-sing d-inline-block d-none d-xl-block">
                             <a class="g_btn hbtn_1 to_right1 rad-30" href="donation.php">Support us<span></span></a>
                         </div>
                         <div class="hamburger-menu menu-bar info-bar d-inline-block ml-20">
                             <button class="hamburger-btn open-mobile-menu"><i class="fal fa-bars"></i></button>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </div>
 </header>