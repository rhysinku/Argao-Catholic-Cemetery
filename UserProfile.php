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

include_once 'assets/php/dbProfile.php';
?>

    <div style="height: 60px;padding: 10px;">
        <h1 class="text-center"><?php echo $_SESSION['user']; ?>'s Profile (#<?php echo $_SESSION['userID'] ?>)</h1>
    </div>
    <div class="d-flex justify-content-center" style="height: 287px;">
        <div class="table-responsive" style="width: 704.188px;">
            <table class="table">
                <thead>
                    <tr>
                        <th>Username</th>
                        <th><?php echo $_SESSION['user'] ?></th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>First Name</td>
                        <td><?php echo $fname ?></td>
                    </tr>
                    <tr>
                        <td>Last Name</td>
                        <td> <?php echo $lname ?> </td>
                    </tr>
                    <tr>
                        <td>Contact Number</td>
                        <td><?php  echo $contact ?></td>
                    </tr>
                    <tr>
                        <td>Address</td>
                        <td><?php echo $address ?></td>
                    </tr>
                    <tr>
                        <td>Email Address</td>
                        <td><?php  echo $email?></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <div style="padding: 10px;">
        <h1>Booking History</h1>
        </div>
    <div class="d-flex justify-content-center">
        <div class="table-responsive" style="width: 1088.594px;">
            <table class="table">
                <thead>
                    <tr>
                        <th>No.</th>
                        <th>Name of Decease</th>
                        <th>Time Created</th>
                        <th>Payment</th>
                        <th>Approval</th>
                        <th>Option</th>
                    </tr>
                </thead>
                <?php 
                $count = 1;
                $id = $_SESSION['userID'];

                $tableview = $conn -> query("SELECT * 
                FROM booking INNER JOIN user ON booking.userid = user.userId 
                WHERE user.userId IN ('$id') ORDER BY booking.corpsetimestamp DESC");


    while ($view = $tableview->fetch_assoc()):
    $date = date(" F, d, Y h:i A",strtotime($view['corpsetimestamp'])); 
    $dob = date(" F, d, Y",strtotime($view['dateBirth']));
    $dod = date(" F, d, Y",strtotime($view['dateDeath']));
                ?>
                <tbody>
                    <tr style="height: 50px;">
                        <td><?php echo $count++; ?> </td>
                        <td><?php echo $view['fnamecorpse']; ?></td>
                        <td><?php echo $date ?></td>
                        <td><?php echo $view['payment']; ?></td>
                        <td><?php echo $view['adminapprove'] ?></td>
                        <td class="d-flex" style="padding: 0px;">
                            <div style="height: 0px;">

                           <a class="btn btn-primary btn-lg" role="button" href="#preview<?php echo $view['id'];?>" data-bs-toggle="modal">Preview</a>
                                <div class="modal fade" role="dialog" tabindex="-1" id="preview<?php echo $view['id'];?>">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h4>User's&nbsp; Transaction</h4><button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <p class="text-center text-muted">Transaction Information</p>
                                                <div class="table-responsive">
                                                    <table class="table">
                                                        <thead>
                                                            <tr>
                                                                <th>Decease Name</th>
                                                                <th><?php echo $view['fnamecorpse'] ?></th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td>Last Name</td>
                                                                <td><?php echo $view['lnamecorpse']; ?> </td>
                                                            </tr>
                                                            <tr>
                                                                <td>Date of Birth</td>
                                                                <td><?PHP  echo $dob ?></td>
                                                            </tr>
                                                            <tr>
                                                                <td>Date of Death</td>
                                                                <td><?PHP  echo $dod ?></td>
                                                            </tr>
                                                            <tr>
                                                                <td>Type of Lubong</td>
                                                                <td><?php echo $view['typegrave'] ?></td>
                                                            </tr>
                                                            <tr>
                                                                <td>Gender</td>
                                                                <td><?php echo $view['gender'] ?></td>
                                                            </tr>
                                                            <tr>
                                                                <td>Nationality</td>
                                                                <td><?php echo $view['nationality'] ?></td>
                                                            </tr>
                                                            <tr>
                                                                <td>Religion</td>
                                                                <td><?php echo $view['corpseReligion'] ?></td>
                                                            </tr>
                                                            <tr>
                                                                <td>Payment</td>
                                                                <td><?php echo $view['payment'] ?></td>
                                                            </tr>
                                                            <tr>
                                                                <td>Gcash Number</td>
                                                                <td><?php echo $view['gcash'] ?></td>
                                                            </tr>
                                                            <tr>
                                                                <td>Screenshot</td>
                                                                <?php 
                                        if ($view['bookimg'] == "")
                                        { ?>

                                            <td>No ScreenShot</td>
                                    <?php
                                        }
                                        else
                                        {?>
                                     <td><img src="./assets/imageDb/<?php echo $view['bookimg'];?>" width="100%" height="100%"> </td>

                                    <?php
                                        }
                                        ?>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                            <div class="modal-footer"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <?php if($view['payment'] == 'queue' || $view['adminapprove'] == 'Not Approve')
                            {
                                $style = "";
                            }
                            else
                            {
                                $style = "visibility:hidden";
                            }
                            ?>

                            <div style="<?php echo $style ?>">
                            <a class="btn btn-danger btn-lg" role="button" href="#payment<?php echo $view['id'];?>" data-bs-toggle="modal">Pay</a>
                                <div class="modal fade" role="dialog" tabindex="-1" id="payment<?php echo $view['id'];?>">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h4>Pay Transaction</h4><button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <p class="text-center text-muted"><?php echo $view['fnamecorpse']. " " .$view['lnamecorpse']  ?></p>
                                                <form method="post" enctype="multipart/form-data" action="assets/php/dbProfilePayment.php">
                                                    <div>
                                                        <div class="container">
                                                            <div class="row">
                                                                <div class="col">
                                                                    <div class="row">
                                                                        <div class="col">
                                                                            <h3 class="text-center">Gcash Payment</h3>
                                                                        </div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="col">
                                                                            <p class="text-center">Cost: Php 500.00</p>
                                                                            <p class="text-center">Send to: 09273743328</p>
                                                                        </div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="col" style="padding: 10px;">
                                                                        <input type="hidden" name= "pID" value ="<?php echo $view['id'];?>">
                                                                    <input type="hidden" name= "profile" value ="<?php echo $_SESSION['user'];?>">
                                                                            <p class="text-center">Gcash Number</p><input class="form-control" name="gcash" type="text" placeholder="Gcash Number" required="">
                                                                        </div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="col" style="padding: 10px;">
                                                                            <p class="text-center">Account Password</p><input class="form-control" name="accpass" type="password" required="" placeholder="Account Password">
                                                                        </div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="col" style="padding: 10px;">
                                                                            <p class="text-center">Upload Screenshot</p>
                                                                            <input id="inputimg" onchange="imgval()" name="bookimg" class="form-control form-control-sm" type="file" required accept="image/png, image/jpg, image/jpeg">
                                                                         <span id='message'></span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col d-flex justify-content-center align-items-center"><img src="assets/img/gcash.jpg" style="width: 234px;"></div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col d-flex justify-content-center" style="padding: 17px;">
                                                                <button class="btn btn-primary" type="submit" name="pay" >Submit</button></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                            <div class="modal-footer"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            </div>
                        </td>
                    </tr>
                    <?php  endwhile ?>
                </tbody>
            </table>
        </div>
    </div>

    <script>
         function imgval(){
            var img = document.getElementById("inputimg").value;
            var imgtype = img.lastIndexOf(".")+1;
            var fileimg = img.substr(imgtype, img.lenght).toLowerCase();
            if(fileimg =="jpg" || fileimg =="jpeg" || fileimg =="png")
            {
                document.getElementById('message').style.color = 'green';
                document.getElementById('message').innerHTML = 'Correct Image Format';
            }
            else
            {
                document.getElementById('message').style.color = 'red';
                document.getElementById('message').innerHTML = 'Incorrect Format Image';
            }

        }

        function valNum(e)
        {
            const pattern = /^[0-9]$/;
            return pattern.test(e.key)
        }

    </script>

<?php 
include_once 'assets/headerfooter/Footer.php';
?>