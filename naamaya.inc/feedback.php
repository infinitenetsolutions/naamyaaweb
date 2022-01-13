<?php

include './Backend/database.inc.php';
if (isset($_POST['submit'])) {

    $name = $_POST['name'];
    $images = addslashes(file_get_contents($_FILES['image']['tmp_name']));
    $post = $_POST['post'];

    $description = $_POST['desc'];
    $insert_query = "INSERT INTO `testimonial`(`name`, `images`, `description`, `post`, `status`) VALUES
                                            ('$name','$images','$description','$post','0')";
    $result = mysqli_query($connection, $insert_query);
    if ($result) {
        // $_SESSION['name']=$name;

        echo '
   <script>
   window.location.replace("../../naamyaa/pages/thankyou.php");
   </script>';
    }
}
$department_retrive = "SELECT * FROM `categories` WHERE  `status`='1'";
$result1 = mysqli_query($connection, $department_retrive);

?>

<div class="modal fade" id="feedback" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header text-center">

                <h4 class="modal-title w-100 font-weight-bold">Feedback</h4>

                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body ">
                <form method="POST" action="" enctype="multipart/form-data">
                    <div class="row">

                        <div class="col-sm-6 mt-3">
                            <input name="name" type="text" placeholder="Enter full name" class="form-control " title="Enter your name" required>
                        </div>
                        <div class="col-sm-6 mt-3">
                            <input name="post" type="text" placeholder="Enter you designation" class="form-control" title="Enter designation name" required>
                        </div>
                        <div class="col-sm-6 mt-3">
                            <input name="image" type="file" title="your photo (optional)" placeholder="Enter your photo (optional)" class="form-control " title="please input name" required>

                        </div>



                    <div class="col-sm-12 mt-3">
                        <textarea rows="4" cols="30" name="desc" type="text" class="form-control " placeholder="Write something about you"></textarea>
                        <span class="float-right">maximum 150 character</span>

                    </div>

                    <div class="modal-footer d-flex justify-content-center">
                        <button type="submit" name="submit" class="rad-30 g_btn to_left applynow">Submit <span></span></button>
                    </div>
                    </div>

                </form>
            </div>

        </div>
    </div>
</div>