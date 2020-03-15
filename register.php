<?php
session_start();
if (isset($_POST['submit']))
{
   $db=mysqli_connect("localhost","root","","triplecreek");
   $username = mysqli_real_escape_string($db,htmlspecialchars(strip_tags($_POST['username'])));
   $name = mysqli_real_escape_string($db,$_POST['name']);
   $email = mysqli_real_escape_string($db,$_POST['email']);
   $password = mysqli_real_escape_string($db,$_POST['password']);
   $repassword = mysqli_real_escape_string($db,$_POST['repassword']);
   
  if ($password == $repassword)
  {
   $qry = "INSERT INTO login(`username`, `name`, `email`, `password`) VALUES ('$username','$name','$email','$password')";
   $res = mysqli_query($db,$qry);
   header("Location:login.php");
      }
}
?>
<link rel="stylesheet" type="text/css" href="sty.css">
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.slim.min.js"></script>
<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<script type="text/javascript" src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>
<link rel="stylesheet" type="text/css" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
<body>
  <div class="container">
    <div class="row">
      <div class="col-lg-10 col-xl-9 mx-auto">
        <div class="card card-signin flex-row my-5">
          <div class="card-img-left d-none d-md-flex">
             
          </div>
          <div class="card-body">
            <h5 class="card-title text-center">Register</h5>
            <form class="form-signin" method="post">
              <div class="form-label-group">
                <input type="text" id="inputUserame" class="form-control" placeholder="Username" name="username" required>
                <label for="inputUserame">Username</label>
              </div>

              <div class="form-label-group">
                <input type="text" id="inputname" class="form-control" placeholder="Name" name="name" required>
                <label for="inputname">Name</label>
              </div>

              <div class="form-label-group">
                <input type="email" id="inputEmail" class="form-control" placeholder="Email address" name="email" required>
                <label for="inputEmail">Email address</label>
              </div>

              <div class="form-label-group">
                <input type="password" id="inputPassword" class="form-control" placeholder="Password" name="password" pattern="[A-Za-z-1-9]{3,}" required>
                <label for="inputPassword">Password</label>
              </div>
              
              <div class="form-label-group">
                <input type="password" id="inputConfirmPassword" class="form-control" placeholder="Password" name="repassword" pattern="[A-Za-z-1-9]{3,}" required>
                <label for="inputConfirmPassword">Confirm password</label>
              </div>

              <button class="btn btn-lg btn-primary btn-block text-uppercase" type="submit" name="submit">Register</button>
              <a class="d-block text-center mt-2 small" href="login.php">Sign In</a>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>