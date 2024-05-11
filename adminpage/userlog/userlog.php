<?php
ob_start();
?>
<div class="mini-view" style="padding-top: 7%">
  <div class="row">
    <div class="col-lg-5 col-md-12 col-sm-12 d-none d-lg-flex text-center justify-content-center" style="padding-bottom: 20px;"> 
      <img class="contact-picture" style="width: 100%; border-radius: 10px" src="../dist/img/SGlogo.jpg" alt="Logo">
    </div>
    <div class="col-lg-7 col-md-12 col-sm-12" style="padding-bottom: 20px">
      <div class="login-logo">
        <b>Welcome home our dear alumni</b>
      </div>
      <p class="login-box-msg text-left"><h3><strong>Log In </strong></h3></p>

      <form method="post">
        <div class="input-group mb-3">
          <input type="text" class="form-control" placeholder="Username" name="user" required>
          <div class="input-group-append">
            <div class="input-group-text">
              <span>@</span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" class="form-control" placeholder="Password" name="pass" required>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-8 col-md-12 col-sm-12" style="font-size: 14px; color: red">
            <?php
              if(isset($_POST['submit']))
              {
                $stud_id = $_POST['user'];
                $password = $_POST['pass'];

                $check_user = mysqli_query($conn ,"SELECT * FROM user_acc WHERE stud_id = '$stud_id'");
                $result = mysqli_fetch_assoc($check_user);
                if($result > 0)
                {
                  if($result['password'] == $password)
                  {
                    $_SESSION['user'] = $result['username'];
                    $_SESSION['pass'] = $result['password'];
                    header ("Location: ../userpage/userindex.php?page=logindex");
                  }
                  else
                  {
                    echo 'Wrong Password! Pls. try again...';
                  }
                }
                else
                {
                  echo 'This user does not exist!';
                }
              }
            ?>
          </div>
          <!-- /.col -->
          <div class="col-lg-4 col-md-12 col-sm-12">
            <button type="submit" class="btn btn-primary btn-block" name="submit">Log In</button>
          </div>
          <!-- /.col -->
        </div>
      </form>

      <div class="social-auth-links text-center mt-2 mb-3">
        <a href="../body/shell.php?page=register" class="btn btn-block btn-primary">
          <i class="fas fa-user"></i> Sign Up
        </a>
      </div>
      <!-- /.social-auth-links -->

      <p class="mb-1 text-center">
        <a href="../body/shell.php?page=forgot">I forgot my password</a>
      </p>
    </div>
  </div>
  
</div>