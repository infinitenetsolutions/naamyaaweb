<?php
include './Backend/database.inc.php';
include './Backend/functions.inc.php';
$Videos_data = "SELECT * FROM `videogallery` WHERE `status`=1";
$result = mysqli_query($connection, $Videos_data);


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Videos Gallery | Naamyaa</title>
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
    <section class="breadcrumb_area breadcrumb_overlay" data-background="assets/img/banners/Video.jpg">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="breadcrumb_section">
                        <ul class="breadcrumb-list volunteer_breadcrumb">
                            <li class="bhas_border"><a href="index.php">Home</a></li>
                            <li><span class="active">Videos Gallery</span></li>
                        </ul>
                        <div class="breadcrumb_title">
                            <h2>Videos Gallery</h2>
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
                     
                            <iframe class="max-height-510" src="<?php echo $row['link']; ?>" alt="Lights" style="width:100%"></iframe>
                            <div class="caption">
                                <p><?php echo $row['description'] ?></p>
                            </div>
                     
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