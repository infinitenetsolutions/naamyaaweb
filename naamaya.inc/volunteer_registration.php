<?php

include './Backend/database.inc.php';
if (isset($_POST['submit'])) {

    $name = $_POST['name'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $gender = $_POST['gender'];
    $cities = $_POST['cities'];
    $department = $_POST['department'];
    $occupation = $_POST['occupation'];
    $whyjoin = $_POST['whyjoin'];
    $know = $_POST['know'];
    $insert_query = "INSERT INTO `volunteer`(`name`, `gender`, `email`, `phone`, `department`, `city`, `occupation`,`wheretoknow`, `whyjoin`, `Image`,`status`) VALUES  ('$name','$gender','$email','$mobile','$department','$cities','$occupation','$know','$whyjoin','NULL','0')";
    $result = mysqli_query($connection, $insert_query);
    if ($result) {
        // $_SESSION['name']=$name;

        echo '
   <script>
   window.location.replace("../../naamyaa/pages/thankyou.php");
   </script>';
    }

}
$department_retrive="SELECT `Categries`  FROM `Event`  `status`=1 ";
$result1=mysqli_query($connection,$department_retrive);

?>

<div class="modal fade" id="modalContactForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header text-center">
                <h4 class="modal-title w-100 font-weight-bold">Apply</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body mx-3">
                <form method="POST" action="">
                    <input name="name" type="text" placeholder="Enter Full Name" class="donar_input donar_input1 mr-15" pattern="[a-zA-Z]+" title="please input name" required>
                    <input name="email" type="email" placeholder="Enter Email" class="donar_input donar_input1 mr-15" required>
                    <input name="mobile" type="text" placeholder="Enter mobile Number" pattern="[0-9]+" maxlength="12" title="please input number in proper formet" class="donar_input donar_input1 mr-15" required>
                    <select name="gender" class="donar_input donar_input1 mr-15">
                        <option selected disabled>Gender

                        </option>
                        <option value="m">male</option>
                        <option value="f">female</option>
                        <option value="o">others</option>
                    </select>
                    <select name="cities" class="donar_input donar_input1 mr-15">
                        <option selected disabled>Cities

                        </option>
                        <option value="jamshedpur">jamshedpur</option>
                        <option value="Ranchi">Ranchi</option>
                        <option value="Gaya">Gaya</option>
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
                        
                        <?php while($depart=mysqli_fetch_array($result1)){ ?>
                        <option value="<?php echo $depart['Categries']; ?>"><?php echo $depart['Categries']; ?></option>
                        <?php } ?>
                        <option value="others">others</option>
                    </select>
                 
                    <select name="know" class="donar_input donar_input1 mr-15">
                        <option selected disabled>How did You known About naamya

                        </option>
                        <option value="jamshedpur">High school</option>
                        <option value="Ranchi">College</option>
                        <option value="Gaya">Working</option>
                        <option value="Ranchi">Self Employed</option>
                        <option value="Gaya">Others</option>
                    </select>

                    <!-- <input name="image" type="file" placeholder="Enter Full Name" class="donar_input mr-15" required> -->
                    <input name="whyjoin" type="text" class="donar_input donar_input1 mr-15" placeholder="Write Sonthing About you">
                    <div class="modal-footer d-flex justify-content-center">
                        <button type="submit" name="submit" class="rad-30 g_btn to_left applynow">Apply Now <span></span></button>
                    </div>

                </form>
            </div>

        </div>
    </div>
</div>