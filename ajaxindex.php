<script>
    console.log('this is working');
</script>

<?php

include './Backend/sessionstart.php';
include './Backend/database.inc.php';
include './Backend/functions.inc.php';
$event = 'SELECT  * FROM `Event` WHERE `status`=1   ORDER BY `date` DESC  LIMIT 8  ';
$event_result = mysqli_query($connection, $event);
?>


<div class="">
    <?php while ($event_row = mysqli_fetch_array($event_result)) {
        $str = $event_row['date'];
        $newdate = str_replace('/', '-', $str);

        $present_date = date('Y-m-d');
        $event_id = $event_row['id'];
        $event_img = mysqli_query($connection, "SELECT * FROM `event_details` WHERE `event_id`='$event_id'");
        $event_img_result = mysqli_fetch_array($event_img);

    ?>



    <div class="single_events_wrapper tab-border mb-30">
        <div class="row align-items-center">
            <div class="col-xxl-3 col-xl-3 col-lg-3 d-md-none d-lg-block">
                <div class="eventcount_img w_img">
                    <a href="event-details.php?id=<?php echo $event_row['id']; ?>"><img <?php echo ' src="data:image/jpeg;base64,' . base64_encode($event_img_result['image1']) . '"'; ?>></a>
                </div>
            </div>
            <div class="col-xxl-3 col-xl-4 col-lg-3 col-md-5 text-center text-md-start">
                <div class="eventcount_text heading-clr">
                    <h5><a href="event-details.php?id=<?php echo $event_row['id']; ?>"><?php echo $event_row['name']; ?></a></h5>
                    <span><?php echo $event_row['address'];
                    echo ' , ';
                    echo $event_row['city'];
                    echo ' , ';
                    echo $event_row['state']; ?></span>
                </div>
            </div>
            <?php if ($newdate > $present_date) { ?>
            <div class="col-xxl-6 col-xl-5 col-lg-6 col-md-7 text-center text-md-end">
                <div class="count_down_box heading-clr" data-countdown="<?php echo $newdate; ?>"></div>
            </div>
            <?php } else { ?>
            <div class="col-xxl-6 col-xl-5 col-lg-6 col-md-7 text-center text-md-end">
                <div class="container">
                    <div class="row">
                        <span class="justify"> <?php echo substr($event_img_result['details'], 0, 155); ?>.. <a class="text-danger"
                                href="event-details.php?id=<?php echo $event_row['id']; ?>">Read more</a> </span>

                    </div>

                </div>
            </div>
            <?php } ?>
        </div>
    </div>
    <?php } ?>
</div>
