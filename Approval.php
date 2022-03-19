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


$idurl = $_GET['ID'];
$nameurl = $_GET['Name'];
$conn = mysqli_connect("localhost", "root", "", "cemetery");?> 


    <div>
        <div class="d-flex justify-content-center" style="margin: 5%;">
            <div class="container">
                <div class="row" >
                    <div class="col">
                        <h1 class="text-center">Booking Transaction</h1>
                    </div>
                </div>
                <?php
                        $sql="SELECT * FROM booking WHERE id = '$idurl'";
                        $result =mysqli_query($conn,$sql);

                        while($data = mysqli_fetch_assoc($result)):
                    
                            $dob = date(" F, d, Y",strtotime($data['dateBirth']));
                            $dod = date(" F, d, Y",strtotime($data['dateDeath']));

                            
                            ?>
                <div class="row">
                    <div class="col">
                        <p style="font-size: 10px;height:0;">First Name</p>
                        <p class="text-center"><?php echo $data['fnamecorpse'] ?></p>
                    </div>
                    <div class="col">
                        <p style="font-size: 10px;height:0;">Last Name</p>
                        <p class="text-center"><?php echo $data['lnamecorpse'] ?></p>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <p style="font-size: 10px; height:0;">Type of Grave</p>
                        <p class="text-center"><?php echo $data['typegrave'] ?></p>
                    </div>
                    <div class="col">
                        <p style="font-size: 10px; height:0;">Nationality</p>
                        <p class="text-center"><?php echo $data['nationality'] ?></p>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <p style="font-size: 10px;height:0;">Religion</p>
                        <p class="text-center"><?php echo $data['corpseReligion'] ?></p>
                    </div>
                    <div class="col">
                        <p style="font-size: 10px;height:0;">Gender</p>
                        <p class="text-center"><?php echo $data['gender'] ?></p>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <p style="font-size: 10px; height:0;">Date of Birth</p>
                        <p class="text-center"><?php echo $dob ?></p>
                    </div>
                    <div class="col">
                        <p style="font-size: 10px; height:0;">Date of Death</p>
                        <p class="text-center"><?php echo $dod ?></p>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <p style="font-size: 10px;height:0;">Payment</p>
                        <p class="text-center"><?php echo $data['payment'] ?></p>
                    </div>
                    <div class="col">
                        <p style="font-size: 10px;height:0;">Gcash</p>
                        <p class="text-center"><?php echo $data['gcash'] ?></p>
                    </div>
                </div>
                <div class="row">
                    <div class="col d-flex justify-content-center">
                        <img src="assets/imageDb/<?php echo $data['bookimg'] ?>" style="margin: 10px; width: 50%">
                    </div>
                </div>
                <?PHP endwhile ?> 
                <div class="row">
                    <div class="col">
                        <form method="post" action="assets/php/dbApproval.php">
                            <div class="d-flex justify-content-center">
                              <input type="hidden" value="<?php echo $idurl; ?>" name="id">
                                <button class="btn btn-primary" type="submit" name="yes" style="background: var(--bs-green);margin: 10px;">Yes, I receive the Payment</button>
                                <button class="btn btn-primary" type="submit" name="later" style="background: var(--bs-gray);margin: 10px;">Maybe, Later</button>
                                <button class="btn btn-primary" type="submit" name="no" style="background: var(--bs-red);margin: 10px;">No, I did not receive the payment</button></div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <?php
include_once 'assets/headerfooter/Footer.php';
?>