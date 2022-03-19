<?php 
include_once 'assets/headerfooter/Header.php';
?>
<body>
    <div style="padding: 26px;">
        <form method="POST" action="assets/php/accLogin.php" >
            <div class="container" style="background: rgba(255,255,255,0);width: 603px;">
                <div class="row" style="padding: 25px;">
                    <div class="col">
                        <h1 style="text-align: center;">Welcome to the Argao Catholic Cemetery</h1>
                    </div>
                </div>
                <div class="row">
                    <div class="col" style="background: url(&quot;assets/img/bg1.webp&quot;) no-repeat;background-size: cover;opacity: 0.71;"></div>
                    <div class="col">
                        <div class="row">
                            <div class="col" style="padding: 13px;">
                                <p style="text-align: left;font-weight: bold;">Username</p><input name="username" class="form-control" type="text" data-bs-toggle="tooltip" data-bss-tooltip="" data-bs-placement="right" title="Username">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col" style="padding: 13px;">
                                <p style="text-align: left;font-weight: bold;">Password</p><input  name="pass" class="form-control" type="password" data-bs-toggle="tooltip" data-bss-tooltip="" data-bs-placement="right" required="" title="Password">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col d-flex flex-column justify-content-center" style="padding: 13px;"><button class="btn btn-primary" type="submit">Log In</button>
                                <p style="font-size: 13px;text-align: center;margin: 7px;">Didn't have account yet?<a href="Signup.php">Sign Up Now!</a>&nbsp;</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
<?php 
include_once 'assets/headerfooter/Footer.php';
?>
