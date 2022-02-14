<?php
$id = '';
include './Backend/database.inc.php';
$female = 'assets/img/team/me2.png';
$male = 'assets/img/team/me.png';
//volunteer
$retrive_volienter = 'SELECT * FROM `volunteer` WHERE `status`=1';
$result = mysqli_query($connection, $retrive_volienter);
//key pepole
$retrive_keypople = 'SELECT * FROM `keypepole` WHERE  `status`=1 ORDER BY `priority`';
$result_kp = mysqli_query($connection, $retrive_keypople);
// retriving the social media link from the database

// our team
$retrive_team = 'SELECT * FROM `team_member` WHERE `status`=1';
$result_team = mysqli_query($connection, $retrive_team);

?>
<!doctype html>
<html class="no-js" lang="en">

<head>
    <title>Volunteer | Naamyaa </title>
    <?php include './naamaya.inc/head.php'; ?>
    <link rel="stylesheet" href="./assets/css/about.css">
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
        <?php include './naamaya.inc/volunteer_registration.php'; ?>
        <section class="breadcrumb_area breadcrumb_overlay" data-background="assets/img/banners/Ourteam.jpg">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="breadcrumb_section">
                            <ul class="breadcrumb-list volunteer_breadcrumb">
                                <li class="bhas_border"><a href="index.php">Home</a></li>
                                <li><span class="active">Team</span></li>
                            </ul>
                            <div class="breadcrumb_title">
                                <h2>&nbsp;</h2>
                                <!-- <h2> OUR Team</h2> -->
                            </div>


                        </div>
                    </div>

                </div>
            </div>
        </section>
        <!--breadcrumb area end-->

        <!-- Newsletter cta area start-->
        <div class=" ">
            <div class="container">
                <div class="back-border mrp">

                    <h4>Key People </h4>
                </div>
                <div class="row team_area ">

                    <?php while ($row = mysqli_fetch_array($result_kp)) {
                        $description = $row['description'];

                        $id = $row['id']; ?>
                        <div class="col-xxl-3 col-xl-4 col-lg-4 col-sm-6 text-center">

                            <div class="single_team mb-30">

                                <div class="team_thumb img_effect_white">

                                    <a href="#"> <?php echo '<img class="key-img" src="data:image/jpeg;base64,' . base64_encode($row['image']) . '"/>'; ?></a>

                                </div>
                                <span class="designation"><?php echo $row['post']; ?></span>
                                <h5 class="member_name"><a href="#"><?php echo $row['name']; ?></a> </h5>
                                <small><?php echo substr($description, 0, 35); ?> <span class="name3 " id="show<?php echo $id; ?>">
                                        <p class="d-flex"> <?php echo substr($description, 36); ?> </p>
                                    </span> <?php if ($description != '') {  ?> <b class="text-danger" href="#" onclick="show('<?php echo $id; ?>')">Read
                                            more</b> <?php } ?></small>
                                <?php $retrive_keypople_link = "SELECT * FROM `social_media` WHERE  `reid`='$id' && `table_name`='keypepole' LIMIT 4";
                                $result_link = mysqli_query($connection, $retrive_keypople_link); ?>
                                <div class="member_social">
                                    <?php while ($link_row = mysqli_fetch_array($result_link)) { ?>
                                        <a href="<?php echo $link_row['link']; ?>" class="<?php echo $link_row['name']; ?>"><i class="fab fa-<?php echo $link_row['name']; ?>-square"></i></a>
                                    <?php } ?>
                                </div>
                            </div>

                        </div>
                    <?php } ?>
                </div>
            </div>
        </div>

        <!-- Newsletter cta area end-->

        <!-- Team area start -->
        <div class="">
            <div class="container">
                <div class="back-border mrp">
                    <h4>Our Team Member's </h4>
                </div>
                <div class="row team_area top-margin">

                    <?php while ($row = mysqli_fetch_array($result_team)) {
                        $id = $row['id'];
                        $name = $row['name'];
                        if (strpos($name, 'team') !== false) {
                            $name = str_replace('-team', '', $name);
                    ?>
                            <div class="col-xxl-4 col-xl-4 col-lg-4 col-sm-6 text-center">

                                <div class="single_team mb-30">

                                    <div class="team_thumb img_effect_white">
                                        <?php if (!empty($row['Image'])) { ?>

                                            <a href="#"> <?php echo '<img class="img-fluid" src="data:image/jpeg;base64,' . base64_encode($row['Image']) . '"/>'; ?></a>

                                        <?php  } elseif ($row['gender'] == 'm') { ?>
                                            <a href="#"><img class="" src=<?php echo $male; ?> alt="img"></a>
                                        <?php } else { ?>
                                            <a href="#"><img class="" src=<?php echo $female; ?> alt="img"></a>
                                        <?php } ?>
                                    </div>

                                    <span class="designation"><?php echo $row['department']; ?></span>
                                    <h5 class="member_name"><a href="#"><?php echo $name; ?></a></h5>
                                    <div class="row">
                                        <div class="col-12">
                                            <small><span class="name3 " id="show<?php echo $id; ?>">
                                                    <p class="d-flex text-center"> <i class="fa fa-envelope mt-1" aria-hidden="true"></i>
                                                        &nbsp; <?php echo ' ' . $row['email']; ?> <br> <!-- Phone : <?php //echo $row['phone']
                                                                                                                    ?> -->
                                                    </p>
                                                </span><b class="text-danger" href="#" onclick="show('<?php echo $id; ?>')">Read
                                                    more</b></small>
                                        </div>
                                    </div>


                                    <?php $retrive_keypople_link = "SELECT * FROM `social_media` WHERE  `reid`='$id' && `table_name`='volunteer' LIMIT 3";
                                    $result_link = mysqli_query($connection, $retrive_keypople_link); ?>
                                    <div class="member_social">
                                        <?php while ($link_row = mysqli_fetch_array($result_link)) { ?>
                                            <a href="<?php echo $link_row['link']; ?>" class="<?php echo $link_row['name']; ?>"><i class="fab fa-<?php echo $link_row['name']; ?>-square"></i></a>
                                        <?php } ?>
                                    </div>
                                </div>

                            </div>
                    <?php }
                    } ?>
                </div>
            </div>
        </div>
        <!-- Team area end -->

        <!-- Team area start -->
        <?php if (mysqli_num_rows($result) > 0) { ?>

            <div class="">
                <div class="container">
                    <div class="back-border mrp">
                        <a href="" data-toggle="modal" data-target="#modalContactForm" class="apply_btn g_btn theme1_bg to_right2 i_right rad-30 p-45">Apply Here<i class="fal fa-long-arrow-right"></i><span></span></a>
                        <h4> Our Volunteer </h4>
                    </div>
                    <div class="row team_area top-margin">

                        <?php while ($row = mysqli_fetch_array($result)) {
                            $id = $row['id'];
                            $name = $row['name'];
                        ?>
                                <div class="col-xxl-3 col-xl-3 col-lg-4 col-sm-6 text-center">

                                    <div class="single_team mb-30">

                                        <div class="team_thumb ">
                                            <?php if ($row['gender'] == 'm') { ?>
                                                <a href="#"><img class="img-fluid" src=<?php echo $male; ?> alt="img"></a>
                                            <?php } else { ?>
                                                <a href="#"><img class="img-fluid" src=<?php echo $female; ?> alt="img"></a>
                                            <?php } ?>
                                        </div>
                                        <span class="designation"><?php echo $row['department']; ?></span>
                                        <h5 class="member_name"><a href="#"><?php echo $name; ?></a></h5>
                                        <?php $retrive_keypople_link = "SELECT * FROM `social_media` WHERE  `reid`='$id' && `table_name`='volunteer' LIMIT 3";
                                        $result_link = mysqli_query($connection, $retrive_keypople_link); ?>
                                        <div class="member_social">
                                            <?php while ($link_row = mysqli_fetch_array($result_link)) { ?>
                                                <a href="<?php echo $link_row['link']; ?>" class="<?php echo $link_row['name']; ?>"><i class="fab fa-<?php echo $link_row['name']; ?>-square"></i></a>
                                            <?php } ?>
                                        </div>
                                    </div>

                                </div>
                        <?php }
                         ?>
                    </div>
                </div>
            </div>
        <?php } ?>

        <!-- Team area end -->



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

<script>
    $(".name3").hide();

    function show(id) {
        $("#show" + id).toggle();
    }
</script>