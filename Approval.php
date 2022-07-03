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
                    <?php 
                            if($data['payment']=="pending"){
                                $payment = 'Gcash';
                            }
                            elseif($data['payment']=="walkIn"){
                                $payment = 'Walk In';
                            }
                        
                        ?>

                        <p style="font-size: 10px;height:0;">Payment</p>
                        <p class="text-center"><?php echo $payment ?></p>
                    </div>
                    <div class="col">
                        <p style="font-size: 10px;height:0;">Gcash</p>
                        <p class="text-center"><?php echo $data['gcash'] ?></p>
                    </div>
                </div>

                <div class="row">
                    <div class="col">
                        <?php 
                        if($payment == "Walk In")
                        {
                            $dateWalkIn = date(" F, d, Y",strtotime($data['dateWalkIn']));
                        }
                        else
                        {
                            $dateWalkIn = "No Walk In Date";
                        }
                        ?>
                        <p style="font-size: 10px;height:0;">Walk In Date</p>
                        <p class="text-center"><?php echo $dateWalkIn ?></p>
                    </div>
                    <div class="col">
                        <p style="font-size: 10px;height:0;">Reference Number</p>
                        <p class="text-center"><?php echo $data['RefNum'] ?></p>
                    </div>
                </div>

                <div class="row">
                    <div class="col d-flex justify-content-center">
                        
                    <?php
                                                               if($data['bookimg'] == "")
                                                               { ?>
                                                                   <h1>No ScreenShot</h1>
                                                              <?php  }
                                                               else{
                                                                  $image_path_filename = './assets/imageDb/'.$data['bookimg'];
                                                                  if (file_exists($image_path_filename)) { ?>
                                                                  
                                                             <img src="assets/imageDb/<?php echo $data['bookimg'] ?>" style="margin: 10px; width: 50%"> 
                                                        <?php } else { ?>

                                                            <h1>No ScreenShot</h1>
                                                         <?php  } 
                                                        }?>
     





                       
                    </div>
                </div>
                <?PHP endwhile ?> 
                <div class="row">
                    <div class="col">
                        <form method="post" action="assets/php/dbApproval.php">
                            <div class="d-flex justify-content-center">
                              <input type="hidden" value="<?php echo $idurl; ?>" name="id">
                              <?php 
                              if($payment == "Gcash"){
                                $text="Yes, I receive the Gcash Payment";
                                $namePay = "Gcash";
                                $Noname = "GcashNo";
                                $Notext="No, I did not receive the payment";
                               
                              }
                                elseif($payment == "Walk In"){
                                    $text = "Yes, I accept the Walk In Payment";
                                    $namePay = "walkIn";
                                    $Noname = "WalkinNo";
                                    $Notext="No, I did not Approve the Walk In payment";
    
                                  
                                }
                                        ?>
                                <button class="btn btn-primary" type="submit" name="<?php echo $namePay; ?>" style="background: var(--bs-green);margin: 10px;"><?php echo $text ?></button>
                                <button class="btn btn-primary" type="submit" name="later" style="background: var(--bs-gray);margin: 10px;">Maybe, Later</button>
                                <button class="btn btn-primary" type="submit" name="<?php echo $Noname; ?>" style="background: var(--bs-red);margin: 10px;"><?php echo $Notext ?></button></div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <?php

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