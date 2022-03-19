<?php
include_once 'assets/headerfooter/Header.php';

?>
    <div class="d-flex justify-content-center">
        <div style="padding: 0;margin: 0;width: 732px;">
            <form method="POST" action="">
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
                                    <p>First Name</p><input class="form-control" type="text" required="">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col" style="padding: 10px;">
                                    <p>Address</p><input class="form-control" type="text" required="">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col" style="padding: 10px;">
                                    <p>Username</p><input class="form-control" type="text" required="">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col" style="padding: 10px;">
                                    <p>Password</p><input class="form-control" type="password" required="">
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="row">
                                <div class="col" style="padding: 10px;">
                                    <p>Last Name</p><input class="form-control" type="text" required="">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col" style="padding: 10px;">
                                    <p>Contact Number</p><input class="form-control" type="text" required="">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col" style="padding: 10px;">
                                    <p>Email Address</p><input class="form-control" type="text" required="">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col" style="padding: 10px;">
                                    <p>Confirm Password</p><input class="form-control" type="password" required=""><span class="text-center text-danger">Password did not match</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col d-flex flex-column justify-content-center" style="padding: 15px;"><button class="btn btn-primary" type="button">Sign Up</button>
                            <p class="text-center">Already created account?&nbsp;<a href="Login.php">Log in</a></p>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
<?php 
include_once 'assets/headerfooter/Footer.php'; ?>