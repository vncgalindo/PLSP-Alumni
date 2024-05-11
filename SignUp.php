<?php
ob_start();
include './connect/connect.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Alumni Portal</title>
<link rel="stylesheet" href="./css/SUstyles.css">
</head>
<body>
  <div class="sign-up">
    <div class="rectangle-66"></div>
    <div class="rectangle-62"></div>
    <img
      class="pic1"
      src="./images/gradpic_likod.jpeg"
    />
    <img
      class="pic2"
      src="./images/high5.jpeg"
    />
    <img
      class="pic3"
      src="./images/gradpic_nowalk.jpeg"
    />
    <div class="group-12">
      <div class="portal">PORTAL</div>
      <div class="alumni">
        ALUMNI
        <br />
      </div>
      <div class="pamantasan-ng-lungsod-ng-san-pablo">
        PAMANTASAN NG LUNGSOD NG SAN PABLO
      </div>
    </div>
    <div class="logo">
      <div class="ellipse-2"></div>
      <a href="Home.php">
        <img class="image-1" src="./images/logo.png" />
      </a>
    </div>
  </div>
        <?php
          if(isset($_POST['register'])){
            $fname = $_POST ['fname'];
            $std_id =$_POST ['std_id'];
            $mname = $_POST ['mname'];
            $lname = $_POST ['lname'];
            $birth_place = $_POST ['birth_place'];
            $birth_date = $_POST ['birth_date'];
            $citizeship = $_POST ['citizenship'];
            $sex = $_POST ['sex'];
            $religion = $_POST ['religion'];
            $status = $_POST ['status'];
            $email = $_POST ['email'];
            $number = $_POST ['number'];
            $tp_num = $_POST ['tp_num'];
            $street = $_POST ['street'];
            $house_num = $_POST ['house_num'];
            $city = $_POST ['city'];
            $brgy = $_POST ['brgy'];
            $zip_code = $_POST ['zip_code'];
            $province = $_POST ['province'];
            $course = $_POST ['course'];
            $education = $_POST ['education'];
            $year_grad = $_POST ['year_grad'];
            $major = $_POST ['major'];
            $department = $_POST ['department'];
            $company = $_POST ['company'];
            $employ_status = $_POST ['employ_status'];
            $position = $_POST ['position'];
            $industry = $_POST ['industry'];
            $start_date = $_POST ['start_date'];
            $service = $_POST ['service'];
            $password = $_POST ['password'];
            $confirm_pass = $_POST ['confirm_pass'];
            $profile = $_POST ['profile'];

            $check_user = mysqli_query($conn, "SELECT * FROM user_acc WHERE stud_id = '$std_id'");
            $result = mysqli_num_rows($check_user);
            if($result <= 0){
              if($password == $confirm_pass){
                mysqli_query($conn, "INSERT INTO user_acc (`stud_id`,`password`,`email_add`,`confirmation`) VALUES ('$std_id', '$password', '$email', 0)");
                $user_id = $conn->insert_id;
                mysqli_query($conn, "INSERT INTO personal_information (`user_id`, `student_id`, `first_name`, `middle_name`, `last_name`, `sex`, `civil_status`, `date_of_birth`, `place_of_birth`, `citizenship`, `religion`, `image`) VALUES ('$user_id', '$std_id', '$fname', '$mname', '$lname', '$sex', '$status', '$birth_date', '$birth_place', '$citizeship', '$religion', 'none')" );
                if(isset($_POST['company'])){
                  mysqli_query($conn, "INSERT INTO employment__information (`user_id`, `employment_status`, `industry`, `date_started`, `company`, `position`, `years_of_service`) VALUES ('$user_id', '$employ_status', '$industry', '$start_date', '$company', '$position', '$service')");
                }
                mysqli_query($conn, "INSERT INTO educational_background (`user_id`, `educational_attainment`, `major`, `department`, `course`, `year_graduated`) VALUES ('$user_id', '$education', '$major', '$department', '$course', '$year_grad')");
                mysqli_query($conn, "INSERT INTO contact_information (`user_id`, `email_address`, `mobile_phone_number`, `telephone_number`) VALUES ('$user_id', '$email', '$number', '$tp_num')");
                mysqli_query($conn, "INSERT INTO address_information (`user_id`, `house_number`, `street`, `barangay`, `city`, `province`, `zip_code`) VALUES ('$user_id', '$house_num', '$street', '$brgy', '$city', '$province', '$zip_code')");
              }
              else
              {
                echo 'Confirmation password does not match';
              }
            }
            else
            {
              echo 'User already exist or Pending admin approval';
            }
          }
        ?>
        <div class="container">
          <form method="post">
            <div class="rectangle-49">
              Personal Information
            </div>
            <div class="maindiv">
              <div class="subdiv1">
                <div class="student-id-input"><input type="text" placeholder="*First Name" id = "fname" name = "fname" required/></div>
                <div class="student-id-input"><input type="text" placeholder="*Student ID" id = "student_id" name = "std_id" required/></div>
                <div class="student-id-input"><input type="text" placeholder="*Middle Name" id="mname" name = "mname" required/></div>
                <div class="student-id-input"><input type="text" placeholder="*Last Name" id="lname" name ="lname" required/></div>
                <div class="student-id-input"><input type="text" placeholder="*Place of Birth" id="place_of_birth" name ="birth_place" required/></div>
              </div>
              <div class="subdiv2">
                <div class="student-id-input"><input type="text" placeholder="*Date of Birth" onfocus="this.type = 'date'" onblur="this.type='text'" id="date_of_birth" name ="birth_date" required/></div>
                <div class="student-id-input"><input type="text" placeholder="*Citizenship" id="citizenship" name ="citizenship" required/></div>
                <div class="student-id-input"><input type="text" placeholder="*Sex" id="sex" name ="sex" required/></div>
                <div class="student-id-input"><input type="text" placeholder="*Religion" id="religion" name ="religion" required/></div>
                <div class="student-id-input"><input type="text" placeholder="*Civil Status" id="civil_status" name ="status" required/></div>
              </div>
            </div>
            <div class="rectangle-49">Contact Information</div>
              <div class="maindiv">
                <div class="subdiv1">
                  <div class="student-id-input"><input type="email" placeholder="*E-mail Address" id="email" name ="email" required/></div>
                  <div class="student-id-input"><input type="text" placeholder="*Mobile Phone Number" id="mobile_num" name ="number" required/></div>
                </div>
                <div class="subdiv2">
                  <div class="student-id-input"><input type="text" placeholder="*Telephone Number" id="telephone_num" name ="tp_num" required/></div>
                </div>
              </div>
            <div class="rectangle-49">
              Address Information
            </div>
            <div class="maindiv">
              <div class="subdiv1">
                <div class="student-id-input"><input type="text" placeholder="*Street" id="street" name ="street" required/></div>
                <div class="student-id-input"><input type="text" placeholder="*House/Building Number" id="house_num" name ="house_num" required/></div>
                <div class="student-id-input"><input type="text" placeholder="*City" id="city" name="city" required/></div>
              </div>
              <div class="subdiv2">
                <div class="student-id-input"><input type="text" placeholder="*Barangay" id="barangay" name ="brgy" required/></div>
                <div class="student-id-input"><input type="number" placeholder="*Zip Code" id="zip_code" name ="zip_code" required/></div>
                <div class="student-id-input"><input type="text" placeholder="*Province" id="province" name ="province" required/></div>
              </div>
            </div>
            <div class="rectangle-49">
              Educational Background
            </div>
            <div class="maindiv">
              <div class="subdiv1">
                <div class="student-id-input"><input type="text" placeholder="*Program / Course" id="program/course" name ="course" required/></div>
                <div class="student-id-input"><input type="text" placeholder="*Educational Attainment" id="educ" name ="education" required/></div>
                <div class="student-id-input"><input type="text" placeholder="*Year Graduated" id="grad" name ="year_grad" required/></div>
              </div>
              <div class="subdiv2">
                <div class="student-id-input"><input type="text" placeholder="*Specialization / Major" id="major" name ="major" required/></div>
                <div class="student-id-input"><input type="text" placeholder="*College / Department" id="college/dept" name ="department" required/></div>
              </div>
            </div>
            <div class="rectangle-49">
              Employment Information (Optional)
            </div>
            <div class="maindiv">
              <div class="subdiv1">
                  <div class="student-id-input"><input type="text" placeholder="Company" id="company" name="company"/></div>
                  <div class="student-id-input"><input type="text" placeholder="Employement Status" id="employment_status" name="employ_status"/></div>
                  <div class="student-id-input"><input type="text" placeholder="Position" id="position" name="position"/></div>
              </div>
              <div class="subdiv2">
                <div class="student-id-input"><input type="text" placeholder="Industry" id="industry" name="industry"/></div>
                <div class="student-id-input"><input type="text" placeholder="Date Started" onfocus="this.type='date'" onblur="this.type='text'" id="date_start" name="start_date"/></div>
                <div class="student-id-input"><input type="text" placeholder="Year/s of Service" id="year_serviced" name="service"/></div>
              </div>
            </div>
            <div class="rectangle-49">
              Create Password
            </div>
            <div class="maindiv">
              <div class="student-id-input"><input type ="password" placeholder="*Password" id="password" name="password" required/></div>
              <div class="student-id-input"><input type ="password" placeholder="*Confirm Password" id="confirm_pass" name="confirm_pass" required/></div> 
            </div>
            <div class="rectangle-49">
              Upload Your Picture
            </div>
            <div class="panel">
              <div class="upload-or-drag-your-photo-inside-the-box">Upload your photo here.</div>
              <div class="rectangle-68">
                <input type="file" id="file" class="upload" name="profile">
                <label for="file">Upload File</label>
              </div>
            </div>
            <div class="notice">
              <input type = "checkbox" required/>
              By proceeding in this registration, you hereby declare that the information provided in this form is true and correct. Any willful dishonesty may render legal, academic, and / or administrative sanctions to the undersigned and agree that all information provided shall be used  to help in improving the services provided by this website.
              After clicking SUBMIT, you shall be redirected to the Log In page.
            </div>
            
            <button type="submit" name="register">
              Submit
            </button>
          </form>
        </div>

</body>
</html>
