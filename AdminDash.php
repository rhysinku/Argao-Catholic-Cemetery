
<?php
include_once 'assets/php/dbconnection.php';
$userRes = mysqli_query($conn,"SELECT count(*) as usercount FROM user");
$UserData = mysqli_fetch_assoc($userRes);

$bookRes = mysqli_query($conn, "SELECT count(*) as bookcount FROM booking");
$BookData = mysqli_fetch_assoc($bookRes);



?>


    <div id="Dashboard" style="padding: 24px;">


    <div class="row">
     <div class="col" style="text-align: center;background: linear-gradient(-64deg, #fd8f0d 0%, #f4ff81 100%);margin: 23px;padding-bottom: 10px;border-radius: 27px;">
         <div class="row">
             <div class="col">
                 <h1 style="font-size: 113.88px;font-family: 'Bebas Neue', serif;color: rgb(255,255,255);height: 111.641px;"><?php echo $UserData['usercount']; ?></h1><span style="font-size: 20px;font-family: 'Bebas Neue', serif;color: rgb(255,255,255);">Users</span>
             </div>
             <div class="col d-flex justify-content-center align-items-center" style="padding: 0px;"><a href="Users.php"><i class="fa fa-user" style="font-size: 102px;color: rgb(255,255,255);"></i></a></div>
         </div>
     </div>




     <div class="col" style="text-align: center;background: linear-gradient(-64deg, var(--bs-blue) 0%, #b5ffff);margin: 23px;padding-bottom: 10px;border-radius: 27px;">
         <div class="row">
             <div class="col">
                 <h1 style="font-size: 113.88px;font-family: 'Bebas Neue', serif;color: rgb(255,255,255);height: 111.641px;">0</h1><span style="font-size: 20px;font-family: 'Bebas Neue', serif;color: rgb(255,255,255);">Decease</span>
             </div>
             <div class="col d-flex justify-content-center align-items-center" style="padding: 0px;"><i class="fa fa-plus" style="font-size: 102px;color: rgb(255,255,255);"></i></div>
         </div>
     </div>



     <div class="col" style="text-align: center;background: linear-gradient(-64deg, #cd0dfd 0%, #d6b5ff);margin: 23px;padding-bottom: 10px;border-radius: 27px;">
         <div class="row">
             <div class="col">
                 <h1 style="font-size: 113.88px;font-family: 'Bebas Neue', serif;color: rgb(255,255,255);height: 111.641px;"><?php echo $BookData['bookcount'] ?></h1><span style="font-size: 20px;font-family: 'Bebas Neue', serif;color: rgb(255,255,255);">Booking</span>
             </div>
             <div class="col d-flex justify-content-center align-items-center" style="padding: 0px;"><a href="Transaction.php"><i class="fa fa-book" style="font-size: 102px;color: rgb(255,255,255);"></i></a></div>
         </div>
     </div>
 </div>


    </div>