<?php

require_once "dbconnection.php";

$adminapprove='waiting';

if(isset($_POST["pay"]))
{
    

    $userId =$_POST["id"];
    $fname = $_POST["fname"];
    $lname = $_POST["lname"];
    $gender = $_POST["gender"];
    $typel = $_POST["typel"];
    $dob = date('y-m-d', strtotime($_POST["dob"])); 
    $dod = date('y-m-d', strtotime($_POST["dod"]));
    $national = $_POST["national"];
    $religion = $_POST["religion"];

    $payment = "pending";

        $sql = "INSERT INTO booking (userid, fnamecorpse, lnamecorpse, nationality, gender, typegrave, dateBirth, dateDeath, corpseReligion ,payment)
                VALUES ('$userId', '$fname', '$lname' , '$national' , '$gender' , '$typel' , '$dob' , '$dod', '$religion' , '$payment')";
        mysqli_query($conn,$sql);
        //header("Location: ../Booking.php?msg=Payment");


        $sql2 = "SELECT id FROM booking WHERE userid = '$userId' AND  fnamecorpse= '$fname' AND payment ='pending' ORDER BY corpsetimestamp DESC ";
         $result = mysqli_query($conn,$sql2);
         $row = mysqli_fetch_array($result);
        $Idpay = $row['id'];
        session_start();
        $_SESSION['payid'] = $Idpay;

        header("Location: ../../BookingPayment.php?ID=$Idpay ");
   
}

if(isset($_POST["draft"]))
{
    
        $userId =$_POST["id"];
        $fname = $_POST["fname"];
        $lname = $_POST["lname"];
        $gender = $_POST["gender"];
        $typel = $_POST["typel"];
        $dob = date('y-m-d', strtotime($_POST["dob"])); 
        $dod = date('y-m-d', strtotime($_POST["dod"]));
        $national = $_POST["national"];
        $religion = $_POST["religion"];

    $payment = "queue";


    $sql = "INSERT INTO booking (userid, fnamecorpse, lnamecorpse, nationality, gender, typegrave, dateBirth, dateDeath, corpseReligion ,payment)
                VALUES ('$userId', '$fname', '$lname' , '$national' , '$gender' , '$typel' , '$dob' , '$dod', '$religion' , '$payment')";
        mysqli_query($conn,$sql);

         header("Location: ../../UserProfile.php?suc='$payment'");
   
}


// if(isset($_POST["walkIn"]))
// {
// 
        // $userId =$_POST["id"];
        // $fname = $_POST["fname"];
        // $lname = $_POST["lname"];
        // $gender = $_POST["gender"];
        // $typel = $_POST["typel"];
        // $dob = date('y-m-d', strtotime($_POST["dob"])); 
        // $dod = date('y-m-d', strtotime($_POST["dod"]));
        // $national = $_POST["national"];
        // $religion = $_POST["religion"];
//     $payment = "walkIn";
//     $sql = "INSERT INTO booking (userid, fnamecorpse, lnamecorpse, nationality, gender, typegrave, dateBirth, dateDeath, corpseReligion ,payment)VALUES ('$userId', '$fname', '$lname' , '$national' , '$gender' , '$typel' , '$dob' , '$dod', '$religion' , '$payment')";
        // mysqli_query($conn,$sql);
        //  header("Location: ../../UserProfile.php?suc='$payment'");
// 
// 
// 
// }
