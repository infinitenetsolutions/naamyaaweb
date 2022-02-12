<?php
$name = '';
$email = '';
$ammount = '';
include './Backend/sessionstart.php';
include './Backend/functions.inc.php';
include './Backend/database.inc.php';
if (isset($_POST['donate'])) {
    $name = name($_POST['name']);
    $email = email($_POST['email']);
    $ammount = $_POST['ammount'];

    if ($name != '' && $email != '' && $ammount != '') {
        $_SESSION['name'] = $name;
        $_SESSION['email1'] = $email;
        $_SESSION['ammount'] = $ammount;
        // $_SESSION['categories']=$_SESSION['categories']; categories already have in the session
        //redirect the payment getway page
        // header("location:site name")
        echo "doantion successfull";
    } else {
        $error = "please Enter the Amount ";
    }
}
if (isset($_GET['do'])) {
    $name = $_SESSION['name'];
    $email1 = $_SESSION['email1'];
}
?>


<!doctype html>
<html class="no-js" lang="en">

<head>
    <title>Donation | Naamyaa</title>
    <?php include './naamaya.inc/head.php'; ?>
</head>

<body>

    <?php
    // dynamic data changed

    $retrieve_donation = "SELECT * FROM `about_us` WHERE `type`='donation'";
    $donation_result = mysqli_query($connection, $retrieve_donation);
    $donation_row_data = mysqli_fetch_array($donation_result);
    // getting the goal amount
    $goal = "SELECT  SUM(goal_ammount) as `goal_amount` FROM `goal` WHERE `status`=1 ";
    $goal_result = mysqli_query($connection, $goal);
    $goal_row = mysqli_fetch_array($goal_result);

    // getting the donation amount
    $donation = "SELECT  SUM(goal_ammount) as `donation_ammount` FROM `donation` WHERE `status`=1 ";
    $donation_result = mysqli_query($connection, $donation);
    $donation_row = mysqli_fetch_array($donation_result);
    // total donation amount
    $donation_amount = $donation_row['donation_ammount'];
    // total amount of the goal
    $goal_amount = $goal_row['goal_amount'];
    $total_amount = $goal_amount - $donation_amount;

    // calculating the percentage for the amount
    $percentage = $donation_amount / $goal_amount * 100;

    ?>
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
        <section class="breadcrumb_area breadcrumb_overlay" style="background-image: url('assets/img/banners/becomeadonar.jpg');">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="breadcrumb_section">
                            <ul class="breadcrumb-list volunteer_breadcrumb">
                                <li class="bhas_border"><a href="index.php">Home</a></li>
                                <li><span class="active">Donation</span></li>
                            </ul>
                            <div class="breadcrumb_title">
                                <h2> &nbsp; </h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--breadcrumb area end-->

        <!--single donation area start -->
        <div class="single_donation_area pt-120 pb-120">
            <div class="container">
                <div class="row">
                    <div class="col-xxl-6 col-xl-6 col-lg-5">
                        <div class="single_donation_img_wrapper pr-30">
                            <div class="single_donation_img mb-40">
                            <img <?php echo ' src="data:image/jpeg;base64,' . base64_encode($donation_row_data['images']) . '"' ?>>
                            </div>
                            <div class="single_donation_img mb-40">
                                <img src="assets/img/donation/donation_single2.jpg" alt="img">
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-6 col-xl-6 col-lg-7">
                        <div class="single_donation_content donation_border">
                            <div class="section_title">
                                <a href="#" class="sub_title sub_title_2">Donation</a>
                            </div>
                            <h4 class="donation_title"><?php echo $donation_row_data['title'] ?> <br>
                            </h4>
                            <p><?php echo $donation_row_data['description']; ?></p>
                            <div class="feature_progress_wrapper mb-25 mt-35">
                                <div class="progress feature_progress">
                                    <div class="progress-bar" role="progressbar" data-width="<?php echo $percentage ?>%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100" style="width: 50%;">
                                    </div>
                                </div>
                            </div>
                            <div class="single_cause_meta mb-20">
                                <div class="single_meta feature_meta feature_border d-inline-block">
                                    <span class="meta_text red_clr text-danger"><i class="fal fa-globe"></i> Goal</span>
                                    <span class="meta_price red_clr">₹ <?php echo $goal_amount ?></span>
                                </div>
                                <div class="single_meta feature_meta feature_border d-inline-block">
                                    <span class="meta_text red_clr text-danger"><i class="fal fa-users"></i>
                                        Raised</span>
                                    <span class="meta_price red_clr">₹<?php echo $donation_amount ?></span>
                                </div>
                                <div class="single_meta feature_meta d-inline-block">
                                    <span class="meta_text red_clr text-danger"><i class="fal fa-reply"></i> To
                                        go</span>
                                    <?php
                                    if ($total_amount < 0) {
                                    ?>
                                        <span class="meta_price red_clr">+ <?php echo abs($total_amount) ?></span>
                                    <?php } else { ?>
                                        <span class="meta_price red_clr"><?php echo $total_amount ?></span>
                                    <?php } ?>
                                </div>
                            </div>
                        </div>

                        <div class="single_donation_payment donation_border">
                            <h5 class="single_title mb-0">Payment Method</h5>
                            <div class="payment_icons">
                                <a href="#"><i class="fab fa-google-pay"></i></a>
                                <a href="#"><i class="fab fa-amazon-pay"></i></a>
                                <a href="#"><i class="fab fa-cc-visa"></i></a>
                                <a href="#"><i class="fab fa-cc-mastercard"></i></a>
                                <a href="#"><i class="far fa-credit-card"></i></a>
                            </div>
                        </div>
                        <div class="single_donation_info">
                            <h5 class="single_title">Personal Information</h5>
                            <form action="" method="POST">
                                <div class="input_info_wrapper">

                                    <div class="input_info_name info_input"><input name="name" value="<?php if (isset($_SESSION['name'])) {
                                                                                                            echo $name;
                                                                                                        } ?>" type="text" placeholder="Enter full name"><i class="fal fa-user"></i></div>
                                    <div class="input_info_email info_input"><input name="email" value="<?php if (isset($_SESSION['email1'])) {
                                                                                                            echo $email1;
                                                                                                        } ?>" type="email" placeholder="Enter email"><i class="fal fa-envelope"></i></div>

                                </div>
                                <div class=" d-inline-flex">
                                    <div class="donation_submit_wrapper">
                                        <div class="donation_submit_box w_208">
                                            <button type="submit">Donation</button>
                                            <input class="gray_color" name="ammount" type="text" placeholder="₹ Amount">
                                        </div>
                                    </div>
                                    <div class="submit_info_button">
                                        <button name="donate" type="submit" class="g_btn hbtn_1 to_right1 rad-30" href="donation.php">Make Donation<span></span></button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--single donation area end -->

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
    <?php include './naamaya.inc/foot.php'; ?>

</body>

</html>