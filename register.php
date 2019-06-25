<?php
  include 'includes/db.php';
  include('includes/header.php');
  include 'includes/signup.php';
?>


<div class="bg-light py-3">
      <div class="container">
        <div class="row">
          <div class="col-md-12 mb-0"><a href="login.php">Login</a> <span class="mx-2 mb-0">/</span> <strong class="text-black">Register</strong></div>
        </div>
      </div>
    </div>  

    <div class="site-section">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <h2 class="h3 mb-3 text-black">Register</h2>
          </div>
          <div class="col-md-7">

            <form action="/includes/signup.php" method="post">
              <?php 
                $user = new Users();
                $user->signup($firstname, $lastname, $email, $username, $hashedPwd);

              ?>
              <div class="p-3 p-lg-5 border">
                <div class="form-group row">
                  <div class="col-md-6">
                    <label for="c_fname" class="text-black">First Name <span class="text-danger">*</span></label>
                    <input type="text" class="form-control" id="c_fname" name="firstname">
                  </div>
                  <div class="col-md-6">
                    <label for="c_lname" class="text-black">Last Name <span class="text-danger">*</span></label>
                    <input type="text" class="form-control" id="c_lname" name="lastname">
                  </div>
                </div>
                <div class="form-group row">
                  <div class="col-md-12">
                    <label for="c_email" class="text-black">Email <span class="text-danger">*</span></label>
                    <input type="email" class="form-control" id="c_email" name="email" placeholder="">
                  </div>
                </div>
                <div class="form-group row">
                  <div class="col-md-12">
                    <label for="c_subject" class="text-black">Username </label>
                    <input type="text" class="form-control" id="c_subject" name="username">
                  </div>
                </div>

                <div class="form-group row">
                  <div class="col-md-12">
                    <label for="c_subject" class="text-black">Password </label>
                    <input type="text" class="form-control" id="c_subject" name="password">
                  </div>
                </div>

                </div>
                <div class="form-group row">
                  <div class="col-lg-12">
                    <button type="submit" class="btn btn-primary btn-lg btn-block" name="register"> Register </button>
                  </div>
                </div>
              </div>
            </form>
          </div>
         
        </div>
      </div>
    </div>






<?php
include('includes/footer.php');

?>