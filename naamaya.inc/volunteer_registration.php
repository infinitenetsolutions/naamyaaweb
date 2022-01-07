<?php

include './Backend/database.inc.php';
include 'mail.php';
if (isset($_POST['submit1'])) {

    $name = $_POST['name'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $gender = $_POST['gender'];
    $cities = $_POST['cities'];
    $department = $_POST['department'];
    $occupation = $_POST['occupation'];
    $whyjoin = $_POST['whyjoin'];
    $know = $_POST['know'];
    // $image = addslashes(file_get_contents($_FILES['image']['tmp_name']));
    $image='NULL';

    $insert_query = "INSERT INTO `volunteer`(`name`, `gender`, `email`, `phone`, `department`, `address`, `occupation`, `wheretoknow`, `whyjoin`,`priraty`,  `Image`, `status`) VALUES
                                                 ('$name','$gender','$email','$mobile','$department','$cities','$occupation','$know','$whyjoin', '0' , '$image','0')";
    $result = mysqli_query($connection, $insert_query);
    if ($result) {

        prospectus_mail($whyjoin, $name, $email, $mobile, $occupation, $department);

        echo '  <script>
   window.location.replace("../../naamyaa/pages/thankyou.php");
   </script>';
    } else {
        echo '  <script>
       alert('.$connection->error.')
       
        </script>';
    }
}
$Allcity = file_get_contents('./in.json');
$Allcity = json_decode($Allcity);


$department_retrive = "SELECT * FROM `categories` WHERE  `status`='1'";
$result1 = mysqli_query($connection, $department_retrive);

?>

<div class="modal fade" id="modalContactForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header text-center">

                <h4 class="modal-title w-100 font-weight-bold">Come on Board</h4>

                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body mx-3">
                <form method="POST" action="">
                    <input name="name" type="text" placeholder=" Name" class="donar_input donar_input1 mr-15" title="Enter your name" required>
                    <input name="mobile" type="text" placeholder=" Number" pattern="[0-9]+" maxlength="12" title="Enter your 10 digit valid number " class="donar_input donar_input1  mr-15" required>
                    <input name="email" type="email" placeholder=" Email" class="donar_input donar_input1 mr-15" title="Enter your email address" required>

                    <select name="gender" class="donar_input donar_input1 mr-15">
                        <option selected disabled>Gender

                        </option>
                        <option value="m">male</option>
                        <option value="f">female</option>
                        <option value="o">others</option>
                    </select>
                    <select name="cities" class="donar_input donar_input1 mr-15">
                        <option selected disabled>City

                        </option>
                        <?php foreach ($Allcity as  $value) { ?>
                            <option value="<?php echo $value->city ?>"><?php echo $value->city ?></option>

                        <?php } ?>

                    </select>
                    <select name="occupation" class="donar_input donar_input1 mr-15">
                        <option selected disabled>Occupation

                        </option>
                        <option value="jamshedpur">High school</option>
                        <option value="Ranchi">College</option>
                        <option value="Gaya">Working</option>
                        <option value="Ranchi">Self Employed</option>
                        <option value="Gaya">Others</option>
                    </select>
                    <select name="department" class="donar_input donar_input1 mr-15">
                        <option selected disabled>Department

                        </option>

                        <?php while ($depart = mysqli_fetch_array($result1)) { ?>
                            <option value="<?php echo $depart['name']; ?>"><?php echo $depart['name']; ?></option>
                        <?php } ?>
                        <option value="others">others</option>
                    </select>

                    <select name="know" class="donar_input donar_input1 mr-15">
                        <option selected="" disabled="">How did

                        </option>
                        <option value="school">School</option>
                        <option value="college">College</option>
                        <option value="Social Media">Social Media</option>
                        <option value="Website">Website</option>
                        <option value="News">News</option>
                    </select>

                    <!-- <input name="image" type="file" placeholder="Enter Full Name" class="donar_input mr-15" required> -->
                    <textarea rows="4" cols="30" name="whyjoin" type="text" class="donar_input2 " placeholder="Write something about you"></textarea>
                    <div class="modal-footer d-flex justify-content-center">
                        <button type="submit" name="submit1" class="rad-30 g_btn to_left applynow">Join Us <span></span></button>
                    </div>

                </form>
            </div>

        </div>
    </div>
</div>