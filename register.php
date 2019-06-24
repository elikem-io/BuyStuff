<?php
include('includes/header.php');

?>


<div class="bg-light py-3">
      <div class="container">
        <div class="row">
          <div class="col-md-12 mb-0"><a href="index.php">Home</a> <span class="mx-2 mb-0">/</span> <strong class="text-black">Register</strong></div>
        </div>
      </div>
    </div>  

    <div class="site-section">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <h2 class="h3 text-black">Registration</h2> <p>
          </div>
          </div>
          <div  class="col-md-6 offset-sm-1 align-items-center">

<form class = "justify-content-center">

          
          <div class="col-xs-4">
          <label for="ex3">First Name</label>
          <input class="form-control" id="ex3" type="text" placeholder = "First Name">
          </div>
          <p> </p>
          <div class="col-xs-4">
          <label for="ex3">Last  Name</label>
          <input class="form-control" id="ex3" type="text" placeholder = "Last Name">
          </div>
          <p> </p>
          <div class="col-xs-4">
            <label for="ex3">Email:</label>
            <input class="form-control" id="ex3" type="text" placeholder = "Email goers here">
          </div>
          
      <p> </p>

        <div class="col-xs-4">
            <label for="ex3">Password</label>
            <input class="form-control" id="ex3" type="password" placeholder = "Password">
          </div>

          <div class="col-xs-4">
            <label for="ex3"> Confirm Password</label>
            <input class="form-control" id="ex3" type="password" placeholder = "Confirm Password">
          </div>
          <p> </p>
          <span> </span> <br>
          <p> <input type="submit" name = "register" class="btn btn-info" value="register">
          &nbsp; &nbsp; &nbsp; &nbsp; Already a Member?  <a href = "login.php">Login Here</a> </p>
     </div>
     <br>
</form>





</div>






<?php
include('includes/footer.php');

?>