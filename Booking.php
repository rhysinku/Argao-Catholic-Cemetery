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

    <div>
        <form action="assets/php/dbBooking.php" method= "post">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <h4>Booking Form</h4>
                    </div>
                </div>

                <div class="row">
                 <div class="col">
                     <p class="text-center text-secondary">Booking  takes hour to process before the mass schedule</p>
                 </div>
            </div>      
                <div class="row">
                    <div class="col">
                        <div class="row" style="padding: 10px;">
                            <div class="col">
                            <td style="border-style: none;"><input type ="hidden" name ="id" value ="<?php echo @$_SESSION['userID'] ?>"/>  
                                <p>Name of decease</p><input class="form-control" type="text" name="fname" id="fname" placeholder="First Name" required="">
                            </div>
                        </div>
                        <div class="row" style="padding: 10px;">
                            <div class="col">
                                <p>Date of Birth</p><input class="form-control" name="dob" id="dob" type="date" required="">
                            </div>
                        </div>
                        <div class="row" style="padding: 10px;">
                            <div class="col">
                                <p>Religion</p><input class="form-control" type="text" name="religion" id="religion" placeholder="Religion" required="">
                            </div>
                        </div>
                        <div class="row" style="padding: 10px;">
                            <div class="col">
                                <p>Gender</p>
                                <div class="form-check"><input class="form-check-input" type="radio" id="gender"  value= "Male" name="gender" checked=""><label class="form-check-label" for="formCheck-4">Male</label></div>
                                <div class="form-check"><input class="form-check-input" type="radio" id="gender" value= "Female" name="gender"><label class="form-check-label" for="formCheck-3">Female</label></div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="row" style="padding: 10px;">
                            <div class="col">
                                <p>Full Name</p><input class="form-control" type="text" name="lname" id="lname" required="" placeholder="Last Name">
                            </div>
                        </div>
                        <div class="row" style="padding: 10px;">
                            <div class="col">
                                <p>Date of died</p><input class="form-control" type="date" name="dod" id="dod"  required="">
                            </div>
                        </div>
                        <div class="row" style="padding: 10px;">
                            <div class="col">
                                <p>Nationality</p><input class="form-control" type="text" required="" name="national" id="national" placeholder="Nationality">
                            </div>
                        </div>
                        <div class="row" style="padding: 10px;">
                            <div class="col">
                                <p>Type of Lubong</p>
                                <div class="form-check"><input class="form-check-input" type="radio" id="typel" value="Public" name="typel" checked=""><label class="form-check-label" for="formCheck-1">Public</label></div>
                                <div class="form-check"><input class="form-check-input" type="radio" id="typel" value="Private"  name="typel"><label class="form-check-label" for="formCheck-2">Private</label></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row" style="margin: 33px;">
                    <div class="col d-flex justify-content-center">
                        <div><a class="btn btn-primary btn-lg" role="button" href="#continue" id="preview" data-bs-toggle="modal">Continue</a>
                            <div class="modal fade" role="dialog"  id="continue" style="z-index: 1400;">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h4>Preview</h4><button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <h1>Booking Data</h1>
                                            <div class="table-responsive">
                                                <table class="table">
                                                    <thead>
                                                        <tr>
                                                            <th>First Name</th>
                                                            <th id = "fname1"></th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>Last Name</td>
                                                            <td id ="lname1" ></td>
                                                        </tr>
                                                        <tr>
                                                            <td>Date of Birth</td>
                                                            <td id = "dob1" ></td>
                                                        </tr>
                                                        <tr>
                                                            <td>Date of Death</td>
                                                            <td id="dod1"></td>
                                                        </tr>
                                                        <tr>
                                                            <td>Type of Lubong</td>
                                                            <td id="typel1"></td>
                                                        </tr>
                                                        <tr>
                                                            <td>Gender</td>
                                                            <td id="gender1"></td>
                                                        </tr>
                                                        <tr>
                                                            <td>Religion</td>
                                                            <td id="religion1" ></td>
                                                        </tr>
                                                        <tr>
                                                            <td>Nationality</td>
                                                            <td id="national1"></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button class="btn btn-light" type="submit"  name="draft" >Save to Draft</button>
                                             <button class="btn btn-primary" type="submit" name="pay">Procced to Payment</button>
                                             <!-- <button class="btn btn-warning" type="submit" name="walkIn">Walk In to Payment</button> -->
                                             
                                             <!-- <a class="btn btn-warning" role="button" href="#walkIN" data-bs-toggle="modal" >Walk In to Payment</a> -->
                                            
                                            </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>       
    </div>


    <!-- <div class="modal fade" role="dialog" style="z-index: 1600;" id="walkIN"> -->
    <!-- <div class="modal-dialog" role="document"> -->
        <!-- <div class="modal-content"> -->
            <!-- <div class="modal-header"> -->
                <!-- <h4>Walk-In Payment Information</h4><button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button> -->
            <!-- </div> -->
            <!-- <div class="modal-body"> -->
            <!-- <p class="text-center text-secondary">Upon receiving the payment and approving from the admin, processing can take at least an<span style="font-weight: bold;color: var(--bs-red);"> hour</span> .</p> -->
            <!-- <div class="d-flex justify-content-center"> -->
               <!-- <p style="margin: 6px;">Date of Payment</p><input class="form-control" type="date" name="dateWalkin" required style="width: 50%;" /> -->
             <!-- </div> -->
<!--  -->
             <!-- <div class="d-flex justify-content-center" style="padding: 5px;"> -->
                  <!-- <p style="margin: 6px;">User Password</p><input type="password" style="width: 50%;" required name="userPass" placeholder="User Password" /> -->
              <!-- </div> -->
<!--  -->
    <!--  -->
        <!-- </div> -->
            <!-- <div class="modal-footer"> -->
               <!--  -->
                <!-- <button class="btn btn-light" type="button" data-bs-dismiss="modal">Close</button><button class="btn btn-primary" name="walkIn" type="submit">Proceed</button> -->
               <!--  -->
            <!-- </div> -->
        <!-- </div> -->
    <!-- </div> -->
<!-- </div> -->

    </form>

    <script type="text/javascript">

    $("#preview").click(function () {

            var fname = $("#fname").val();
            var dob = $("#dob").val();
            var religion = $("#religion").val();
            var gender = $('input[name="gender"]:checked').val();
            var lname = $("#lname").val();
            var dod = $("#dod").val();
            var national = $("#national").val();
            var typel = $('input[name="typel"]:checked').val();


            
            $("#fname1").html(fname);
            $("#lname1").html(lname);
            $("#dob1").html(dob);
            $("#dod1").html(dod);
            $("#religion1").html(religion);
            $("#national1").html(national);
            $("#gender1").html(gender);
            $("#typel1").html(typel);
            
            

          
        });
    </script>

    <?php
include_once 'assets/headerfooter/Footer.php';
?>