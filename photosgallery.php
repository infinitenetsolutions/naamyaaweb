<?php
include './Backend/database.inc.php';
include './Backend/functions.inc.php';
$Photos_data = "SELECT * FROM `Gallery` WHERE `Gallery_type`='photos' && `status`=1";
$result = mysqli_query($connection, $Photos_data);


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Photos Gallery | Naamyaa</title>
    <?php include './naamaya.inc/head.php'; ?>
</head>

<body>

    <?php include './naamaya.inc/header.php'; ?>
    <!-- Header One End-->
    <!-- slide-bar start -->

    <!-- Sidebar for Mobile -->
    <?php include './naamaya.inc/mobile_slider.php'; ?>

    <!-- Sidebar for Laptop -->
    <?php include './naamaya.inc/laptop_slider.php'; ?>
    <!-- slide-bar end -->

    <!-- Main Area Start-->
    <section class="breadcrumb_area breadcrumb_overlay" data-background="assets/img/bg/breadcrum_bg_2.jpg">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="breadcrumb_section">
                        <ul class="breadcrumb-list volunteer_breadcrumb">
                            <li class="bhas_border"><a href="index.php">Home</a></li>
                            <li><span class="active">Photos Gallery</span></li>
                        </ul>
                        <div class="breadcrumb_title">
                            <h2>Photos Gallery</h2>
                        </div>


                    </div>
                </div>

            </div>
        </div>
    </section>
    <div class="container">

        <div class="row">
            <?php while ($row = mysqli_fetch_array($result)) { ?>
                <div class="col-md-4">
                    <div class="thumbnail">
                        <a <?php echo 'href="data:image/jpeg;base64,' . base64_encode($row['photos']) . '"' ?> target="_blank">
                            <img class="max-height-510" <?php echo ' src="data:image/jpeg;base64,' . base64_encode($row['photos']) . '"' ?> alt="Lights" style="width:100%">
                            <div class="caption">
                                <p><?php echo $row['description'] ?></p>
                            </div>
                        </a>
                    </div>
                </div>
            <?php } ?>

        </div>
    </div>
    <?php include './naamaya.inc/footer.php'; ?>
</body>

<!-- Footer Area End -->

<?php include './naamaya.inc/foot.php'; ?>

</html>