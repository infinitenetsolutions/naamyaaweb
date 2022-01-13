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
    $image = 'NULL';

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
       alert(' . $connection->error . ')
       
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

                <h4 class="modal-title w-100 font-weight-bold">Come Onboard</h4>

                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body mx-3">
                <form method="POST" action="">
                    <input onkeyup="enable(this.value)"  id="name"  name="name" type="text" placeholder=" Name" class="donar_input donar_input1 mr-15" title="Enter your name" required>
                    <input onkeyup="enable(this.value)"  id="initial_2" name="mobile" type="text" placeholder=" Number" pattern="[0-9]+" maxlength="12" title="Enter your 10 digit valid number " class="donar_input donar_input1  mr-15" required>
                    <input onkeyup="enable(this.value)"  id="initial_3" name="email" type="email" placeholder=" Email" class="donar_input donar_input1 mr-15" title="Enter your email address" required>

                    <select onkeyup="enable(this.value)"  id="initial_4" name="gender" class="donar_input donar_input1 mr-15">
                        <option selected disabled>Gender

                        </option>
                        <option value="m">Male</option>
                        <option value="f">Female</option>
                        <option value="o">Others</option>
                    </select>
                    <select onkeyup="enable(this.value)"  id="initial_5" name="cities" class="donar_input donar_input1 mr-15">
                        <option selected disabled>City

                        </option>
                        <?php foreach ($Allcity as  $value) { ?>
                            <option value="<?php echo $value->city ?>"><?php echo $value->city ?></option>

                        <?php } ?>

                    </select>
                    <select onkeyup="enable(this.value)"  id="initial_6" name="occupation" class="donar_input donar_input1 mr-15">
                        <option selected disabled>Occupation

                        </option>
                        <option value="Student">Student</option>
                        <option value="Private Employee">Private Employee</option>
                        <option value="Govt. Employee">Govt. Employee</option>
                        <option value="Self Employed/ Business">Self Employed/ Business</option>
                        <option value="Others">Others</option>
                    </select>
                    <select onkeyup="enable(this.value)"  id="initial_7" name="department" class="donar_input donar_input1 mr-15">
                        <option selected disabled>Department

                        </option>

                        <?php while ($depart = mysqli_fetch_array($result1)) { ?>
                            <option value="<?php echo $depart['name']; ?>"><?php echo $depart['name']; ?></option>
                        <?php } ?>
                        <option value="others">others</option>
                    </select>

                    <select onkeyup="enable(this.value)"  id="initial_8" name="know" class="donar_input donar_input1 mr-15">
                        <option selected="" disabled="">How do you get to know about Naamyaa

                        </option>
                        <option value="School/College/University">School/College/University</option>
                        <option value="Friends & Relatives">Friends & Relatives</option>
                        <option value="Social Media">Social Media</option>
                        <option value="Website">Website</option>
                        <option value="News & Media">News & Media</option>
                    </select>

                    <!-- <input onkeyup="enable(this.value)"  id="initial_1" name="image" type="file" placeholder="Enter Full Name" class="donar_input mr-15" required> -->
                    <textarea onkeyup="enable(this.value)"  id="initial_9" rows="4" cols="30" name="whyjoin" type="text" class="donar_input2 " placeholder="Write something about you"></textarea>
                    <div class="modal-footer d-flex justify-content-center">
                        <button disabled id="submits" type="submit" name="submit1" class="rad-30  g_btn to_left applynow">Join Us <span></span></button>
                    </div>

                </form>
            </div>

        </div>
    </div>
</div>



<script>
            document.getElementById('submits').style.opacity="50%"

    function enable(data){
    initial_1 = document.getElementById('name').value
    initial_2 = document.getElementById('initial_2').value
    initial_3 = document.getElementById('initial_3').value
    initial_4 = document.getElementById('initial_4').value
    initial_5 = document.getElementById('initial_5').value
    initial_6 = document.getElementById('initial_6').value
    initial_7 = document.getElementById('initial_7').value
    initial_8 = document.getElementById('initial_8').value
    initial_9 = document.getElementById('initial_9').value

    console.log(data);
    console.log(initial_1);
    if (initial_1 != '' && initial_2 != '' && initial_3 != '' && initial_4 != '' && initial_5 != '' && initial_6 != '' && initial_7 != '' && initial_8 != '' && initial_9 != '') {
        document.getElementById('submits').disabled=false
        document.getElementById('submits').style.opacity="100%"

    } else {
        document.getElementById('submits').disabled=true
    }
}
</script>