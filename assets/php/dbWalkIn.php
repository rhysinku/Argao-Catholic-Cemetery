<?php
require_once 'dbconnection.php';
// session_start();
// 
// $id =  $_SESSION["userID"];
// $id2 = $_SESSION["payid"];
// $datewalkIn = date('y-m-d', strtotime($_POST["dateWalkin"])); 
// $userPass = $_POST["userPass"];
// $admin = "waiting";
// $payment = "walkIn";
// 
// 
// 
// $sql = "SELECT * FROM user WHERE userId = '$id'";
// $result = mysqli_query($conn, $sql);
// $row = mysqli_fetch_array($result);
// 
// if ($userPass == $row['userPwd']){
// 
    // $sql2 = "UPDATE booking set adminapprove= '$admin', payment = '$payment', dateWalkIn = '$datewalkIn' WHERE id='$id2'";
    // 
// }
// 
// else
// {
    // header("Location: ../../BookingPayment.php?error=IncorrectPass");
// }
// 
// 



if(isset($_POST["walkIn"]))
{   $id2 = $_POST['pID'];
    $profile = $_POST['profile'];
    $admin = "waiting";
    $payment = "walkIn";
    $userPass = $_POST["userPass"];
    $dateWalkin = date('y-m-d', strtotime($_POST["dateWalkin"]));

     $sql4 = "SELECT * FROM user WHERE userName = '$profile'";
     $result = mysqli_query($conn, $sql4);
     $row = mysqli_fetch_array($result);
 if($userPass == $row['userPwd'])
 {
  
    
    $sql5 = "UPDATE booking SET adminapprove = '$admin' ,  dateWalkIn='$dateWalkin' ,payment = '$payment',corpsetimestamp = now() WHERE id = '$id2'";
    if(mysqli_query($conn,$sql5))
    {
            header("Location: ../../UserProfile.php?succ=BookSuc");

    }
                
 }
    else
    {
        header("Location: ../../UserProfile.php?error=WalkInIncorrectPass");
    
    }

}
