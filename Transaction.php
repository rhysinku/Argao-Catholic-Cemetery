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
                    <tbody>
                        <tr>
                            <td>Cell 1</td>
                            <td>Cell 2</td>
                            <td>Cell 2</td>
                            <td>Cell 2</td>
                            <td>Cell 2</td>
                            <td>Cell 2</td>
                            <td>Cell 2</td>
                            <td class="d-flex">
                                <div style="height: 0px;"><a class="btn btn-info btn-lg" role="button" href="#myModal" data-bs-toggle="modal" style="font-size: 16px;" data-bs-target="#myModal-1">Preview</a>
                                    <div class="modal fade" role="dialog" tabindex="-1" id="myModal-1">
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
                                                                    <th>Column 2</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <tr>
                                                                    <td>Last Name</td>
                                                                    <td>Cell 2</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Date of Birth</td>
                                                                    <td>Cell 2</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Date of Death</td>
                                                                    <td>Cell 4</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Type of Lubong</td>
                                                                    <td>Cell 4</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Gender</td>
                                                                    <td>Cell 4</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Nationality</td>
                                                                    <td>Cell 4</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Religion</td>
                                                                    <td>Cell 4</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Payment</td>
                                                                    <td>Cell 4</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Gcash Number</td>
                                                                    <td>Cell 4</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Screenshot</td>
                                                                    <td><img></td>
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
                                <div style="height: 0px;"><a class="btn btn-danger btn-lg" role="button" href="#myModal" data-bs-toggle="modal" style="font-size: 16px;" data-bs-target="#myModal-2">Delete</a>
                                    <div class="modal fade" role="dialog" tabindex="-1" id="myModal-2">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h4>Delete User's&nbsp; Transaction Data</h4><button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    <p class="text-center text-muted">Are you sure to DELETE this data?</p>
                                                </div>
                                                <div class="modal-footer"><button class="btn btn-primary" type="button" data-bs-dismiss="modal">Cancel</button><button class="btn btn-danger" type="button">Delete</button></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <?php
include_once 'assets/headerfooter/Footer.php';
?>