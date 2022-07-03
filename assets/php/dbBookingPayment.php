<?php
require_once 'dbconnection.php';
session_start();

$id =  $_SESSION["userID"];
$id2 = $_SESSION["payid"];
$accpass = $_POST["accpass"];
$refNum = $_POST["refNum"];
$gcash = $_POST["gcash"];
$admin = "waiting";
$imagename =$_FILES['bookimg']['name'];
$imagetemp = $_FILES['bookimg']['tmp_name'];
$newimage = uniqid("CemImg-",true).'.'.$imagename; // rename image to avoid duplicate




if(isset($_POST["pay"]))
{
    
        $sql = "SELECT * FROM user WHERE userId = '$id'";
        $result = mysqli_query($conn, $sql);
        $row = mysqli_fetch_array($result);

        if($accpass == $row['userPwd'])
        {

            $sql3 = "SELECT RefNum FROM booking WHERE Refnum = '$refNum'";
            $result2 = mysqli_query($conn, $sql3);
            

            if(mysqli_num_rows($result2))
            {
                header("Location: ../../BookingPayment.php?error=IncorrectRefNum");  
      
            }

            else{

                   
                 $sql2 = "UPDATE booking SET adminapprove = '$admin' ,  gcash='$gcash' ,Refnum = '$refNum', bookimg = '$newimage', corpsetimestamp = now() WHERE id = '$id2'";
                 if(mysqli_query($conn,$sql2))
                 {
                
                         $location = '../../assets/imageDb/'.$newimage;
                
                         move_uploaded_file($imagetemp,$location);
                         header("Location: ../../UserProfile.php?succ=BookSuc");
                 /*  $sql3 ="INSERT INTO bookingimage (bookId,bkimage) VALUES ('$id2','$newimage')";
                     mysqli_query($conn,$sql3); */
                
                     //error testing
                 /*   echo mysqli_errno($conn); 
                     echo $newimage;
                     echo "<pre>";
                     print_r($_FILES['bookimg']);
                     echo "<pre>";  */
                 }
                             
               
            }

        
        }
        else
        {
            header("Location: ../../BookingPayment.php?error=IncorrectPass");
    
        }
   //header("Location: ../Payment.php?error=Success");
    
}

elseif(isset($_POST["walkIN"]))
{
    $userPass = $_POST["userPass"];
     $sql4 = "SELECT * FROM user WHERE userId = '$id'";
     $result = mysqli_query($conn, $sql4);
     $row = mysqli_fetch_array($result);
 if($userPass == $row['userPwd'])
 {
    $dateWalkin = date('y-m-d', strtotime($_POST["dateWalkin"]));
    $payment = "walkIn";
    $sql5 = "UPDATE booking SET adminapprove = '$admin' ,  dateWalkIn='$dateWalkin' ,payment = '$payment', corpsetimestamp = now() WHERE id = '$id2'";
    if(mysqli_query($conn,$sql5))
    {
            header("Location: ../../UserProfile.php?succ=BookSuc");

    }
                
 }
    else
    {
        header("Location: ../../BookingPayment.php?error=WalkInIncorrectPass");
    
    }

}










elseif(isset($_POST["pending"]))
{
    $sql3 = "UPDATE booking SET payment = 'queue' WHERE id = '$id2'";
    mysqli_query($conn,$sql3);
    header("Location: ../../UserProfile.php?suc=Draft");

}
else
{
    header("Location:  ../../BookingPayment.php?error=WTF");
    //echo'<script>alert("Incorrect Password")</script>';
}