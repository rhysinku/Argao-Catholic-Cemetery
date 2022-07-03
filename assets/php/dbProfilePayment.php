<?php 

require_once 'dbconnection.php';


if (isset($_POST['pay']))
{

    $gcash = $_POST['gcash'];
$accpass = $_POST['accpass'];
$id2 = $_POST['pID'];
$profile = $_POST['profile'];
$refNum = $_POST['refNum'];
$admin = "waiting";


$imagename =$_FILES['bookimg']['name'];
$imagetemp = $_FILES['bookimg']['tmp_name'];
$newimage = uniqid("CemimgProfile-",true).'.'.$imagename; // rename image to avoid duplicate

    $sql = "SELECT * FROM user WHERE userName = '$profile'";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_array($result);

    if($accpass == $row['userPwd'])
    {
      
        $sql3 = "SELECT RefNum FROM booking WHERE Refnum = '$refNum'";
        $result2 = mysqli_query($conn, $sql3);
        

        if(mysqli_num_rows($result2))
      
        {
            header("Location: ../../UserProfile.php?error=IncorrectRefNum");    
           
        }
        else{
        

            $sql2 = "UPDATE booking SET adminapprove = '$admin' , payment = 'pending',  gcash='$gcash' ,Refnum = '$refNum', bookimg = '$newimage', corpsetimestamp = now() WHERE id = '$id2' ";
            if(mysqli_query($conn,$sql2))
            {
                $location = '../../assets/imageDb/'.$newimage;
                move_uploaded_file($imagetemp,$location);    
               /*  move_uploaded_file($imagetemp,$location);
                echo mysqli_errno($conn); */
                header("Location: ../../UserProfile.php?succ=PaySuc");
                
            }
           

        }

    }
    else
    {
        header("Location: ../../UserProfile.php?error=IncorrectPass");
      
    }

}

// elseif(isset($_POST["walkIN"]))
// {   $id2 = $_POST['pID'];
    // $profile = $_POST['profile'];
    // $admin = "waiting";
    // $payment = "walkIn";
    // $userPass = $_POST["userPass"];
    // $dateWalkin = date('y-m-d', strtotime($_POST["dateWalkin"]));
// 
    //  $sql4 = "SELECT * FROM user WHERE userName = '$profile'";
    //  $result = mysqli_query($conn, $sql4);
    //  $row = mysqli_fetch_array($result);
//  if($userPass == $row['userPwd'])
//  {
//   
    // 
    // $sql5 = "UPDATE booking SET adminapprove = '$admin' ,  dateWalkIn='$dateWalkin' ,payment = '$payment',corpsetimestamp = now() WHERE id = '$id2'";
    // if(mysqli_query($conn,$sql5))
    // {
            // header("Location: ../../UserProfile.php?succ=BookSuc");
// 
    // }
                // 
//  }
    // else
    // {
        // header("Location: ../../UserProfile.php?error=WalkInIncorrectPass");
    // 
    // }
// 
// }
// 
else
{
 echo ("Error".mysqli_error($conn));
}