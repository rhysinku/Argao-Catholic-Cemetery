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


<body>
    <div style="padding: 20px;">
        <div><a class="btn btn-primary btn-lg" role="button" href="#Adduser" data-bs-toggle="modal">Add Account</a>
            <div class="modal fade" role="dialog" tabindex="-1" id="Adduser">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4>Add New User</h4><button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                        <p class="text-center text-muted">Add New Account</p>
                            <form method="post" action="assets/php/addUser.php">
                                <div class="table-responsive" style="margin: 7px;">
                                    <table class="table">
                                        <tbody>
                                            <tr>
                                                <td>User Name</td>
                                                <td><input class="form-control" type="text" name="username" required=""></td>
                                            </tr>
                                            <tr>
                                                <td>First Name</td>
                                                <td><input class="form-control" type="text" name="fname" required=""></td>
                                            </tr>
                                            <tr>
                                                <td>Last Name</td>
                                                <td><input class="form-control" type="text" name="lname" required=""></td>
                                            </tr>
                                            <tr>
                                                <td>Contact</td>
                                                <td><input class="form-control" type="text" pattern="[0-9]+" required="" name="contact"></td>
                                            </tr>
                                            <tr>
                                                <td>Email</td>
                                                <td><input class="form-control" type="text" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" name="email" required=""></td>
                                            </tr>
                                            <tr>
                                                <td>Address</td>
                                                <td><input class="form-control" type="text" name="address" required=""></td>
                                            </tr>
                                            <tr>
                                                <td>Password</td>
                                                <td><input class="form-control" type="password" name="pass" required="" id="myPassword">
                                                    <div><input type="checkbox" onclick="showpass()"><span>Show Password</span></div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                        </div>
                        <div class="modal-footer"><button class="btn btn-light" type="button" data-bs-dismiss="modal">Close</button><button class="btn btn-primary" type="submit">Save</button></div>
                    </div>
                </div>
            </div>
        </div>
        </form>
    </div>



    






    <div style="padding: 15px;">
        <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr>
                        <th>No.</th>
                        <th>UserName</th>
                        <th>Address</th>
                        <th>Email</th>
                        <th>Password</th>
                        <th>Date Created</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                <?php
        $usernum = 1;
        $tableview = $conn->query("SELECT * FROM user");
        while ($view = $tableview->fetch_assoc()):
            $date = date(" F, d, Y h:i A",strtotime($view['userTimestamp'])) ; 
            //     Y/F/d 

        ?>
                    <tr>

                    <tr>
                        <td><?php echo $usernum++; ?></td>
                        <td><?php echo $view['userName'] ?></td>
                        <td><?php echo $view['userAddress'] ?></td>
                        <td><?php echo $view['userMail'] ?></td>
                        <td><?php echo $view['userPwd'] ?> </td>
                        <td><?php echo $date ?></td>
                        <td class="d-flex">
                            <div style="height: 0px;">
                            <a class="btn btn-info btn-lg" role="button" href="#edit<?php echo $view['userId']?>" data-bs-toggle="modal">Edit</a>
                                <div class="modal fade" role="dialog" tabindex="-1" id="edit<?php echo $view['userId']?>">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h4>Edit <?php echo $view['userName'] ?>'s Profile</h4><button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <p class="text-center text-muted">User's Profile</p>
                                                <form method="POST" action="assets/php/updateUser.php">
                                                <div class="table-responsive">
                                                    <table class="table">
                                                        <thead>
                                                            <tr>
                                                            <input hidden value="<?php echo $view['userId']; ?>" name="id">   
                                                                <th>UserName</th>
                                                                <th><input type="text" name="username" value="<?php echo $view['userName']; ?>"></th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td>First Name</td>
                                                                <td><input type="text" name="fname" value="<?php echo $view['userFname']; ?>"></td>
                                                            </tr>
                                                            <tr>
                                                                <td>Last Name</td>
                                                                <td><input type="text" name="lname" value="<?php echo $view['userLname']; ?>"></td>
                                                            </tr>
                                                            <tr>
                                                                <td>Contact Number</td>
                                                                <td><input type="text" name="contact" value="<?php echo $view['userContact']; ?>" ></td>
                                                            </tr>
                                                            <tr>
                                                                <td>Address</td>
                                                                <td><input type="text" name="address" value="<?php echo $view['userAddress']; ?>" ></td>
                                                            </tr>
                                                            <tr>
                                                                <td>Email</td>
                                                                <td><input type="text"  name="email" value="<?php echo $view['userMail']; ?>"></td>
                                                            </tr>
                                                            <tr>
                                                                <td>Password</td>
                                                                <td><input type="password"  name="pass" value="<?php echo $view['userPwd']; ?>">  </td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                            <button class="btn btn-light" type="button" data-bs-dismiss="modal">Close</button>
                                            <button class="btn btn-primary" type="submit">Update</button>
                                        </div>
                                        </div>
                                    </div>
                                </div>
                                </form>
                            </div>

                            <div>
                            <a class="btn btn-danger btn-lg" role="button" href="#delete<?php echo $view['userId']?>" data-bs-toggle="modal">Delete</a>
                                <div class="modal fade" role="dialog" tabindex="-1" id="delete<?php echo $view['userId']?>">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h4>Delete <?php echo $view['userName'] ?>'s Profile?</h4><button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <p class="text-center text-muted">Are you sure to DELETE this Account?</p>
                                            </div>
                                            <div class="modal-footer">
                                                <button class="btn btn-primary" type="button" data-bs-dismiss="modal">Cancel</button>
                                                <a href="assets/php/dbSimpleConfig.php?accdelete=<?php echo $view['userId'];?>" class="btn btn-danger" type="button">Delete</a>
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


    <script>
                                          function showpass() {
                                            var x = document.getElementById("myPassword");
                                            if (x.type === "password") {
                                              x.type = "text";
                                            } else {
                                              x.type = "password";
                                            }
                                          }

                                          </script>


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