<?php
  ob_start();
  include './connect/connect.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PLSP Alumni</title>
    <link rel="stylesheet" href="./css/Lstyles.css">
</head>
<body>
  <div class="landing-page">
    <div class="group-15">
      <div class="rectangle-14"></div>
      <img
        class="close-up-hands-holding-diplomas-caps-1"
        src="./images/diplo.jpeg"
      />
    </div>
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
    <div class="welcome-home-our-dear-alumni">
      <span>
        <span class="welcome-home-our-dear-alumni-span">
          Welcome home, our dear
        </span>
        <span class="welcome-home-our-dear-alumni-span2">alumni</span>
        <span class="welcome-home-our-dear-alumni-span3">.</span>
      </span>
    </div>

    <div class="please-login-to-catch-up-with-what-s-going-on-campus-right-now">
      Please login to catch up with what’s going on campus right now.

      <?php
      //for log in function

      if(isset($_POST['login']))
      {
        $stud_id = $_POST['std_id'];
        $pass = $_POST['pass'];

        $check_user = mysqli_query($conn ,"SELECT * FROM user_acc WHERE stud_id = '$stud_id' && confirmation = 1");
        $result = mysqli_fetch_assoc($check_user);
        if($result > 0)
        {
          if($result['password'] == $pass)
          {
            $_SESSION['stud_id'] = $result['stud_id'];
            $_SESSION['password'] = $result['password'];
            header ("Location: Home.php");
          }
          else
          {
            echo 'Wrong Password! ';
          }
        }
        else
        {
          echo 'This student id does not exist!';
        }
      }
      ?>
    </div>

    <form method="post">

      <div class="student-id-input">
        <input type="text" placeholder="Student ID" id="std_id" name="std_id" required/>
      </div>
      <div class="password-input">
        <input type="password" placeholder="Password" id="pass" name="pass" required/>
      </div>

      <div class="background-pill-welcome"></div>

      <button type="submit" name="login">
        <div class="login">Login</div>
      </button>


    </form>
    <div class="login2"></div>
    <a href="SignUp.php">
      <button type="button" class="sign-up">Sign Up</button>
    </a>
    <div class="sign-up2"></div>
    <svg
      class="group-2"
      width="502"
      height="2"
      viewBox="0 0 502 2"
      fill="none"
      xmlns="http://www.w3.org/2000/svg"
    >
      <line
        x1="-4.94558e-05"
        y1="0.0114746"
        x2="232.017"
        stroke="white"
        stroke-width="2"
      />
    </svg>
    <div class="or">or</div>
    <div class="student-id">Student ID</div>
    <div class="password">Password</div>
    <div class="ellipse-2"></div>
    <img class="image-1" src="./images/logo.png" />
  </div>
</body>
</html>