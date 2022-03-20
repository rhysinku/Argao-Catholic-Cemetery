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

require_once 'assets/php/dbconnection.php';

?>
    <div style="padding: 27px;">
        <h1 class="text-center">Transaction</h1>
    </div>
    <div>
        <div style="padding: 37px;">
            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>User</th>
                            <th>Decease Name</th>
                            <th>Booking Date</th>
                            <th>Payment</th>
                            <th>Admin Approval</th>
                            <th>Gcash Number</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <?php 
                    $num= 1;
                    $tableview = $conn->query("SELECT * FROM booking LEFT JOIN user ON booking.userid = user.userId");
                    while ($view = $tableview->fetch_assoc()):
                        $bdate = date(" F, d, Y h:i A",strtotime($view['corpsetimestamp'])) ;
                        $dob = date(" F, d, Y h:i A",strtotime($view['dateBirth'])) ;
                        $dod = date(" F, d, Y h:i A",strtotime($view['dateDeath'])) ;
                    ?>
                    <tbody>
                        <tr>
                            <td><?php echo $num++?></td>
                            <td><?php echo $view['userName'];?></td>
                            <td><?php echo $view['fnamecorpse'] ?></td>
                            <td><?php echo $bdate ?></td>
                            <td><?php echo $view['payment'] ?></td>
                            <td><?php echo $view['adminapprove'] ?></td>
                            <td><?php echo $view['gcash'] ?></td>
                            <td class="d-flex">
                            <a class="btn btn-info btn-lg" role="button" href="#preview<?php echo $view['id']; ?>" data-bs-toggle="modal">Preview</a>

                                    <div class="modal fade" role="dialog" tabindex="-1" id="preview<?php echo $view['id']; ?>">
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
                                                                    <th><?php echo $view['fnamecorpse']; ?></th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <tr>
                                                                    <td>Last Name</td>
                                                                    <td><?php echo $view['lnamecorpse']; ?></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Date of Birth</td>
                                                                    <td><?php echo $dob; ?></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Date of Death</td>
                                                                    <td><?php echo $dod; ?></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Type of Lubong</td>
                                                                    <td><?php echo $view['typegrave']; ?></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Gender</td>
                                                                    <td><?php echo $view['gender']; ?></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Nationality</td>
                                                                    <td><?php echo $view['nationality']; ?></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Religion</td>
                                                                    <td>C<?php echo $view['corpseReligion']; ?></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Payment</td>
                                                                    <td><?php echo $view['payment']; ?></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Gcash Number</td>
                                                                    <td><?php echo $view['gcash']; ?></td>
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
                                     <td class="d-flex justify-content-center"><img src="./assets/imageDb/<?php echo $view['bookimg'];?>" width="50%"></td>

                                    <?php
                                        }
                                        ?>

                                                                </tr>
                                                            </tbody>
                                                         
                                                        </table>
                                                    </div>
                                                </div>
                                                <div class="modal-footer">
                                                <?php if($view['adminapprove'] == 'waiting')
                                                                {
                                                                    $adminapprove = "";
                                                                }
                                                                else{
                                                                    $adminapprove = "hidden";
                                                                } ?>

                                                    <a <?php echo $adminapprove ?> class="btn btn-warning" type="button" href="Approval.php?ID=<?php echo $view['id']?>&&Name=<?php echo $view['userName']; ?>" >Approve Payment</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <a class="btn btn-danger btn-lg" role="button" href="#delete<?php echo $view['id']; ?>" data-bs-toggle="modal">Delete</a>
                                    <div class="modal fade" role="dialog" tabindex="-1" id="delete<?php echo $view['id']; ?>">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h4>Delete <?php echo $view['userName'] ?>'s&nbsp; Transaction Data</h4><button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    <p class="text-center text-muted">Are you sure to DELETE this data?</p>
                                                </div>
                                                <div class="modal-footer"><button class="btn btn-primary" type="button" data-bs-dismiss="modal">Cancel</button>
                                                <a href="assets/php/dbSimpleConfig.php?bookCdelete=<?php echo $view['id'];?>" class="btn btn-danger" type="button">Delete</a>
                                            </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                            </td>
                        </tr>
                        <?php endwhile ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <?php
session_start();
if (isset($_SESSION['userID']))
{
    if($_SESSION['userID'] == 1)
    {
        include_once 'assets/headerfooter/adminFooter.php';
    }
    else{
        include_once 'assets/headerfooter/Footer.php';
    }
}
else{
    include_once 'assets/headerfooter/Footer.php';
}

?>