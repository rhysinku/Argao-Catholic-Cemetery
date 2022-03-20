<?php
session_start();
if (isset($_SESSION['userID']))
{
    if($_SESSION['userID'] == 1)
    {
        include_once 'assets/headerfooter/adminHeader.php';
    }
    else{
        include_once 'assets/headerfooter/userHeader.php';
    }
}
else{
    include_once 'assets/headerfooter/Header.php';
}

?>

    <div class="d-flex justify-content-center">
        <div style="padding: 0;margin: 0;width: 732px;">
            <form method="POST" action="assets/php/accSignup.php">
                <div class="container">
                    <div class="row">
                        <div class="col">
                            <h1>Create Account</h1>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="row">
                                <div class="col" style="padding: 10px;">
                                    <p>First Name</p><input class="form-control" name="fname" type="text" required="">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col" style="padding: 10px;">
                                    <p>Address</p><input class="form-control"  name="address" type="text" required="">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col" style="padding: 10px;">
                                    <p>Username</p><input class="form-control"  name="username" type="text" required="">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col" style="padding: 10px;">
                                    <p>Password</p><input class="form-control" id="password" onkeyup='check();' name="password" type="password" required="">
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="row">
                                <div class="col" style="padding: 10px;">
                                    <p>Last Name</p><input class="form-control"  name="lname" type="text" required="">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col" style="padding: 10px;">
                                    <p>Contact Number</p><input class="form-control"  name="num" pattern="[0-9]+" type="text" required="">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col" style="padding: 10px;">
                                    <p>Email Address</p><input class="form-control" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$"  name="email" type="text" required="">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col" style="padding: 10px;">
                                    <p>Confirm Password</p><input class="form-control" id="confirm_password" onkeyup='check();' name="rpassword" type="password" required="">
                                    <span id="message"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col d-flex flex-column justify-content-center" style="padding: 15px;"><button class="btn btn-primary" type="submit">Sign Up</button>
                            <p class="text-center">Already created account?&nbsp;<a href="Login.php">Log in</a></p>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <script>
    var check = function() {

  if (document.getElementById('password').value == document.getElementById('confirm_password').value) 
  {
    document.getElementById('message').style.color = 'green';
    document.getElementById('message').innerHTML = 'Password Match';

  } else {

    document.getElementById('message').style.color = 'red';
    document.getElementById('message').innerHTML = 'Password Not Match';
  }

}

    </script>

<?php 
include_once 'assets/headerfooter/Footer.php'; ?>